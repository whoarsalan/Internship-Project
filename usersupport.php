<?php
error_reporting(0);
$submit=false;
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $phone_no=$_POST['phone_no'];
    $subject=$_POST['sub'];
    $msg=$_POST['msg'];
    $conn = mysqli_connect("localhost","root","","college") or die("Connection Failed");
    $sql ="INSERT INTO contact (fname,lname,email,phone_no,sub,msg,dt)  VALUES('{$fname}',
    '{$lname}', '{$email}', '{$phone_no}','{$subject}','{$msg}', current_timestamp());";
    $result=mysqli_query($conn,$sql) or die("Query Unsuccessfully");
    if($conn->query($sql)==true)
    {
        // echo "Successfully inserted";
        $submit=true;
    }
    mysqli_close($conn);
    ?>
    <?php
    if($submit==true){
        include_once('header.php');
        
        echo "<!DOCTYPE html>
        <html>
        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        
            <title>Submit Confirmation</title>
        
            <link rel='icon' href='favicon.ico' type='image/png' />
            <link href='https://fonts.googleapis.com/css?family=Reem+Kufi|Roboto:300' rel='stylesheet'>
            <link href='https://use.fontawesome.com/releases/v5.13.1/css/all.css' rel='stylesheet'>
        </head>
        <body>
        <style>
        /* Typography */

html {
	font-family: 'Roboto', sans-serif;
}

@media (min-width: 576px) {
	html {
		font-size: 14px;
	}
}

@media (min-width: 768px) {
	html {
		font-size: 16px;
	}
}

@media (min-width: 992px) {
	html {
		font-size: 18px;
	}
}

@media (min-width: 1200px) {
	html {
		font-size: 20px;
	}
}

.icons-social i {
	font-size: 3em;
}

/* Custom Styles */

main {
	display: flex;
	flex-direction: column;
	min-height: 50vh;
	justify-content: center;
	padding: 0 30px;
	text-align: center;
}

main > .intro {
	font-family: 'Reem Kufi', sans-serif;
	font-size: 3.75em;
	font-weight: 600;
}

main > .tagline {
	font-size: 1.5rem;
	margin: 1.5rem 0;
	font-weight: 100;
}

.icons-social i {
	padding: 10px;
}

.devto {
	margin-bottom: -0.20rem;
}


</style>
            <main>
                <div class='intro text-success'>Thanks for contacting Us</div>
                <div class='tagline'>Click on the below links to reach us </div>
                <div class='icons-social'>
                    <a target='_blank' href='https://wa.me/918171121754'><i class='fab fa-whatsapp'></i></a>
                    <a target='_blank' href='https://www.instagram.com/whoarsalan/'><i class='fab fa-instagram'></i></a>
                    <a target='_blank' href='https://mobile.twitter.com/whoarsal'><i class='fab fa-twitter'></i></a>
                    <a target='_blank' href='https://in.linkedin.com/in/arsalan-ahmad-9037b7230?trk=public_profile_browsemap'><i class='fab fa-linkedin'></i></a>
            </div>
            </main>
        </body>
        </html>";
         echo "<p class='submitMsg'>Thanks for submitting your form</p>";
    }
?>
    </div>
   
