<div class="container">

 	<?php foreach($blogs as $blog): ;?>
 		<a href="<?php echo base_url("controller/comment") . "/" . $blog['id']  ?>">
 	<div class="articles">

 			<div class="row">
 				<div class="col-md-3" >
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