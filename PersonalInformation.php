<?php
include_once '../Model/DatabaseConnection.php';   

if(isset($_POST['next']))
{
    if(!(empty($_POST['email'])&&empty($_POST['fname'])&&empty($_POST['lname'])&&empty($_POST['age'])
      &&empty($_POST['phone'])&&empty($_POST['gender']))) 
    {
        session_start(); 
        $_SESSION['email'] = $_POST['email'];
        
        $fname  = $_POST['fname'];
        $lname  = $_POST['lname'];
        $email  = $_POST['email'];
        $gender = $_POST['gender'];
        $phone  = $_POST['phone'];
        $age    = $_POST['age'];
        
        
        $conn = new DatabaseConnection();
        if($conn) 
        {
            $query = "Select * From persons WHERE `Email` = '" . $_SESSION['email'] . "'";
            $check = $conn->conn->query($query);
            if ($check->num_rows > 0) 
            {
                $query = "UPDATE`persons` SET `FirstName`= (?), `LastName`= (?), `Email`=(?), `PhoneNumber`=(?),"
                        ."`Age`= (?),`Gender`=(?) WHERE `Email`= (?);";
                $prepared_statement = mysqli_prepare($conn->conn, $query);
                mysqli_stmt_bind_param($prepared_statement, "ssssiss", $_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['phone']
                                       ,$_POST['age'],$_POST['gender'],$_SESSION['email']);
                if (mysqli_stmt_execute($prepared_statement)) 
                {
                    if ($gender == "Female") { 
                        header("location:../View/HealthStatusForWomen.php");
                    }
                    else {
                        header("location:../View/HealthStatus.php");
                    }    
                }
            }
            else 
            {
                $query = "INSERT INTO `persons` (`FirstName`, `LastName`, `Email`, `PhoneNumber`,`Age`,`Gender`) "
                        ."VALUES (?,?,?,?,?,?);";
                $prepared_statement = mysqli_prepare($conn->conn, $query);
                mysqli_stmt_bind_param($prepared_statement, "ssssis", $_POST['fname'],$_POST['lname'],$_POST['email'],$_POST['phone']
                                       ,$_POST['age'],$gender);
                if (mysqli_stmt_execute($prepared_statement)) 
                {
                    if ($gender == "Female") { 
                        header("location:../View/HealthStatusForWomen.php");
                    }
                    else {
                        header("location:../View/HealthStatus.php");
                    }    
                }
            }
        }
    }
    else {
        echo "<script> alert('Please fill all data'); window.location.href='../index.php';</script>";
    }
}