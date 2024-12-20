<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnosa Kepribadian</title>
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

        .content {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .content h1 {
            font-size: 28px;
            color: #0078a2;
            margin-bottom: 20px;
            text-align: center;
        }

        .content label {
            display: block;
            font-size: 16px;
            color: #555555;
            margin-bottom: 10px;
        }

        .content .options {
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .content .options label {
            display: flex;
            align-items: center;
            gap: 8px;
            background-color: #e0f7fa;
            border: 1px solid #008cba;
            border-radius: 20px;
            padding: 8px 15px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .content .options label:hover {
            background-color: #b2ebf2;
        }

        .content .options input[type="radio"] {
            display: none;
        }

        .content .options input[type="radio"]:checked + label {
            background-color: #008cba;
            color: #ffffff;
            transform: scale(1.05);
        }

        .content button {
            display: block;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #ffffff;
            background-color: #008cba;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .content button:hover {
            background-color: #005f7a;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">CareerMatch</div>
        <nav>
            <a href="index.php">Home</a>
            <a href="diagnose.php" class="active">Diagnosa</a>
            <a href="result.php">Hasil Diagnosa</a>
        </nav>
    </header>

    <div class="content">
        <h1>Diagnosa Kepribadian</h1>
        <form action="result.php" method="post">
            <?php
            $query = "SELECT * FROM questions";
            $result = $conn->query($query);
            $number = 1;

            while ($row = $result->fetch_assoc()) {
                echo "<label>{$number}. {$row['statement']}</label>";
                echo "<div class='options'>
                        <input type='radio' id='answer_{$row['id']}_1' name='answers[{$row['id']}]' value='0'>
                        <label for='answer_{$row['id']}_1'>Tidak Tahu</label>
                        <input type='radio' id='answer_{$row['id']}_2' name='answers[{$row['id']}]' value='0.2'>
                        <label for='answer_{$row['id']}_2'>Tidak Yakin</label>
                        <input type='radio' id='answer_{$row['id']}_3' name='answers[{$row['id']}]' value='0.4'>
                        <label for='answer_{$row['id']}_3'>Mungkin</label>
                        <input type='radio' id='answer_{$row['id']}_4' name='answers[{$row['id']}]' value='0.6'>
                        <label for='answer_{$row['id']}_4'>Yakin</label>
                        <input type='radio' id='answer_{$row['id']}_5' name='answers[{$row['id']}]' value='0.8'>
                        <label for='answer_{$row['id']}_5'>Cukup Yakin</label>
                        <input type='radio' id='answer_{$row['id']}_6' name='answers[{$row['id']}]' value='1'>
                        <label for='answer_{$row['id']}_6'>Sangat Yakin</label>
                      </div>";
                $number++;
            }
            ?>
            <button type="submit">Lihat Hasil</button>
        </form>
    </div>
</body>
</html>
