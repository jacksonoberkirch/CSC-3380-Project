<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="launchpadstyle.css" rel="stylesheet">
    </head>
    <body>
        <section id="page-wrapper">
            <section id="header">
                <div id="title">
                    <h1>Gameframe Launchpad</h1>
                    <p>Select a Game to Play!</p>
                </div>

                <div id="time">
                    <h3>Time Left:</h3>
                    <h1>
                        <?php
                            echo $_SESSION['u_time'] . ' hours';
                        ?>
                    </h1>
                    <a href="time.html">Buy More Time</a>
                </div>
            </section>

            <section id="main">
                <div class="game">
                    <h3>Counter-Strike<br />(CSGO)</h3>
                    <button>Launch</button>
                    <div class="description">
                    <p>Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action from 14 years ago. It features new maps, weapons, matchmaking, gameplay modes, and delivers updated versions of the classic CS content. </p>
                    </div>
                    <div class="img1">
                    <img src="csgo1.jpg" style="width: 300; height: 150;">
                    </div>
                    <div class="img2">
                    <img src="csgo2.jpg" style="width: 300; height: 150;">
                    </div>
                </div>

                <div class="game">
                    <h3>League of <br />Legends</h3>
                    <?php
                            echo '<form action="includes/launchLol.inc.php" method="POST">
                        <button name="launch">Launch</button>
                        </form>'
                        ?>
                    <div class="description">
                    <p>League of Legends is a fast-paced, competitive, multiplayer online battle arena (MOBA) that blends the speed and intensity of an RTS with RPG elements. Two teams  battle across multiple battlefields and game modes. </p>
                    </div>
                    <div class="img1">
                    <img src="league1.jpg" style="width: 300; height: 150;">
                    </div>
                    
                    <div class="img2">
                    <img src="league2.jpg" style="width: 300; height: 150;">
                    </div>
                </div>

                <div class="game">
                        <h3>DOTA 2</h3>
                        <button>Launch</button>
                        <div class="description">
                        <p>When it comes to diversity of heroes, abilities, and powerful items, Dota's roster is unmatched. With regular updates that evolve its gameplay, features, and heroes, Dota 2 has truly taken on a life of its own. </p>
                        </div>
                    
                        <div class="img1">
                        <img src="dota1.jpg" style="width: 300; height: 150;">
                        </div>
                    
                        <div class="img2">
                        <img src="dota2.jpg" style="width: 300; height: 150;">
                        </div>
                </div>

                <div class="game">
                        <h3>Fortnite</h3>
                        <button>Launch</button>
                        <div class="description">
                        <p>Fortnite Battle Royale is a FREE 100-player PvP arena. One giant map. A battle bus. Fortnite building skills and destructible environments combined with intense PvP combat. The last one standing wins. </p>
                        </div>
                    
                        <div class="img1">
                        <img src="fortnite1.jpg" style="width: 300; height: 150;">
                        </div>
                    
                        <div class="img2">
                        <img src="fortnite2.png" style="width: 300; height: 150;">
                        </div>
                </div>

                <div class="game">
                        <h3>Minesweeper</h3>
                        <button>Launch</button>
                        <div class="description">
                            <p>Minesweeper is the cutting edge of single-player puzzle video games. The objective is simple: navigate the minefield or land head-first into a world of pain. Good luck.</p>
                        </div>
                    
                        <div class="img1">
                        <img src="mine1.png" style="width: 300; height: 150;">
                        </div>
                    
                        <div class="img2">
                        <img src="mine2.jpg" style="width: 300; height: 150;">
                        </div>
                </div>

                <div id="logout">
                    <form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name="submit">Logout</button>
                    </form>
                    
                </div>
            </section>


        </section>
    </body>
</html>