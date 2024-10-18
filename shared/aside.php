
<?php
include_once 'C:\xampp\htdocs\dashboard31/vendor/function.php';
?>

<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href=<?=base_url()?>>
      <i class="bi bi-grid"></i>
      <span>Home</span>
    </a>
  </li>
  <?php if(isset($_SESSION['admin'])&& $_SESSION['admin']):?>
  <li class="nav-item">
    <a class="nav-link " href="<?=base_url("create.php")?>">
      <i class="bi bi-grid"></i>
      <span>create users</span>
    </a>
  </li>
  <?php endif;?>
  <?php if(isset($_SESSION['admin'])&& $_SESSION['admin']):?>
  <li class="nav-item">
    <a class="nav-link " href="<?=base_url('login.php')?>">
      <i class="bi bi-grid"></i>
      <span>login</span>
    </a>
  </li>
  <?php endif;?>
  <li class="nav-item">
    <a class="nav-link " href="<?=base_url('profile.php')?>">
      <i class="bi bi-grid"></i>
      <span>profile</span>
    </a>
  </li>
  <?php if(isset($_SESSION['super'])&& $_SESSION['super']):?> 
  <li class="nav-item">
    <a class="nav-link " href="./App/super_admin/veiwadmin.php">
      <i class="bi bi-grid"></i>
      <span>Admin</span>
    </a>
  </li>
  <?php endif ;?> 
  <li class="nav-item">
    <a class="nav-link " href="./App/employe/index.php">
      <i class="bi bi-grid"></i>
      <span>employ</span>
    </a>
  </li>
   <?php if(isset($_SESSION['super'])&& $_SESSION['super']) :?> 
  <li class="nav-item">
    <a class="nav-link " href="./App/admin/create.php?id=<?=$_SESSION['super']['id']?>">
      <i class="bi bi-grid"></i>
      <span>Create Admin</span>
    </a>
  </li>
  <?php endif ;?> 
  
  <?php
  if(isset($_SESSION['super']) && $_SESSION['super']):
  ?>
 <li class="nav-item">
    <a class="nav-link " href="./App/super_admin/create.php">
      <i class="bi bi-grid"></i>
      <span>Create super_admin</span>
    </a>
  </li>


  <?php endif; ?>
  <?php
  if(isset($_SESSION['customer']) && $_SESSION['customer']):
  ?>
  <li class="nav-item">
    <a class="nav-link " href="./App/cars/create.php?id=<?=$_SESSION['customer']['id'] ?>">
      <i ></i>
      <span>Add Car For Sale</span>
    </a>
  </li>
  <?php endif; ?>
  <?php
  if(isset($_SESSION['admin']) && $_SESSION['admin']):
  ?>
  <li class="nav-item">
    <a class="nav-link " href="./App/cars/create.php?id=<?=$_SESSION['admin']['id'] ?>">
      <i ></i>
      <span>Add Car For Sale From Admin</span>
    </a>
  </li>
  <?php endif; ?>
</ul>


</aside>