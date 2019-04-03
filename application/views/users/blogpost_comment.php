<style>
<link rel="stylesheet" type="text/css" href="<?php  echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css"); ?>?<?php echo time(); ?>">

    

</style>
<body>
<div class="container break">

<form action="<?php echo base_url('controller/save_comment')?>" method="get" style="padding: 20px;"> 
		<?php foreach($users as $user): ;?>
		
			<input type="hidden" name="blogid" value="<?php echo $user['id']; ?>"> 
	<div class="row postblog break" >
	 	<div class="col-md-4">
		   	<img src="<?php echo base_url("assets/images/blog/".$user['image']) ?>" width="90%" height="auto">

	 	</div>
	 	
	   
	
	  	<div class="col-md-8 " style="word-wrap:break-word">
	  		<h3 class=""><?php echo $user['Title'] ?></h3>
	   		<p class=""><?php echo $user['words'] ?></p>
	 	</div>
<<<<<<< HEAD
	 	<div class="form-group">
		 	<label for="exampleFormControlTextarea3" style="padding-bottom: 10px;">comment: </label>
=======
		<div class="form-group">
		 	<label for="exampleFormControlTextarea3">Comments:</label>
>>>>>>> cb7bd114bf6da62c208f84040f63284799c1e52b
		 	<?php if ((isset($_SESSION['user']))) {foreach ($blogs as $blog): ?> 
			<a href="#" style="font-size: 20px"> <?php echo $blog['username']?> </a>
			<input type="hidden" name="userid" value="<?php echo $blog['id']; ?>"> 
			<?php endforeach;}	?> <br>

			<?php foreach ($comment as $comments): ?> 
				<div style="margin: 0px 10px 0px 30px;">

					<label> <b><?php echo $comments['username']?></b></label>
					<p> <?php  echo $comments['comment']?></p>
					<hr>
				</div>
			<?php endforeach; ?>
		 	 <textarea class="form-control textarea" name="comment" rows="3" cols="180"></textarea>
		</div>

	<?php endforeach; ?>
	
	</div>
		
	<input class="publish button btn btn-primary" type="submit" value="Comment"> </input> <br></form>
</div>
</body>