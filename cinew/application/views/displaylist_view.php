<?php
    // Load header_view
    $this->load->view('common/header_view');
?>

<div class="container">
    <br>
    <p>Admin:</p>    
    <table class="table table-striped">
    <thead>
        <tr>
            <th>Project ID</th>
            <th>Project Name</th>
            <th>Short Description</th>
            <th>Long Description</th>
            <th><a href="<?php echo base_url('crud/addproject')?>">Add Project</a></th>
        </tr>
    </thead>
    <tbody>
    <?php      
        foreach($index as $row)
            {
    ?>
            <tr>
                <td><?php echo $row->id ?></td>
                <td><?php echo $row->firstname ?></td>
                <td><?php echo $row->lastname ?></td>
                <td><?php echo $row->email ?></td>
                <td><a href="<?php echo base_url('crud/editproject')?>">Edit</a></td>
                <td><a href="<?php echo base_url('crud/deleteproject')?>">Delete</a></td>
            </tr>
    <?php
        }
    ?>

    </tbody>
    </table>
    <p><?php echo $links; ?></p>
    </div>


<?php
    // Load header_view
    $this->load->view('common/footer_view');
?>