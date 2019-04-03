<style type="text/css">
  textarea {
   resize: none;
  }
  .publish{
    float:right;
  }
</style>
<body>
<p id="successmessage"> </p>
<form action="<?php echo base_url('controller/publish_blog')?>" method="POST" id="publishform" style="padding: 20px;"> 

<div class="form-group">
  <label for="exampleFormControlTextarea3">Article Title: </label> <input type="text" id="title" name="title"> 
  <textarea class="form-control" id="words" rows="7" name="words"></textarea>

</div>
<input type="file" name="image"  value="fileupload" id="image"><label for="fileupload" id="image"> Select a file to upload</label>
  



 <input class="publish" class="btn btn-primary" type="submit" value="publish post"> </input> <br></form>
<script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>



</body>