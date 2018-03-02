<?php
if(isset($_POST['submit']) && !empty($_POST['submit'])):
            
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LebukgUAAAAAJf4ZIoMozvNMuX7Snv-Vxg8Y6ad';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success):
            //contact form submission code
           $name = !empty($_POST['name'])?$_POST['name']:'';
           $mobileno = !empty($_POST['mobileno'])?$_POST['mobileno']:'';
           $email = !empty($_POST['email'])?$_POST['email']:'';
          $subject = !empty($_POST['subject'])?$_POST['subject']:'';
           $message = !empty($_POST['message'])?$_POST['message']:'';  
            
            $to = 'tutorialedge.in@gmail.com';
            $subject = 'New contact form have been submitted';
            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>".$name."</p>
                 <p><b>Mobile no: </b>".$mobileno."</p>
                <p><b>Email: </b>".$email."</p>
                <p><b>Subject: </b>".$subject."</p>
                <p><b>Message: </b>".$message."</p>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";
            //send email
            @mail($to,$subject,$htmlContent,$headers);
            
            $succMsg = 'Your contact request have submitted successfully.';
            //echo '<script>alert("Your Mail Send successfully");location.assign("http://kkathir.heliohost.org/personal_jmrb/index.php");</script>';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
endif;

?>