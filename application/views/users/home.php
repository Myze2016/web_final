<style type="text/css">
  
  html {
     background-color: rgb(132,60,61);
  }

  .bushet {
     padding: 25px;
  }
    
  .masthead {
    background-repeat: no-repeat;
    background-position: center;
    height: auto;
    background-size: cover;  
    background-blend-mode: darken;
    }
    
    .site-heading {
    color: black;
    font-family: 'Lato', sans-serif;
    text-align: center;
    padding: 100px 20px;
  }
    h1 {
        font-size: 50px;
    }
    .post-title {
        text-align: justify;
    }
    

</style>
<body>

  <!-- Page Header -->
  <div class="masthead" style="background-image: url('<?php echo base_url("assets/images/header2.png") ?>')">
    <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>DOTA 2 NEWS BLOG</h1>
              <h3>Your Daily Dota 2 News</h3>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container">
   
     <?php foreach($blogs as $blog): ;?>
      
    <div class="row bushet">
     
      <div class="col-lg-3">
        <img src="<?php echo base_url("assets/images/blog/".$blog['image']) ?>" class="img-rounded image_articles">
      </div>
      <div class="col-lg-9 col-md-9 mx-auto pull-left">
        <div class="post-preview">
          

          <a href="<?php echo base_url("controller/comment") . "/" . $blog['id']  ?>">
            <h2 class="post-title" >

          

      
              <?php echo $blog['Title']?>
            </h3>
          </a>

            <h3 class="post-subtitle" style="word-wrap: break-word;">
              <?php $words = substr($blog['words'], 0, 100) ?>
              <?php  echo $words ?>
           
            </h3>

            <h5 class="post-subtitle" style="word-wrap: break-word;">
              <?php $words = substr($blog['words'], 0, 120) ?>
              <?php  echo $words?>
              <?php echo "..." . "<a href='#'> See More </a>"; ?>
            </h5>


          <p class="post-meta">Posted by
            <b>Label 1</b>
            on <?php echo date("F d, Y")  ?></p>

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
