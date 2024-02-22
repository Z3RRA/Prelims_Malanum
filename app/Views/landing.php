<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRELIMS</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: linear-gradient(45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            z-index: 2;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .nav-links {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 24px;
        }

        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <h1>HELLO PO</h1>
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</div>

<section id="home">
    <h2>HI SIR</h2>
    <p>diko na po alam kung anong gagawin</p>
</section>

<section id="about">
    <h2>Send Help po</h2>
    <p>nababaliw na po kami sir</p>
</section>

<section id="contact">
    <h2>Contact Me</h2>
    <p>mrcmalanum@pcu.edu.ph</p>
</section>

</body>
</html>
