<style type="text/css">
  
  html {
     background-color: rgb(132,60,61);
  }

  .padding {
     padding: 75px;
  }
    
  .masthead {
    background-repeat: no-repeat;
    background-position: center;
    height: 295px;
    background-size: cover;  
    background-blend-mode: darken;
    }
    
    .site-heading {
    color: black;
    font-family: 'Lato', sans-serif;
    text-align: center;
    padding: 100px 20px;

  }
    .post-title {
        text-align: justify;
    }
    
    .blog-list {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       background: #b8b8b8;
       color: white;
    }
    .img-blog {
         
      width: 100%;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
    .post-title {
      font-size: 23px;
    }
    .post-subtitle {
      font-size: 15px;
    }
      .post-subtitle-content {
        font-size: 13px;
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
      <div class="col-lg-9 col-md-9 mx-auto pull-left">
        <div class="post-preview">
          

          <a href="<?php echo base_url("controller/comment") . "/" . $blog['id']  ?>">
            <h2 class="post-title" >

          

      
              <?php echo $blog['Title']?>
            </h3>
          </a>

            <p class="post-subtitle" style="word-wrap: break-word;">
              <?php $words = substr($blog['words'], 0, 100) ?>
              <?php  echo $words ?>
           
            </p>

            <p class="post-subtitle-content" style="word-wrap: break-word;">
              <?php $words = substr($blog['words'], 0, 120) ?>
              <?php  echo $words?>
              <?php echo "..." . "<a href='#'> See More </a>"; ?>
            </p>

            <br>
          <p class="post-meta">Posted by
            <b>Label 1</b>
            on <?php echo date("F d, Y")  ?></p>

        </div>
        
      </div>
     
    </div>
    
     <?php endforeach; ?>
  </div>
<div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
</body>

</html>
