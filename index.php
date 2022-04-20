<?php

include 'config.php';

error_reporting(0); // For not showing any error

// Check press or not Post Comment Button
if (isset($_POST['submit'])) {

    
    $isAddAllowed = "SELECT AddSongs FROM settings";
      
$resultIsAllowed = mysqli_query($conn, $isAddAllowed);
if ($test = mysqli_fetch_assoc($resultIsAllowed) ) {
if ($test["AddSongs"] == 1){
    $comment = $_POST['comment']; // Get Comment from form
   
    $sql = "INSERT INTO comments (comment)
			VALUES ('$comment' )";

                
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("index.php");
        unset($_POST["submit"]);
    } 
}

    
    

  
} 

else {

}
}
    


?>



<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJ ThomasOXY</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;500;900&display=swap" rel="stylesheet">
</head>

<body>
    <!--
    <div class="navbar">
        <a href="#home" class="active"> <i class="fas fa-home"></i> <span>Domů</span> </a>
        <a href="about.html"> <i class="fas fa-user"></i> <span>O mně</span> </a>
        <a href="#contact"> <i class="far fa-clipboard"></i><span>Služby</span> </a>
        <a href="#contact"> <i class="far fa-address-card"></i><span>Kontakt</span> </a>
    </div>
    -->
    <section class="welcome">

        <h1>ThomasOXY</h1>
        <h2>„Bez hudby by byl život chybou.“</h2>


    </section>
    
    <section class="tour">

        <h1>Plánované akce</h1>

        <div id="info" class="item">

            <h3> Datum </h3>
            <h3>Město</h3>
            <h3>Kde?</h3>
            <h3>Start</h3>
        </div>
        <div class="item">


            <h3> 14.4. </h3>
            <h3>Sedlčany</h3>
            <h3>PohodaKlub</h3>
            <h3>21:00</h3>
        </div>

        <div class="item">

            <h3> 7.5. </h3>
            <h3>Sedlčany</h3>
            <h3>PohodaKlub</h3>
            <h3>23:00</h3>
        </div>

        <div class="item">

        </div>

    </section>

    <section class="about">
        <h1>O mně</h1>
        <p class="">
            Jsem začínající DJ.. hraji převážně v klubech. a vnitřních ackích. Hudbě se věnuji necelých 5 let. Kdy na
            začátku jsem se učil s prvními programy na úpravu/mixování hudby. Jsem mobilní a dokáži přenést skvělou
            atmosféru na vaší oslavu, svatbu nebo párty! Jsem shopný hrát multi žánry. Napište mi co máte rádi a
            sestavíme společně playlist na který jen tak nezapomenete!
        </p>

    </section>
    <section class="addSong">
      
        <h1 id="offTEXT" class="Block">Vkládání Zablokováno.</h1>
        <div id="form">
        <h1 >Vložte název písničky..</h1>
        <form id="" method="POST" action="">
            <textarea id="comment" name="comment" placeholder="Sem můžete napsat váš text..." class="txt" type="text" required></textarea>
            <button name="submit" class="btn">Odeslat</button>
        </form>
        </div>
    </section>



    <section id="playlist" class="playlist">
        <h1>Playlist.</h1>
        <div class="playlistOFF">
            Playlist není momentálně k dispozici.
        </div>

        <?php
        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);
      
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <div id="AjaxList" class="list">

                    <p class="item"><?php echo $row['comment']; ?></p>
                </div>
        <?php

            }
        }

        ?>



    </section>
<!--TURN OFF / TURN ON SYSTEM-->
    <section class="system">


        <?php

        $sql = "SELECT AddSongs FROM settings";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <div class="list">
                    <?php $check = $row['AddSongs']; ?>
                    <div id="controller">
                        <?php echo $check == 1 ? '<script type="text/javascript">

document.getElementById("form").style.display = "flex";
document.getElementById("offTEXT").style.display = "none";

</script>' : '<script type="text/javascript">

document.getElementById("form").style.display = "none";
document.getElementById("offTEXT").style.display = "flex";

</script>'; ?>

                    </div>
                </div>




        <?php

            }
        }

        ?>


    </section>





    



</body>


</html>