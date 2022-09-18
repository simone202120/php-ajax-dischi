<?php
include __DIR__ . '/../database.php';  
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css" />        
        <title>Dischi</title>
    </head>
    <body>
        <main>
            <header>
                <img id="logo" src="../img/logo2.png" alt="">
            </header>
            <div class="container">

                <?php
                    foreach($database as $disc) {

                ?>

                <div class="disc-card">
                    <img src="<?php echo $disc["poster"]; ?>" alt="">
                    <h3><?php echo $disc['title']; ?></h3>
                    <p><?php echo $disc["author"]; ?></p>
                    <p><?php echo $disc["year"]; ?></p>
                </div>
                <?php
                    }
                ?>
            </div>


        </main>
    </body>
</html>