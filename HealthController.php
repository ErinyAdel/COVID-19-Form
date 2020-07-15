<?php
include_once '../Model/DatabaseConnection.php';   

if(isset($_POST['next']))
{
    if(!empty($_POST['recovered'])) 
    {
        session_start();
        $isRecovered = $_POST['recovered'];
        $conn = new DatabaseConnection();
        if($conn) 
        {
            $query = "UPDATE `persons` SET `IsRecovered`= (?) WHERE `Email`= (?);";
            $prepared_statement = mysqli_prepare($conn->conn, $query);
            mysqli_stmt_bind_param($prepared_statement, "ss", $_POST['recovered'], $_SESSION['email']);
            if (mysqli_stmt_execute($prepared_statement))
            {
                echo "<script> alert('isRec:  '".$isRecovered."' '); window.location.href='HealthController.php';</script>";
                if($isRecovered === "Yes" || $isRecovered === "yes") {
                    header("location:../View/BloodDonation.php");
                } 
                else {
                    header("location:../View/Message.php");
                }
            }
            else {
                echo "<script> alert('ERROR'); window.location.href='HealthController.php';</script>";
            }
        }
    }
    else {
        echo "<script> alert('Please fill all data'); window.location.href='HealthController.php';</script>";
    }
}
/*else if(isset ($_POST['back'])) {
    echo '<script>
            function goBack() {
              window.history.back();
            }
         </script>';
}*/