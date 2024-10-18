<?php
include_once '../../shared/head.php';
include_once '../../vendor/database.php';
include_once '../../vendor/function.php';
$select="SELECT * FROM employess";
$user=mysqli_query($connect,$select);

?>
<!DOCTYPE html>
<html lang="en">

<body>


<a href="create.php"class="btn btn-success">Add Employ+</a>
<div class="container col-12">
    <div class="card">
        <div class="card-body">
            <div class="table">
                <table class="table">
                <tr>
                    <th>users</th>
                    <th>email</th>
                   
            <th colspan="2">Action</th>
                </tr>
                <?php foreach($user as $items): ?>
                <tr>
          
                    <td><?=$items['name']?></td>
                    <td><?=$items['email']?></td>
                   
             <td>
                <a href="delete.php?delete=<?=$items['id']?>">
                <i class="fa-solid fa-trash"></i>
                </a>
               
             </td>
             <td>
             <a href="view.php?id=<?=$items['id']?>">
                <i class="fa-solid fa-user"></i>
                </a>
             
             </td>
               <?php endforeach; ?>
                

                </table>
            </div>
        </div>
    </div>
</div>


</body>
<?php
include_once '../../shared/script.php'
?>
</html>
