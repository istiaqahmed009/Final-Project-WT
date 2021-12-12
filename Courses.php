<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="view/styles.css">

</head>
<body>
    
        <?php 
		    include 'view/Header.php';
        ?>

<div class="container">

    <div class="price-toggler">
        <span class="month active">Monthly Packages</span>
        <span class="year">Full Packages</span>
    </div>

    <div class="box-container">

        <div class="box">
            <h3>Web Development</h3>
            <div class="price month"><span>৳</span>5000.<span>00</span></div>
            <div class="price year"><span>৳</span>25000.<span>00</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> HTML </p>
                <p> <i class="fas fa-check"></i> CSS </p>
                <p> <i class="fas fa-check"></i> PHP </p>
                <p> <i class="fas fa-check"></i> Javascript </p>
                <p> <i class="fas fa-check"></i> Laravel - Framework </p>
                <p> <i class="fas fa-check"></i> Course Duration: 6 Months </p>
            </div>
            <a href="#" class="btn">Enroll Now</a>
        </div>

        <div class="box">
            <h3>Digital Marketing</h3>
            <div class="price month"><span>৳</span>6000.<span>00</span></div>
            <div class="price year"><span>৳</span>14000.<span>00</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> Search Engine Optimization </p>
                <p> <i class="fas fa-check"></i> Search Engine Marketing </p>
                <p> <i class="fas fa-check"></i> Social Media Marketing </p>
                <p> <i class="fas fa-check"></i> Content Marketing </p>
                <p> <i class="fas fa-check"></i> Web Analytics </p>
                <p> <i class="fas fa-check"></i> Course Duration: 3 Months </p>
            </div>
            <a href="#" class="btn">Enroll Now</a>
        </div>

        <div class="box">
            <h3>Graphics Design</h3>
            <div class="price month"><span>৳</span>5000.<span>00</span></div>
            <div class="price year"><span>৳</span>16000.<span>00</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> Adobe Illustrator </p>
                <p> <i class="fas fa-check"></i> Adobe Photoshop </p>
                <p> <i class="fas fa-check"></i> Adobe After Effects </p>
                <p> <i class="fas fa-check"></i> Adobe Premiere Pro </p>
                <p> <i class="fas fa-check"></i> Adobe XD </p>
                <p> <i class="fas fa-check"></i> Course Duration: 4 Months </p>
            </div>
            <a href="#" class="btn">Enroll Now</a>
        </div>

        <div class="box">
            <h3>English Learning </h3>
            <div class="price month"><span>৳</span>5000.<span>00</span></div>
            <div class="price year"><span>৳</span>5000.<span>00</span></div>
            <div class="list">
                <p> <i class="fas fa-check"></i> Basic Grammars </p>
                <p> <i class="fas fa-check"></i> Basic Writing Skills </p>
                <p> <i class="fas fa-check"></i> Basic Conversation Skills </p>
                <p> <i class="fas fa-check"></i> Crash Course </p>
                <p> <i class="fas fa-check"></i> Course Duration: 30 Days </p>
            </div>
            <a href="#" class="btn">Enroll Now</a>
        </div>

    </div>

</div>

<script>

let month = document.querySelector('.price-toggler .month');
let year = document.querySelector('.price-toggler .year');
let monthAmount = document.querySelectorAll('.box-container .box .month');
let yearAmount = document.querySelectorAll('.box-container .box .year');

year.onclick = () =>{
    year.classList.add('active');
    month.classList.remove('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'none' });
    yearAmount.forEach(yr =>{ yr.style.display = 'block' });
};

month.onclick = () =>{
    year.classList.remove('active');
    month.classList.add('active');

    monthAmount.forEach(mo =>{ mo.style.display = 'block' });
    yearAmount.forEach(yr =>{ yr.style.display = 'none' });
};

</script>

    <?php 
		    include 'view/footer.php';
    ?>
    
</body>
</html>