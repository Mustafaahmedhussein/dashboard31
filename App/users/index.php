
<!DOCTYPE html>
<html lang="en">
<?php
include_once '../../shared/head.php';
include_once '../../vendor/function.php';
include_once '../../vendor/database.php';

$counter=0;
$select ="SELECT *from users";
$data=mysqli_query($connect,$select);
?>
<body>


<button class="btn btn-success">Add Employ+</button>
<div class="container col-12">
    <div class="card">
        <div class="card-body">
            <div class="table">
                <table class="table">
                <tr>
                    <th>users</th>
                    <th>name</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>country</th>
                    <th>Email</th>
<th colspan="2">Action</th>
                </tr>
                <?php foreach($data as $items): ?>
                <tr>
                <th><?=++$counter?></th>
                    <td><?=$items['name']?></td>
                    <td><?=$items['phone']?></td>
                    <td><?=$items['address']?></td>
                    <td><?=$items['country']?></td>
                    <td><?=$items['Email']?></td>
             <td>
                <a href="delete.php?delete=<?=$items['id']?>">
                <i class="fa-solid fa-trash"></i>
                </a>
               
             </td>
             <td>
             <a href="show.php?id=<?=$items['id']?>">
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
