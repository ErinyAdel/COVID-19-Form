<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" sizes="16x16" href="https://ssl.gstatic.com/docs/spreadsheets/forms/favicon_qp2.png">
    </head>
    <body>         
        <link href="View/CSS/style.css" rel="stylesheet">
        <div class="big-div">
            <label class="label-title" >COVID-19</label>
            <label class="label-discreption1">Personal information</label>
            <label class="label-discreption2">*Required</label>                                       
        </div>
        <form action="Controller/PersonalInformation.php" method="POST">
            <div class="small-div">
                <label>Email Address <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" type="text" name="email" placeholder="Your email address">
                <!--?php session_start(); $_SESSION['email'] = $_POST['email']; ?-->
                <label class="email-error-label"></label>
            </div>
            <div class="small-div">
                <label>First Name <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" type="text" name="fname" placeholder="First name">
                <label class="fname-error-label"></label>
            </div>
            <div class="small-div">
                <label>Last Name <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" type="text" name="lname" placeholder="Last name">
                <label class="lname-error-label"></label>
            </div>
            <div class="small-div">
                <label>Age <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" class="age-input" type="text" name="age" placeholder="Your age" style="width: 100px;">
                <label class="age-error-label"></label>
            </div>
            <div class="small-div">
                <label>Phone Number <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" type="text" name="phone" placeholder="Your phone number">
                <label class="phone-error-label"></label>
            </div>
            
            <div class="small-div">
                <label>Gender <span style="color: #d93025; font-size: 15px;">*</span></label>
                <div>
                    <input type="radio" name="gender" value="Female" style=" margin-left: 20px; margin-top: 25px; #0d0382">
                    <label style="display: inline;">Female</label><br>
                    <input type="radio" name="gender" value="Male" style=" margin-left: 20px; margin-top: 15px;">
                    <label style="display: inline;">Male</label> 
                </div>  
                <label class="phone-error-label"></label>
            </div>
            <input class="button" type="submit" name="next" value="Next" method style="margin-left: 345px;">
        </form>        
    </body>
</html>
