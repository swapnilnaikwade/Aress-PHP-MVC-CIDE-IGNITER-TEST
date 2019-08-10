<?php $this->load->view('header'); ?>
   <div class="customer">
      <table border="2">
            <tr>
               <td>FirstName</td>
               <td>LastName</td>
               <td>UserName</td>
               <td>Email</td>
               <td>Gender</td>
               <td>Age</td>
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
               </tr>  
            <?php 
            }
         ?>
      </table>
   </div>
<?php $this->load->view('footer'); ?>
