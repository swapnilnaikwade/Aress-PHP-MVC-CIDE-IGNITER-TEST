<?php $this->load->view('header'); ?>
<?php echo anchor('Dashboard/addUser','Add User',['class'=>'label label-success']);?>
   <div class="customer">
      <table border="2">
         <tr>
            <td> </td><td> </td>
            <td><strong>FirstName</strong></td>
            <td><strong>LastName</strong></td>
            <td><strong>UserName</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Gender</strong></td>
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
               <?php  echo anchor('Dashboard/updateUser/'.$row['id'],'update',['class'=>'label label-success']);?>
               <?php  echo anchor('Dashboard/deleteUser/'.$row['id'],'delete',['class'=>'label label-danger']);?></td>  
               </tr>  
            <?php 
            }
         ?>
      </table><br><br><br>
      <p><?php echo $links; ?></p>
   </div>
<?php $this->load->view('footer'); ?>
