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
<<<<<<< HEAD
  <p id="success-message"> </p>
   <form  action="<?php echo base_url('controller/register_user');?>" method="POST" id="userform" class="form-group">
   
      
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="ENTER USERNAME">
      <p hidden id="user"></p>
=======

   <form  action="<?php echo base_url('controller/register_user');?>" method="POST" class="form-group" id="rform">
   
      
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="ENTER USERNAME">
      <input type="hidden" name="">
>>>>>>> c14e3d08ff4a3f06783fb5c6d5f74bdaac8530cb
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="ENTER EMAIL">
      <p hidden id="user"></p>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="ENTER PASSWORD">
      <p hidden id="user"></p>
      <input type="submit" class="fadeIn fourth" value="SUBMIT">
   

   
    <div id="formFooter">
      <a class="underlineHover" href="<?php echo base_url('login');?>">Login?</a>
      <label> || </label>
       <a class="underlineHover" href="<?php echo base_url('home');?>">Home</a>
    </div>
  </form>
  </div>
</div>
<<<<<<< HEAD
  <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
  <script >
   $(document).ready(function(){
     $('#userform').submit(function(e){
      e.preventDefault();
      var url  = $(this).attr('action');

      $.ajax({
        url : url,
        method: 'POST',
        data : $(this).serialize(),

        success: function(res){
           $('#success-message').text(res.message);
        },
        error: function(err){
          var $errors  =  JSON.parse(err.responseText);

          alert($errors.username); 
          alert($errors.email);
          alert($errors.password); 
         
          
        }

    })
      
  })

})
  </script>
</body>
=======
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
>>>>>>> c14e3d08ff4a3f06783fb5c6d5f74bdaac8530cb
