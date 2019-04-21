<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <title>Books Arena</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color:rgb(35, 115, 168)">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="homepage.html">Books Arena</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="homepage.html">Home</a>
                </li>
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 margin-lr">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-info my-2 my-sm-0" type="submit">Go</button>
                    </form>
                </li>
            </ul>

            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                Login
            </button>

            <!-- The Modal -->
            <div class="modal text-center" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Member Login</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form class=" form-horizontal">

                                <input type="text" name="username_login" placeholder="Username" class="form-control loginmargin" autocomplete="off">
                                <input type="password" name="password_login" placeholder="Password" class="form-control loginmargin">
                                <br>
                                <Label class="grey"><input type="checkbox" name="rememberme" checked="checked"> Remember
                                    me</Label>&nbsp;&nbsp;&nbsp;&nbsp;
                                <Label class="grey"><a href="lab6.html">Forgot Password?</a></Label>
                                <br><br>
                                <input type="submit" name="login" value="LOGIN" class="btn btn-info">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <hr>
                                <Label class="grey">You are not a member?</Label>
                                <br>
                                <a href="signup.html" class="btn btn-info">Create Account</a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>



            <a class="nav-link margin-lr btn btn-danger fas fa-cart-plus" href="cart.html"></a>
            <a href="userprofile.html" class='fas fa-user' style="color:white; "><small> Username</small></a>
        </div>
    </nav>



    <div class="container-fluid">

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <div class="row">
                    <div id="slider1" class="carousel slide" data-ride="carousel" data-interval="5000">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#slider1" data-slide-to="0" class="active"></li>
                            <li data-target="#slider1" data-slide-to="1"></li>
                            <li data-target="#slider1" data-slide-to="2"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/book1.jpg" alt="book1" width="100%" height="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="images/book2.jpg" alt="book2" width="100%" height="100%">
                            </div>
                            <div class="carousel-item">
                                <img src="images/book3.jpg" alt="book3" width="100%" height="100%">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#slider1" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#slider1" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 margin-tb">
                        <div class="list-group list-group-flush margin-tb border border-primary rounded">
                            <b class="list-group-item list-group-item-primary">Catagories</b>
                            <a href="Biographyandmemoir.html" class="list-group-item list-group-item-action">Biographies
                                & Memoirs</a>
                            <a href="Fictionandliterature.html" class="list-group-item list-group-item-action">Fiction &
                                Literature</a>
                            <a href="ComicandGraphic.html" class="list-group-item list-group-item-action">Comics &
                                Graphic models</a>
                            <a href="History.html" class="list-group-item list-group-item-action">History</a>
                            <a href="Classics.html" class="list-group-item list-group-item-action">Classics &
                                Literature</a>
                            <a href="SelfCare.html" class="list-group-item list-group-item-action">Self Care</a>
                            <a href="healthandfitness.html" class="list-group-item list-group-item-action">Health &
                                Fitness</a>
                            <a href="religion.html" class="list-group-item list-group-item-action">Religion &
                                Spirituality</a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-8 margin-tb padded">
                        <div class="row margin-tb">
                            <h5 class="border-bottom border-primary">Best Sellers</h5>
                        </div>
                        <div class="row margin-tb">
                            <div id="slider3" class="carousel slide wide" data-ride="carousel" data-interval="4500">

                                <!-- The slideshow -->
                                <?php
                                include_once('dbconnect.php');

                                $query = "SELECT * FROM `books`";
                                $result = mysqli_query($connection, $query);

                                if (!$result) {
                                    echo mysqli_error($connection);
                                }
                                if (mysqli_num_rows($result) > 0) {
                                    ?>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="d-flex flex-row">

                                                <?php
                                                while ($row = mysqli_fetch_array($result)) {
                                                    ?>

                                                    <div class="p-2">
                                                        <div>
                                                            <img src="<?php echo $row[8]; ?>" alt="1.jpg">
                                                        </div>
                                                        <div class="text-center">
                                                            <a href="#"><?php echo $row[1]; ?></a><br>
                                                            <small><i>by: <?php echo $row[2]; ?></i></small><br><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                        </div>
                                                    </div>


                                                <?php
                                            }
                                            ?>

                                            </div>
                                        </div>
                                    </div>



                                <?php
                            }
                            ?>
                                <!-- <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-flex flex-row">
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex flex-row">
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="d-flex flex-row">
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <div>
                                                    <img src="images/1.jpg" alt="1.jpg">
                                                </div>
                                                <div class="text-center">
                                                    <a href="#">The Reckoning</a><br>
                                                    <small><i>by: John Grisham</i></small><a href="#" class=" fas fa-cart-plus" style="color:red;"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#slider3" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#slider3" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>

                        <hr>

                    </div>

                </div>

            </div>
            <div class="col-md-1"></div>

        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>