<style>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>?<?php echo time(); ?>">
</style>
<body>
<div class="cotainer">
	<?php foreach($blogs as $blog): ;?>
		
	
	<div class="row postblog">
 	<div class="col-md-3">
   	<img src="<?php echo base_url("assets/images/logo.png") ?>" width="32%">
 	</div>
  	<div class="col-md-9">
  
   	<p><?php echo $blog['words'] ?></p>
 	</div>
 	<div class="form-group">
 	<label for="exampleFormControlTextarea3">comment: </label>
 	 <textarea class="form-control textarea" rows="7" cols="180"></textarea>
	</div>
<?php endforeach; ?>
</div>
</div>
</body>