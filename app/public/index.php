<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/head.php'; ?>
</head>

<body>
    <!--- Navigation -->
    <?php $page = 'home';include 'includes/navbar.php'; ?>
    <!--- End Navigation -->

    <div class='w-100 py-5 text-center'
        style='height: 500px; background-image: url("img/sandwich.png"); background-size: cover; background-position: center; margin:auto;'>
        <h1 class='h1' style='margin-top: 20%; color:white;'>Little Deli & Pizzeria</h1>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-4 py-5">
                <img src="img/sandwichImage.png" />
                <h2 style='color: #b43128;'>Deli & Pizzeria</h2>
                <hr class='w-25' style='border: 1px solid black'>
                <h5 style='letter-spacing: 4px'>OUR DELICIOUS STORY</h5>
                <br />
                <p class="">Located in the heart of Austin, the Little Deli has been a staple for nearly two
                    decades; we are the original Deli and Pizzeria, and we believe that we’re the best. Why? We
                    use the
                    best ingredients, proven methods, and put our heart and soul into every sandwich and slice!
                    All you
                    have to do is call us and we’ll get right to work!</p><a class="btn btn-secondary btn-lg"
                    href="http://wordpress-template.local/about.php">MORE ABOUT US</a>
            </div>
            <div class="col-4 my-auto">
                <img class='w-100' src='img/pizza1.jpg' />
            </div>
            <div class="col-4 my-auto">
                <img class='w-100' src='img/pizza2.jpg' />
            </div>
        </div>
    </div>

    <!--- Start Footer -->
    <?php  include 'includes/footer.php' ?>
    <!--- End Footer -->



</body>