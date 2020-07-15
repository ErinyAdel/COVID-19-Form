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
            <label class="label-discreption1">Blood donation</label>
            <label class="label-discreption1">How do we help each other?</label>                                       
        </div>
        <form action="../Controller/DonationController.php" method="POST" style="display: inline">
            <div class="small-div">
                <label>Date of the infection <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" type="date" name="infection-date" style="width: 150px;">
                <label class="arepregnant-error-label"></label>
            </div>
            <div class="small-div">
                <label>Date of the recovery <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" type="date" name="recovery-date" style="width: 150px;">
                <label class="arepregnant-error-label"></label>
            </div>
            <div class="small-div">
                <label>Date of the first PCR <span style="color: #d93025; font-size: 15px;">*</span></label>
                <input class="input" type="date" name="first-pcr-date" style="width: 150px;">
                <label class="arepregnant-error-label"></label>
            </div>
            <div class="small-div">
                <label>Date of the second PCR</label>
                <input class="input" type="date" name="second-pcr-date" style="width: 150px;">
                <label class="arepregnant-error-label"></label>
            </div>         
            <input class="button" type="submit" name="submit" value="Submit" style="background-color: #243876; color: #fff;">
        </form>
        
        <input class="button" type="button" value="Back" onclick="goBack()" style="display: inline; margin-left: -200px;">
        <script>
        function goBack() {
          window.history.back();
        }
        </script>
    </body>
</html>    
