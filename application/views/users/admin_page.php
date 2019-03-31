



 
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
         
             <a href="#" class="button btn btn-success" > Edit</a> 
               <a href="#" class="button btn btn-success" > Delete</a>
                 <a href="#" class="button btn btn-success"> View </a> 
                  <a href="#" class="button btn btn-success"> View All </a> 

        </td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
