<?php require('actions/users/loginAction.php'); ?>
<?php require('actions/database.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
    <body>
        <main class="landingBody">
            <div class="container_home">
                <h1>Ready ?</h1>
                <div class="player_name">
                    <p> Player : <?php echo $_SESSION['pseudo']; ?> </p>
                </div>
                <div class="level">
                    <a href="game/game.php">
                        <input type="submit" class="submit" value="Go !">  
                    </a>
                    <style>
                        .level input{
                            font-size:24px;
                        }
                    </style>
                </div>
            </div>
        </main>
    </body>
</html>