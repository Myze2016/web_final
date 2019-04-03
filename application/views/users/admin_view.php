<style type="text/css">
	.box-style {
		 box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

</style>


<div class="container">

 	<?php foreach($blogs as $blog): ;?>
 		<a href="<?php echo base_url("controller/comment") . "/" . $blog['id']  ?>">
 	<div class="articles">

 			<div class="row">
 				<div class="col-md-3 box-shadow" >
 					<?php $blogid = $blog['id'] ?>
 					
 						<img src="<?php echo base_url("assets/images/blog/".$blog['image']) ?>" class="img-rounded image_articles">
		 			
 				</div>
 				<div class="col-md-5 ">
 					<p class="article-title"> <?php echo $blog['Title'] ?> </p>
 					<p class="article-text-first">
		 				<?php 

		 				$words = substr($blog['words'], 0 , 250);
		 				echo $words ?>

		 				
		 			</p>
 				</div>
 				<div class="col-md-4">
 					<p class="article-text-second">
 						<?php
		 				$words = substr($blog['words'], 250 , 100);
		 				echo $words ?>
		 			</p>

 				</div>

 			</div>
 	</div>
 </a>
 	<?php endforeach;?>
 </div>