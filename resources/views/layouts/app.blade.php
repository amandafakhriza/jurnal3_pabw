<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'LaporBanjir')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f8;
            color: #333;
        }

        header {
            background-color: #1565c0;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav {
            background-color: #0d47a1;
            padding: 12px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            width: 80%;
            max-width: 800px;
            margin: 30px auto;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #1565c0;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #1565c0;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
        }

        .alert {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>LaporBanjir</h1>
    <p>Sistem Pelaporan Banjir BPBD Kabupaten Bandung</p>
</header>

<nav>
    <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
    <a href="{{ route('laporan.form') }}">Laporkan Banjir</a>
</nav>

<div class="container">
    @yield('content')
</div>

<footer>
    <p>&copy; 2026 LaporBanjir - BPBD Kabupaten Bandung</p>
</footer>

</body>
</html>