<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style>
        body {
            font-family: helvetica;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        nav {
            padding: 20px 0;
            background-color:steelblue;
          
            width: 100%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        ul.main-menu {
            color: white;
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: right;
        }

        li {
            margin: 0 10px;
        }

        a {
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease, background 0.3s ease;
        }

        a:hover, a:focus {
            color: steelblue;
            background: white;
        }

        .container {
            color: #2f3640;
            text-align: center;
            margin: 50px auto;
            max-width: 600px;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            color: steelblue;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 30px;
            color: #7f8c8d;
        }

        .button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
         
        }

        .link {
            display: inline-block;
            padding: 15px 30px;
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
            background-color: steelblue;
            border: 2px solid white;
            border-radius: 25px;
            font-weight: bold;
            transition: color 0.3s ease, background 0.3s ease;
        }

        .link:hover, .link:focus {
            color: steelblue;
            background: white;
        }
    </style>
</head>

<body>
    <nav>
        <ul class="main-menu">
            <li><a href="about">About</a></li>
            <li><a href="service">Service</a></li>
            <li><a href="work">Work</a></li>
            <li><a href="contact">Contact</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1>WELCOME</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla quam veritatis beatae similique itaque culpa iure, reprehenderit illo sequi illum eaque laboriosam corporis sint velit? Qui aut fugit vel sapiente?</p>

        <div class="button">
            <a class="link" href="#">Sign up</a>
            <a class="link" href="#">Log in</a>
        </div>
    </div>
</body>
</html>
