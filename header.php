<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <title>Document</title>
    <script>
        jQuery(function ($) {
            $(window).on("scroll", function () {
                if ($(this).scrollTop() >= 200) {
                    $(".navbar").addClass("fixed-top");
                } else if ($(this).scrollTop() == 0) {
                    $(".navbar").removeClass("fixed-top");
                }
            });

            function adjustNav() {
                var winWidth = $(window).width(),
                    dropdown = $(".dropdown"),
                    dropdownMenu = $(".dropdown-menu");

                if (winWidth >= 768) {
                    dropdown.on("mouseenter", function () {
                        $(this).addClass("show").children(dropdownMenu).addClass("show");
                    });

                    dropdown.on("mouseleave", function () {
                        $(this).removeClass("show").children(dropdownMenu).removeClass("show");
                    });
                } else {
                    dropdown.off("mouseenter mouseleave");
                }
            }

            $(window).on("resize", adjustNav);

            adjustNav();
        });

    </script>
</head>

<body>


    <header class="header-area overlay">
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container d-flex justify-content-between align-items-center">
                <img class="hfesite"
                    src="https://www.hkmdehradun.org/wp-content/uploads/2023/10/HKM_Dehradun_Logo-removebg-preview-300x181.png"
                    alt="HKM_Dehradun_Logo-removebg-preview" />

                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse justify-content-center">
                    <ul class="navbar-nav">
                        <li><a href="#" class="nav-item nav-link active">Home</a></li>
                        <li><a href="#" class="nav-item nav-link">About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">Services</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Dropdown Item 1</a>
                                <a href="#" class="dropdown-item">Dropdown Item 2</a>
                                <a href="#" class="dropdown-item">Dropdown Item 3</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="nav-item nav-link" data-toggle="dropdown">Portfolio</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Dropdown Item 1</a>
                                <a href="#" class="dropdown-item">Dropdown Item 2</a>
                                <a href="#" class="dropdown-item">Dropdown Item 3</a>
                                <a href="#" class="dropdown-item">Dropdown Item 4</a>
                                <a href="#" class="dropdown-item">Dropdown Item 5</a>
                            </div>
                        </li>
                        <li><a href="#" class="nav-item nav-link">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <i class="fab fa-instagram socials"></i>
                    <i class="fab fa-facebook-f socials"></i>
                    <i class="fab fa-youtube socials"></i>
                    <i class="fab fa-whatsapp socials"></i>
                </div>
            </div>
        </nav>

    </header>




    <div class="banner">
        <div class="container">
            <h1>Bootstrap 4 Navbar</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec elit ex. Etiam elementum lectus et
                tempor molestie.</p>
            <a href="#content" class="button button-primary">Learn More</a>
        </div>
    </div>
    </header>





</body>

</html>