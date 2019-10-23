
</html>

<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Masuk.kuy! </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/img/iconn.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url()?>assets/img/iconn.png">
</head>
<style media="screen">
body{
	background-image: url(../assets/img/eskrim.jpg);
	background-size: cover;
	background-repeat: no-repeat;

}
	.content{
		margin-top: -490px;
	}

	.hayo{
		margin-top: -280px;
		margin-left: 50px;
		color: white;
		position: absolute;
	}

	.right{
		background-color: #EFBFA8;
	}

	.auth-box{
		width: 400px;
		padding: 25px;
		background-color: rgba(110, 126, 115, 0.3);
	}

	.remember{
		position: center;
	}

	.logo img{
		margin-top: 40px;
	}

	#login{
		background-color: #DE867C;
		border: none;
		margin-top: -5px;
	}

	#login:hover{
		background-color: white;
		color: #DE867C;
		transition: 0.4s;
	}

	#inputt{
		background-color: rgba(110, 126, 115, 0.5);
		color: white;
	}

	.lupa{
		color: white;
	}
	.lupa:hover{
		color: #6E7E73;
		transition: 0.3s;
	}

	.lead{
		color: white;
		margin-top: -10px;
	}

	.logo img{
		margin-top: -5px;
		margin-bottom: -20px;
	}



</style>
<body>

	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
						<div class="content">
							<div class="header">
								<!-- <div class="logo text-center"><img src="<?= base_url()?>assets/img/kuliner.png" alt="Klorofil Logo"></div> -->
								<p class="lead">Login to your account</p>
							</div>
              <form class="form-auth-small" action="<?= base_url('index.php/Login/cek_login')?>" method="post">
                <div class="form-group">
                  <label for="signin-email" class="control-label sr-only">Email</label>
                  <input type="text" class="form-control" placeholder="Username"  name="username">
                </div>
                <div class="form-group">
                  <label for="signin-password" class="control-label sr-only">Password</label>
                  <input type="password" class="form-control"  placeholder="Password" name="password">
                </div>

                <input type="submit" name="submit" value="Login"  class="btn btn-primary btn-lg btn-block">
                <div class="bottom">
                  <span class="helper-text"><i class="fa fa-lock"></i> <a href="<?php echo base_url() ?>#">Forgot password?</a></span>
                </div>
              </form>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
