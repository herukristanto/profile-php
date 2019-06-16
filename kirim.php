<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$massage=$_POST['massage'];

$to="info@website.com";

$massage="Dear, <br /> <br />".$massage;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From:'.$name.' <'.$email.'>'."\r\n" . 'Reply-To: '.$name.' <'.$email.'>'."\r\n";
$headers .= 'Cc: herukristanto90@gmail.com' . "\r\n"; //untuk cc lebih dari satu tinggal kasih koma
@mail($to,$massage,$massage,$headers);
if (@mail) { ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message. We will contact you shortly.');
window.location = 'index.php';
</script>
<?php
}
else { ?>
<script language="javascript" type="text/javascript">
alert('Message failed. Please, send an email to herukristanto90@email.co.id');
window.location = 'indext.php';
</script>
<?php
}
?>
