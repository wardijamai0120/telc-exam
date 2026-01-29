<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TELC')</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
        }

        header {
            background: #0b1d3a;
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color: white;
            margin-right: 20px;
            text-decoration: none;
            font-weight: bold;
        }

        .logout-btn {
            background: #d9534f;
            border: none;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            cursor: pointer;
        }

        main {
            padding: 60px 40px;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <div>
        <strong>TELC</strong>
    </div>

    <nav>
        <a href="/home">Home</a>
        <a href="/exams">Exams</a>

        <form method="POST" action="/logout" style="display:inline">
            @csrf
            <button class="logout-btn">Logout</button>
        </form>
    </nav>
</header>

<main>
    @yield('content')
</main>

</body>
</html>
