<?php $this->load->view('header'); ?>
<?php echo anchor('dashboard/adduser','Add User',['class'=>'label label-success']);?>
   <div class="customer">
     <table border="2">
            <tr>
               <td>FirstName</td>
               <td>LastName</td>
               <td>UserName</td>
               <td>Email</td>
               <td>Gender</td>
               <td>Age</td>
               <td>Action</td>
            </tr>
         <?php
         foreach ($users as $row)  
            {  
               ?><tr>  
               <td><?php echo $row['firstname'];?></td>  
               <td><?php echo $row['lastname'];?></td> 
               <td><?php echo $row['username'];?></td>  
               <td><?php echo $row['email'];?></td>   
               <td><?php echo $row['gender'];?></td>  
               <td><?php echo $row['age'];?></td>  
               <td>
               <?php  echo anchor('Dashboard/updateUser/'.$row['id'],'update',['class'=>'label label-success']);?>
               <?php  echo anchor('Dashboard/deleteUser/'.$row['id'],'delete',['class'=>'label label-danger']);?></td>  
               </tr>  
            <?php 
            }
         ?>
      </table>
   </div>
<?php $this->load->view('footer'); ?>
