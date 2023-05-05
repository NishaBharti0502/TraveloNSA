<head>
    <meta charset="UTF-8">
    <title> front webpage</title>
    <style>
        body {
            background: url(https://cdn.mos.cms.futurecdn.net/rbgVUw7u9ZoUyJ7b4ZMuha.jpg) no-repeat;

            backgrou<html lang="en">.buttons button {
                padding: 10px 20px;
                border: 0;
                background: yellow;
                font-weight: bold;
                cursor: pointer;
                position: relative;
                height: 50px;
                width: 150px;
                font-size: 18px;
            }

            .buttons .btn {
                margin-left: 25px;
            }

            .buttons button:hover {
                background: #cc0000;
            }

            .center {
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }

            .c1 {
                font-size: 40px;
                color: yellow;
                background-color: black;
            }

            h2 {
                font-size: 30px;
                color: yellow;
                font-family: calibri;
                background-color: black;
            }

            .main {
                width: 800px;
                height: 20px;
                display: flex;
                flex-wrap: wrap;
            }

            h2 {
                position: relative;
                animation: mymove 5s infinite;
                animation-delay: 1s;
            }

            @keyframes mymove {
                from {
                    left: 0px;
                }

                to {
                    left: 200px;
                }
            }

            .container {
                position: relative;
                text-align: center;
                color: white;
                font-size: 40px;
                font-family: calibri light;
            }

            .top-left {
                position: absolute;
                top: 8px;
                left: 16px;
            }
    </style>
</head>

<body>
    <div class="container">
        <div class="top-left">Are You Travel Lovers..? then you are in the best places.</div><img
            src="https://c4.wallpaperflare.com/wallpaper/343/238/551/eiffel-tower-theme-picture-wallpaper-preview.jpg"
            height=220px width=1350px>
    </div>
    <div class="c1">
        <marquee>Welcome to our website 'TraveloNSA' to See the world in full of
            colours.</marquee>
    </div><br><br><br>
    <br><br>
    <div class="main">
        <h2>
            <center> First you have to signin to enjoy the best deals of our
                website.</center>
        </h2>
    </div>
    <div class="center">
        <div class="buttons">
            <a href="signup2.php"><button class="btn">SIGN IN</button>
                <a href="admin.php"><button class="btn">ADMIN</button>
        </div>
    </div>
</body>

</html>