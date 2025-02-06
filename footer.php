<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="row footer">
    <div class="col-12">
        <hr>
    </div>
    <div class="col-4" align="center">
        <a href="index.php">
            <i class="fa-solid fa-signal <?= $current_page == 'index.php' ? 'active' : '' ?>"
                style="color: #9a9996;font-size:25px"></i>
        </a>
    </div>
    <div class="col-4" align="center">
        <a href="home.php">
            <i class="fa-solid fa-house <?= $current_page == 'home.php' ? 'active' : '' ?>"
                style="color: #9a9996;font-size:25px"></i>
        </a>
    </div>
    <div class="col-4" align="center">
        <a href="user.php">
            <i class="fa-solid fa-user-large <?= $current_page == 'user.php' ? 'active' : '' ?>"
                style="color: #9a9996;font-size:25px"></i>
        </a>
    </div>
</div>
