<?php

function filterName($field){

    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}

function filterPassword($field){

    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

    // Validate password address
    if(filter_var($field, FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/")))){
        return $field;
    } else{
        return FALSE;
    }
}


function filterEmail($field){

    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterPhoneno($field){

    $field = filter_var(trim($field), FILTER_SANITIZE_NUMBER_INT);

    // Validate phone no
    if(filter_var($field, FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"/[^0-9]/")))){
        return $field;
    } else{
        return FALSE;
    }
}



function filterString($field){

    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}

$nameErr = $passwordErr= $emailErr =$phonenoErr= $messageErr ="";
$name = $password =$email = $phoneno =$subject = $message = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty($_POST["name"])){
        $nameErr = "Please enter your name.";
    } else{
        $name = filterName($_POST["name"]);
        if($name == FALSE){
            $nameErr = "Please enter a valid name.";
        }
    }

    if(empty($_POST["password"])){
        $passwordErr = "Please enter your password.";
    } else{
        $password = filterPassword($_POST["password"]);
        if($password == FALSE){
            $passwordErr = "Please enter a valid password.";
        }
    }


    if(empty($_POST["email"])){
        $emailErr = "Please enter your email address.";
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Please enter a valid email address.";
        }
    }
    if(empty($_POST["phoneno"])){
        $phonenoErr = "Please enter your phone no.";
    } else{
        $phoneno = filterPhoneno($_POST["phoneno"]);
        if($phoneno == FALSE){
            $phonenoErr = "Please enter a valid Phone no.";
        }
    }


    if(empty($_POST["subject"])){
        $subject = "";
    } else{
        $subject = filterString($_POST["subject"]);
    }


    if(empty($_POST["message"])){
        $messageErr = "Please enter your bio.";
    } else{
        $message = filterString($_POST["message"]);
        if($message == FALSE){
            $messageErr = "Please enter a valid bio.";
        }
    }


    if(empty($nameErr) && empty($passwordErr) &&empty($emailErr) &&  empty($phonenoErr)&& empty($messageErr)){

        $to = 'webmaster@example.com';


        $headers = 'From: '. $email . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


        if(mail($to, $subject, $message, $headers)){
            echo '<p class="success">Your message has been sent successfully!</p>';
        } else{
            echo '<p class="error">Unable to send email. Please try again!</p>';
        }
    }
}
?>
<?php include 'validateform.php' ?>
