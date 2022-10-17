<?php
include "./pertials/header.php";
?>


<h1 style="margin-left:100px; margin-top:100px;">Hi, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. Welcome to Admin Panel.</h1>

<?php
include "./pertials/footer.php";
?>