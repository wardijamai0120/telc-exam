<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Access Code Login</title>
    <style>
        body {
            background: #0f172a;
            color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: #020617;
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 20px rgba(0,0,0,.5);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #2563eb;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .error {
            color: #f87171;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Access Code Login</h2>

    <form method="POST" action="/login-code">
        @csrf
        <input type="text" name="access_code" placeholder="Enter Access Code" required>
        <button type="submit">Login</button>
    </form>

    @if ($errors->any())
        <div class="error">{{ $errors->first() }}</div>
    @endif
</div>

</body>
</html>
