<!DOCTYPE html>
<html>
<head>
	<title>PHP Website</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Technical Anubhav</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/los angeles skyline getty_0.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/loop-1800x900.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/GettyImages-946087016.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12 about_part1 ">
			<img class="img-fluid aboutimg" src="images/switzerland-facts-1920x1080.jpg" alt="">
		</div>
		<div class="col-lg-6 col-md-6 col-12 about--part2">
			<h2 class="display-4">I am Technical Anubhav.</h2>
			<p class="py-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora molestias esse voluptatem corporis fugit enim earum et quia culpa doloremque commodi ad, ex repellat neque officia eaque. Molestias, vel, repellat.</p>
			<a href="about.php" class="btn btn-success"> check More</a>
		</div>
	</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
			<div class="card">
				<img class="card-img-top" src="images/download.jpg" alt="Card image">
				<div class="card-body">
					<h4 class="card-title">Beatiful Nature :)</h4>
					<p class="card-text">Some example text.</p>
					<a href="#" class="btn btn-primary">See Profile</a>
				</div>
			</div>
			</div>

        <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
        <img class="card-img-top" src="images/download.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Beatiful Nature :)</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
      </div>
        <div class="col-lg-4 col-md-4 col-12">
      <div class="card">
        <img class="card-img-top" src="images/download.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Beatiful Nature :)</h4>
          <p class="card-text">Some example text.</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
      </div>
		</div>
	</div>
</section>
<section>
  <section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
        <div class="col-lg-4 col-md-4 col-12">
        <img src="images/tree-276014__340.jpg" class="img-fluid pb-4"></div>
    </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Form</h2>
    </div>

    <div class="w-50 m-auto">
      <form action="userinfo.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Email id</label>
          <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comments"></textarea>
          
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">@TechnicalAnubhavProduction</p>
  </footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
//     var waypoint = new Waypoint({
//   element: document.getElementById('px-offset-waypoint'),
//   handler: function(direction) {
//     notify('I am 20px from the top of the window')
//   },
//   offset: 20 
// })

    $(document).ready(function() {
      $('.about_part1').waypoint(function(direction){
        $('.about_part1').addClass('animated bounce')
      })
    });
  </script>
</body>
</html>