<?php 
//    print_r ($_POST);
include("../../../../index.php");
// copy selected rows from application to application_archive
$apps = $_POST['applications'];
$sql = "INSERT INTO applications_archive SELECT * FROM applications WHERE find_in_set(app_id,'$apps')";
$result = $db->query($sql);

//  Delete copied rows from application 
$sql2 = "DELETE FROM applications WHERE find_in_set(app_id,'$apps')";
$result = $db->query($sql2);

// copy selected rows from apps_components to apps_components_archive
$sql = "INSERT INTO apps_components_archive SELECT * FROM apps_components WHERE find_in_set(red_app_id,'$apps')";
$result = $db->query($sql);

//  Delete copied rows from apps_components 
$sql2 = "DELETE FROM apps_components WHERE find_in_set(red_app_id,'$apps')";
$result = $db->query($sql2);

//Once the archival operation is complete, control comes back to the "applications" page and the archvied applications will disappear from the view.
header("Location:app_list.php");

// backup queries 
// INSERT INTO apps_components SELECT * FROM apps_components_archive 
// INSERT INTO applications SELECT * FROM applications_archive 
?>