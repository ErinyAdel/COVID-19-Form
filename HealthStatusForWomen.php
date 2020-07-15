<!DOCTYPE html>
<html>
    <head>
        <title>COVID-19</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" sizes="16x16" href="https://ssl.gstatic.com/docs/spreadsheets/forms/favicon_qp2.png">
    </head>
    <body>         
        <link href="CSS/style.css" rel="stylesheet">
        <div class="big-div">
            <label class="label-title" >COVID-19</label>
            <label class="label-discreption2">*Required</label>                                       
        </div>
        <div class="big-div">
            <label class="label-discreption1">Health status of women</label>
            <label class="label-discreption1">How do we help each other?</label>                                       
        </div>
        <form action="../Controller/WomenHealthController.php" method="POST" style="display: inline;">
            <div class="small-div">
                <label>How many times have you been pregnant ? <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" class="pregnant-input" type="text" name="times" placeholder="Your answer">
                <label class="age-error-label"></label>
            </div>
            <div class="small-div">
                <label>Are you pregnant? <span style="color: #d93025; font-size: 15px;">*</span></label>
                <div>
                    <input type="radio" id="yes" name="pregnant" value="Yes" style=" margin-left: 20px; margin-top: 25px;">
                    <label style="display: inline;">Yes</label><br>
                    <input type="radio" id="no" name="pregnant" value="No" style=" margin-left: 20px; margin-top: 15px;">
                    <label style="display: inline;">No</label>
                </div> 
                <label class="arepregnant-error-label"></label>
            </div>       
            <input class="button" type="submit" name="next" value="Next">
        </form>
    </body>
    
    <input class="button" type="button" value="Back" onclick="goBack()" style="display: inline; margin-left: -200px;">
    <script>
    function goBack() {
      window.history.back();
    }
    </script>
</html>    