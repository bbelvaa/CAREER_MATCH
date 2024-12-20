<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pakar Karir</title>
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

        .hero {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(to right, #b3ecff, #f5f5f5);
        }

        .hero h1 {
            font-size: 36px;
            color: #0078a2;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            color: #555555;
            margin-bottom: 30px;
        }

        .hero a {
            display: inline-block;
            padding: 10px 25px;
            font-size: 16px;
            color: #ffffff;
            background-color: #008cba;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .hero a:hover {
            background-color: #005f7a;
        }

        .illustration {
            margin-top: 50px;
            text-align: center;
        }

        .illustration img {
            width: 60%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">CareerMatch</div>
        <nav>
            <a href="index.php" class="active">Home</a>
            <a href="diagnose.php">Diagnosa</a>
            <a href="result.php">Hasil Diagnosa</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Sistem Pakar Rekomendasi Karir</h1>
        <p>Temukan jalur karir terbaik untuk masa depan Anda dengan panduan profesional kami.</p>
        <a href="diagnose.php">Mulai Diagnosa</a>
    </section>

    <div class="illustration">
        <img src="https://img.freepik.com/free-vector/flat-illustration-secretary-s-day_23-2150172726.jpg?t=st=1734672689~exp=1734676289~hmac=e5670f19d868a80bab8aa15b7380a55872ae9374a98ea9de050bd1bfca359d79&w=1380" alt="Illustration of teamwork with a rocket">
    </div>
</body>
</html>
