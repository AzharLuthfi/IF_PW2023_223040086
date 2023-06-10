<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Travelgo</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet" />

    <!-- Father icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="css/style-details.css" />
</head>

<body>
    <!-- navbar -->
    <?php require('partials/nav.php'); ?>
    <!-- navbar end -->
    <div class="container">

        <div class="product">
            <div class="gallery">
                <img src="img/paris.jpg">
            </div>
            <div class="details">
                <h1> PARIS </h1>
                <h2> Rp5.000.000 </h2>
                <h3> 30% OOF </h3>
                <p> Paris adalah salah satu destinasi wisata terbaik didunia. dengan
                    aneka kuliner, keindahan alam dan keberagaman budaya!</p>
                <form>
                    <div class="quantity-select">
                        <p>Quantity</p>
                        <input type="number" value="1">
                    </div>
                    <a href=""><button>Add Chart</button></a>
                    <a href=""><button>Book Now</button></a>

                </form>
            </div>


        </div>
    </div>



    <!-- footer -->
    <?php require('partials/footer.php'); ?>
    <!-- footer end -->

    <!-- Father icons -->
    <script>
        feather.replace();
    </script>
    <!-- Ny Javascript -->
    <script src="js/script.js"></script>
</body>

</html>