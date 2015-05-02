
<html>
<title> Login</title>

<head>

	<style type="text/css">
	@charset "UTF-8";
	/* CSS Document */

	body {
		width:100px;
		height:100px;

		/*	background: -webkit-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Chrome 10+, Saf5.1+ */
		/*background:    -moz-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* FF3.6+ */*/
		/*background:     -ms-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* IE10 */*/
		/*background:      -o-linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* Opera 11.10+ */*/
		/*background:         linear-gradient(90deg, #16222A 10%, #3A6073 90%); /* W3C */*/
		*/

		font-family: 'Raleway', sans-serif;
	}

	p {
		color:#CCC;
	}

	.spacing {
		padding-top:7px;
		padding-bottom:7px;
	}
	.middlePage {
		width: 680px;
		height: 500px;
		position: absolute;
		top:0;
		bottom: 0;
		left: 0;
		right: 0;
		margin: auto;
	}

	.logo {
		color:#CCC;
	}
	</style>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

	<!-- Log in -->

	

	<div class="middlePage">


		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Please Sign In</h3>
			</div>
			<div class="panel-body">

				<div class="row">

					<div class="col-md-5" >
						<a href="https://graph.facebook.com/oauth/authorize?client_id=815403985162109&redirect_uri=<?php echo base_url('login');?>&scope=email,user_birthday"><img src="http://techulus.com/buttons/fb.png" /></a><br/>
						<a href="#"><img src="http://techulus.com/buttons/tw.png" /></a><br/>
						<a href="#"><img src="http://techulus.com/buttons/gplus.png" /></a>
					</div>

					<div class="col-md-7" style="border-left:1px solid #ccc;height:160px">
						<form class="form-horizontal">
							<fieldset>

								<input id="textinput" name="textinput" type="text" placeholder="Enter User Name" class="form-control input-md">
								<div class="spacing"><input type="checkbox" name="checkboxes" id="checkboxes-0" value="1"><small> Remember me</small></div>
								<input id="textinput" name="textinput" type="text" placeholder="Enter Password" class="form-control input-md">
								<div class="spacing"><a href="#"><small> Forgot Password?</small></a><br/></div>
								<button id="singlebutton" name="singlebutton" class="btn btn-info btn-sm pull-right">Sign In</button>


							</fieldset>
						</form>
					</div>

				</div>

			</div>
		</div>


	</div>
</body>

</body>
</html>


<!-- Log out -->

		<!-- 	<a href="http://localhost/fb/login/logout">Log out


	</a> -->


<!-- 	<a href="https://graph.facebook.com/oauth/authorize?client_id=815403985162109&redirect_uri=<?php echo base_url('login');?>&scope=email,user_birthday" class="facebook">
		Log in with Facebook
	</a>
-->

