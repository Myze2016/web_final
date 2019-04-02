<div id="mySidebar" class="sidebar">

		
	  	<!---- messages	blogs	list of User/ home 		Logout	 with Profile	--->

  		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &times;</a>
      <div class="adminInfo row">
        <div class="col-sm-3">
  		<img src="<?php echo base_url("assets/images/kay-vogelgesang.jpg") ?>" class="img-rounded rounded-circle  d-block mx-auto image"> </div>
      <div class="col-sm-7 adminText">
  		<label class="name"> Erwin P. Rommel </label><br>
  		<label class="accountType">  Admin  </label>
     
        </div>
      </div>


<div class="links">	
  <a class="link_list" href="<?php echo base_url("userlist")?>">
    <img src="<?php echo base_url("assets/images/iconPeople.png") ?>" class="img-rounded  icon">
     User List</a>
  <a class="link_article" href="<?php echo base_url("bloglist")?>">   <img src="<?php echo base_url("assets/images/iconArticles.png") ?>" class="img-rounded  icon"> View Articles</a>
  <a class="link_publish" href="<?php echo base_url("publish")?>">  <img src="<?php echo base_url("assets/images/iconPublish.png") ?>" class="img-rounded  icon"> Publish Article</a>
  <a class="link_reply" href="<?php echo base_url("reply")?>">  <img src="<?php echo base_url("assets/images/iconMessage.png") ?>" class="img-rounded  icon"> Messages</a>
  <a class="link_logout" href="<?php echo base_url("login")?>">Log-Out</a>
</div>
</div>
<div id="main">
	  <nav class="mainnavbar sticky-top navbar navbar-expand-lg">
	  




      <div class="collapse navbar-collapse" id="navbarText">
    	<ul class="navbar-nav mr-auto">
      	<li class="nav-item active">
        	<button class="openbtn" onclick="openNav()">&#9776;</button> 
     	</li>
      <li >
        <h6 class="page-name"> User List </h6>
      </li>
    	</ul>
      
    		<span class="navbar-text">
          <h6 class="logo-name">
      		Dota2Blog
        </h6>
    		</span>
        <img src="<?php echo base_url("assets/images/dota2logo.png") ?>" class="img-rounded  logo">
		</div>

	 </nav>