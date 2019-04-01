<style type="text/css">
  textarea {
   resize: none;
  }
  .publish{
    float:right;
  }
</style>

<form action="<?php echo base_url('controller/update')?>" method="post" style="padding: 20px;"> 

<div class="form-group">
  <label for="exampleFormControlTextarea3">Article Title: </label> <input type="text" name="Title"> 
  <textarea class="form-control" id="words" rows="7" name="words"></textarea>

</div>
<input type="file" name="image" value="fileupload" id="image"><label for="fileupload"> Select a file to upload</label>
  



 <input class="publish" type="submit" value="publish post"> </input> <br></form>