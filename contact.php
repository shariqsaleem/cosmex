<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmex</title>
    <?php require_once "linkcss.php" ?>
    <?php require_once "connection.php" ?>
</head>
<body>
    
<?php require_once "header.php" ?>

<div class="container-xxl">
    <div class="row">
        <div class="col-lg-12">
            <div class="cosmetic-hero">
                <h1 class="cosm-heading1">Contact Us</h1>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-box">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Feel Free to Write us Anytime</h4>
                    </div>
                </div>
                <form method="post" class="contact-form">
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <input class="custom-form" name="full_name" type="text" placeholder="Enter your name" required>
                        </div>
                        <div class="col-sm-6">
                            <input class="custom-form" name="email" type="email" placeholder="Enter your email" required>
                        </div>
                        <div class="col-sm-6">
                            <input class="custom-form" name="phone_number" type="number" placeholder="Your Phone Number" required>
                        </div>
                        <div class="col-sm-6">
                            <input class="custom-form" name="subject" type="text" placeholder="Select subject">
                        </div>
                        <div class="col-sm-12">
                            <textarea class="custom-form-textarea" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your message..." name="message"></textarea>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button type="submit" name="user-btn" class="send-btn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
        if(isset($_POST["user-btn"])){
$full_name = $_POST["full_name"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$query = "INSERT INTO contact_tb( full_name,email, phone_number, subject, message) VALUES('".$full_name."','".$email."','".$phone_number."','".$subject."' ,'".$message."') ";

$ins  = mysqli_query($con,$query);
if($ins){
    echo "Feedback Sent";
}
else {
    echo "ERROR";
}
}
?>

<?php require_once "footer.php" ?> 

<?php require_once "linkjs.php" ?>
</body>
</html>
