<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | TELC Exams</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        min-height: 100vh;
        background: linear-gradient(135deg, #0f172a, #020617);
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        color: #fff;
        padding: 20px;
    }

    .login-box {
        background: #020617;
        padding: 32px 26px;
        width: 100%;
        max-width: 420px;
        border-radius: 16px;
        box-shadow: 0 25px 60px rgba(0,0,0,.5);
        text-align: center;
    }

    .login-box h1 {
        margin-bottom: 8px;
        font-size: 24px;
        letter-spacing: 0.5px;
    }

    .login-box p {
        color: #94a3b8;
        font-size: 13px;
        margin-bottom: 24px;
    }

    input {
        width: 100%;
        padding: 14px;
        margin-bottom: 14px;
        border-radius: 12px;
        border: none;
        outline: none;
        font-size: 15px;
        background: #0f172a;
        color: #fff;
    }

    input::placeholder {
        color: #64748b;
    }

    button {
        width: 100%;
        padding: 14px;
        border-radius: 12px;
        border: none;
        background: #2563eb;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
    }

    button:active {
        transform: scale(0.97);
    }

    .error {
        background: #7f1d1d;
        color: #fecaca;
        padding: 10px;
        border-radius: 10px;
        margin-bottom: 14px;
        font-size: 13px;
    }

    footer {
        position: fixed;
        bottom: 10px;
        left: 0;
        width: 100%;
        text-align: center;
        font-size: 12px;
        color: #94a3b8;
        padding: 0 10px;
    }

    footer a {
        color: #38bdf8;
        text-decoration: none;
        font-weight: 500;
    }

    /* 📱 تحسين خاص بالموبايل */
    @media (max-width: 480px) {
        .login-box {
            padding: 26px 20px;
            border-radius: 14px;
        }

        .login-box h1 {
            font-size: 22px;
        }

        button {
            font-size: 15px;
        }

        footer {
            font-size: 11px;
        }
    }
</style>
</head>
<body>

<div class="login-box">
    <h1>TELC Exams</h1>
    <p>Enter your access code to continue</p>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login.code') }}">
        @csrf
        <input type="text" name="code" placeholder="Access Code" required>
        <button type="submit">Login</button>
    </form>
</div>

<footer>
    © {{ date('Y') }} TELC Exams •  
    Developed by <strong>th_ennd</strong> •  
    <a href="https://instagram.com/th_ennd" target="_blank">
        Instagram
    </a>
</footer>

</body>
</html>
