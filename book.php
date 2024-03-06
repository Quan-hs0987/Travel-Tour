<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="header">
        <a href="home.php" class="logo">travel</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
        <h1>book now</h1>

    </div>

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>name: </span>
                    <input type="text" placeholder="enter your name" name="name" id="">
                </div>
                <div class="inputBox">
                    <span>email: </span>
                    <input type="email" placeholder="enter your email" name="email" id="">
                </div>
                <div class="inputBox">
                    <span>phone: </span>
                    <input type="number" placeholder="enter your number" name="phone" id="">
                </div>
                <div class="inputBox">
                    <span>address: </span>
                    <input type="text" placeholder="enter your address" name="address" id="">
                </div>
                <div class="inputBox">
                    <span>where to: </span>
                    <input type="text" placeholder="place you want to visit" name="location" id="">
                </div>
                <div class="inputBox">
                    <span>name: </span>
                    <input type="number" placeholder="number of guests" name="guests" id="">
                </div>
                <div class="inputBox">
                    <span>arrivals: </span>
                    <input type="date" name="arrivals">
                </div>
                <div class="inputBox">
                    <span>leaving: </span>
                    <input type="date" name="leaving">
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send" id="">
        </form>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class=box>
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class=box>
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class=box>
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-789</a>
                <a href="#"><i class="fas fa-phone"></i> +111-222-333</a>
                <a href="#"><i class="fas fa-envelope"></i> quan@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Hanoi-VietNam</a>
            </div>

            <div class=box>
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
            </div>
        </div>

        <div class="credit"> created by <span>Mr. web desiger</span> | all right reserved</div>


    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>