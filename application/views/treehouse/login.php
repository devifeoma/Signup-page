<!DOCTYPE html>
<html>
<head>
	<title>treehouse</title>
	<!--fonts-->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='<?= base_url() ?>assets/css/bootstrap.css' type='text/css'/>
	<link rel='stylesheet' href='<?= base_url()?>assets/css/home.css' type='text/css'/>
	
  	<style>
  		body{
  			background-image: url('<?=base_url() ?>assets/img/bg.jpg');
  		}
  	
	  	li{
	  		display: inline;
	  		float: right;
	  		margin-bottom: 25px;
	  		padding: 0px 10px 3px 10px;
	  		text-decoration: none;
	  	}
	  	.form-box{
	  		background-color: white;
	  		border:13px solid;
  			border-radius: 10px;
  			border-color: white;
	  	}
	  	.header{
	  		background-color:#22569f; 
	  		display: block;
  			width: 100%;
  			height: 90px;
  			border:13px solid;
  			border-radius: 5px;
  			border-color: #22569f;
  			text-align: center;
  			color:white;
  			padding-top: 30px;
  			border-width: 100%;
  			font-family: Lucida  Handwriting;
	  	}	
  	</style>
	  	
</head>

<body>
	
		<div class="container-fluid well">
			<div class=" container col-md-8">
			<a href="#"><h4>treehouse<h4></a>
			</div>
			
			<div class="container col-md-4">
				<ul>	
					<li><a href="#">Free Trial</a></li>
					<li><a href="#">Stories</a></li>
					<li><a href="#">Sign in</a></li>
					<li><a href="#">Business</a></li>
				</ul>
			</div>
				
		</div>
		<p class='clearfix'>&nbsp;</p>


	<div class="container">
		<div class="row container-fluid  col-md-6 " style="font-family: 'Lato'; font-size: 27px !important; color: white;">
			<p><h2 >Learn Web Design, </h2></p>
			<p><h2>coding and much more</h2></p>
			<p><h4>Treehouse offers a 7-day free trial to our course library! Choose from 1,000s of hours of content,
			 from JavaScript to Python to iOS. Learn to code and get the skills you need to launch a new career.<h4></p>
		</div>

	
		<div class="row container col-md-6 form-box" style="margin-top: 0px !important; margin-left: 0px !important">
				
			<p class="header">Get Started Today!</p>
			<form class="" action="<?= base_url()?>index.php/register" method="POST">
				<div class="col-md-6 col-sm-6 col-xs-4">
					<div class="form-group">
						<label for="firstname">First name..</label>
						<input name="first_name" type="text" class="form-control">
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input name="email" type="email" class="form-control">
						
					</div>
				</div>

				<div class="col-md-6 col-sm-6 col-xs-4">
					<div class="form-group">
						<label for="lastname">Last name</label>
						<input name="last_name" type="text" class="form-control">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input name="password" type="password" class="form-control">
					</div>
				</div>
				
				<button type="submit" class="btn btn-success btn-block">Claim your free trial</button>
				<p class='clearfix'>&nbsp;</p>
				<p>You are agreeing to our <a href="#">Terms and Services</a></p>
			</form>

		</div>
			
	</div>


	<footer>
		<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</footer>

</body>
</html>