<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #f7f2ed;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .form-box {
        max-width: 100%;
        width: 400px;
        background: #f7f2ed;
        overflow: hidden;
        border-radius: 16px;
        color: #6e4823;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .form {
        position: relative;
        display: flex;
        flex-direction: column;
        gap: 20px;
        text-align: center;
    }

    .title {
        font-weight: bold;
        font-size: 1.8rem;
        color: #6e4823;
    }

    .subtitle {
        font-size: 1.1rem;
        color: #6e4823;
        font-weight: 500;
    }

    .form-container {
        background-color: #fff;
        margin: 1rem 0;
        width: 100%;
        border-radius: 8px;
        padding: 15px;
    }

    .input {
        background: none;
        border: 0;
        outline: 0;
        height: 45px;
        width: 100%;
        border-bottom: 2px solid #6e4823;
        font-size: 1rem;
        padding: 10px 15px;
        color: #6e4823;
        margin-bottom: 15px;
    }

    .input:focus {
        border-color: #f7f2ed;
        box-shadow: 0 0 5px 1px #6e4823;
    }

    .form button {
        background-color: #6e4823;
        color: #fff;
        border: 0;
        border-radius: 24px;
        padding: 12px 18px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .form button:hover {
        background-color: #5a3a21;
    }

    @media (max-width: 576px) {
        .form-box {
            width: 90%;
        }
    }
</style>
<body>
    <div class="form-box">
        <form class="form" action="{{ route('register') }}" method="POST">
            @csrf
            <span class="title">Sign up</span>
            <span class="subtitle">Buat akun Anda</span>
            <div class="form-container">
                <input type="text" class="input" placeholder="Full Name" name="name">
                <input type="email" class="input" placeholder="Email" name="email">
                <input type="password" class="input" placeholder="Password" name="password">
                <input type="password" class="input" placeholder="Confirm Password" name="password_confirmation">
            </div>
            <button>Sign up</button>
        </form>    
        @if ($errors->any())
    <div class="alert" style="margin-top: 15px; background-color:#f7f2ed; color:red;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<br>
<center>
    <p>OR</P>
   <a href="/login" style="text-decoration:none; font-wight:bold; color:#4a341a;">Login</a></center>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>