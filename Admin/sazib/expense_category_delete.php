<?php
    $con = new mysqli('localhost', 'root', '', 'production_automation');
    $id=$_GET['id'];
    $con->query("DELETE FROM expense_category WHERE id=$id");
    $con->close();
    header("location: expense_category_list.php");
    

?>