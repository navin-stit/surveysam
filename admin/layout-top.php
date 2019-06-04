<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Usa Surveyz</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.ico">
<!-- Stylesheets -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<script>
        function Usasurvey(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#usasurvey').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
        function Usasurveyimage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#usaimgpopular').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        
</script>
</head>
<body>
<!-- Header -->
 
<div class="top-header">
	<span><a href="#"><img src="../images/logo.png" class="img-responsive"></a></span>
    <!-- <span>amazon</span>
	<br>Shopper Survey ✓ -->
    <p style="margin: 0 0 2px;
    font-size: 15px;
    color: #004B8D">
	Share your opinion and get access to amazing deals!
	</p>
</div>