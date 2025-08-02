<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Moderno</title>
  <style>
    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: linear-gradient(135deg, #24243e, #302b63, #0f0c29);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background-color: #ffffff;
      width: 100%;
      max-width: 350px;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      animation: fadeIn 1s ease;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #302b63;
      font-size: 24px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border: 2px solid #e6e6e6;
      border-radius: 8px;
      font-size: 15px;
      transition: 0.3s;
    }

    .form-group input:focus {
      border-color: #302b63;
      outline: none;
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      background: linear-gradient(120deg, #302b63, #0f0c29);
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .btn-login:hover {
      background: linear-gradient(120deg, #0f0c29, #302b63);
    }

    .login-footer {
      text-align: center;
      margin-top: 20px;
    }

    .login-footer a {
      text-decoration: none;
      color: #302b63;
      font-size: 14px;
      transition: color 0.3s;
    }

    .login-footer a:hover {
      color: #0f0c29;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Moradas do Altíssimos</h2>
    <h3>Entre com seu login e senha:</h3>
    <form method="POST" action="">
      @csrf
      <div class="form-group">
        <input type="text" name="text" placeholder="Login" required>
      </div>
      <div class="form-group">
        <input type="password" name="senha" placeholder="Senha" required>
      </div>
      <button type="submit" class="btn-login">Entrar</button>
    </form>
    <div class="login-footer">
      <a href="{{ route('paginainicial') }}">Navegar</a>
    </div>
  </div>
</body>
</html>
