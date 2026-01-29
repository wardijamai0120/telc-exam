<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        nav a {
            margin-right: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<nav>
    <a href="/dashboard">Dashboard</a>
    <a href="/admin/access-codes">Manage Access Codes</a>

    <form action="{{ route('logout') }}" method="POST" style="display:inline">
        @csrf
        <button type="submit">Logout</button>
    </form>
</nav>

<hr>

@yield('content')

</body>
</html>
