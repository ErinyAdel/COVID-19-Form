<?php
include_once '../Model/DatabaseConnection.php';   

if(isset($_POST['submit']))
{
    if(!(empty($_POST['infection-date'])&&empty($_POST['recovery-date'])&&empty($_POST['first-pcr-date'])))
    {
        session_start();
        $conn = new DatabaseConnection();
        if($conn) 
        {
            $query = "UPDATE `persons` SET `DateOfInfection`= (?), `DateOfRecovery`= (?), `DateOfFirstPCR`= (?), "
                   . "`DateOfSecondPCR`= (?) WHERE `Email`= (?)";
            $prepared_statement = mysqli_prepare($conn->conn,$query);
            mysqli_stmt_bind_param($prepared_statement, "sssss", $_POST['infection-date'], $_POST['recovery-date']
                    , $_POST['first-pcr-date'], $_POST['second-pcr-date']
                    , $_SESSION['email']);
            if (mysqli_stmt_execute($prepared_statement)) {
                header("location:../View/Message.php");
            }
        }
    }
    else {
        echo "<script> alert('Please fill all data'); window.location.href='DonationController.php';</script>";
    }
}