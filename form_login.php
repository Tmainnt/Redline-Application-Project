<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-Login</title>
    <style>
        body {
            background: center;
            font-family: sans-serif;
            background-color: #1E1F1F;
        }
        input[type=email],[type=password], select {
            padding: 12px 20px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #ffa500;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #C68000;
        }
        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .form h1 {
            color: #fff;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .top-bar {
            background-color: #000;
            color: #fff;
            padding: 10px 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .logo {
            font-size: 1.5em;
            font-weight: bold;
            margin-left: 20px;
        }

        .logo a{
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 20px;
            margin-right: 15px;
            height: 50px;
            align-items: center;
        }
        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 8px 20px;
            font-size: 18px;
        }
        .nav-links a:hover {
            background-color: #555;
            border-radius: 4px;
        }
        .content {
            margin-top: 60px;
            padding: 20px;
            text-align: center;
        }

        h2{
            color: #fff;
        }

        p{
            color: #fff;
        }

        .form a{
            color: #C68000;
            text-decoration: none;
        }

        .form a:hover {
            border-radius: 4px;
            padding: 5px 1px;
            position: relative;
        }

        .form a::after {
            content: "";
            display: block;
            width: 100%;
            height: 3px;
            background-color: #C68000;
            position: absolute;
            left: 0;
            bottom: 0;
            transform: scaleX(0);
            transition: transform 0.5s ease;
        }

        .form a:hover::after {
            transform: scaleX(1);
        }
    </style>
</head>
<body>
<div class="top-bar">
        <div class="logo"><a href="index.php" style="color: #fff;">House</a><a style="color: orange;" href="index.php"> Hub</a></div>
        <div class="nav-links">
            
        </div>
    </div>
    <form id="loginform" class="form">
        <h1>Form Login</h1>
        <label for="username"><h2>Email:</h2></label>
        <input type="email" id="user_email" name="user_email" required="required" placeholder="Enter Email"><br>
        <label for="password"><h2>Password:</h2></label>
        <input type="password" id="user_pass" name="user_pass" required="required" placeholder="Enter Password"><br>
        <input type="submit" value="Next"><br>

        <p>Don't have an account yet?<a href="form_regis.php"> register</a></p>
    </form>
    <script>
        document.getElementById('loginform').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('checkuser.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (data.includes("Password ของท่านไม่ถูกต้อง")) {
                    alert("Username/Password ของท่านไม่ถูกต้อง, กรุณาลองใหม่อีกครั้ง");
                } else if (data.includes("ไม่มีชื่อผู้ใช้งาน")) {
                    alert("ไม่มีชื่อผู้ใช้งาน, กรุณาลองใหม่อีกครั้ง");
                } else if (data.includes("Login successful")) {
                    window.location.href = "main.php";
                } else {
                    alert("An error occurred: " + data);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    </script>
</body>
</html>
