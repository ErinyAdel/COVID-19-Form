<?php
include_once '../Model/DatabaseConnection.php';   

if(isset($_POST['next']))
{
    if(!(empty($_POST['times']) && empty($_POST['pregnant']))) 
    {
        session_start();
        $conn = new DatabaseConnection();
        if($conn) 
        {
            $query = "UPDATE `persons` SET `TimesOfPregnant`= (?) WHERE `Email`= (?);";
            $prepared_statement = mysqli_prepare($conn->conn, $query);
            mysqli_stmt_bind_param($prepared_statement, "is", $_POST['times'], $_SESSION['email']);
            if (mysqli_stmt_execute($prepared_statement)) {
                header("location:../View/HealthStatus.php");
            }
        }
    }
    else {
        echo "<script> alert('Please fill all data'); window.location.href='HealthController.php';</script>";
    }
}
     