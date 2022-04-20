<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;500&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dash.css">
    <script src="https://kit.fontawesome.com/0b0d5f5455.js" crossorigin="anonymous"></script>

</head>

<body>

    <section class="quickTabs">

        <div class="tab">
            <h3>Playlist</h3>
            <i id="PlayPower" class="fa-solid fa-power-off"></i>

        </div>
        <div class="tab">

            <h3>Databáze</h3>
            <i id="PlayPower" class="fa-solid fa-power-off"></i>


        </div>
        <div class="tab">
            <h3>Server</h3>
            <i id="PlayPower" class="fa-solid fa-power-off"></i>

        </div>

        <div class="btns">


            <form method="post" action="3HqHz9MFD7.php">
                <input type="submit" id='delete' class='delete' name="delete" value='Vymazat playlist'></input>
            </form>

            <form method="post" action="turnon.php">
                <input type="submit" id='TurnON' class='TurnON' name="TurnON" value='Zapnout'></input>
            </form>

            <form method="post" action="turnoff.php">
                <input type="submit" id='TurnOFF' class='TurnOFF' name="TurnOFF" value='Vypnout'></input>
            </form>
        </div>
    </section>
    <!--
    <section class="app">

        <div class="buttons">

            <form method="post" action="3HqHz9MFD7.php">
                <input type="submit" id='delete' class='delete' name="delete" value='Vymazat playlist'></input>
            </form>

            <form method="post" action="turnon.php">
                <input type="submit" id='TurnON' class='TurnON' name="TurnON" value='Zapnout'></input>
            </form>
        
            <form method="post" action="turnoff.php">
                <input type="submit" id='TurnOFF' class='TurnOFF' name="TurnOFF" value='Vypnout'></input>
            </form>



        </div>

    </section>
-->

</body>

</html>