<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/tmr5ico.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <li class="nav-link"><a href="#">Produkter</a>
                <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                <ul class="htmlCss-sub-menu sub-menu">
                    <li><a href="#">Vinduer</a></li>
                    <li><a href="#">Døre</a></li>
                </ul>
            </li>
            <li class="nav-link"><a href="#">Contact</a></li>
            <li class="nav-link auth"><a href="#">Register</a></li>
            <li class="nav-link auth"><a href="#">Login</a></li>
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

        .links li:hover .htmlcss-arrow,
        .links li:hover .js-arrow {
            transform: rotate(180deg);
        }

        nav .navbar .links li .arrow {
            height: 100%;
            width: 22px;
            line-height: 70px;
            text-align: center;
            display: inline-block;
            color: #fff;
            transition: all 0.3s ease;
        }

       
    </style>

    <script>

        // sidebar submenu open close js code
        let htmlcssArrow = document.querySelector(".htmlcss-arrow");
        htmlcssArrow.onclick = function () {
            navLinks.classList.toggle("show1");
        }
        let moreArrow = document.querySelector(".more-arrow");
        moreArrow.onclick = function () {
            navLinks.classList.toggle("show2");
        }
        let jsArrow = document.querySelector(".js-arrow");
        jsArrow.onclick = function () {
            navLinks.classList.toggle("show3");
        }

        const bars = document.querySelector(".bars");
const nav = document.querySelector("nav");

bars.onclick = () => {
  nav.classList.toggle("active");
};
    </script>