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
    <nav>
        <h2 class="logo">ASMR2Dev</h2>
        <div class="bars">
            <i class="fa fa-bars"></i>
        </div>
        <ul class="nav-links">
            <li class="nav-link"><a href="#">Home</a></li>
            <li class="nav-link"><a href="#">Vinduer</a></li>
            <li class="nav-link"><a href="#">Døre</a></li>
            <li class="nav-link"><a href="#">Contact</a></li>
            <li class="nav-link"><a href="#">Om os</a></li>
        </ul>
    </nav>

    <script>
        const bars = document.querySelector(".bars");
        const nav = document.querySelector("nav");

        bars.onclick = () => {
            nav.classList.toggle("active");
        };
    </script>