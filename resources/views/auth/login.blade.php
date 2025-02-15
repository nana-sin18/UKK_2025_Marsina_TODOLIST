<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <title>Login Form</title>
</head>
<style>
   body {
      background-color: #f7f2ed;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
   }

   .form-box {
      max-width: 350px;
      background: #f7f2ed;
      border: 2px solid #6e4823;
      border-radius: 16px;
      padding: 32px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      text-align: center;
   }

   .title {
      font-weight: bold;
      font-size: 1.8rem;
      color: #6e4823;
   }

   .form-container {
      margin: 1rem 0;
   }

   .input {
      width: 100%;
      padding: 12px;
      margin: 8px 0;
      border: 1px solid #6e4823;
      border-radius: 8px;
      background-color: #fdfcfb;
   }

   .form button {
      background-color: #6e4823;
      color: #f7f2ed;
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: bold;
      transition: background-color 0.3s;
   }

   .form button:hover {
      background-color: #4a341a;
   }
</style>
<body>
   <div class="form-box">
      <form class="form" action="{{ route('login') }}" method="POST">
          @csrf
          <span class="title">Log in</span>
          <div class="form-container">
              <input type="text" class="input" placeholder="Username" name="username">
              <input type="email" class="input" placeholder="Email" name="email">
              <input type="password" class="input" placeholder="Password" name="password">
          </div>
          <button>Log in</button>
      </form>
   </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>