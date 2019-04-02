<style type="text/css">
  textarea {
   resize: none;
  }
  .publish{
    float:right;
  }
</style>

<form action="<?php echo base_url('controller/update_user');?>" method="post" style="padding: 20px;"> 	
<table class="table">
        <thead>
          <tr>  
              <th>#</th>
              <th>name</th>
              <th>password</th>
              <th>email</th>
          </tr> 
        </thead>
        <?php foreach($users as $user): ?>

        <tbody> 
              <tr>  
                <td><input class="form-control" type="text" name="number" value="<?php  echo $user['id'];?>"readonly></td>
                <td><input class="form-control" type="text" name="username" value="<?php echo $user['username'];?>"></td>
                <td>
                	<input class="form-control" type="password" name="password" value="<?php echo $user['password'];?>" readonly> 
                </td>  
                <td>
                	<input class="form-control" type="email" name="email" value="<?php echo$user['email'];?>"></td>  
                        
            </tr> 
            <?php endforeach; ?>
        </tbody>       
    </table>

</div>


 <input class="publish" type="submit" value="update"> </input> <br></form>
