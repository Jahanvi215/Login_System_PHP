<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<body>
    <div class="nav">
        <div class="logo"><a href="http://www.weknowtech.in">
            <p ><img src="https://images.thecompanycheck.com/companylogo/WEKNOW_TECHNOLOGIES_PRIVATE_LIMITED_480416.webp" alt=""></p></a>

        </div>
        <div class="left">
            <p><a href="#">Home</a></p>
            <p><a href="#">Blogs</a></p>
            <p><a href="#">About</a></p>
            <p><a href="#">Contact Us</a></p>
        </div>

        <div class="right-links">
              <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Email = $result['Email'];
                $res_Age = $result['Age'];
                $res_id = $result['Id'];
            }
            
            echo "<a href='edit.php?Id=$res_id'><i class='bx bxs-user-circle' style = 'font-size:30px ; margin-top:15px; color:rgba(22, 121, 171, 0.808)'></i><a href='edit.php?Id=$res_id'>$res_Uname</a>";
            ?>


            <a href="php/logout.php" style='text-decoration: none;'> <button class="btn">Log Out</button> </a>

        </div>
    </div>
    <main>

       <div class="main-box top">
          <div class="top">
          
                <h1>WEKNOW TECHNOLOGIES PRIVATE LIMITED</h1>
            </div>
            <div class="middle">
                <img src="home.jpeg" alt="">
                <p>Weknow Technologies is a premium Software Development Company, focused on delivering customized software according to specific requirements of every industry and developing new products. We are full of passionate developers who love their craft. We have developed customized softwares for many business organizations in many different Industries. Weknow Technologies offers a wide spectrum of services including Website Design, Software Development, Search Engine Optimization  
            .</p>
            
                </div>
         
          <div class="bottom">
           
               <h1>Contact Us</h1>
               <div class="website">
               <p>Website</p>
                <span><a href="http://www.weknowtech.in" style="text-decoration: none; color: rgb(62, 61, 61);;">http://www.weknowtech.in</a>  </span>
            </div>
            <div class="phone">
                <p>Phone</p>
                <span>9554969777</span>
            </div>
            <div class="services">
                <p>Industry</p>
                <span>IT Services and IT Consulting</span>
            </div>
            <div class="location">
                <p>Headquarters</p>
               <span>Lucknow, Uttar Pradesh</p></span>
            </div>

               
           
          </div>
       </div>

    </main>
</body>
</html>