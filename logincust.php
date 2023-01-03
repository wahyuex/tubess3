<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <div style="width: 250px; height: 500px; margin: auto; background-color: grey;">
            <h1>Login Customer</h1>
            <form action="" method="post">
                <label for="username">Username :</label>
                <input type="number" name="username" id="username">
                <label for="pass">Password :</label>
                <input type="password" name="pass" id="pass">
                <input type="submit" value="LOGIN"><br>
                <a href="loginadmin.php">Login Sebagai Admin?</a><br>
                <a href="daftarcust.php">Belum Punya Account?</a>
            </form>
        </div>
    </div>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
    display: block;
    border-radius: 5px;
    font-size: 16px;
    background: white;
    width: 90%;
    border: 0;
    padding: 7px 7px;
    margin: 10px -15px;
    margin-left: 10px;
  }
  input[type = submit] {
            background-color: orange;
            border: none;
            text-decoration: none;
            color: white;
            padding: 10px 10px;
            margin: 20px 20px;
            cursor: pointer;
         }
         .log:hover{
            color: purple;
         }
    </style>
</head>
<body  style="background-image: url(https://static1.squarespace.com/static/51913f1ce4b07b22f5332872/t/57b17228f7e0ab6f35b387e7/1471246895175/Nestle_Logo_Strategyzer_Post); width: 100%; height: 100%;background-size: cover;">
    <div>
        <div style="width: 500px; height: 500px;  position: relative; background-size: cover; margin: 0 auto; background-color: grey; border-radius: 2px;">
            <h1 style="text-align: center;padding-top: 20px;">Login Customer</h1>
            <form action="" method="post">
                <input type="number" name="username" id="username" placeholder="USERNAME">
                <input type="password" name="pass" id="pass" placeholder="PASSSWORD">
                <input type="submit" value="LOGIN"><br>
                <a class="log" style="margin-left: 20px; position: relative; top: -30px; text-decoration:none ; color: black; " href="loginadmin.php">Login Sebagai Admin?</a><br>
                <a class="log" style="margin-left: 20px; position: relative; top: -30px; text-decoration:none ; color: black; " href="daftarcust.php">Belum Punya Account?</a>
            </form>
        </div>
    </div>
</body>
</html>