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
        <a href="/" class="logo-link-navbar"><h2 class="logo">Avantgardevinduer</h2></a>
        <div class="bars">
            <i class="fa fa-bars"></i>
        </div>
        <ul class="nav-links">
            <li class="nav-link"><a href="/">Forside</a></li>
            <li class="nav-link"><a href="/vinduer">Vinduer</a></li>
            <li class="nav-link"><a href="/dore">Døre</a></li>
            <li class="nav-link"><a href="/galleri">Galleri</a></li>
            <li class="nav-link"><a href="/kontakt">Kontakt</a></li>
            <li class="nav-link"><a href="/vores-historie">Om os</a></li>
        </ul>
    </nav>

    <script>
        const bars = document.querySelector(".bars");
        const nav = document.querySelector("nav");

        bars.onclick = () => {
            nav.classList.toggle("active");
        };
    </script>