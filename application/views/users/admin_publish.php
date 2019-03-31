<style type="text/css">
  textarea {
   resize: none;
  }
  .publish{
    float:right;
  }
</style>
<form action="<?php echo base_url('controller/publish_blog')?>" method="post"> 

<div class="form-group">
  <label for="exampleFormControlTextarea3">Article: </label>
  <textarea class="form-control" id="words" rows="7" name="words"></textarea>

</div>
<input type="file" name="image" value="fileupload" id="image"><label for="fileupload"> Select a file to upload</label>
  



 <input class="publish" type="submit" value="publish post"> </input> <br></form>
  

