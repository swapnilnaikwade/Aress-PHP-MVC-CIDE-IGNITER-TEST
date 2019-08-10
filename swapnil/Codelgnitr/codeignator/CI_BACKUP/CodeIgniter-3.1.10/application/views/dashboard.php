<?php $this->load->view('header'); ?>
<?php echo anchor('Dashboard/addUser','Add User',['class'=>'btn btn-success']);?><br><br>
<?php echo form_open(''); ?>
	
   <select name="deptid">
   <option value="" selected disabled hidden>Select Department</option>
<?php foreach($deptList as $dep){?>
    <option  value="<?php echo $dep['dpt_id']; ?>"><?php echo $dep['dpt_name']; ?></option>
<?php }?>
</select>
   <input type="text" value="" name="searchText" /> 
   <button type="submit">Search</button>
</form>
   <div class="customer">
      <table border="2">
         <tr>
            <td> </td>
            <td><strong>FirstName</strong></td>
            <td><strong>LastName</strong></td>
            <td><strong>UserName</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Gender</strong></td>
            <td><strong>Age</strong></td>
            <td><strong>Action</strong></td>
         </tr>
         <?php
         foreach ($users as $row)  
            {  
            ?><tr class="row">  
            <td class="col-md-2"><?php echo $row['firstname'];?></td>  
            <td class="col-md-2"><?php echo $row['lastname'];?></td> 
            <td class="col-md-2"><?php echo $row['username'];?></td>  
            <td class="col-md-2"><?php echo $row['email'];?></td>   
            <td class="col-md-2"><?php echo $row['gender'];?></td>  
            <td class="col-md-2"><?php echo $row['age'];?></td>  
            <td class="col-md-2">
            <?php  echo anchor('Dashboard/updateUser/'.$row['id'],'update',['class'=>'btn btn-success']);?><br/>
            <?php  echo anchor('Dashboard/deleteUser/'.$row['id'],'delete',['class'=>'btn btn-danger']);?></td>  
            </tr>  
            <?php 
            }
         ?>
      </table><br><br><br>
      <?php  if(isset($links))
    echo $links; ?>
   </div>
<?php $this->load->view('footer'); ?>
