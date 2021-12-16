<?php
// On vérifie que la méthode POST est utilisée
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On vérifie si le champ "recaptcha-response" contient une valeur
    if(empty($_POST['recaptcha-response'])){
        $pb1 = 'Please use reCaptcha for validation';
        header('Location: contact-book-beyond-simien-mountains.php?id='.$pb1);
    }else{
        // On prépare l'URL
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=6Le7rPwZAAAAACqazWbc_k1Odm974UP4MCIsYkEE&response={$_POST['recaptcha-response']}";

        // On vérifie si curl est installé
        if(function_exists('curl_version')){
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($curl);
        }else{
            // On utilisera file_get_contents
            $response = file_get_contents($url);
        }
        // On vérifie qu'on a une réponse
        if(empty($response) || is_null($response)){
            $pb1 = 'Please use reCaptcha for validation';
            header('Location: contact-book-beyond-simien-mountains.php?id='.$pb1);
        }else{
            $data = json_decode($response);
            if($data->success){
                if(
                    isset($_POST['name']) && !empty($_POST['name']) &&
                  isset($_POST['email']) && !empty($_POST['email']) &&
                  isset($_POST['message']) && !empty($_POST['message'])
                ){
                    // On nettoie le contenu
                    $name = strip_tags($_POST['name']);
                    $email = strip_tags($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);
                    // Ici vous devrez traiter les données
                  // use wordwrap() if lines are longer than 70 characters
                  $msg = wordwrap($message,70);
                  $msg_email = $msg . " from ". $name . " ==> " . $email;
                  // send email
                  mail("contact@beyondsimienmountains.com", $name, $msg_email);
                  $ok = 'The message has been sent successfully !... <br> Thank you for your message <br> We will answer you as soon as possible.';
                 // Puis redirection ok
                   header('Location: contact-book-beyond-simien-mountains.php?id='.$ok);
                }
            }else{
                $pb1 = 'Please use reCaptcha for validation';
                header('Location: contact-book-beyond-simien-mountains.php?id='.$pb1);
            }
        }
    }
}else{
    http_response_code(405);
    $pb = "Ooppss... <br> Something wrong happened with your message <br> it hasn't been sent successfully <br> Please try again !  ";
                   // Puis redirection problem
                   header('Location: contact-book-beyond-simien-mountains.php?id='.$pb);
}
?>