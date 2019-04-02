



 
  <div class="margin">
<h4> List of Users</h4>           
  <table class="table user-list-table table-hover">
    
    <thead>
      <tr>
        <th>User Name</th>
        <th>Email </th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ;?>
      <tr>
        <input type="hidden" valu="<?php echo $user['id'] ?>">
        <td><?php echo $user['username'] ?></td>
        <td><?php echo $user['email'] ?></td>
        <td>
         
             <a href="<?php echo base_url('controller/edit_user');?>/<?php echo $user['id']; ?>" class="button btn btn-success" > Edit</a> 
               <a href="<?php echo base_url('controller/delete');?>/<?php echo $user['id']; ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete # <?php echo$user['id'] ?>?');">Delete</a>
                 <a href="<?php echo base_url('controller/view_user');?>/<?php echo $user['id']; ?>" class="button btn btn-success"> View </a> 
      </td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
