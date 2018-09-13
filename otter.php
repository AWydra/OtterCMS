<?php
    
    // Database
    $host = "awydra.pl";
    $username = "wydra_demo";
    $password = "DeMo123!@";
    $dbname = "wydra_demo";

    // Form variables
    $heading = $_POST["heading"];
    $content = $_POST["content"];
    $btn = $_POST["btn"];
    $status = $_POST["status"];

    try
{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // UPDATE 
    $sql = "UPDATE wydra_demo SET heading='$heading', content='$content', btn='$btn', status='$status'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute
    $stmt->execute();

    // helpful info
    echo $stmt->rowCount() . " records UPDATED successfully";
    //header("Location: http://awydra.pl/cms/index.php?succes"); SOON
}
catch (PDOException $e)
{
    //header("Location: http://awydra.pl/cms/index.php?error"); SOON
    print "Database connect error: " . $e->getMessage() . "<br/>"; 
    die();
}

?>
