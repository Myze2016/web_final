<div class="container">

 	<?php foreach($blogs as $blog): ;?>
 	<div class="articles ">

 			<div class="row">
 				<div class="col-md-3" >
 					<?php $blogid = $blog['id'] ?>
 					
 						<img src="<?php echo base_url("assets/images/blog/".$blog['image']) ?>" class="img-rounded image_articles">
		 			
 				</div>
 				<div class="col-md-5 ">
 					<label class="article-title"> <?php echo $blog['Title'] ?> </label>
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
 					<div class="all-articles-icon-bottom">
 					<a class="link_reply" href="<?php echo base_url('controller/comment');?>/<?php echo $blog['id']; ?>"
 						>  <img src="<?php echo base_url("assets/images/iconMessage.png") ?>" class="img-rounded articles-icon"> </a>
 					<a class="link_reply" href="<?php echo base_url("/admin/dbmsblog/reply")?>">  <img src="<?php echo base_url("assets/images/iconMessage.png") ?>" class="img-rounded articles-icon"> </a>
 					<a class="link_reply" href="<?php echo base_url("/admin/dbmsblog/reply")?>">  <img src="<?php echo base_url("assets/images/iconMessage.png") ?>" class="img-rounded articles-icon"> </a>
 					<a class="link_reply" href="<?php echo base_url("/admin/dbmsblog/reply")?>">  <img src="<?php echo base_url("assets/images/iconMessage.png") ?>" class="img-rounded articles-icon"> </a>
 					</div>
 				</div>

 			</div>
 	</div>
 	<?php endforeach;?>
 </div>