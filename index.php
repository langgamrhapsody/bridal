<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once './stylesheets/globalStylesheet.php'; ?>
    <link href="./assets/css/pages/home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

    <title>Tirtha Bridal</title>
</head>

<body>
    <?php include_once './data/data.php' ?>

    <header>
        <!-- Navbar -->
        <?php include_once './components/navbar/navbar.php'; ?>
    </header>
    <main>
        <!-- Banner -->
        <?php include_once './components/home/banner.php'; ?>
        <!-- Info -->
        <?php include_once './components/home/info.php' ?>
        <!-- planning -->
        <?php include_once './components/home/event.php' ?>
        <!-- decor -->
        <?php include_once './components/home/decor.php' ?>
        <!-- food -->
        <?php include_once './components/home/food.php' ?>

        <!-- gallery -->
        <?php include_once './components/home/gallery.php' ?>


        <!-- question -->
        <?php include_once './components/home/question.php' ?>

    </main>
    <footer>
        <?php include_once './components/footer/footer.php' ?>

    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="./assets/js/layout.js"></script>
    <script src="./assets/js/home.js"></script>



</body>

</html>