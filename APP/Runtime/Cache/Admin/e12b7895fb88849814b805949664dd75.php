<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<title>Login One</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="__PUBLIC__/css/templatemo_style.css" rel="stylesheet" type="text/css">	
</head>
<body class="templatemo-bg-gray">
	<div class="container">
		<div class="col-md-12">
			<h1 class="margin-bottom-15">招聘会管理系统</h1>
			<form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="<?php echo U(GROUP_NAME.'/Login/login');?>" method="post">				
		        <div class="form-group">
                <h2>后台登陆</h2>
		          <div class="col-xs-12">		            
		            <div class="control-wrapper">
		            	
		            	<input type="text" class="form-control" name="username" id="username" placeholder="Username">
		            </div>		            	            
		          </div>              
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		            	<input type="password" class="form-control" name="password" id="password" placeholder="Password">
		            </div>
		          </div>
                  
		        </div>
		        <div class="form-group">
		          <div class="col-md-12">
		          	<div class="control-wrapper">
		          		<input type="submit" value="登陆" class="btn btn-info">
		          	</div>
		          </div>
		        </div>
		        <hr>
		      </form>
		      <div class="text-center">
		      </div>
		</div>
	</div>
</body>
</html>