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

   <form  action="<?php echo base_url('controller/register_user');?>" method="POST" class="form-group" id="rform">
   
      
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="ENTER USERNAME">
      <input type="hidden" name="">
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min')?>"></script>
<script >
 $(document).ready(function(){
  $('#rform').submit(function(e){
    e.preventDefault();
    var url = $(this).attr('action');
    
    $.ajax({

      url: url;
      method: "POST";
      data: $(this).serialize(),
      success: function (res){
        $('#success-message').text(res.message);
      },
      error: function(err){
        var error = JSON.parse(err.responseText);

        alert(err.responseText);
      }





    })
})
</script>
