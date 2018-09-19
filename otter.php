<?php
    
    // Database connect
    require_once 'dbconnect.php';

    // Form variables
    $heading = $_POST["heading"];
    $content = $_POST["content"];
    $btn = $_POST["btn"];
    $status = $_POST["status"];
    $date = $_POST["date"];
    $counterstatus = $_POST["counterstatus"];

    try
{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // UPDATE 
    $sql = "UPDATE wydra_demo SET heading='$heading', content='$content', btn='$btn', status='$status', date='$date', counterstatus='$counterstatus'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute
    $stmt->execute();

    //echo $stmt->rowCount() . " records UPDATED successfully";
    header("Location: http://awydra.pl/cms/index.php?succes");
}
catch (PDOException $e)
{
    header("Location: http://awydra.pl/cms/index.php?error");
    //print "Database connect error: " . $e->getMessage() . "<br/>"; 
    die();
}

?>
