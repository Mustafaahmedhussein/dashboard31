<!DOCTYPE html>
<html lang="en">
    <?php
include_once '../../shared/head.php';
include_once '../../vendor/database.php';
include_once '../../vendor/function.php';
if(isset($_GET['delete'])){
    $id=$_GET["delete"];
    $delete="DELETE FROM admin where id=$id";
    mysqli_query($connect,$delete);
    header("location:veiwadmin.php");
}
?>
<body>
    
</body>
</html>