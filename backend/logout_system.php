<?php
session_start();
unset($_SESSION['Personalid']);
header("location: ../html/sign_in_page.php");
?>