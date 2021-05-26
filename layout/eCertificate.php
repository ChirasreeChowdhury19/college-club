<?> php if (isset($_POST['Submit'])) {
    header('content-type:image/jpeg');
    $font="cert/BRUSHSCI.TTF";
    $image=imagecreatefromjpeg("cert/certificate.jpg");
    $color=imagecolorallocate($image,19,21,22);
    $name=$_POST['Name'];
    imagettftext($image,50,0,365,420,$color,$font,$name);
    $date=$_POST['Date'];;
    imagettftext($image,20,0,450,595,$color,"cert/AGENCYR.TTF",$date);
    imagejpeg($image);
    imagedestroy($image);
?>