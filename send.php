<?php
include('functions.php');
if(isset($_POST['name'])) {
    saveProfile();
    header('Location: index.php?success=1');
}
?>