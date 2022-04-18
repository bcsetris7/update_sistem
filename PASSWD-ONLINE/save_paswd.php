<?php
system('clear');
date_default_timezone_set('Asia/Jakarta');
system('figlet bcsetris7');
echo "PASSWORD : bagus nya di buat di pastebin";
echo"\n";
echo "PASSWORD : https://xxxxxxxxxxxxxxxxxx/";
echo"\n";
$wa = file_get_contents("https://raw.githubusercontent.com/xxxxxxxxx/pas.txt");
$pass="[x]password:";
$konf=readline($pass);
if($konf=="".$wa.""){
echo "[x]\33[32;1msuccess\n\n";
sleep(5);
@system("clear");
}else{
sleep(2);
echo "[x]password salah";
sleep(3);
exit;
}
?>
