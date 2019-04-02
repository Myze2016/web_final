<form action="<?php echo base_url('controller/user_list'); ?>" method="post">
<table class="table">
        <thead>
          <tr>  
              <th>#</th>
              <th>name</th>
              <th>email</th>
          </tr> 
        </thead>
        <tbody> 
          <?php foreach($users as $user): ;?>
              <tr>  
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username'];?></td>
                <td><?php echo $user['email'];?></td>  
                        
            </tr> 
            <?php endforeach; ?>
        </tbody>       
    </table>
    <div class="form-group">
              <input type="submit" value="Back" name="back" class="btn btn-success">
           </div> 
         </form>