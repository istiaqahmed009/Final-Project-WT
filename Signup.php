<?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["name"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }
      else if(empty($_POST["email"]))  
      {  
           $error = "<label class='text-danger'>Enter an e-mail</label>";  
      }  
      else if(empty($_POST["username"]))  
      {  
           $error = "<label class='text-danger'>Enter a username</label>";  
      }  
      else if(empty($_POST["password"]))  
      {  
           $error = "<label class='text-danger'>Enter a password</label>";  
      }
      else if(empty($_POST["cpassword"]))  
      {  
           $error = "<label class='text-danger'>Confirm password field cannot be empty</label>";  
      } 
      else if(empty($_POST["gender"]))  
      {  
           $error = "<label class='text-danger'>Gender cannot be empty</label>";  
      } 
       
      else  
      {  
           if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'               =>     $_POST['name'],  
                     'e-mail'          =>     $_POST["email"],  
                     'username'     =>     $_POST["username"],  
                     'password'     =>     $_POST["password"],  
                     'cpassword'     =>     $_POST["cpassword"],  
                     'gender'     =>     $_POST["gender"],  
                     'dob'     =>     $_POST["dob"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Submitted Successfully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           
               <meta name="viewport" content="width=devicewidth, initial-scale = 1.0">
               <title> Sing Up Form </title>
               <link rel="stylesheet" href="view/styles.css"> 

          </head>  
      <body>  

               <?php 
		        include 'view/Header.php';
	          ?>

           <div class="main">
           <div class="login-form">  

                <form method="post">  

                <h3 align="center">Sign UP Form</h3>

                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  

                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "username" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "password" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "cpassword" class="form-control" /><br />

                    <fieldset>
                    <legend style="color:White;">Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>

                     <legend style="color:White;">Date of Birth:</legend>
                     <input style="color:Black; font-size: 20px"type="date" name="dob"> <br><br>
                    </fieldset> 
                     
                     <input type="submit" name="submit" value="Submit" class="btn btn-info" style="font-size: 20px; color: Black" /><br />    
                                       
                     <?php  

                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
                     
                </form>  
           </div>  
        </div>
           <br />  
      </body>  
 </html>  