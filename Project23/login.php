<html>
<head>
    <style>
        html,body{
            display: flex;
            justify-content: center;
            text-align: center;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        form{
            padding: 100px;
            background-color: #FFC0CB;
            max-height: 200px;
            border: 1px black solid;
            border-radius: 10px;
        }
        input{
            margin-bottom: 10px;
        }
        button{
            padding: 10px 20px;
        }
    </style>
</head>
<body>
<form action="process_login.php" method="post">
    Username: <input type="text" name="username" required>
    <br>
    Password: <input type="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
</body>
</html>
