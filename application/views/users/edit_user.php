<style type="text/css">
  textarea {
   resize: none;
  }
  .publish{
    float:right;
  }
</style>

<form action="<?php echo base_url('controller/update')?>" method="post" style="padding: 20px;"> 	
<?php foreach($users as $user): ?>
<input type="hidden" value="<?php echo $user['id']?>" name="id">
<div class="form-group">
  <label for="exampleFormControlTextarea3">Article Title: </label> <input type="text" name="Title" value="<?php echo $user['Title']?>" placeholder="<?php echo $user['Title']?>"> 
  <textarea class="form-control" id="words" rows="7" name="words" value="<?php echo $user['words']?>" placeholder="<?php echo $user['words']?>"></textarea>

</div>
<input type="file" name="image" value="<?php echo $user['image']?>" id="image"><label for="fileupload"> Select a file to upload</label>
   <?php endforeach; ?>



 <input class="publish" type="submit" value="publish post"> </input> <br></form>
