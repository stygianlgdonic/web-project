<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="main.css">

  <link href='https://fonts.googleapis.com/css?family=Dynalight' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
    integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <title>Books Arena | Cart</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-color:rgb(35, 115, 168)">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
      aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="homepage.php">Books Arena</a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 margin-lr">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Go</button>
          </form>
        </li>
      </ul>
      <a class="nav-link margin-lr btn btn-danger fas fa-cart-plus" href="cart.html"></a>
      <a href="userprofile.html" class='fas fa-user' style="color:white; "><small> Username</small></a>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1
          style="font-family: 'Dynalight';font-size: 50px; text-align: center; padding: 5%; text-shadow: 2px 2px 4px #000000  ">
          Your Cart</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <table class="table table-hover " style="width:100%">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Author</th>
              <th scope="col">Price <small>(Rs)</small></th>
              <th scope="col">Purchase</th>
              <th scope="col">&nbsp</th>

            </tr>
          </thead>
          <tbody>

          <tr>
              <th scope="row">1</th>
              <td> <?php 
                   include_once 'dbconnect.php';

                    ?>
             <!-- <tr>
              <th scope="row">1</th>
              <td><a href="...">The Reckoning</a></td>
              <td>John Grisham</td>
              <td>1550</td>
              <td>
                <div class="radio">&nbsp&nbsp&nbsp
                  <label><input type="radio" name="optradio"></label>
                </div>
              </td>
              <td>

                <button type="button" class="close" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><a href="...">The Reckoning</a></td>
              <td>John Grisham</td>
              <td>1550</td>
              <td>
                <div class="radio">&nbsp&nbsp&nbsp
                  <label><input type="radio" name="optradio"></label>
                </div>
              </td>
              <td>

                <button type="button" class="close" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><a href="...">The Reckoning</a></td>
              <td>John Grisham</td>
              <td>1550</td>
              <td>
                <div class="radio">&nbsp&nbsp&nbsp
                  <label><input type="radio" name="optradio"></label>
                </div>
              </td>
              <td>

                <button type="button" class="close" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>
              </td>
            </tr>  -->
          </tbody>
        </table>
        <p align="right"><button type="button" class="btn btn-danger" style="width:20%" data-toggle="tooltip"
            title="Purchase the selected Items">
            Purchase
          </button></p>

      </div>
      <div class="col-md-2"></div>

    </div>

</body>

</html>