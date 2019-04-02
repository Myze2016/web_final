  <div class="margin">
<h4> List of Users</h4>           
  <table class="table user-list-table table-hover">
    
    <thead>
      <tr>
        <th>From:</th>
        <th>Message:</th>
        <th>Action:</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ;?>
      <tr>
        <input type="hidden" value="<?php echo $user['id']; ?>">
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['message']; ?></td>
        <td>   
               <a href="<?php echo base_url('controller/delete_message');?>/<?php echo $user['id']; ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete # <?php echo$user['id'] ?>?');">Delete</a>
      </td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
