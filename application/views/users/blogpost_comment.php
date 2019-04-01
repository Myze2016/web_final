<style>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>?<?php echo time(); ?>">

    

</style>
<body>
<div class="container break">

		<?php foreach($users as $user): ;?>

	<div class="row postblog break" >
	 	<div class="col-md-4">
		   	<img src="<?php echo base_url("assets/images/blog/".$user['image']) ?>" width="90%" height="200px">

	 	</div>
	  	<div class="col-md-8 " style="word-wrap:break-word">
	  
	   		<p class=""><?php echo $user['words'] ?></p>
	 	</div>
	 	<div class="form-group">
		 	<label for="exampleFormControlTextarea3">comment: </label>
		 	 <textarea class="form-control textarea" rows="7" cols="180"></textarea>
		</div>

	<?php endforeach; ?>
	</div>
</div>
</body>