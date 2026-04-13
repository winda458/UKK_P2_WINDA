<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            background-color: #111111;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-box {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #111111;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #EFBA36;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #EFBA36;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form action="/UKKPAKET2_WINDAMARLIANI/Controller/AuthController.php?action=login" method="post">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
        <center><h6>belum punya akun? hubungi admin</h6></center> 
    </form>
</div>

</body>
</html>