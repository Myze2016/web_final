<body >
<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/users/style.css"); ?>?<?php echo time(); ?>">


<?php 
    session_destroy();
    ?>
<div class="wrapper fadeInDown">
  <div id="formContent">
  

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo base_url("assets/images/dota2logo.png") ?>" id="icon" alt="User Icon" />
    </div>

   <form  action="<?php echo base_url('controller/login_user');?>" method="POST" class="form-group">
    <form>
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="ENTER USERNAME">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="ENTER PASSWORD">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

   
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  </form>
  </div>
</div>
</body>