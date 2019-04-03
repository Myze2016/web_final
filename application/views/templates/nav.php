


<div id="main" class="row sticky content">
	 <nav class="main navbar sticky-top navbar navbar-expand-lg navbar-light bg-light rounded col-md-12 nav-justified  nav-fill">
	 <p class="col-md-2">
	 <img src="<?php echo base_url("assets/images/logo-3.png") ?>" width="50%">
	</p>
    	<ul class="navbar-nav mr-auto float-right col-md-10">
      	<li class="nav-item">
        	<a class="nav-link " href="<?php echo base_url('home');?>">HOME</a>
     	 </li>
      	<li class="nav-item">
        	<a class="nav-link " href="<?php echo base_url('articles');?>">BLOGS</a>
      	</li>
      	<li class="nav-item ">
        	<a class="nav-link " href="<?php echo base_url('controller/contact');?>">CONTACT US</a>
      	</li>
      	<li class="nav-item ">
          <?php if ((isset($_SESSION['logged_in']))) { ?>
             <a class="nav-link " href="<?php echo base_url('login');?>"> <?php echo $_SESSION['username']?></a></button>
        	
         <?php } else {?>
         <a class="nav-link " href="<?php echo base_url('login');?>">LOGIN</a></button>
          <?php };?>
      	</li>
      	<li class="nav-item">
      		<small>	
        		<a class="nav-link" href="#">NOT YET A MEMBER?</a>
        	</small>
      	</li>
    	</ul>

 </nav>
</div>
