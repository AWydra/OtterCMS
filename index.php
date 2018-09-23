<!DOCTYPE html>
<html lang="en">


<?php
    
    session_start();
    
    // Database connect
    require_once 'dbconnect.php';
    
    try
{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    $query = "SELECT heading, content, btn, btnlink, date FROM $dbname";
        
    $data = $conn->query($query);
        
    foreach($data as $row){
        $heading = $row["heading"];
        $content = $row["content"];
        $btn = $row["btn"];
        $btnlink = $row["btnlink"];
        $date = $row["date"];
    }
}
catch (PDOException $e)
{
    //header("Location: http://awydra.pl/cms/index.php?error"); SOON
    print "Database connect error: " . $e->getMessage() . "<br/>"; 
    die();
}
    ?>


<head>
    <meta charset="UTF-8">
    <title>OtterCMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arkadiusz Wydra">

    <!--  Bootstrap 4  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--  Reset  -->
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.0/normalize.css">

    <!--  Styles  -->
    <style>
        main{
            min-height: 100vh;
            background-image: url(https://fastcast4u.com/images/bg-login.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        
        .form-container{
            max-width: 550px;
            background-color: rgba(255,255,255,.9);
            border-radius: 10px;
        }
        
        .version{
            text-align: right;
        }
    </style>


</head>

<body>
    <main class="w-100 d-flex justify-content-center align-items-center p-2">
        <section class="form-container w-100 p-3">
  
    <?
        if (isset($_SESSION['logged'])){
			//echo $_SESSION['logged'];
            require('content.php');
        } else if ($_POST['sitepassword'] == "fastcast"){
            $_SESSION['logged'] = 'true';
			//echo $_SESSION['logged'];
            require('content.php');
        } else if (!($_POST['sitepassword'] == "fastcast")){
            echo '
            
<form action="" method="POST">
  <div class="form-group">
    <label for="password">Enter your password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="sitepassword">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<div class="version">OtterCMS v1.0.0</div>            
            ';
			echo $_SESSION['logged'];
        }
    ?>
   
   
        </section>
    </main>
    

    <!--  Scripts  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
