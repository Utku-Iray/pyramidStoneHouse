<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php 
//Post metodu ile gönderilen verilerimizi alıyoruz.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$firmaAdi = $_POST['firmaAdi'];
$firmaAdresi = $_POST['firmaAdresi'];
$webAdresi = $_POST['webAdresi'];
$faaliyetAlanlari = $_POST['faaliyetAlanlari'];
$sertifikalar = $_POST['sertifikalar'];
$adSoyad = $_POST['adSoyad'];
$telefon = $_POST['telefon'];
$mail = $_POST['eMail'];
$sayfa = $_POST['sayfa'];


function mailgonder(){
    require "inc/class.phpmailer.php"; // PHPMailer dosyamızı çağırıyoruz  
    $mail = new PHPMailer();   
         $mail->IsSMTP();
         $mail->From     = "utah@alondanbilisim.com"; //Gönderen kısmında yer alacak e-mail adresi  
         $mail->Sender   = "utah@alondanbilisim.com";  
         $mail->FromName = "Birinci Mail";  
         $mail->Host     = "srvc55.turhost.com"; //SMTP server adresi  
         $mail->SMTPAuth = true;  
         $mail->Username = "utah@alondanbilisim.com"; //SMTP kullanıcı adı  
         $mail->Password = "[4I#Pn+#IWEC"; //SMTP şifre  
		 $mail->SMTPSecure="tls";
         $mail->Port = "587";
         $mail->CharSet = "utf-8";
         $mail->IsHTML(true); //Mailin HTML formatında hazırlanacağını bildiriyoruz.  
         $mail->Subject  ="Birinci Form";
		
    $mail->Body ="Firma Adı: ". $_POST['firmaAdi'] . "<br>Firma Adresi: " . $_POST['firmaAdresi'] . "<br>Web Adresi: " . $_POST['webAdresi'] . "<br>Faaliyet Alanları: ". $_POST['faaliyetAlanlari'] ."<br>Sertifikalar: " . $_POST['sertifikalar'] . "<br>Ad Soyad: " . $_POST['adSoyad'] . "<br>Telefon Numarası: " . $_POST['telefon'] .  "<br>Mail adresi: " . $_POST['eMail'] ."<br>Hangi sayfadan geldi: " . $_POST['sayfa']  ;
         
    $mail->AltBody = strip_tags("mesaj");
    $mail->AddAddress("satinalma@birinci.com");
	 $mail->AddAttachment($_FILES['folder']['tmp_name'],  $_FILES['folder']['name']);
    return ($mail->Send())?true:false;
    $mail->ClearAddresses();
    $mail->ClearAttachments();
}

if(mailgonder()) {
        echo '<script>alert("Your messages have been received from you!");</script>';
    } else {
        echo '<script>alert("Your messages haven"t been received from you!");</script>';
    }


   ?>
<script>
  setTimeout(function(){
  window.location = "https://birinci.com/";
}, 1000);
</script>
