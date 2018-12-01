<?php
    session_start();
    // Database connect
    require_once 'dbconnect.php';

    // Form variables
    $heading = $_POST["heading"];
    $content = $_POST["content"];
    $btn = $_POST["btn"];
    $btnlink = $_POST["btnlink"];
    $status = $_POST["status"];
    $date = $_POST["date"];
    $counterstatus = $_POST["counterstatus"];
    $id = $_POST["id"];
    $imglink = $_POST["imglink"];
    $btncolor = $_POST["btncolor"];
    $order = $_POST["order"];

    if ((empty($heading) || empty($content) || empty($status) || empty($btncolor) || empty($id) || empty($date) || empty($counterstatus))){
        header("Location: index.php?error");
    } else{

    try
{
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // UPDATE 
    $sql = "UPDATE promobox SET heading='$heading', content='$content', btn='$btn', status='$status', date='$date', counterstatus='$counterstatus', btnlink='$btnlink', btncolor='$btncolor', img='$imglink', porder='$order' WHERE id=$id";

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
