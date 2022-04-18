<?php
      
        $p_name = $_POST['p_name'];
        $p_email = $_POST['p_email'];
        $p_amount = $_POST['p_amount'];
        $p_mode = $_POST['p_mode'];
       
       

        // Create Connection
          $conn = new mysqli('localhost','root','','fit_gym', 3307);
          if($conn->connect_error) {
            die("connection failed");
           }
            else{
              $stmt = $conn->prepare("insert into payment_tb(p_name, p_email, p_amount, p_mode ) VALUES ( ?, ?, ?, ? )");
               $stmt->bind_param("ssss", $p_name, $p_email, $p_amount, $p_mode);
               $stmt->execute();
               echo "Payment is Done";
               $stmt->close();
               $conn->close();
            }
?>