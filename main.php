<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">

    <style>
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

        .stylish-button {
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 15px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .stylish-button:hover {
            background-color: #8B0000;
        }

        .stylish-button:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <div class="top-bar">
        <div class="logo"><a href="index.php" style="color: #fff;">House</a><a style="color: orange;" href="index.php"> Hub</a></div>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
            <a href="logout.php" class="stylish-button">Logout</a>
        </div>
    </div>

    <div class="content">
        <h1>Welcome to My Website</h1>
        <p>This is the content area of the page. Scroll down to see the top bar stay in place.</p>
    </div>

</body>
</html>
