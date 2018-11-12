<!DOCTYPE html>
<html lang="en">


<?php
    
    session_start();
    
    // Database connect
    require_once 'dbconnect.php';
    
    try
{
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
    $query = "SELECT * FROM promobox, banner, passwd";
        
    $data = $conn->query($query);
        
    foreach($data as $i => $row){
        $heading[$i] = $row["heading"];
        $content[$i] = $row["content"];
        $btn[$i] = $row["btn"];
        $btnlink[$i] = $row["btnlink"];
        $date[$i] = $row["date"];
        $bannercontent[$i] = $row["bannercontent"];
        $status[$i] = $row["status"];
        $counterstatus[$i] = $row["counterstatus"];
        $bannerstatus[$i] = $row["bannerstatus"];
        $passwd = $row["passwd"];
        $imglink[$i] = $row["img"];
        $btncolor[$i] = $row["btncolor"];
    }
}
catch (PDOException $e)
{
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
        main {
            min-height: 100vh;
            background-image: url('https://fastcast4u.com/images/bg-login.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .form-container {
            max-width: 550px;
            background-color: rgba(255, 255, 255, .9);
            border-radius: 10px;
        }

        .version {
            text-align: right;
        }

        .tab {
            overflow: hidden;
        }

        /* Style the buttons that are used to open the tab content */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: .3s;
            border-radius: 3px;
        }

        @media(max-width: 767px) {
            .tab button {
                border-bottom: 1px solid #aaa;
            }


            .tab button:first-child,
            .tab button:nth-child(2) {
                border-top: 1px solid #aaa;
            }
        }

        @media(min-width: 768px) {
            .tab {
                border-bottom: 1px solid #aaa;
            }
        }


        .tab button:hover {
            background-color: #ddd;
        }

        .tab button.active {
            background-color: #ccc;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
            border-top: none;
            animation: fade .3s;
        }

        @keyframes fade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        input,
        textarea {
            resize: none;
        }

    </style>


</head>

<body>
    <main class="w-100 d-flex justify-content-center align-items-center p-2">

        <section class="form-container w-100 p-3">
            <?
        if (isset($_SESSION['logged'])){
            require('content.php');
        } else if (password_verify($_POST['sitepassword'], $passwd)){
            $_SESSION['logged'] = 'true';
            require('content.php');
        } else if (!(password_verify($_POST['sitepassword'], $passwd))){
            echo '
            
<form action="" method="POST">
  <div class="form-group">
    <label for="password">Enter your password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="sitepassword">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<div class="version">OtterCMS v1.5.1</div>            
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
    <script>
        function openCategory(evt, name) {
            let i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(name).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("promobox").style.display = "block";

    </script>

    <script>
        $(document).ready(function() {
            $("#button1").click(function() {
                $(".firstbanner").css("display", "block");
                $(".secondbanner").css("display", "none");
                $(this).css("border", "#ccc solid 2px");
                $("#button2").css("border", "none");
            });
            $("#button2").click(function() {
                $(".firstbanner").css("display", "none");
                $(".secondbanner").css("display", "block");
                $(this).css("border", "#ccc solid 2px");
                $("#button1").css("border", "none");
            });
        });

    </script>
</body>

</html>
