<?php
//Jangan di recode gan cape gw buat nya cuk 
//Please Don't recode my code i'm so tired creating this project
//Copyright© 2019 By Fajar Firdaus

$R  = "\e[91m";
$RR = "\e[91;7m";
$G  = "\e[92m";
$GG = "\e[92;7m";
$B  = "\e[36m";
$BB = "\e[36;7m";
$Y  = "\e[93m";
$YY = "\e[93;7m";
$X  = "\e[0m";

system("toilet -f future Matthew Bot --gay");
echo $R."[".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."]\n";
echo $G."Author : Fajar Firdaus\n";
echo $G."Fb : Fajar Firdaus / Ace.of.spades729\n";
echo $G."IG : fajar_firdaus_7\n";
echo $G."YT : iTech7732\n";
echo $R."[".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."=".$B."=".$G."=".$Y."=".$R."]\n";

echo $R."What's your name ? ";
$nama = trim(fgets(STDIN));

mulai:
echo $B."root@Bot-# ";
$data = trim(fgets(STDIN));

if ($data == "Hai matt"){
	echo "Hello $nama \n";
}else if ($data == "How are you matt"){
	echo "i'm okay sir thanks for asking\n";
}else if ($data == "matt download f-tools"){
	echo "Okay $nama, please wait..\n";
	sleep(1);
	system("git clone http://github.com/FajarTheGGman/F-Tools");
	sleep(1);
	echo "F-Tools has beed downloaded sir\n";
}else if ($data == "who are you"){
    echo "I'm matthew artificial intelegence\n";
}else if ($data == "who create you"){
	echo "Fajar Firdaus he is programmer ";
}else if ($data == "matt download netscan"){
	echo "Okay sir, please wait\n";
	sleep(1);
	system("git clone http://github.com/FajarTheGGman/NetScan\n");
	echo "NetScan has sucessfully downloaded sir\n";
}else if ($data == "matt play music"){
	echo "Okay $nama, please wait..\n";
	sleep(1);
	echo "Sir where you save your music file ?\n";
	sleep(1);
	echo "Please input your directory music  : ";
	$m = trim(fgets(STDIN));
	system("mpv --playlist=".$m);
}else if ($data == "matt give me information about your creator"){
	$url = "https://api.github.com/users/FajarTheGGman";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/53.0.2785.143 Safari/537.36");
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
	$ret = curl_exec($curl);
	$js = json_decode($ret, true);
	print_r($js);
}else if ($data == "matt download fakecall"){
	echo $blue."Okay sir please wait..";
	system("git clone http://github.com/FajarTheGGman/FakeCall");
	echo $G."FakeCall has successfully downloaded sir";
}else if ($data == "matt install termux gui"){
	echo $R."Make Sure before install termux gui install app vncviewer you have installed the vncviewer app\n";
	sleep(1);
	 echo $G."Are you sure want to install termux gui (type Y to install and type N to abort) ? \n";
	$n = trim(fgets(STDIN));
	 if ($n == "Y"){
	 echo "Please wait..\n";
	 system('apt install x11-repo -y');
	 system('apt install fluxbox tigervnc openbox pypanel xorg-setroot curl -y');
	 system('rm $HOME/.vnc/xstartup');
	 system('cd $HOME/.vnc');
	 system('curl https://pastebin.com/raw/NaS18BrG -o xstartup');
	 system('vncserver');
	 }else if ($n == "N"){
	 	
	 }
}else if ($data == "matt give me information about this website"){
    error_reporting(0);
	echo $G."Input Website : ";
	$a = trim(fgets(STDIN));
	$url = "https://api.hackertarget.com/whois/?q=".$a;
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRASFER, true);
	$r = curl_exec($ch);
	echo $r;
}else if ($data == "version"){
	echo $G."V1.0 (Beta)\n";
}
goto mulai;
$out = system("exit");
?>