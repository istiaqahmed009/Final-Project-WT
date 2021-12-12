<!DOCTYPE html> 
<html> 
    <head>
        <meta name="viewport" content="width=devicewidth, initial-scale = 1.0">
        <title> LOGIN </title>
        <link rel="stylesheet" href="view/styles.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>

    <body>  
            <?php 
		        include 'view/Header.php';

                $passwordErr = $usernameErr= $message = ''; 
                $username = $password = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["username"])) {
                        $usernameErr = "Username is required";
                    } else {
                    $username = test_input($_POST["username"]);
                    }

                    if (empty($_POST["password"])) {
                        $passwordErr = "Password is required";
                    } else {
                    $password = test_input($_POST["password"]);
                    }
                    }

                        function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                        } 
	        ?>

        <div class="main"> 
      
            <div class="login-form" > 

                <h1 style="font-size: 25px"> LOGIN </h1> 
                
                    <form action="#" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                    <p style="font-size: 20px"> User Name </p> 
                    <input style="font-size: 20px" type="text" name="username" placeholder="username"  value="<?php echo $username;?>">
                    <span style="font-size: 20px; color: Red;" class="error"> <?php echo $usernameErr;?></span>
                
                    <p style="font-size: 20px"> Password </p> 
                    <input style="font-size: 20px" type="password" name="password" placeholder="password">
                    <span style="font-size: 20px; color: Red" class="error"> <?php echo $passwordErr;?></span>
                </br> 
                    <button style="font-size: 20px" type="submit" name="submit" value = "login" >Login</button> 
                
                    </form> 

            </div>

        </div>

            <?php 

                 $username = "admin"; 
                 $password = "123456";

                    if(isset($_POST['username'])){
                        if($_POST['username']==$username && $_POST['password']==$password){
                            header("location:Dashboard.php");
                        }
                        else{
                            $message = "Username and Password did not Match!";
                        }
                    }
              


/*
              if(isset($_POST['submit'])) {
                    $data = file_get_contents("data.json");  
                    $data = json_decode($data, true);  
                    foreach($data as $row)  
                        {  
                            if ($row["username"] == $username && $row["password"] == $password)
                            { 
                                header("Location: Dashboard.php");
                            }
                        } 
                    }
*/           

                  include 'view/Footer.php';
	        ?>

    </body>

</html>