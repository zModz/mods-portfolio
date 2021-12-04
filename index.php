<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include("includes/sidebar.html") ?>
    <div class="home_content">
        <div id="home">
            <div class="box1">
                <h1 class="title">Hello, my name is <br>
                    <span
                        style="color: red; font-style: italic;"
                        class="txt-rotate"
                        data-period="2000"
                        data-rotate='[ "Leonardo.", "Leo.", "Mods." ]'
                    ></span>
                </h1>
                <img style="margin-left: 24%; opacity: 75%;" src="Images/DC_Logo.png" alt="">
            </div>
        </div>
        
        <div id="games">
            <a href="#"><div class="box2" id="leftbox">
                <img class="games_logos" id="ufo" src="Images/box2_logo_ufo.png" alt="">
            </div></a>
            <div class="box2" id="middlebox">
                <img class="games_logos" id="sz" src="Images/box2_logo_pag.png" alt="">
            </div>
            <div class="box2" id="rightbox">
                <img class="games_logos" id="jump" src="Images/box2_logo_jump.png" alt="">
            </div>
        </div>
    </div>







    <script src="main.js"></script>
</body>
</html>