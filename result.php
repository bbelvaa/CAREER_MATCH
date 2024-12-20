<?php
include 'config.php';

$current_page = basename($_SERVER['PHP_SELF']); // Mendapatkan nama file saat ini

// Jika data tidak tersedia
if (empty($_POST['answers'])) {
    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hasil Diagnosa Karir</title>
        <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background: linear-gradient(to bottom, #d0f0ff, #ffffff);
            }
            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px 50px;
                background-color: #ffffff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            header .logo {
                font-size: 24px;
                font-weight: bold;
                color: #008cba;
            }
            header nav a {
                margin: 0 15px;
                text-decoration: none;
                color: #333333;
                font-weight: 500;
            }
            header nav a:hover {
                color: #008cba;
            }
            header nav a.active {
                color: #ffffff;
                background-color: #008cba;
                padding: 5px 10px;
                border-radius: 5px;
            }
            .container {
                margin: 100px auto;
                padding: 30px;
                max-width: 600px;
                background-color: #ffffff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: center;
            }
            h1 {
                font-size: 2rem;
                color: #0078a2;
                margin-bottom: 20px;
            }
            p {
                font-size: 1rem;
                color: #555;
                margin-bottom: 20px;
            }
            .btn-tes {
                display: inline-block;
                padding: 10px 20px;
                font-size: 1rem;
                font-weight: bold;
                color: #ffffff;
                background-color: #008cba;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                cursor: pointer;
            }
            .btn-tes:hover {
                background-color: #005f8a;
            }
        </style>
    </head>
    <body>
        <header>
            <div class='logo'>CareerMatch</div>
            <nav>
                <a href='index.php' class='" . ($current_page == 'index.php' ? 'active' : '') . "'>Home</a>
                <a href='diagnose.php' class='" . ($current_page == 'diagnose.php' ? 'active' : '') . "'>Diagnosa</a>
                <a href='result.php' class='" . ($current_page == 'result.php' ? 'active' : '') . "'>Hasil Diagnosa</a>
            </nav>
        </header>

        <div class='container'>
            <h1>Hasil Diagnosa</h1>
            <p><strong>Data Tidak Tersedia</strong></p>
            <p>Silakan mengisi tes diagnosa kepribadian terlebih dahulu!</p>
            <a href='diagnose.php' class='btn-tes'>Tes Sekarang</a>
        </div>
    </body>
    </html>";
    exit;
}

// Jika data tersedia
$answers = $_POST['answers'];
$scores = [];

foreach ($answers as $question_id => $cf_user) {
    $query = "SELECT * FROM rules WHERE question_id = $question_id";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $cf_expert = $row['cf_expert'];
        $cf_combine = $cf_user * $cf_expert;

        $personality_id = $row['personality_id'];
        if (!isset($scores[$personality_id])) {
            $scores[$personality_id] = $cf_combine;
        } else {
            $scores[$personality_id] += $cf_combine * (1 - $scores[$personality_id]);
        }
    }
}

arsort($scores);
$top_personality = key($scores);
$certainty = $scores[$top_personality];

// Ambil detail kepribadian
$query = "SELECT * FROM personalities WHERE id = $top_personality";
$result = $conn->query($query);
$personality = $result->fetch_assoc();

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hasil Diagnosa Karir</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #d0f0ff, #ffffff);
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
            color: #008cba;
        }
        header nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333333;
            font-weight: 500;
        }
        header nav a:hover {
            color: #008cba;
        }
        header nav a.active {
            color: #ffffff;
            background-color: #008cba;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .container {
            margin: 100px auto;
            padding: 30px;
            max-width: 600px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 2rem;
            color: #0078a2;
            margin-bottom: 20px;
        }
        p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
        }
        .certainty {
            font-weight: bold;
            color: #4caf50;
        }
    </style>
</head>
<body>
    <header>
        <div class='logo'>CareerMatch</div>
        <nav>
            <a href='index.php' class='" . ($current_page == 'index.php' ? 'active' : '') . "'>Home</a>
            <a href='diagnose.php' class='" . ($current_page == 'diagnose.php' ? 'active' : '') . "'>Diagnosa</a>
            <a href='result.php' class='" . ($current_page == 'result.php' ? 'active' : '') . "'>Hasil Diagnosa</a>
        </nav>
    </header>

    <div class='container'>
        <h1>Hasil Diagnosa</h1>
        <p><strong>Kepribadian Anda:</strong> {$personality['personality']}</p>
        <p><strong>Rekomendasi Karir:</strong> {$personality['career']}</p>
        <p class='certainty'><strong>Certainty:</strong> " . round($certainty * 100, 2) . "%</p>
    </div>
</body>
</html>";
?>
