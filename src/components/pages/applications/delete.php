<?php 
//    print_r ($_POST);
include("../../../../index.php");
$apps = $_POST['applications'];


//  Delete selected rows from application 
$sql = "DELETE FROM applications WHERE find_in_set(app_id,'$apps')";
$result = $db->query($sql);


//  Delete selected rows from apps_components 
$sql = "DELETE FROM apps_components WHERE find_in_set(red_app_id,'$apps')";
$result = $db->query($sql);

//Once the archival operation is complete, control comes back to the "applications" page and the archvied applications will disappear from the view.
// header("Location:app_list.php");

?>