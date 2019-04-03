<style type="text/css">
  
 
    }
</style>
<body>

  <!-- Page Header -->
  <div class="masthead" style="background-image: url('<?php echo base_url("assets/images/header-logo.png") ?>')">
  </div>

  <!-- Main Content -->
  <div class="container">
   
     <?php foreach($blogs as $blog): ;?>
      
    <div class="row padding blog-list">
     
      <div class="col-md-3">
        <img src="<?php echo base_url("assets/images/blog/".$blog['image']) ?>" class="img-blog float-left">
      </div>
      <div class="col-lg-9 col-md-9 mx-auto pull-left" style="color:  #55552b;">
        <div class="post-preview">
          

          <a href="<?php echo base_url("controller/comment") . "/" . $blog['id']  ?>">
            <h2 class="post-title" style="color: maroon;" >

          

      
              <?php echo $blog['Title']?>
            </h3>
          </a>

            <p class="post-subtitle text-justify" style="word-wrap: break-word; ">
              <?php $words = substr($blog['words'], 0, 100) ?>
              <?php  echo $words . "." ?>
           
            </p>

            <p class="post-subtitle-content text-justify" style="word-wrap: break-word;">
              <?php $words = substr($blog['words'], 0, 100) ?>
              <?php  echo $words?>
              <?php echo "..."; ?>
            </p>
            <hr>
            <br>
          <p class="post-meta">Posted by
            <b>ADMIN</b>
            on <?php echo date("F d, Y")  ?></p>

        </div>
        
      </div>
     
    </div>
    
     <?php endforeach; ?>
  </div>
<div class="clearfix padding">
          <a class="btn btn-primary float-right " href="#">Older Posts &rarr;</a>
        </div>
</body>

</html>
