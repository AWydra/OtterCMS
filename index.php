<!DOCTYPE html>
<html lang="en">


<?php
    
    // Database connect
    require_once 'dbconnect.php';
    
    try
{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    $query = "SELECT heading, content, btn FROM wydra_demo";
        
    $data = $conn->query($query);
        
    foreach($data as $row){
        $heading = $row["heading"];
        $content = $row["content"];
        $btn = $row["btn"];
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
    </style>


</head>

<body>
    <main class="w-100 d-flex justify-content-center align-items-center p-2">
        <section class="form-container w-100 p-3">
            <form action="otter.php" method="post">
                <div class="form-group">
                    <label for="heading">Heading</label>
                    <textarea class="form-control" id="heading" name="heading" rows="2"><? echo $heading; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="4"><? echo $content; ?></textarea>
                    <small class="form-text text-muted">HTML is allowed.</small>
                </div>
                <div class="form-group">
                    <label for="btn">Button</label>
                    <textarea class="form-control" id="btn" name="btn" rows="1"><? echo $btn; ?></textarea>
                </div>
                <fieldset class="form-group">
                    <legend>Promoboxes are:</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="enable" value="enable" checked>
                            Enabled
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="disable" value="disable">
                            Disabled
                        </label>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </main>

    <!--  Scripts  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
