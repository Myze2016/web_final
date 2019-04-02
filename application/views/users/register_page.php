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

   <form  action="<?php echo base_url('controller/register_user');?>" method="POST" class="form-group">
   
   
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="ENTER USERNAME">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="ENTER EMAIL">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="ENTER PASSWORD">
      <input type="submit" class="fadeIn fourth" value="Register">
   

   
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo base_url('login');?>">Login?</a>
      <label> || </label>
       <a class="underlineHover" href="<?php echo base_url('home');?>">Home</a>
    </div>
  </form>
  </div>
</div>
</body>