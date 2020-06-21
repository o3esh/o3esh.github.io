<?php

if(isset($_POST['message'])){

	$name = $_POST['Имя'];
	$email = $_POST['Email почта'];
	$message = $_POST['Сообщение'];
    
	
	$to      = 'example@mail.ru';
	$subject = '';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'Отправлено!';
	
		//Edit your message here
		$res['Сообщение'] = 'Ошибка';
    }
	else{
		$res['Сообщение'] = 'Ошибка, напишете мне пожалуйста на почту Пример@mail.ru';
	}
	
	
	echo json_encode($res);
}

?>