<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>GameFrame</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="sketch.js" type="text/javascript"></script>
</head>
<body>
    <section id="main"> 
    <div id= "header">
        <div id="title">
            <h1>GameFrame</h1></br>
            <p>The Premier Internet Cafe Destination</p>
        </div>        
        <div id="login">
            <?php
                if (isset($_SESSION['u_id'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name="submit">Logout</button>
                        </form>
                        <a href="launchpad.php">Play</a>';
                } else {
                    echo '<form action="includes/login.inc.php" method="POST">
                            <input type="text" name="uid" placeholder="Usename/e-mail">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" name="submit">Login</button>
                        </form>
                            <a href="usergui.html">Sign up</a>';
                }
            ?>
        </div>

    <div id="welcome">
        <h2>Welcome to GameFrame!</h2>
        <p>GameFrame is cutting edge, software client for pc lounges. We 
            aim to provide an intuitive user experience for all. You will 
            be able to connect to your friends and favorite games as fast as 
            possible. Join us as we aim to create a new age in LAN gameplay.</p>
    </div>

    <div id="about"> 
        <h2>About Us</h2> 
        <p>GameFrame came about through the collaboration of six individuals; 
            Jackson Oberkirch, Howard Tsai, Feroz Mughal, Andrew Gremillion, 
            Quentin Franck, and Matthew Landry. Prompted by our intelligent 
            and extremely handsome instructor, the one and only Grant Williams, 
            we began brainstorming ideas for our project. As we discussed, we 
            discovered our mutual appreciation for games and the culture that 
            goes along with them. It was this appreciation that became the seed 
            that naturally grew into the software we dubbed GameFrame. Our goal 
            for GameFrame was to create an easy to navigate program that could be used 
            in a social gaming environment. We want friends to come together, and play 
            their favorite games together! That’s our hope for GameFrame and we hope you’ll 
            enjoy it as much as we do!</p>
    </div>
        
    <div id="links">
        <h2>Links</h2> 
        <ul id="socials">
            <li id="facebook"><a href="https://www.facebook.com/GameFramebr/?ref=br_rs">-Facebook</a></li>
            <li id="twitter"><a href="https://twitter.com/GameFramebr">-Twitter</a></li>
        </ul>
        <div id="logo">
            <img src="gfLogo.jpg" style="width: 278; height: 162;">
        </div>
    </div>

    <div id="media">
        
        <div class="img" id="img1">
        <img src="pcCafe1.jpg" style="width: 420; height: 250;">
        </div>
        
        <div class="img" id="img2">
        <img src="pcCafe2.jpg" style="width: 420; height: 250;">
        </div>
        
        <div id="banner">
        <img src="pcCafe3.png" style="width: 900; height: 250;">
        </div>
        
        <div id="gamelist">Gamelist</div>
    </div>

    </section>
</body>
</html>