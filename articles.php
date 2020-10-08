<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anxwer - Artikel</title>
    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- FONTAWESOME ICON -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CUSTOM CSS -->

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <link rel="stylesheet" href="css/navbarStyle.css">
    <link rel="stylesheet" href="css/style2.css">
    
    
</head>

<body style="overflow-x: hidden;">
    <!-- NAVBAR -->
    <section id="navbar" >
        <?php
        include ('homepage/navbar.html');
        ?>
    </section>

    <section id="header" style="padding-top: 7em;">
        <?php

        include ('articles/article_index_header.html');

        ?>
    </section>

    <section id="header" style="height: 75vh;">
        <?php

        include ('articles/article_list.php');

        ?>
    </section>
    <!-- Footer DESKTOP-->
    <section id="footer" style="padding-top: 70em;" class="d-none d-sm-block">
        <?php

        include ('homepage/footer.html');

        ?>
    </section>

    <!-- FOOTER MOBILE -->
    <section id="footer" style="padding-top: 240em;" class="d-sm-none">
        <?php

        include ('homepage/footer.html');

        ?>
    </section> 
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
