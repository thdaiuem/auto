<?php

{

error_reporting(0);
session_start();
#time
date_default_timezone_set("Asia/Ho_Chi_Minh");
					$xxx = date("H:i");
//color
$res="\033[0m";
$red="\033[0;31m";
$white= "\033[0;37m";
$redb="\033[1;31m";
$green="\033[0;32m";
$yellow="\033[1;33m";
$cam="\033[0;33m";
$test="\033[1;33m";
$greenb="\033[1;32m";
$blue="\033[0;34m";
$lam="\033[1;34m";
$tmi="\033[1;34m";
$hong="\033[1;35m";
$imt="\033[1;35m";
$cyan= "\e[1;36m";
$syan="\033[1;36m";
$xnhac= "\033[1;96m";
$den="\033[1;90m";
$do="\033[1;91m";
$luc="\033[1;92m";
$vang="\033[1;93m";
$xduong="\033[1;94m";
$hong="\033[1;95m";
$banner="\r
              \e[1;36m                ██
              \033[1;32m  ██    ██           ██████     ██    ██
              \033[1;33m  ██    ██    ██     ██         ██    ██
              \033[1;31m  ████████    ██     ██████     ██    ██
              \033[1;95m  ██    ██    ██     ██         ██    ██
            \033[1;94m    ██    ██    ██     ██████     ████████
\n";
//sever
@system('clear');
echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m🌺\033[;33m TOOL TDS Token\033[1;32m🌺 \033[0m
$yellow =================================================
$syan        ☞ YouTube: Hieu Tricker 
$yellow        ☞ Zalo: 0356964022
$hong        ☞ momo: 0987361979
$greenb        ☞ Facebook: hieunganh1301200six
$redb        ☞ Nhớ Đăng Kí Kênh Nha!!
$yellow ==================================================\n";
$checkkey  = file('https://pastebin.com/raw/wsP3NBjh');
$lock=file_get_contents('https://pastebin.com/raw/FFX3Lvcv');
$keylock=md5(htmlspecialchars($lock));
echo $res;
if (md5('lock') != $keylock) {
	sleep(0);
	echo $red."\033[1;35m[\033[1;33mWARING\033[1;35m]\n".$red;
	echo $red."         🔰\033[1;31mSEVER TẠM NGỪNG HOẠT ĐỘNG🔰\n".$red;
	echo $syan."\033[1;34m[\033[1;36mZalo\033[1;34m]⇒ \033[1;32m0356.964.022\n".$red;
	echo $syan."\033[1;34m[\033[1;36mFacebook\033[1;34m]⇒ \033[1;33mhieunganh1301200six\n".$red;
exit($red."Vui Lòng Liên Hệ \033[1;35m☛Hiếu☚ \033[1;31mĐể Lấy Tool Mới Nhé !!\n".$red);
@system('clear');
}
sleep(1); 
while (true) {
 echo "\033[1;97m ~\033[1;91m[\033[1;92mApiKey️\033[1;91m] \033[1;97m=> \033[1;93m";
      $makey = trim(fgets(STDIN));
    if ($makey == $checkkey[0]) 
   
    {
    sleep(2);
        echo "\033[1;32";
        echo "\n";
        break;
    } else {
        echo "\033[1;31mKey Sai Vui Lòng Liên Hệ \033[1;34mHiếu\033[1;31mĐể Lấy Key Mới";
        echo "\n";
       }
       }
//config
{
@system('clear');
echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m🌺\033[;33m TOOL TDS Token\033[1;32m🌺 \033[0m
$yellow =================================================
$syan        ☞ YouTube: Hieu Tricker 
$yellow        ☞ Zalo: 0356964022
$hong        ☞ Momo: 0987361979
$greenb        ☞ Facebook: hieunganh1301200six
$redb        ☞ Nhớ Đăng Kí Kênh Nha!!
$yellow ==================================================\n";
sleep(1);
$listnv = [];
echo "$res ~".$red."[".$green."✓".$red."]".$greenb." => ".$yellow." [👤] Tài Khoản TDS : ";
$_SESSION["username"]=trim(fgets(STDIN));
echo "$res ~".$red."[".$green."✓".$red."]".$greenb." => ".$yellow." [🔐] Mật Khẩu TDS : ";
$_SESSION['password']=trim(fgets(STDIN));
echo"$res";
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
$login =array('username' => $_SESSION['username'],'password' => $_SESSION['password'],'submit' => ' Đăng Nhập');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$source=curl_exec($ch);
curl_close($ch);
@system('clear');
echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m🌺\033[;33m TOOL TDS Token\033[1;32m🌺 \033[0m
$yellow =================================================
$syan        ☞ YouTube: Hieu Tricker 
$yellow        ☞ Zalo: 0356964022
$hong        ☞ Momo: 0987361979
$greenb        ☞ Facebook: hieunganh1301200six
$redb        ☞ Nhớ Đăng Kí Kênh Nha!!
$yellow ==================================================\n";
if ($source != 1 && $source != ''){
	$user = $_SESSION["username"];
	$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
echo "$res ~".$red."[".$green."✓".$red."]".$greenb." => ".$yellow."Token Facebook : $yellow";
$cookie=trim(fgets(STDIN));
	echo"\n";
	@system('clear');
echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m🌺\033[;33m TOOL TDS Token\033[1;32m🌺 \033[0m
$yellow =================================================
$syan        ☞ YouTube: Hieu Tricker 
$yellow        ☞ Zalo: 0356964022
$hong        ☞ Momo: 0987361979
$greenb        ☞ Facebook: hieunganh1301200six
$redb        ☞ Nhớ Đăng Kí Kênh Nha!!
$yellow ==================================================\n";
        echo $yellow."[".$luc."+".$redb."] ".$syan."=> ".$luc."Tên Tài Khoản Trao Đổi Sub: ".$yellow."".$user."\n";
        echo $yellow."[".$luc."+".$redb."] ".$syan."=> ".$luc."Số Xu Hiện Tại: ".$yellow."".$xu."\n";
	    echo $yellow."[".$luc."+".$redb."]".$syan." => $redb [".$green."1".$red."] ".$yellow."Chế độ Follow\n";
		echo $yellow."[".$luc."+".$redb."]".$syan." => $redb [".$green."2".$red."] ".$syan."Chế độ Like \n";
		echo $yellow."[".$luc."+".$redb."]".$syan." => $redb [".$green."3".$red."] ".$greenb."Chế độ Comment \n";
		echo $yellow."[".$luc."+".$redb."]".$syan." => $redb [".$green."4".$red."] ".$hong."Chế Độ Random Like + Folow \n";
		echo $yellow."[".$luc."+".$redb."]".$syan." => $redb [".$green."5".$red."] ".$redb."Chế độ Random Like + Cmt \n";
		echo $yellow."[".$luc."+".$redb."]".$syan." => $redb [".$green."6".$red."] ".$xduong."Chế Độ Random Follow + Cmt \n";
		echo $yellow."[".$luc."+".$redb."]".$syan." => $redb [".$green."7".$red."] ".$cyan."Chế Độ Random Full Job \n";
		echo $syan."Nhập Số :  ";
		$nv = trim(fgets(STDIN));
		if($nv =='1'){
		  array_push($listnv,'sub');
		}
		elseif($nv=='2'){
		  array_push($listnv,'like');
		}
		elseif($nv=='3'){
		  array_push($listnv,'cmt');
		}
		elseif($nv=='4'){
		  array_push($listnv,'like','sub');
		}
		elseif($nv=='5'){
			array_push($listnv,'like','cmt');
		}
		elseif($nv=='6'){
			array_push($listnv,'sub','cmt');
		}
		elseif($nv=='7'){
			array_push($listnv,'like','sub','cmt');
		}
		
		else{exit("Nhập Gì Vậy ??");}
		echo $fe."Nhập Thời Gian Delay Sau Mỗi Job:  $syan";
		$time = trim(fgets(STDIN)); 
	echo $syan."Số Job Làm: ";
	$_SESSION['i']=trim(fgets(STDIN));
	if($_SESSION['i'] < 1)
	{exit($red."Tối Thiểu 1 Lần\n");}
}else{
	exit($red."Tài Khoản Hoặc Mật Khẩu Sai, Kiểm Tra Lại");
}

#get_token
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
$head[] = "Connection: keep-alive";
$head[] = "Keep-Alive: 300";
$head[] = "authority: m.facebook.com";
$head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
$head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
$head[] = "cache-control: max-age=0";
$head[] = "upgrade-insecure-requests: 1";
$head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
$head[] = "sec-fetch-site: none";
$head[] = "sec-fetch-mode: navigate";
$head[] = "sec-fetch-user: ?1";
$head[] = "sec-fetch-dest: document";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
	if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
	}
	if (true) {
		$access_token = $cookie;
		if (json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'}) {
			$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'id'};
	}
	}
	if (true) {
		$access_token = $cookie;
		if (json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'}) {
			$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token=' . $access_token))->{'name'};
		} else {
			echo $do."Token Của Bạn Lỗi\n";
			sleep(2);
			exit($do."Đã Đăng Xuất Nick Khỏi Web\n");

}
@system('clear');
echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m🌺\033[;33m TOOL TDS Token\033[1;32m🌺 \033[0m
$yellow =================================================
$syan        ☞ YouTube: Hieu Tricker 
$yellow        ☞ Zalo: 0356964022
$hong        ☞ Momo: 0987361979
$greenb        ☞ Facebook: hieunganh1301200six
$redb        ☞ Nhớ Đăng Kí Kênh Nha!!
$yellow ==================================================\n";
sleep(1);;;;
	echo $lime."\033[1;32m~\033[1;31m[\033[1;32m✓\033[1;31m]$cyan => $cyan Tên Tài Khoản :$lightSkyBlue $user\n";
sleep(1);;;;
    echo $lime."\033[1;32m~\033[1;31m[\033[1;32m✓\033[1;31m]$yellow => $yellow Xu Hiện Tại :$cyan $xu\n";
sleep(1);;;;
    echo $lime."\033[1;32m~\033[1;31m[\033[1;32m✓\033[1;31m]$greenb => $greenb Tool Tds By Minh Hiếu\n";
sleep(1);;;;
    echo $lime."\033[1;32m~\033[1;31m[\033[1;32m✓\033[1;31m]$hong => $hong Nhớ Đăng Kí Kênh Giúp Mình Nhá\n";
sleep(1);;;;
    echo $lime."\033[1;32m~\033[1;31m[\033[1;32m✓\033[1;31m]$redb => $redb Tool Nói Không Với Keylog\n";
sleep(1);;;;
echo"\033[1;33m ==================================================\n";
$h = datnick($user,$idfb);
$xu = file_get_contents('https://traodoisub.com/scr/test3.php?user='.$user);
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};
 echo $yellow."Cấu Hình: ".$tenfb."\n";
if ($h == '1'){
		$i=1;
		while ($i <= $_SESSION['i'] - 1){
		$i++;
			$rand = $listnv[array_rand($listnv,1)];
			 if($rand == 'sub'){
				$list = getnv('follow',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $logo."Có ".$check." Job!\r";
				foreach ($list  as $id) {
					$g = follow($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."Đã  bị block!");
					}
					$s = nhantien('sub',$id);
					if ($s == 2){$xu = $xu + 600;
					date_default_timezone_set("Asia/Ho_Chi_Minh");
					$xxx = date("H:i");
					$stt = $stt + 1;
					echo $yellow."╭──────────────────────────────────────────────────────────╮";
					usleep(90000);
					echo "\n";
echo"|$hong $stt |";
 usleep(90000);
echo"$yellow $xxx |";
usleep(90000);
echo"$syan FOLLOW";
usleep(90000);
echo"$redb | $id | ";
usleep(90000);
echo"$greenb+600 | $xu ";
echo$yellow."
╰──────────────────────────────────────────────────────────╯ ";
					echo "\n";}
					else{echo $red."[FOLLOW]| Thất Bại  "."\r";}
					
					for ($hk=$time;$hk>-1;$hk--){
echo "\r\033[1;32m   ⇆ㅤ◁ㅤ 🕛ㅤ ▷ \033[1;32m🌺      \033[1;32m   💮\033[1;32m |\033[1;32m $hk\033[1;32m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;31m   ⇆ㅤ◁ㅤ 🕐ㅤ ▷   \033[1;31m🌺    \033[1;31m   💮\033[1;31m |\033[1;31m $hk\033[1;31m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;33m   ⇆ㅤ◁ㅤ 🕑ㅤ ▷     \033[1;33m🌺  \033[1;33m   💮\033[1;33m |\033[1;33m $hk\033[1;33m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;34m   ⇆ㅤ◁ㅤ 🕒ㅤ ▷       \033[1;34m🌺\033[1;34m   💮\033[1;34m |\033[1;34m $hk\033[1;34m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;35m   ⇆ㅤ◁ㅤ 🕓ㅤ ▷        \033[1;35m🌺\033[1;35m  💮\033[1;35m |\033[1;35m $hk\033[1;35m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;36m   ⇆ㅤ◁ㅤ 🕔ㅤ ▷         \033[1;36m🌺\033[1;36m 💮\033[1;36m |\033[1;36m $hk\033[1;36m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;32m   ⇆ㅤ◁ㅤ 🕕ㅤ ▷ \033[1;32m🌺      \033[1;32m   💮\033[1;32m |\033[1;32m $hk\033[1;32m | ";
usleep(90000);
echo "\r";
echo "\r\033[1;31m   ⇆ㅤ◁ㅤ 🕖ㅤ ▷   \033[1;31m🌺    \033[1;31m   💮\033[1;31m |\033[1;31m $hk\033[1;31m | ";
usleep(90000);
echo "\r";
echo "\r\033[1;33m   ⇆ㅤ◁ㅤ 🕗ㅤ ▷     \033[1;33m🌺  \033[1;33m   💮\033[1;33m |\033[1;33m $hk\033[1;33m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;34m   ⇆ㅤ◁ㅤ 🕘ㅤ ▷       \033[1;34m🌺\033[1;34m   💮\033[1;34m |\033[1;34m $hk\033[1;34m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;36m   ⇆ㅤ◁ㅤ 🕛ㅤ ▷         \033[1;36m 🌺\033[1;37m💮\033[1;32m🌸\033[1;31m |\033[1;33m $hk\033[1;31m | ";
usleep(100000);
}
sleep(1);
    echo "\r";
				}
			}else if($rand == 'like'){
				$list = getnv('like',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $logo."Có ".$check." Job!\r";
				foreach ($list  as $id) {
					$g = like($access_token,$id,$cookie);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."Đã bị block!");
					}
					$s = nhantien('like',$id);
					if ($s == 2){$xu = $xu + 200; date_default_timezone_set("Asia/Ho_Chi_Minh");
					$xxx = date("H:i");
					$stt = $stt + 1;
					echo $yellow."╭──────────────────────────────────────────────────────────╮";
					usleep(90000);
					echo "\n";
echo"|$hong $stt |";
 usleep(90000);
echo" $yellow $xxx |";
usleep(90000);
echo"$syan LIKE";
usleep(90000);
echo"$redb | $id | ";
usleep(90000);
echo"$greenb +200 | $xu  ";
echo$yellow."
╰──────────────────────────────────────────────────────────╯ ";
					echo "\n";}
					else{echo $red."[LIKE]| Thất Bại  "."\r";}
					
					for ($hk=$time;$hk>-1;$hk--){
echo "\r\033[1;32m   ⇆ㅤ◁ㅤ 🕛ㅤ ▷ \033[1;32m🌺      \033[1;32m   🌸\033[1;32m |\033[1;32m $hk\033[1;32m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;31m   ⇆ㅤ◁ㅤ 🕐ㅤ ▷   \033[1;31m🌺    \033[1;31m   🌸\033[1;31m |\033[1;31m $hk\033[1;31m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;33m   ⇆ㅤ◁ㅤ 🕑ㅤ ▷     \033[1;33m🌺  \033[1;33m   🌸\033[1;33m |\033[1;33m $hk\033[1;33m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;34m   ⇆ㅤ◁ㅤ 🕒ㅤ ▷       \033[1;34m🌺\033[1;34m   🌸\033[1;34m |\033[1;34m $hk\033[1;34m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;35m   ⇆ㅤ◁ㅤ 🕓ㅤ ▷        \033[1;35m🌺\033[1;35m  🌸\033[1;35m |\033[1;35m $hk\033[1;35m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;36m   ⇆ㅤ◁ㅤ 🕔ㅤ ▷         \033[1;36m🌺\033[1;36m 🌸\033[1;36m |\033[1;36m $hk\033[1;36m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;32m   ⇆ㅤ◁ㅤ 🕕ㅤ ▷ \033[1;32m🌺     \033[1;32m   🌸\033[1;32m |\033[1;32m $hk\033[1;32m | ";
usleep(90000);
echo "\r";
echo "\r\033[1;31m   ⇆ㅤ◁ㅤ 🕖ㅤ ▷   \033[1;31m🌺    \033[1;31m   🌸\033[1;31m |\033[1;31m $hk\033[1;31m | ";
usleep(90000);
echo "\r";
echo "\r\033[1;33m   ⇆ㅤ◁ㅤ 🕗ㅤ ▷     \033[1;33m🌺 \033[1;33m   🌸\033[1;33m |\033[1;33m $hk\033[1;33m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;34m   ⇆ㅤ◁ㅤ 🕘ㅤ ▷       \033[1;34m🌺\033[1;34m   🌸\033[1;34m |\033[1;34m $hk\033[1;34m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;36m   ⇆ㅤ◁ㅤ 🕛ㅤ ▷         \033[1;36m 🌺\033[1;37m💮\033[1;32m🌸\033[1;31m |\033[1;33m $hk\033[1;31m | ";
usleep(100000);
}
sleep(1);
    echo "\r";
				}
				}
			else{
				$list = getnv('cmt',$user);
				$check = count($list);
				if ($check == 0){echo $red."Hết nhiệm vụ!\r"; $i++; continue;}
				echo $logo."Có ".$check." Job!\r";
				foreach ($list  as $id => $key) {
					$uid = $key->{'id'};
					$msg = $key->{'nd'};
					$g = cmt($access_token,$uid,$cookie,$msg);
					if ($g->{'error'}->{'code'} == 368){
						exit($red."Đã bị block!");
					}
					$s = nhantien('cmt',$uid);
					if ($s == 2){$xu = $xu + 600; date_default_timezone_set("Asia/Ho_Chi_Minh");
					$xxx = date("H:i");
					$stt = $stt + 1;
					echo $yellow."╭──────────────────────────────────────────────────────────╮";
					usleep(90000);
					echo "\n";
echo"|$hong $stt |";
 usleep(90000);
echo" $yellow $xxx |";
usleep(90000);
echo"$syan CMT";
usleep(90000);
echo"$redb | $id | ";
usleep(90000);
echo"greenb+600 | $xu  ";
echo$yellow."
╰──────────────────────────────────────────────────────────╯ ";
					echo "\n";}
					else{echo $red."[CMT]| Thất Bại  "."\r";}
					
					for ($hk=$time;$hk>-1;$hk--){
echo "\r\033[1;32m   ⇆ㅤ◁ㅤ 🕛ㅤ ▷ \033[1;32m🌺     \033[1;32m   🌼\033[1;32m |\033[1;32m $hk\033[1;32m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;31m   ⇆ㅤ◁ㅤ 🕐ㅤ ▷   \033[1;31m🌺    \033[1;31m   🌼\033[1;31m |\033[1;31m $hk\033[1;31m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;33m   ⇆ㅤ◁ㅤ 🕑ㅤ ▷     \033[1;33m🌺  \033[1;33m   🌼\033[1;33m |\033[1;33m $hk\033[1;33m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;34m   ⇆ㅤ◁ㅤ 🕒ㅤ ▷       \033[1;34m🌺\033[1;34m   🌼\033[1;34m |\033[1;34m $hk\033[1;34m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;35m   ⇆ㅤ◁ㅤ 🕓ㅤ ▷        \033[1;35m🌺\033[1;35m  🌼\033[1;35m |\033[1;35m $hk\033[1;35m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;36m   ⇆ㅤ◁ㅤ 🕔ㅤ ▷         \033[1;36m🌺\033[1;36m 🌼\033[1;36m |\033[1;36m $hk\033[1;36m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;32m   ⇆ㅤ◁ㅤ 🕕ㅤ ▷ \033[1;32m🌺      \033[1;32m   🌼\033[1;32m |\033[1;32m $hk\033[1;32m | ";
usleep(90000);
echo "\r";
echo "\r\033[1;31m   ⇆ㅤ◁ㅤ 🕖ㅤ ▷   \033[1;31m🌺    \033[1;31m   🌼\033[1;31m |\033[1;31m $hk\033[1;31m | ";
usleep(90000);
echo "\r";
echo "\r\033[1;33m   ⇆ㅤ◁ㅤ 🕗ㅤ ▷     \033[1;33m🌺  \033[1;33m   🌼\033[1;33m |\033[1;33m $hk\033[1;33m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;34m   ⇆ㅤ◁ㅤ 🕘ㅤ ▷       \033[1;34m🌺\033[1;34m   🌼\033[1;34m |\033[1;34m $hk\033[1;34m | ";
usleep(90000);
echo "\r"; 
echo "\r\033[1;36m   ⇆ㅤ◁ㅤ 🕛ㅤ ▷         \033[1;36m 🌺\033[1;37m💮\033[1;32m🌼\033[1;31m |\033[1;33m $hk\033[1;31m | ";
usleep(100000);
}
sleep(1);
    echo "\r";
				}
			}
}
}else{exit($red."CẤU HÌNH THẤT BẠI, VUI LÒNG THÊM ID: ".$idfb." VÀO CẤU HÌNH");}
}else{exit($red."COOKIE DIE RỒI");}
}
function follow($access_token,$idsub,$cookie){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idsub.'/subscribers');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: m.facebook.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $data = array('access_token' => $access_token);
  curl_setopt($ch, CURLOPT_POST,count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  $access = curl_exec($ch);
  curl_close($ch);
  return json_decode($access);
}
function like($access_token,$idlike,$cookie){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idlike.'/likes');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: m.facebook.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $data = array('access_token' => $access_token);
  curl_setopt($ch, CURLOPT_POST,count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  $access = curl_exec($ch);
  curl_close($ch);
  return json_decode($access);
}
function cmt($access_token,$idcmt,$cookie,$msg){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "authority: m.facebook.com";
  $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
  $head[] = "cache-control: max-age=0";
  $head[] = "upgrade-insecure-requests: 1";
  $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
  $head[] = "sec-fetch-site: none";
  $head[] = "sec-fetch-mode: navigate";
  $head[] = "sec-fetch-user: ?1";
  $head[] = "sec-fetch-dest: document";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
  $data = array('message' => $msg,'access_token' => $access_token);
  curl_setopt($ch, CURLOPT_POST,count($data));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
  $access = curl_exec($ch);
  curl_close($ch);
  return json_decode($access);
}
function page($id,$cookie){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
  :'));
  $page = curl_exec($ch);
  if (explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0]){
    $get = explode('&amp;refid=',explode('pageSuggestionsOnLiking=1&amp;gfid=',$page)[1])[0];
    $link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$id.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
    curl_setopt($ch, CURLOPT_URL, $link);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
  }  
  curl_close($ch);
}
function camxuc($id,$type,$cookie){
  $ch = curl_init();
  if(strpos($id,'_')){
    $uid = explode('_',$id, 2);
    $id2 = 'story.php?story_fbid='.$uid[1].'&id='.$uid[0];
  }else{
    $id2 = $id;
  }
  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$id2);
  $head[] = "Connection: keep-alive";
  $head[] = "Keep-Alive: 300";
  $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
  $head[] = "Accept-Language: en-us,en;q=0.5";
  curl_setopt($ch, CURLOPT_USERAGENT, 'Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14');
  curl_setopt($ch, CURLOPT_ENCODING, '');
  curl_setopt($ch, CURLOPT_COOKIE, $cookie);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
  curl_setopt($ch, CURLOPT_TIMEOUT, 60);
  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
  :'));
  $page = curl_exec($ch);
  if ($id2 != $id && explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0]){
    $get = explode('&amp;origin_uri=',explode('amp;ft_id=',$page,2)[1],2)[0];
  }else{
    $get = $id2;
  }
  $link = 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$get;
  curl_setopt($ch, CURLOPT_URL, $link);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $cx = curl_exec($ch);
  $haha = explode('<a href="',$cx);
  if ($type == 'LOVE'){
    $haha2 = explode('" style="display:block"',$haha[2])[0];
  }else if ($type == 'WOW'){
    $haha2 = explode('" style="display:block"',$haha[5])[0];
  }else if ($type == 'HAHA'){
    $haha2 = explode('" style="display:block"',$haha[4])[0];
  }else if ($type == 'SAD'){
    $haha2 = explode('" style="display:block"',$haha[6])[0];
  }else{
    $haha2 = explode('" style="display:block"',$haha[7])[0];
  }
  $link2 = html_entity_decode($haha2);  
  curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_exec($ch);
  curl_close($ch);
}
function getnv($loai,$user){
  $list = file_get_contents('https://traodoisub.com/scr/api_job.php?chucnang='.$loai.'&user='.$user);
  return json_decode($list);
}
function datnick($user,$id){
  $xxx = file_get_contents('https://traodoisub.com/scr/api_dat.php?user='.$user.'&idfb='.$id);
  return $xxx;
}
function nhantien($loai,$id){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantien'.$loai.'.php');
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $tdsxu=array('id' => $id);
  curl_setopt($ch, CURLOPT_POST,count($tdsxu));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
  $xu=curl_exec($ch);
  curl_close($ch);
  return $xu;
}
function nhantiencx($loai,$id){
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/nhantiencx.php');
  curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $tdsxu=array('id' => $id, 'loaicx' => $loai);
  curl_setopt($ch, CURLOPT_POST,count($tdsxu));
  curl_setopt($ch, CURLOPT_POSTFIELDS,$tdsxu);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
  $xu=curl_exec($ch);
  curl_close($ch);
  return $xu;
}
}
?>	