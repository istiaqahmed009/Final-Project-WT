<!DOCTYPE html> 
<html> 
    <head>
        <meta name="viewport" content="width=devicewidth, initial-scale = 1.0">
        <title> LOGIN </title>
        <link rel="stylesheet" href="view/styles.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        <style>
            *{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                box-sizing: border-box;
            }

            h1{
            position: absolute;
            top: 40%;
            left: 40%;
            font-size: 50px;
            color: white;
            }

            .box{
            width: 500px;
            height: 50px;
            background-color: white;
            border-radius: 30px;
            position: absolute;
            top: 35%;
            left: 37%;
            display: flex;
            align-items: center;
            padding: 20px;
            }

            .box > i {
            font-size: 20px;
            color: #777;
            }

            .box > input{
            flex: 1;
            height: 40px;
            border: none;
            outline: none;
            font-size: 18px;
            padding-left: 10px;
            }
        </style>

    </head>

    <body>

        <div class="main"> 
            <?php 
		        include 'view/Header Profile.php';
            ?>
                <div class="new"> 
                    <nav>
                        <ul>
                            <li> <a href="Profile.php"> My Profile </a></li>
                        </ul>
                    </nav>             
                </div>

                <h2 align="center"> Welcome to your Dashboard! </h2>     

                <h1>Search Courses</h1>

                <div class="box">

	                <i class="fa fa-search" aria-hidden="true"></i>

	                    <input type="text" name="searchtxt">

                </div>   

        </div>   

    </body>

</html>