<!-- Upload image -->
<?php
echo $insertId=$_GET['id'];
?>
<form action="imgaction.php" method="post" enctype="multipart/form-data">
    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" /> 
    <input type="hidden" name="insertId" id="insertId" value="<?php echo $insertId; ?>"/>
    <br/>
    <input type="submit" name="submit" value="Submit" />
</form>

