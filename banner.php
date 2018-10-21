<?php
    session_start();
    // Database connect
    require_once 'dbconnect.php';

    // Form variables
    $bannercontent = $_POST["bannercontent"];
    $bannerstatus = $_POST["bannerstatus"];

    if ((empty($bannercontent) && empty($bannerstatus))){
        header("Location: index.php");
    } else{

    try
{
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // UPDATE 
    $sql = "UPDATE banner SET bannercontent='$bannercontent', bannerstatus='$bannerstatus'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute
    $stmt->execute();

    //echo $stmt->rowCount() . " records UPDATED successfully";
	$_SESSION['logged'] = 'true';
    header("Location: index.php");
}
catch (PDOException $e)
{
    header("Location: index.php");
    //print "Database connect error: " . $e->getMessage() . "<br/>"; 
    die();
}
}
?>
