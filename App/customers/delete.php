<!DOCTYPE html>
<html lang="en">
    <?php
include_once '../../shared/head.php';
include_once '../../vendor/function.php';
include_once '../../vendor/database.php';
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $delete="DELETE FROM  employess WHERE id=$id";
    mysqli_query($connect,$delete);
    header("location:index.php");
}

?>
<body>
    
</body>
</html>