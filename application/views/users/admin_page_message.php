<div class="margin">
<h4> Blog List </h4>           
  <table class="table user-list-table table-hover">
    
    <thead>
      <tr>
        <th>Title</th>
        <th>Words</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ;?>
      <tr >
        <input type="hidden" value="<?php echo $user['id'] ?>">
        <td ><?php echo $user['Title']; ?></td>
        <td ><?php echo substr($user['words'],0,20); ?></td>
        <td ><?php echo substr($user['image'],0,20); ?></td>
        
        <td>
         
             <a href="<?php echo base_url('controller/edit');?>/<?php echo $user['id']; ?>" class="button btn btn-success" > Edit</a> 
               <a href="<?php echo base_url('controller/delete');?>/<?php echo $user['id']; ?>"  class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete # <?php echo$user['id'] ?>?');">Delete</a>
                 <a href="<?php echo base_url('controller/comment');?>/<?php echo $user['id']; ?>" class="button btn btn-success"> View </a> 
      </td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
