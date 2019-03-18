<?php
	session_start();
	if(!isset($_SESSION['Login']))
	{
		header("location: index.html");
	}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="img/house-favicon.ico">

	<title>DOMEK > Panel</title>

	<!-- Bootstrap core CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<!-- Custom styles for this template -->
		<link href="css/style-admin.css" rel="stylesheet">
		<link href="css/style-main.css" rel="stylesheet">
		<link href="css/style-navbar.css" rel="stylesheet">
		<link href="css/style-slider.css" rel="stylesheet">
	<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<!-- Font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>

<!-- NAV MENU -->
 	<div class="main-head">
		<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="index.html">
				<img src="img/house-favicon.ico" width="30" height="30" class="d-inline-block align-top" alt="">
				<b>DOMEK</b>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuDomek" aria-controls="menuDomek" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse text-left" id="menuDomek">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.html#o-nas"><i class="fas fa-info-circle"></i>O NAS</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.html#okolica"><i class="fas fa-tree"></i>OKOLICA</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.html#galeria"><i class="fas fa-images"></i>GALERIA</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="index.html#pokoje"><i class="fas fa-bed"></i>POKOJE</a>
					</li>
					<li class="nav-item dropdown active">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-calendar-check"></i>REZERWACJA
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="index.html#rezerwacja-cennik"><i class="fas fa-dollar-sign"></i>CENNIK</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="index.html#rezerwacja-form"><i class="fas fa-calendar-plus"></i>REZERWUJ</a>
						</div>
					</li>
				</ul>
				<ul class="navbar-nav navbar-right">
					<li class="nav-item active">
						<a class="nav-link" href="index.html#kontakt"><i class="fas fa-envelope"></i>KONTAKT</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="admin_logout.php"><i class="fas fa-toolbox"></i>WYLOGUJ</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>

 	<main class="site-body main-admin">
		<div class="max-page-width ml-auto mr-auto Box-Transparency" id="admin-top">
			<div class="page-section page-section--no-bottom-spacing slider max-full-screen-height d-flex" id="Slider">
				<div class="container d-flex flex-column justify-content-around" id="main-other">
					<div class="row justify-content-center text-left text-white" >
						<div class="col-12 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
							<h1 class="text-center"><b>Panel Administracyjny<b></h1><hr>
						</div>
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-message-tab" data-toggle="pill" href="#pills-message" role="tab" aria-controls="pills-message" aria-selected="false" id="pobierz"><i class="fas fa-envelope"></i>Wiadomości</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<div class="alert alert-success alert-dismissible fade show" role="alert">
									<h4 class="alert-heading">Well done!</h4>
									<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
									<hr>
									<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-message" role="tabpanel" aria-labelledby="pills-message-tab">
								<? require_once("./p_connect.php");

								$wynik = mysqli_query($conn, "SELECT * FROM Messages") 
								or die('Błąd zapytania'); 
								while($row = mysqli_fetch_array($wynik))
								{
									echo "<div>";
									echo "<span> Data: ".$row['DateAdd']."</span><br>";
								    echo "<span> Imię i nazwisko: ".$row['Name']."</span><br>";
								    echo "<span> e-mail: ".$row['Email']."</span> <span>Telefon: ".$row['Phone']."</span><br>";
								    echo "<span> Tytuł: ".$row['Title']."</span>";
								    echo "<p> Treść: ".$row['TextArea']."</p>";
								    echo "<hr>";
								    echo "</div>";
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>


<div class="container">
	<div class="row my-4">
</div>



<footer class="py-3 bg-dark fixed-bottom">
	<div class="container">
		<p class="m-0 text-center text-white">Copyright © <b>http://ux.up.krakow.pl/~rlelito/</b> 2018</p>
	</div>
	<!-- /.container -->
</footer>


	<!-- Bootstrap - JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>


<!--			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<ul class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<h3 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
							<span style="padding-bottom: 20px; color: black;">DOMEK</span>
						</h3>
						<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
						<a class="nav-link" id="v-pills-message-tab" data-toggle="pill" href="#v-pills-message" role="tab" aria-controls="v-pills-message" aria-selected="false"><i class="fas fa-envelope"></i>Wiadomości</a>
					</ul>
				</div>
			</nav>
			<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
				<div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
      <div class="tab-pane fade" id="v-pills-message" role="tabpanel" aria-labelledby="v-pills-message-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
					<h1 class="h2">DOMEK > Panelu Administracyjny</h1>
				</div>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<h4 class="alert-heading">Well done!</h4>
					<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
					<hr>
					<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</main>-->