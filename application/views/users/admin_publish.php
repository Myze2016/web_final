<style type="text/css">
  textarea {
   resize: none;
  }
  .publish{
    float:right;
  }
</style>
<form action="<?php echo base_url('controller/publish_blog')?>" method="POST" id="publishform" style="padding: 20px;"> 

<div class="form-group">
  <label for="exampleFormControlTextarea3">Article Title: </label> <input type="text" id="title" name="title"> 
  <textarea class="form-control" id="words" rows="7" name="words"></textarea>

</div>
<input type="file" name="image" value="fileupload" id="image"><label for="fileupload" id="image"> Select a file to upload</label>
  



 <input class="publish" type="submit" value="publish post"> </input> <br></form>
   <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
   <script>
   $(document).ready(function(){
     $('#publishform').submit(function(e){
      e.preventDefault();
      var url  = $(this).attr('action');
      $.ajax({
        url : url,
        method: 'POST',
        data : $(this).serialize(),
        success: function(res){
         	alert('qweqwe'),
           $('#success-message').text(res.message);
        },
        error: function(err){

          var $errors  =  JSON.parse(err.responseText);
  
          alert($errors.words + '\n'  + $errors.title);

          
        }

    })
      
  })

}) 
  </script> 

