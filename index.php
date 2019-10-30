<!doctype html>
<html lang="en">
<head>
	<!-- true.nl Managed Hosting -->
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Test case">
  	<meta name="author" content="R.D. van Sloten">
  	<title>SchoenenKopen</title>
  	<!-- Bootstrap core CSS -->
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-	ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<!-- Custom styles -->
  	<link href="css/custom.css" rel="stylesheet"> 
	<!-- Angular JS -->
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
	<script>
		var app = angular.module('schoenApp', []);
		app.controller('schoenController', function($scope, $http) {
			$http.get('get-shoes.php')
			.success(function(response) {$scope.schoenData = response;});
		});
	</script>	
</head>

<body>
 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">SchoenenKopen</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><?php echo gethostname(); ?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
  	<div class="row">
		<div class="col-lg-3">
			<h1 class="my-4">Schoenen</h1>
			<div class="list-group">
				<a href="#" class="list-group-item">Sneakers</a>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="row" ng-app="schoenApp" ng-controller="schoenController">
			  		<div ng-repeat="data in schoenData" class="col-lg-4 col-md-6 mb-4">
						<div class="card h-100">
				  			<a href="#" style="text-align: center;"><img class="card-img-top shoe-photo" ng-src="{{data.schoen_url}}" alt=""></a>
				  			<div class="card-body">
								<h4 class="card-title">
									<a href="#">{{data.schoen_naam}}</a>
								</h4>
								<h5>{{data.schoen_prijs | currency }}</h5>
								<p class="card-text">{{data.schoen_desc}}</p>
								<p class="card-text">ID: {{data.schoen_id}}</p>
				  			</div>
				  			<div class="card-footer">
								<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
				  			</div>
						</div>
  					</div>
        		</div>
    	</div>
	</div>
	</div>
  	<!-- Footer -->
	<footer class="py-5 bg-dark">
		<div class="container">
      		<p class="m-0 text-center text-white">Copyright &copy; SchoenenKopen 2019</p>
    	</div>
  	</footer>

  	<!-- Bootstrap core JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>