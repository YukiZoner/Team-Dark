<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = nes PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguage('uk', 'phpmailer/language/');
    $mail->IsHTML(true);

    //Від кого пошта
    $mail->setFrom('info@fls.guru', 'Team Dark');
    //Кому відправити
    $mail->addAddress('Yukinekune@gmail.com');
    //Тема пошти
    $mail->Subject = 'Привіт Team Dark';

    //Тіло пошти
    $body = '<h1>СУПЕР ПОШТА!</h1>';

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Імя:</strong> '.$_POST['name'].'</p>';
    }
    if(trim(!empty($_POST['email']))){
        $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
    }
    if(trim(!empty($_POST['message']))){
        $body.='<p><strong>Повідомлення:</strong> '.$_POST['message'].'</p>';
    }

    //Відправка
    if (!$mail->send()) {
        $message = 'Помилка';
    } else {
        $message = 'Повідомлення відправленно';
    }

    $response = ['message' => $message];

    header('Content-type: application/json');
    echo json_encode($response);
?>