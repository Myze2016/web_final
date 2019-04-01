<style type="text/css">
  
  html {
     background-color: rgb(132,60,61);
  }

  .bushet {
     padding: 25px;
  }

</style>
<body>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url("assets/images/dota2logo.jpg") ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>DOTA 2 NEWS BLOG</h1>
            <span class="subheading">Your Daily Dota 2 News</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
   
     <?php foreach($blogs as $blog):
        if($blog['id'] == 4 ){

          break;

        }


        else{
      ;?>
      
    <div class="row bushet">
     
      <div class="col-lg-3">
        <img src="<?php echo base_url("assets/images/blog/".$blog['image']) ?>" class="img-rounded image_articles">
      </div>
      <div class="col-lg-9 col-md-9 mx-auto pull-left">
        <div class="post-preview">
          
          <a href="post.html">
            <h2 class="post-title">
      
              <?php echo $blog['Title']?>
            </h2>
          </a>
            <h3 class="post-subtitle" style="word-wrap: break-word;">
              <?php $words = substr($blog['words'], 0, 100) ?>
              <?php  echo $words?>
              <?php echo "..." . "<a href='#'> See More </a>"; }?>
            </h3>

          <p class="post-meta">Posted by
            <a href="#">Label 1</a>
            on September 24, 2019</p>

        </div>
     
       
        <hr>
        
        <hr>
        <!-- Pager -->
        
        
      </div>
     
    </div>
    
     <?php endforeach; ?>
  </div>
<div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
</body>

</html>
