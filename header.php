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
            <li class="nav-link">
                <div class="dropdown">
                    <button class="dropbtn">Produker</button>
                    <div class="dropdown-content">
                        <a href="#">Vinduer</a>
                        <a href="#">Døre</a>
                    </div>
                </div>
            </li>
            <li class="nav-link"><a href="#">Døre</a></li>
            <li class="nav-link"><a href="#">Contact</a></li>
            <li class="nav-link"><a href="#">Om os</a></li>
        </ul>
    </nav>

    <style>
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background-color: #333;
            color: white;
            position: relative;
        }

        /* responsive */
        nav.active {
            flex-direction: column;
            align-items: flex-start;
        }

        nav h2.logo {
            font-weight: bold;
            font-size: xx-large;
        }

        nav .bars {
            position: absolute;
            right: 1rem;
            font-size: xx-large;
            display: none;
        }

        ul.nav-links {
            display: flex;
        }

        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        /* responsive */
        nav.active ul.nav-links {
            display: flex;
            flex-direction: column;
            width: 100%;
            align-items: center;
        }

        li.nav-link {
            list-style: none;
            margin: 0.5rem 1rem;
            padding: 0.4rem;
            display: flex;
            align-items: center;
        }

        li.nav-link:hover {
            background-color: #ccc;
            color: #333;
        }

        li.nav-link.auth {
            border: 2px solid white;
            border-radius: 1rem;
        }

        li.nav-link a {
            text-decoration: none;
            color: inherit;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
            font-size: large;
            text-transform: uppercase;
        }

        @media screen and (max-width: 800px) {
            nav .bars {
                display: block;
            }

            nav .nav-links {
                display: none;
            }
        }
    </style>

    <script>

        const bars = document.querySelector(".bars");
        const nav = document.querySelector("nav");

        bars.onclick = () => {
            nav.classList.toggle("active");
        };
    </script>