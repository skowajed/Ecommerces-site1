<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Phonewagon</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="../assets/css/fontawesome/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-light">

    <section class="header p-0 container-fluid ">
        <nav class="navbar py-0  navbar-expand-lg bg-dark navbar-dark">
            <div class="container-md p-0">
                <a class="navbar-brand" href="#">
                    <h2>Easymart</h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navDropdown">
                    <ul class="navbar-nav nav mx-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Collections</a>
                        </li>
                    </ul>
                    <div class="d-flex d-md-none d-block">
                        <a class="nav-link" href="#">Username</a>
                        <a class="btn btn-danger" href="#">Logout</a>
                    </div>
                </div>
                <div class="ml-auto">
                    <a class="mx-1" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a>
                    <a href="#"><i class="far fa-heart fa-2x"></i></a>
                </div>
                <div class="d-md-flex d-md-block d-none">
                    <a class="nav-link" href="#">Username</a>
                    <a class="btn btn-danger" href="#">Logout</a>
                </div>
        </nav>
    </section>
    <main class="container-fluid">
        <div class="container-md">
            <form class="form mb-4 mt-4" action="" method="POST">
                <div class="form-group">
                    <label for="username">Name</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="useremail">Email</label>
                    <input type="text" name="useremail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="usermsg">Message</label>
                    <textarea name="usermsg" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <!-- <button type="submit" href="./index.html" class="btn btn-primary">Send</button> -->
                <a type="" href="../index.html" class="btn btn-primary">Send</a>

            </form>
        </div>
    </main>

    <section class="container-fluid p-0">
        <div class="footer">
            <div class="container-fluid text-white">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h2>Phonewagon</h2>
                        <small>Challenge us. We want to work with you to <br class="d-none d-md-block"> create the
                            really cool stuff.</small>
                    </div>
                    <div class="col-12 mt-5 mt-md-0 col-md-6">
                        <div class="row">
                            <div class="col-6 text-center justify-content-center">
                                <h5>About us</h5>
                                <ul class="aboutsection pl-0">
                                    <li>
                                        <a href="#">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 text-center">
                                <h5>Projects</h5>
                                <ul class="aboutsection pl-0">
                                    <li>
                                        <a href="#">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="../assets/js/jquery-3.6.0.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</html>