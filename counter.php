<?php
// ������� �� ������� �����: 

if ($_GET['book']==1) {

header('Content-Disposition: attachment; filename="book1.txt"'); 

//����� ���������� ���� � �����, ������� ����� �������
$file=fopen("book1.txt","a+"); //book1.txt - ��� ��� �����, � ������� ����� ��������� ���������� �������
flock($file,LOCK_EX); 
$count=fread($file,100);
$count++; 
ftruncate($file,0); 
fwrite($file,$count); 
flock($file,LOCK_UN); 
fclose($file); 
}  

// ������� �� ������� �����
if ($_GET['book']==286) {
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'https://xn----htbwkmd.xn--p1ai')
{
header("location: https://мс-дос.рф/Download/MS-DOSV6.22.zip");
$file=fopen("book2.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}  else {
echo('Access is closed!');
// display some message / image / video
exit;
}
}

// ������� �� ������� �����
if ($_GET['book']==386) {
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'https://xn----htbwkmd.xn--p1ai')
{
header("location: https://xn----htbwkmd.xn--p1ai/Download/MSDOSV622H.exe");
$file=fopen("book3.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}  else {
echo('Access is closed!');
// display some message / image / video
exit;
}
}
// ������� �� ������� �����
if ($_GET['book']==486) {
header("location: https://мс-дос.рф/Download/msdosweb.exe");
$file=fopen("book4.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}


// ������� �� ������� �����
if ($_GET['book']==586) {
header("location: http://d96179xw.beget.tech/a/EMUW3XPRO.ZIP");
$file=fopen("book5.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}


// ������� �� ������� �����
if ($_GET['book']==686) {
header("location: http://d96179xw.beget.tech/Download/Emuwin3.11.Russian.rar");
$file=fopen("book6.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==786) {
header("location: http://d96179xw.beget.tech/Download/zx.rar");
$file=fopen("book7.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==886) {
header("location: https://мс-дос.рф/Download/msdosf32.zip");
$file=fopen("book8.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==2) {
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'https://xn----htbwkmd.xn--p1ai')
{
header("location: https://xn----htbwkmd.xn--p1ai/Download/MSDOSHDEMO.exe");
$file=fopen("book21.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}  else {
echo('Access is closed!');
// display some message / image / video
exit;
}
}
// ������� �� ������� �����
if ($_GET['book']==hb) {
header("location: http://xn----htbwkmd.xn--p1ai/Download/MSDOS622HB.exe");
$file=fopen("mshbeta.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==ko) {
header("location: https://мс-дос.рф/Download/KOLOS.exe");
$file=fopen("kolos.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==hc) {
header("location: https://мс-дос.рф/Download/MSDOS622HC.exe");
$file=fopen("mshchina.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==MSCH) {
header("location: http://d96179xw.beget.tech/ch/MS-DOS6.22CH.zip");
$file=fopen("mschlt.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==DCN) {
header("location: http://d96179xw.beget.tech/ch/MS-DOS6.22DCN.zip");
$file=fopen("22DCN.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==DHCN) {
header("location: http://d96179xw.beget.tech/ch/MSDOSHDEMO.exe");
$file=fopen("22DHCN.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==PHCN) {
header("location: http://d96179xw.beget.tech/ch/MSDOS622H.exe");
$file=fopen("22PHCN.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==HBEN) {
header("location: http://d96179xw.beget.tech/en/MSDOS622HB.exe");
$file=fopen("HBEN.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==LDEN) {
header("location: http://d96179xw.beget.tech/en/MS-DOS6.22DEMO.zip");
$file=fopen("LDEN.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==MSHW) {
header("location: http://d96179xw.beget.tech/en/MSDOSHDEMO.exe");
$file=fopen("MSHDEN.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==MSFW) {
header("location: https://мс-дос.рф/en/MSDOS622H.exe");
$file=fopen("MSFW.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==MSWZ) {
header("location: https://мс-дос.рф/en/MS-DOS6.22.zip");
$file=fopen("MSWZ.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==BIZG) {
header("location: http://d96179xw.beget.tech/Download/BigBox.zip");
$file=fopen("BIZG.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==W3D1) {
header("location: http://d96179xw.beget.tech/a/fb/EMUW3XD.ZIP");
$file=fopen("W3D1.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==W3O1) {
header("location: http://d96179xw.beget.tech/Download/WIN31EMU.zip");
$file=fopen("W3O1.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==UVDM) {
header("location: http://d96179xw.beget.tech/UltraVDM/files/UltraVDM.zip");
$file=fopen("UltraVDM.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==MFWU) {
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'https://yoomoney.ru')
{
header("location: https://мс-дос.рф/Download/MSDOSV622U.exe");
$file=fopen("MFWU.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
} else {
echo('Access is closed!');
// display some message / image / video
exit;
}
}

// ������� �� ������� �����
if ($_GET['book']==MISO) {
header("location: https://мс-дос.рф/msdosiso/msdos6.02.ISO");
$file=fopen("MISO.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==MFDD) {
header("location: https://мс-дос.рф/msdosiso/MS-DOS6.22.FDD.rar");
$file=fopen("MFDD.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==MSUD) {
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'https://xn----htbwkmd.xn--p1ai')
{
header("location: https://мс-дос.рф/Download/MSDOS622UD.exe");
$file=fopen("MSUD.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}  else {
echo('Access is closed!');
// display some message / image / video
exit;
}
}
// ������� �� ������� �����
if ($_GET['book']==MSFU) {
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'https://xn----htbwkmd.xn--p1ai')
{
header("location: https://мс-дос.рф/Download/MBFU.exe");
$file=fopen("MSFU.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}  else {
echo('Access is closed!');
// display some message / image / video
exit;
}
}
// ������� �� ������� �����
if ($_GET['book']==MB56) {
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'https://xn----htbwkmd.xn--p1ai')
{
header("location: https://мс-дос.рф/MBFU/MBFU56.exe");
$file=fopen("MB56.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}  else {
echo('Access is closed!');
// display some message / image / video
exit;
}
}
// ������� �� ������� �����
if ($_GET['book']==MBUE) {
header("location: https://мс-дос.рф/Download/MBFU56EN.EXE");
$file=fopen("MBUE.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==FUCW) {
header("location: https://мс-дос.рф/Download/FATCREATOR.EXE");
$file=fopen("FUCW.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==RB) {
header("location: https://мс-дос.рф/Download/MS-DOS6.22RB1.exe");
$file=fopen("22RB.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

// ������� �� ������� �����
if ($_GET['book']==SVDM) {
header("location: https://мс-дос.рф/Download/svdmin.exe");
$file=fopen("svdmin.txt","a+");
flock($file,LOCK_EX);
$count=fread($file,100);
$count++;
ftruncate($file,0);
fwrite($file,$count);
flock($file,LOCK_UN);
fclose($file);
}

?>

<? $refer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : null;

if(!empty($refer)){

    $fp = fopen('1down.txt', 'a');
    fwrite($fp, "$refer" . "\r\n"); // Using \n makes a new line. \r\n Windows/MAC
    fclose($fp);
    echo ".";
}

else{
echo ".";
}

// Or use this to write "No referer" in the file as a replacement
/*
else{
    $fp = fopen('file.txt', 'a');
    fwrite($fp, "No referer" . "\r\n");
    fclose($fp);
    echo "No referer.";
}
 ?>
