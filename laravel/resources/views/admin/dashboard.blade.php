
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
        }

        /* Header */
        header {
            background-color: #2c3e50;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h2 {
            font-size: 22px;
        }

        .logout-button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }

        .logout-button:hover {
            background-color: #c0392b;
        }

        /* Konten Dashboard */
        main {
            padding: 30px;
        }

        main h1 {
            margin-bottom: 10px;
            color: #2c3e50;
        }

        main p {
            color: #555;
        }
    </style>
</head>
<body>

    <header>
        <h2>Dashboard Admin</h2>

        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </header>

    <main>
        <h1>Selamat Datang, Admin!</h1>
        <p>Selamat datang di halaman dashboard.</p>
    </main>

</body>
</html>
