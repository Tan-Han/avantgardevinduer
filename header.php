<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/tmr5ico.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Avantgardevinduer & Døre</title>
    <?php wp_head() ?>
</head>

<body>
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Avantgardevinduer</a>
        <a href="#news">Forside</a>
        <div class="dropdown">
            <button class="dropbtn">Produkter
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Vinduer</a>
                <a href="#">Døre</a>
            </div>
        </div>
        <a href="#contact">Kontakt</a>
        <a href="#about">Om os</a>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += "responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>