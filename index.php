<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blood Help Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link  href="script.js">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div id="whatsapp_float">
           <a href="https://wa.me/+919772631782?text=I want to Donate Blood / I need Blood." target="_blank">
           <img src="img/whatsapp.webp" width="100px" class="whatsapp_float_btn"/></a> 
        </div>
<body>

<header>
  
</header>

   <section id="header">
        <a href="index2.html"><img src="img/logo.png" class="logo" style="padding-left: 10px; padding-top: 10px; height: 90px; width: 120px;" alt=""></a> 
        <div>

            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a  onclick="scrollToDonor()">Become a Donor</a></li>
                <li><a onclick="scrollToRequest()">Blood Request</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="contact.html">Contact us</a></li>
                <li id="lg-bag"> <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
            </ul>
        </div>
        <div id="mobile">   
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
        </section>

        
        
        <section id="hero">
            <h1>BLOOD HELP CARE</h1>
            <h4>Donate Blood Save Lives</h4>
            <p>24/7 Blood Availability • Safe • Secure</p>
             <button onclick="scrollToDonor()">Register as Donor</button>
             <button onclick="scrollToRequest()">Blood Request</button>
        </section>
<section>
    
</section>


<section id="work">
    <img src="img/work1.jpg" class="work_img1" >
    <section class="work_content">
    <h2>HOW IT WORKS?</h2>
    <div class="row">
        <div class="work-col">
            <h3>Step 1 : Request Blood / Become a donor</h3>
            <p>Sign up to to find blood or become a donor.</p>
        </div>
        <div class="work-col">
            <h3>Step 2 : Fill Details</h3>
            <p>Fill your details in the blood request form.</p>
        </div>
        <div class="work-col">
            <h3>Step 3 : Get Support</h3>
            <p>Our team will connect with you and provide you assistance</p>
                <p>regarding nearest blood bank or upcoming blood camp.</p>
             
        </div>
    </div>
    </section>
    <img src="img/work2.png" class="work_img2" >
</section>


<section class="donor">
<div id="donor1">
    <h2>Become a Blood Donor</h2>
    <div class="donor_form1">
    <form method="POST" action="">
        <div class="input_name">
            <i class="fa fa-user lock"></i>
      <input type="text" placeholder="First Name" name="first_name" class="name" required>
      <span>
        <i class="fa fa-user lock"></i>
      <input type="text" placeholder="Last Name (Optional)" name="last_name" class="name" >
      </span>
      </div>
      <div class="input_name">
        <i class="fa fa-male lock"></i>
      <input type="number" placeholder="Age" name="age" required class="text_name">
      </div>
        <div class="input_name">
        <i class="fa fa-tint lock"></i>
        <select required name="blood_group" class="text_name">
            <option value="">Select Blood Group</option>
            <option>A+</option><option>A-</option>
            <option>B+</option><option>B-</option>
            <option>O+</option><option>O-</option>
            <option>AB+</option><option>AB-</option> <option>Not Specified</option>
        </select>
        <div class="arrow"></div>
        </div>
          <div class="input_name">
        <i class="fa fa-map-marker lock"></i>
     <input type="text" placeholder="City" name="address" required class="text_name">
        </div>
          <div class="input_name">
        <i class="fa fa-phone lock"></i>
        <input type="tel" placeholder="Mobile Number" name="mobile" required class="text_name">
        </div>
           <div class="input_name">
        <i class="fa fa-envelope lock"></i>
       <input type="email" placeholder="Email Address (Optional)" name="email" class="text_name">
        </div>
        <input type="submit" name="submit" value="Submit" class="button">
    </form>
    </div>
</div>
  <?php 
        $con = mysqli_connect("localhost","root","","blood");

        if(isset($_POST['submit'])){
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $age = $_POST['age'];
            $blood_group = $_POST['blood_group'];
            $address = $_POST['address'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];

            $sql = "INSERT INTO becomedonor (first_name, last_name, age, blood_group, address, mobile, mail) VALUES ('$first_name', '$last_name', '$age', '$blood_group', '$address', '$mobile', '$email')";
            
            if(mysqli_query($con, $sql)){
                echo "<p style='color:green; display: block; text-align: center; font-size: 30px;'>You have successfully registered as a blood donor! Our team will contact you soon.</p>";
            } else {
                echo "<p style='color:red; display: block; text-align: center; font-size: 30px;'>Error! Contact Our Support.</p>";
            }
        }
   ?> 



  <div id="donor2">
    <h2>Raise a Blood Request</h2>
    <div class="donor_form1">
    <form method="POST" action="">
        <div class="input_name">
            <i class="fa fa-user lock"></i>
      <input type="text" placeholder="First Name" name="first_name" class="name" required>
      <span>
        <i class="fa fa-user lock"></i>
      <input type="text" placeholder="Last Name (Optional)" name="last_name" class="name" required>
      </span>
      </div>
      <div class="input_name">
        <i class="fa fa-phone lock"></i>
        <input type="tel" placeholder="Mobile Number" name="mobile" required class="text_name">
        </div>
         <div class="input_name">
        <i class="fa fa-envelope lock"></i>
       <input type="email" placeholder="Email Address (Optional)" name="email" required class="text_name">
        </div>
        <div class="input_name">
        <i class="fa fa-tint lock"></i>
        <select required name="blood_group" class="text_name" required>
            <option value="">Select Blood Group</option>
            <option>A+</option><option>A-</option>
            <option>B+</option><option>B-</option>
            <option>O+</option><option>O-</option>
            <option>AB+</option><option>AB-</option>
        </select>
        <div class="arrow"></div>
        </div>
        
        <input type="submit" name="submit" value="Submit" class="button">
    </form>
    </div>
    </div>
</section>

  

    <p id="successMsg"></p>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <p><strong>Address:</strong> Jaipur, Rajasthan, India</p>
    <p><strong>Phone:</strong> +91 9XXXXXXXXX</p>
    <p><strong>Email:</strong> info@lifelineblood.com</p>
</section>

<footer>
    <p>© 2026 LifeLine Blood Bank | All Rights Reserved</p>
</footer>

<script src="script.js"></script>
</body>
</html>
