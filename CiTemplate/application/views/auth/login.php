<html>
<head>
<title>Login</title>
</head>
<style>
.mainInfo {font-family:'Arial','Sans-Serif';font-size:12px;margin:0;padding:0 10px;width:350px;border:1px solid #ccc;}
.mainInfo label {float:left;width:110px;}
.mainInfo .submit {margin-left:110px;}
</style>
</head>
<body>
<div class='mainInfo'>
	<h2 class="pageTitle">Login</h2>
    <div class="pageTitleBorder"></div>
	<p>Please login with your email address and password below.</p>
	<div id="infoMessage"><?php echo $message;?></div>
	<?php $attributes = array('id' => 'login', 'name' => 'login'); ?>
    <?php echo form_open("auth/login",$attributes);?>
      <p>
		  <?php $attributes = array('id' => 'email', 'name' => 'email'); ?>
		  <label for="email">Email:</label>
      	<?php echo form_input($email,$attributes);?>
      </p>
      <p>
      	<label for="password">Password:</label>
      	<?php echo form_input($password);?>
      </p>
      <p>
	      <label for="remember">Remember Me:</label>
	      <?php echo form_checkbox('remember', '1', FALSE);?>
	  </p>
      <p class="submit"><?php echo form_submit('submit', 'Login');?></p>
    <?php echo form_close();?>
    <script type="text/javascript" language="JavaScript"> 
    document.login.email.focus();
    </script>
</div>
</body>
</html>
