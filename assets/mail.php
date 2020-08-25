<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="refresh" content="0;URL=http://www.google.com" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><?
// Your thank you site. 
// consider this being an existing email address 
$to_email = "andrey.zhelkovsky@gmail.com";  
$subject = "message from dikovinki site"; 
$charset='UTF-8';
$subject="=?$charset?B?".base64_encode($subject)."?=$crlf"; 
$message = " name: " . $_POST['name'] . " \r\n  e-mail: " . $_POST['senders email'] . " \r\n web site: " . $_POST['senders website'] . " \r\n  message: " . $_POST['message'];
$headers  = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/plain; charset=iso-8859-8\r\n"; 
$headers .= "To: <".$to_email.">\r\n"; 
$headers .= "From:andrey zhelkovsky <andrey.zhelkovsky@gmail.com> "; 
mail($to_email, $subject, $message, $headers);

?>
</body>
</html>
