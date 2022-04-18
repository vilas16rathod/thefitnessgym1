<?php
include('db_connect.php');
session_start();
if($_SESSION['is_login']){
$m_email = $_SESSION['m_email'];
}else{

  echo "<script>location.href='login.html'</script>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

 <link rel="stylesheet" href="css/bootstrap.min.css">

 
 <link rel="stylesheet" href="css/all.min.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <link rel="stylesheet" href="css/aos.css">
 <link rel="stylesheet" href="css/custom.css">

<title>fitness gym </title>    
</head>
<body>

<nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="userprofile.php">fitness gym</a></nav>


<div class="container-fluid" style="margin-top:40px;">
<div class="row">
<nav class="col-sm-2 bg-light sidebar py-5" > <!--start sidebar 1 column-->

<div class=sidebar-sticky>
<ul class="nav flex-column">
<li class="nav-item"><a class="nav-link" href="userprofile1.php">profile</a></li>
<li class="nav-item"><a class="nav-link" href="cpass1.php">change password</a></li>
<li class="nav-item"><a class="nav-link" href="payment.php">Payment</a></li>
<li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>logout</a></li>

</ul>
</div>
</nav><!--end sidebar 1 st column-->
<div class="col-sm-6 mt-5"><!--start profile area 2nd column-->
<form action="connect3.php" method="POST" >
    <div class="form-group">
                <label>Name</label>
                <input type="text" name="p_name" class="form-control" autocomplete="off" required><br> 

                <label>Email</label>
                <input type="email" name="p_email" class="form-control" autocomplete="off" required><br>
    
				<div>
                <label class="form-group">  Package-Amount</label>
                <select name="p_amount">
                <option value="">  --Select-- </option>
                <option value="yoga-500">  Yoga/500 </option>
                <option value="gym-700">  Gym/700 </option>
                <option value="cardio-800">  Cardio/800 </option>
                </select><br> <br>
        </div>
         <div>
                <label>Payment Mode</label>
                <select name="p_mode">
                <option value=""> --Select-- </option>
                <option value="credit card"> Credit card </option>
                <option value="debit card"> Debit card </option>
                <option value="netbanking"> Netbanking </option>
                </select><br> <br>
        </div>

               <button type="submit" class="btn btn-danger" name="p_submit">Submit</button>
    <?php if(isset($passmsg)) {echo $passmsg; } ?>
    </form>

</div><!--end profile area 2nd column-->

</div>
</div>
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/all.min.js"></script>



</body>
</html>    

     
    
    

