<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost","root","","flotim") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "SELECT *
	FROM setting";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
	<!-- Custom styles for this template -->
	<link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-example.min.css" />
	<!-- Add fancyBox main JS and CSS files -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
	<link rel="shortcut icon" href="admin/favicon.ico">

    <title>Home - www.petawisataflotim.com - <?php echo $row['desc'];?></title>

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
       <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="index.php"><?php echo $row['judul'];?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="wisata.php">Peta Wisata</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="event.php">Event</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="wisata-kuliner.php">Wisata Kuliner</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="wisata-alam.php">Wisata Alam</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="wisata-religi.php">Wisata Religi</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="wisata-buatan.php">Wisata Buatan</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="wisata-sejarah.php">Wisata Sejarah</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="admin/" target=_blank>Login</a>
          </li>
        </ul>
        </div>
      </nav>
    </header>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
		  <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="admin/assets/uploads/logo/<?php echo $row['banner1'];?>" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
               
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="admin/assets/uploads/logo/<?php echo $row['banner2'];?>" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
               
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="admin/assets/uploads/logo/<?php echo $row['banner3'];?>" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                
              </div>
            </div>
          </div>
		  <div class="carousel-item">
            <img class="fourth-slide" src="admin/assets/uploads/logo/<?php echo $row['banner4'];?>" alt="Fourth slide">
            <div class="container">
              <div class="carousel-caption text-right">
               
              </div>
            </div>
          </div>
		  <div class="carousel-item">
            <img class="fifth-slide" src="admin/assets/uploads/logo/<?php echo $row['banner5'];?>" alt="Fifth slide">
            <div class="container">
              <div class="carousel-caption text-right">
                
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="admin/assets/uploads/logo/<?php echo $row['pic1'];?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Wisata</h2>
            <p>Temukan berbagai destinasi wisata kekinian yang ada di Flores Timur. </p>
            <p><a class="btn btn-primary" href="wisata.php" role="button">Lanjutkan &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="admin/assets/uploads/logo/<?php echo $row['pic2'];?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Event</h2>
            <p>Ayo kepoin tiap event yang akan diadakan di Flores Timur. </p>
            <p><a class="btn btn-primary" href="#" role="button">Lanjutkan &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="admin/assets/uploads/logo/<?php echo $row['pic3'];?>" alt="Generic placeholder image" width="140" height="140">
            <h2>Admin Panel</h2>
            <p>Update informasi wisata dan event terbaru di Flores TImur. </p>
            <p><a class="btn btn-primary" href="#" role="button">Lanjutkan &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <!--p class="float-right"><a href="#">Back to top</a></p-->
        <p>Copyright &copy; 2018 <?php echo $row['creator'];?>&trade;. All rights reserved.</p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/libs/handlebars.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
  </body>
</html>
	<?php } ?>
