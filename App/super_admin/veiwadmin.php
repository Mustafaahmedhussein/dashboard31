<!DOCTYPE html>
<html lang="en">
<?php
$count=1;
include_once '../../shared/head.php';
include_once '../../vendor/database.php';
include_once '../../vendor/function.php';
$select="SELECT  *FROM admin";
$data=mysqli_query($connect,$select);
?>
<body>
    <div class="container">
<table class="table">
   
  <tr>
  <th>Numbers</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan="2">Action</th>
  </tr>
  <?php foreach($data as $item):  ?>
<tr>

<td><?= $count++?></td>
<td><?=$item['name']?></td>
<td><?=$item['email']?></td>
<td><?=$item['phone']?></td>
<td><a href="delete.php?delete=<?=$item['id']?>"><i class="fa-solid fa-trash"></i></a>

</td>
<td><a href="update.php?update=<?=$item['id']?>"><i class="fa-sharp-duotone fa-solid fa-pen-to-square"></i></a></td>
</tr>
<?php endforeach;?>
</table>
</div>
</body>
</html>