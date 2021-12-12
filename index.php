<!DOCTYPE html> 
<html> 
    <head>
        <meta name="viewport" content="width=devicewidth, initial-scale = 1.0">
        <title> WELCOME </title>
        <link rel="stylesheet" href="view/styles.css">
        <link rel="stylesheet" href="fonts/font-awesome.css">
        <link rel="stylesheet" href="fonts/google-fonts.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">            
    </head>

    <body>
    
        <div class="main"> 
        
        <?php 
		    include 'view/Header.php';
        ?>


            <div class="lamp-container">
                <img src="images/lamp.png" class="lamp">
                <img src="images/light.png" class ="light"> 
            </div>

            <div class="text-container"> 
                <h1> Internet <br> School for All </h1>
                    
                    <p> </br> 
                        i-school is a online homeschooling solution. We beleive in creating a safe and transparent education system for our kids.
                    
                    </br> 
                    
                    </br> * We offer transparent and flexible programs for kids.
                    
                    </br> * We provide safe, effective and engaging learning environment for kids. 
                    
                    </p>
                    
                    <a href="login.php"><b>Student</b></a>
                    
                    <a href="login.php"><b>Course Coordinator</b></a> 

                    </br> 
                    <a href="login.php"><b>Administrator</b></a> 

            </div>   
            
            </div> 
            
<section id="course">

<h1 class="heading">Our Latest Programs</h1>

<div class="box-container">

  <div class="box">
    <img src="images/englishlearning.png">
    <p>English Learnings</p>
  </div>

  <div class="box">
    <img src="images/admissiontest.png">
    <p>Admission Test</p>
  </div>

  <div class="box">
    <img src="images/skilldevelopment.png">
    <p>Skill Development </p>
  </div>

  <div class="box">
    <img src="images/digitalmarketing.png">
    <p>Digital Marketing</p>
  </div>

</div>

</section>

<section id="service">

<h1 class="heading">What We Offer?</h1>

<div class="box-container">

  <div class="box" data-aos="flip-up">
    <div class="info">
      <h2>Skilled teachers</h2>
      <p>Most of our Course co-ordinators are highly qualified.</p>
    </div>
  </div>

  <div class="box" data-aos="flip-down">
    <div class="info">
      <h2>24x7 Hours Service</h2>
      <p>24x7 Online Support form Adminstration.</p>
    </div>
  </div>

  <div class="box" data-aos="flip-up">
    <div class="info">
      <h2>Certificate Distribution</h2>
      <p>Authentic Certificate Distribution.</p>
    </div>
  </div>

</div>

</section>            
        

        <?php 
            include 'view/Footer.php';
	    ?>
         
        </div>

    </body>

</html>