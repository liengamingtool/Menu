
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[1;37m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$do="\033[1;91m";
$maufulldo= "\e[1;47;31m";
$res="\033[0m";
$red="\e[1;31m";
$pink="\e[1;35m";
$green="\e[1;32m";
$yellow="\e[1;33m";
$y2="\033[0;33m";
$cyan= "\e[1;36m";
$blue="\e[1;34m";
$ngreen="\033[42m";
$ngblack="\033[40m";
$nen="\033[1;47;1;34m";
function logo($logo)
{
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
        @system('clear'); 
        for($i = 0; $i < strlen($logo); $i++){
            echo $logo[$i];
            usleep(1000);
        }
    } else { 
        @system('cls'); 
        echo $logo;
    }
}
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
$thanh = "\033[1;31m====\033[1;32m====\033[1;35m====\033[1;34m====\033[1;32m=====\033[1;33m====\033[1;36m=====\033[1;31m=====\033[1;35m=====\033[1;34m======\033[1;32m========\033[1;33m=====\033[1;31m====\033[1;35m=";
$incon = "\033[1;31m[\033[1;33m㊪\033[1;31m]$trang =>";


$url="https://api.ivpn.net/v4/geo-lookup";
function thongtin($url){
$headers = array(
   'authority: api.ivpn.net',
   'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5',
   'cache-control: max-age=0',
  'sec-ch-ua: "Not-A.Brand";v="99", "Chromium";v="124"',
   'sec-ch-ua-mobile: ?1',
   'sec-ch-ua-platform: "Android"',
   'sec-fetch-dest: document',
   'sec-fetch-mode: navigate',
   'sec-fetch-site: none',
   'sec-fetch-user: ?1',
   'upgrade-insecure-requests: 1',
   'user-agent: Mozilla/5.0 (Linux; U; Android 7.1; GT-I9100 Build/KTU84P) AppleWebKit/603.12 (KHTML, like Gecko) Chrome/50.0.3755.367 Mobile Safari/600.8');
    $ch = curl_init($url);
    
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = json_decode(curl_exec($ch), true);
    curl_close($ch);
    return $response;
}
$ip=thongtin($url);
$quocgia=$ip['country'];
$vitri=$ip['city'];
$nhamang=$ip['organization'];

$logo = "\033[1;32m
⠀     
⠀⠀⠀⠀⠀⠙⢷⣤⣤⣴⣶⣶⣦⣤⣤⡾⠋⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⠀⠀⠀⠀⠀
⠀⠀⠀⠀⣼⣿⣿⣉⣹⣿⣿⣿⣿⣏⣉⣿⣿⣧⠀⠀⠀⠀
⠀⠀  ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⠀⠀
⣠⣄ ⢠⣤⣤⣤⣤⣤⣤⣤⣤⣤⣤⣤⣤⣤⣤⡄⢠⣠⣄$incon \033[1;32mZALO: \033[1;35m0852338392
\033[1;32m⣿⣿ ⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⢸⣿⣿$incon \033[1;32mFACEBOOK: \033[1;35mLiên'n Mõm'm
\033[1;32m⣿⣿ ⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⢸⣿⣿$incon \033[1;32mYOUTUBE: \033[1;35mLiên Mõm TOOL
\033[1;32m⣿⣿ ⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⢸⣿⣿$incon \033[1;32mTIKTOK: \033[1;35mlien.momm.tool
\033[1;32m⣿⣿ ⢸⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⢸⣿⣿$incon \033[1;32mTELEGRAM: \033[1;35mt.me/lienmomtool
\033[1;32m⠻⠟ ⠁⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡇⠁⠻⠟    $do THÔNG TIN CỦA BẠN 
⠀⠀⠀⠀\033[1;32m⠉⠉⣿⣿⣿ ⠉⠉ ⣿⣿⣿$incon \033[1;32mQUỐC GIA CỦA BẠN LÀ: \033[1;33m$quocgia ⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀\033[1;32m⣿⣿⣿ ⠀  ⣿⣿⣿$incon \033[1;32mNHÀ MẠNG CỦA BẠN LÀ: \033[1;33m$nhamang
⠀⠀⠀⠀⠀⠀\033[1;32m⣿⣿⣿ ⠀  ⣿⣿⣿$incon \033[1;32mVỊ TRÍ CỦA BẠN LÀ: \033[1;33m$vitri
⠀⠀⠀⠀⠀⠀          
\033[1;35m  _      _____ ______ _ \033[1;34m  _    __  __  ____  __  __ 
\033[1;34m | |    |_   _|  ____| \ | |\033[1;33m  |  \/  |/ __ \|  \/  |
\033[1;33m | |      | | | |__  |  \| | \033[1;32m | \  / | |  | | \  / |
\033[1;32m | |      | | |  __| | . ` | \033[1;31m | |\/| | |  | | |\/| |
\033[1;31m | |____ _| |_| |____| |\  | \033[1;32m | |  | | |__| | |  | |
\033[1;36m |______|_____|______|_| \_|\033[1;36m  |_|  |_|\____/|_|  |_|
 
   \033[1;33mTOOL:\033[1;35m TTC                     \033[1;32mPHIÊN BẢN:\033[1;33m 1.0                                                                          
$thanh                                                                                                                 \n";    
$cuongdz = "\033[1;31m[\033[1;33m㊪\033[1;31m]$trang =>";

$thanhngang = $do."────────────────────────────────────────────────────────────\n";
/***[ Banner ]***/


date_default_timezone_set("Asia/Ho_Chi_Minh");
$useragent="Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36";
@system("clear");
/***[ Clear + Thông Số Admin ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') { 
    @system('clear'); 
} else { 
    @system('cls'); 
}
logo($logo);
$_SESSION['fck'] = file_exists("ttc.txt");
if ($_SESSION['fck'] == '1'){
  unlink("ttc.txt");
}
$_SESSION['check'] = file_exists("logttc.txt");
if ($_SESSION['check'] =='1'){
luachon1:
echo "$incon $luc Bạn Đã Đăng Nhập Trước Đó! Bấm $yellow Enter $green Để Tiếp Tục!\n";
echo "$incon $luc Nhập $do No $luc Để Đăng nhập lại: $trang";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='no' and $_SESSION['nhap'] != 'No' and $_SESSION['nhap'] !=''){
echo $red."Sai Định Dạng\n";
GOTO luachon1;
}
if ($_SESSION['nhap'] =='no' or $_SESSION['nhap'] =='No'){
$my = fopen("logttc.txt", "w+");
echo $cuongdz.$luc."Nhập TTC_Access_token TTC: $vang";
$TTC_Access_token =trim(fgets(STDIN));

$arr = array("TTC_Access_token"=> $TTC_Access_token);
fwrite($my,json_encode($arr));
    $my = file("logttc.txt");
$bb = file_get_contents('logttc.txt');
$cc =json_decode($bb);
$_SESSION['TTC_Access_token']= $cc->{"TTC_Access_token"};
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("logttc.txt");
$cc =json_decode($bb);
$_SESSION['TTC_Access_token']= $cc->{"TTC_Access_token"};
}
} else {
luachon2:
$my = fopen("logttc.txt", "w+");
echo $cuongdz.$luc."Nhập TTC_Access_token TTC: $vang";
$TTC_Access_token =trim(fgets(STDIN));
$arr = array("TTC_Access_token"=> $TTC_Access_token);
fwrite($my,json_encode($arr));
$_SESSION['TTC_Access_token'] = $TTC_Access_token;
}
$TTC_Access_token = $_SESSION['TTC_Access_token'];
$source = getcookiettc($TTC_Access_token,$useragent);
$sou= json_decode($source,true);
if ($sou['status'] == 'success' ){
  echo $luc."Đăng Nhập Thành Công\r";
  $user = $sou['data']['user'];
  $xu = $sou['data']['sodu'];
}else{
	echo $red.$sou['mess'];
	GOTO luachon2; 
}
do {
$khocookie = [];
echo $thanhngang;
echo $do."$incon ".$trang."=> ".$luc."Nhập Cookie Facebook.\033[1;33mMuốn Dừng Nhập Thì Bấm Enter\n";
for($a = 1; $a < 999999;$a++){
echo $do."$incon ".$trang."=> ".$luc."Nhập Cookie Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}

array_push($khocookie,$nhapck);
}
            
$demcki=count($khocookie);
            
echo $do."$incon ".$trang."=> ".$luc."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Cookie Facebook\n";
sleep(1);
} while (count($khocookie)==0);

//$thongtin

system('clear');
echo $banner;
echo"$incon  \033[1;32mĐang Chạy Tool \033[1;37mTTC COOKIE\n";
echo"$incon  ".$yellow."Số Nick Chạy:$green $demcki\n";
$xu = getxu();
echo"$incon  ".$cyan."Xu Hiện Tại:$yellow $xu\n";
echo"\033[1;31m────────────────────────────────────────────────────────────\n";
echo"$incon  \033[1;32mNhiệm Vụ Like (y/n) : \033[1;33m";
$chon1=trim(fgets(STDIN));
  if ($chon1 == 'y' ){
    echo"$incon  \033[1;32mDelay Like : \033[1;33m";
    $delaylike = trim(fgets(STDIN));
  }
echo"$incon  \033[1;32mNhiệm Vụ Follow (y/n) : \033[1;33m";
$chon2=trim(fgets(STDIN));
  if ($chon2 == 'y' ){
    echo"$incon  \033[1;32mDelay Follow : \033[1;33m";
    $delayfl = trim(fgets(STDIN));
  }
echo"$incon  \033[1;32mNhiệm Vụ Comment (y/n) : \033[1;33m";
$chon3=trim(fgets(STDIN));
  if ($chon3 == 'y' ){
    echo"$incon  \033[1;32mDelay Comment : \033[1;33m";
    $delaycmt = trim(fgets(STDIN));
  }
echo"$incon  \033[1;32mNhiệm Vụ Share (y/n) : \033[1;33m";
$chon4=trim(fgets(STDIN));
  if ($chon4 == 'y' ){
    echo"$incon  \033[1;32mDelay Share : \033[1;33m";
    $delayshare = trim(fgets(STDIN));
  }
echo"$incon  \033[1;32mNhiệm Vụ Cảm Xúc (y/n) : \033[1;33m";
$chon5=trim(fgets(STDIN));
  if ($chon5 == 'y' ){
    echo"$incon  \033[1;32mDelay Cảm Xúc : \033[1;33m";
    $delaycx = trim(fgets(STDIN));
  }
echo"$incon  \033[1;32mNhiệm Vụ Like Page (y/n) : \033[1;33m";
$chon7=trim(fgets(STDIN));
  if ($chon7 == 'y' ){
    echo"$incon  \033[1;32mDelay Page : \033[1;33m";
    $delaypage = trim(fgets(STDIN));
  }
echo"$incon  \033[1;32mNhiệm Vụ Like CMT (y/n) : \033[1;33m";
$chon6=trim(fgets(STDIN));
  if ($chon6 == 'y' ){
    echo"$incon  \033[1;32mDelay Like CMT : \033[1;33m";
    $delayrecmt = trim(fgets(STDIN));
  }
  echo $thanhngang;
echo $do."$incon ".$trang."=> ".$green."Sau Bao Nhiêu Nhiệm Vụ Thì Dừng Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
echo $do."$incon ".$trang."=> ".$green."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
echo $do."$incon ".$trang."=> ".$green."Chuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang";
$doinick = trim(fgets(STDIN));
echo $do."$incon ".$trang."=> ".$green."Chạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool: $vang";
$dungtool = trim(fgets(STDIN));
while(true){
  if(count($khocookie) == 0){
echo $cuongdz.$cyan."Nhập Cookie Facebook.\033[1;33mMuốn Dừng Nhập Thì Bấm Enter\n";
for($a = 1; $a < 999999;$a++){
echo $cuongdz.$cyan."Nhập Cookie Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
$demcki=count($khocookie);
echo $cuongdz.$cyan."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Cookie Facebook\n";
sleep(1);
  }
  $themtk = 0;
  for($xz=0;$xz<count($khocookie);$xz++){
 if ( $themck == 1){ break; }
 $cookie = $khocookie[$xz];
 $access_token = gettoken($cookie,$useragent);
if ($access_token == 'die') {
    echo "\r";
    echo "                                                      \r";
    echo $do."$incon ".$trang."=> ".$red."Cookie Die!!!\n";
    array_splice($khocookie,$xz,1);
    continue;
}
$tenfb = json_decode(get_request('https://graph.facebook.com/me/?access_token='.$access_token,$cookie))-> {'name'};
$idfb = json_decode(get_request('https://graph.facebook.com/me/?access_token='.$access_token,$cookie))-> {'id'};
$h = datnick($idfb,$useragent);
if ($h == '1'){
echo $thanhngang;
echo "\033[1;32mĐang Cấu Hình: ".$yellow.$tenfb." ID: $trang".$idfb."".$res."\n";
echo $thanhngang;
} else {
  echo $thanhngang;
    echo $red."Cấu Hình Thất Bại Có Thể Do Bạn Chưa Thêm $tenfb Vào Cấu Hình\n";
    echo $thanhngang;
    exit;
}
$spam = 0;
$xu = $xuhientai;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($chon1, 'y') !== false) {
        for ($i = 0; $i < 5; $i++) {
            $listlike = getlike($useragent);
            if($listlike == ''){
          echo $do."$incon ".$trang."=> ".$do."Internet Không Ổn Định\r";
          while($listlike==''){
            $listlike = getlike($useragent);
          }}
            if (count($listlike) > 0) {
                break;
            }}
        if (count($listlike) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m Đang tạm thời hết nhiệm vụ like       \r"; 
        }
        if(isset($listlike['error'])){
			echo "Đi làm 10 nhiệm vụ like page và theo dõi rồi quay lại làm tiếp like post      \r";
			$chon1 = 'n';
			break;
		}  
    }
    //listfollow
    if (strpos($chon2, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listsub = getnv('sub',$useragent);
            if($listsub == ''){
          echo $do."$incon ".$trang."=> ".$do."Internet không ổn định\r";
          while($listsub==''){
            $listsub = getnv('sub',$useragent);
          }}
            if (count($listsub) > 0) {
                break;
            }
        }
      if (count($listsub) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m Đang tạm thời hết nhiệm vụ Follow      \r"; 
        }
    }
   
    //listcmt
    if (strpos($chon3, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listcmt = getnv('cmt',$useragent);
            if($listcmt == ''){
          echo $do."$incon ".$trang."=> ".$do."Internet không ổn định\r";
          while($listcmt==''){
            $listcmt = getnv('cmt',$useragent);
          }}
            if (count($listcmt) > 0) {
                break;
            }}
        if (count($listcmt) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m Đang tạm thời hết nhiệm vụ CMT        \r"; 
        }
    }
    //share
    if (strpos($chon4, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listshare = getnv('share',$useragent);
            if($listshare == ''){
          echo $do."$incon ".$trang."=> ".$do."Internet không ổn Định\r";
          while($listshare==''){
            $listshare = getnv('share',$useragent);
          }}
            if (count($listshare) > 0) {
                break;
            }}
        if (count($listshare) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m Đang tạm thời hết nhiệm vụ Share       \r"; 
        }
    }
    //cx
    if (strpos($chon5, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listcx = getnv('camxuc',$useragent);
            if($listcx == ''){
          echo $do."$incon ".$trang."=> ".$do."Internet không ổn định\r";
          while($listcx==''){
            $listcx = getnv('camxuc',$useragent);
          }}
            if (count($listcx) > 0) {
                break;
            }}
        if (count($listcx) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m Đang tạm thời hết nhiệm vụ cảm xúc     \r"; 
        }
    }
    //cxcmt
    if (strpos($chon6, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listlikecmt = getnvcxcmt($useragent);
            if($listlikecmt == ''){
          echo $do."$incon ".$trang."=> ".$do."Internet không ổn định\r";
          while($listlikecmt==''){
            $listlikecmt = getnvcxcmt($useragent);
          }}
            if (count($listlikecmt) > 0) {
                break;
            }}
        if (count($listlikecmt) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m Đang tạm thời hết nhiệm vụ cx cmt     \r"; 
        }  
    }
    //page
    if (strpos($chon7, 'y') !== false) {
        for ($i = 1; $i < 5; $i++) {
            $listpage = getnv('likepage',$useragent);
            if($listpage == ''){
          echo $do."$incon ".$trang."=> ".$do."Internet Không Ổn Định\r";
          while($listpage==''){
            $listpage = getnv('likepage',$useragent);
          }}
            if (count($listpage) > 0) {
                break;
            }}
        if (count($listpage) == 0) {
          $rd = rand(1, 7);
echo "\033[1;3".$rd."m Đang tạm thời hết nhiệm vụ like page      \r"; 
        }
          
    }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
      
        if ($listlike != NULL) {
            $idlike = $listlike[$lap]["idpost"];
            if ($idlike != '') {
                $g = like($access_token, $idlike, $cookie);
				//var_dump( $g);
if ($dem % 25 == 0){
  $xu = getxu();
}
          if ($g -> {'error'} -> {'code'} == 190) {
           
                  echo "\r";
       echo "                                                      \r";
                    echo $do."$incon ".$trang."=> ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;

                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo "\r";
echo "                                                      \r";
echo $do."$incon ".$trang."=> \033[1;91mĐợi 5s Để Check Block Ảo Nhé\r";
sleep(5);
              $testbl = like($access_token,'10103832396388711', $cookie);
              if ($testbl -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo $do."$incon ".$trang."=> \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                            $nhanlike = nhantienlike($idlike,$useragent);
                $s= $nhanlike[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+400;
                    $xujob = 400;
                    $dem++;
                    
                    hoanthanh($dem, '  LIKE  ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
  echo $do."$incon ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                       
                    delay($delaylike);
                }
            }}
        //follow
        if ($listsub != NULL) {
            $idsub = $listsub[$lap]["idpost"];
            if ($idsub != '') {
                $g = follow($idsub, $cookie);
				//var_dump( $g);
if ($dem % 25 == 0){
  $xu = getxu();
}
// if (gettoken($cookie,$useragent) == 'die') {
           
                  // echo "\r";
       // echo "                                                      \r";
                    // echo $white."❥ ".$red."Cookie Die\n";
                    // array_splice($khocookie,$xz,1);
                    // $spam = 1; break;

                // }
                // if ($g -> {'error'} -> {'code'} == 368) {
// echo "\r";
// echo "                                                      \r";
// echo $white."❥ \033[1;91mĐợi 10s Để Check Block Ảo Nhé\r";
// sleep(10);
              // $testbl = follow($access_token,'4', $cookie);
              // if ($testbl -> {'error'} -> {'code'} == 368) {
                  // echo "\r";
       // echo "                                                      \r";
                    // echo $white."❥ \033[1;91m".$g-> {'error'}-> {'message'};
                    // echo "\n";
                    // array_splice($khocookie,$xz,1);
                    // $spam = 1;
                    // break;
                // }}
                $nhansub = traluong('sub',$idsub);
                $s= $nhansub[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, ' FOLLOW ', $idsub, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    
	$dungtool = 999999;
	$xu = getxu();
  echo $do."$incon ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
  exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                      
                    delay($delayfl);
                }
            }}
      
  //share
            if ($listshare != NULL) {
                $id = $listshare[$lap]["idpost"];
                if ($id != '') {
                    $g = share($access_token, $id,$cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}
          if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(get_request('https://graph.facebook.com/me/?access_token='.$access_token,$cookie))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $do."$incon ".$trang."=> ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo "\r";
echo "                                                      \r";
echo $do."$incon ".$trang."=> \033[1;91mĐợi 10s Để Check Block Ảo Nhé\r";
sleep(10);
              $testbl = share($access_token,'10103832396388711',$cookie);
              if ($testbl -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo $do."$incon ".$trang."=> \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
            $nhanshare = traluong('share',$id);
          $s= $nhanshare[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                            $xujob = 600;
                            $dem++;
                            hoanthanh($dem, ' SHARES ', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $do."$incon ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                            if($dem % $doinick == 0){
                      if (count($khocookie)>1){       
                      $spam = 1; break;
                      }
                            }
                            if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                      
                    delay($delayshare);
                }
                }}
          //cảm xúc
        if ($listcx != NULL) {
            $idcx = $listcx[$lap]["idpost"];
            $type = $listcx[$lap]["loaicx"];
            if ($idcx != '') {
                $g = camxuc($idcx, $type, $cookie);
 if ($dem % 25 == 0){
  $xu = getxu();
}
                // if ($g -> {'error'} -> {'code'} == 190) {
                      // echo "\r";
       // echo "                                                      \r";
                        // echo $white."❥ ".$red."Cookie Die\n";
                    // array_splice($khocookie,$xz,1);
                        // $spam = 1; break;
                    // }
                    // if ($g -> {'error'} -> {'code'} == 368) {
                      // echo "\r";
       // echo "                                                      \r";
                        // echo $white."❥ ".$red."\033[1;91m".$g-> {'error'}-> {'message'};
                        // echo "\n";
                        // array_splice($khocookie,$xz,1);
                        // $spam = 1; break;
                    // }

                $nhancx = traluongcx($type,$idcx);
                $s= $nhancx[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+400;
                    $xujob = 400;
                    $dem++;
                    if ($type == 'WOW') {
                        $type = '  WOW   ';
                    } elseif ($type == 'SAD') {
                        $type = '  SAD   ';
                    } elseif ($type == 'ANGRY') {
                        $type = '  ANGRY ';
                    } elseif ($type == 'LOVE') {
                        $type = '  LOVE  ';
                    } elseif ($type == 'HAHA') {
                        $type = '  HAHA  ';
                    } elseif ($type == 'CARE') {
                        $type = '  CARE  ';
                    }
                    hoanthanh($dem, $type, $idcx, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $do."$incon ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                       
                    delay($delaycx);
                }
            }}
    
        //likecmt
        if ($listlikecmt != NULL) {
            $idlikecmt = $listlikecmt[$lap]["idpost"];
            $type = $listlikecmt[$lap]["loaicx"];
            if ($idlikecmt != '') {
                if ($type == 'LIKE'){
                    like($access_token, $idlikecmt, $cookie);
                }else{
                    camxuc($idlikecmt, $type, $cookie);
                }
if ($dem % 25 == 0){
  $xu = getxu();
}
                $nhanlcmt = traluonglikecmt($type, $idlikecmt);
                $s= $nhanlcmt[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, $type.' CMT', $idlikecmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $do."$incon ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                      
                    delay($delayrecmt);
                } 
            }
        }
  
        //page
        if ($listpage != NULL) {
            $idpage = $listpage[$lap]["idpost"];
            if ($idpage != '') {
                $g = page($idpage, $cookie);
if ($dem % 25 == 0){
  $xu = getxu();
}
                 // if ($g -> {'error'} -> {'code'} == 190) {
                    // echo "\r";
       // echo "                                                      \r";
                    // echo $white."❥ ".$red."Cookie Die\n";
                    // array_splice($khocookie,$xz,1);
                    // $spam = 1; break;
                // }
                // if ($g -> {'error'} -> {'code'} == 368) {
                    // echo "\r";
       // echo "                                                      \r";
                    // echo $white."❥ ".$red."\033[1;91m".$g-> {'error'}-> {'message'};
                    // echo "\n";
                    // array_splice($khocookie,$xz,1);
                    // $spam = 1; break;
                // }
                
                $nhanpage = traluong('likepage',$idpage);
                $s= $nhanpage[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+700;
                    $xujob = 700;
                    $dem++;
                    hoanthanh($dem, '  PAGE  ', $idpage, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $white."❥ ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                       
                    delay($delaypage);
                }
            }
        }
        //cmt
        if ($listcmt != NULL) {
            $idcmt = $listcmt[$lap]["idpost"];
            $ms = json_decode($listcmt[$lap]["nd"]);
            $msg = $ms[0];
            if ($idcmt != '') {
                $g = cmt($access_token, $idcmt, $cookie, $msg);
if ($dem % 25 == 0){
  $xu = getxu();
}
                                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(get_request('https://graph.facebook.com/me/?access_token='.$access_token,$cookie))->{'id'}){}else{
                  echo "\r";
       echo "                                                      \r";
                    echo $white."❥ ".$red."Cookie Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
echo "\r";
echo "                                                      \r";
echo $do."$incon ".$trang."=> \033[1;91mĐợi 10s Để Check Block Ảo Nhé\r";
sleep(10);
              $testbl = cmt($access_token,'10103832396388711', $cookie,'CuongDepZai');
              if ($testbl -> {'error'} -> {'code'} == 368) {
                  echo "\r";
       echo "                                                      \r";
                    echo $do."$incon ".$trang."=> \033[1;91m".$g-> {'error'}-> {'message'};
                    echo "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                $nhancmt = traluong('cmt',$idcmt);
                $s= $nhancmt[("mess")];
          if (strpos($s, 'Thành công') !== false) {
                    $xu = $xu+600;
                    $xujob = 600;
                    $dem++;
                    hoanthanh($dem, 'COMMENTS', $idcmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
	$xu = getxu();
    echo $do."$incon ".$trang."=> ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                        
                    delay($delaycmt);
                }
            }}
     
       
    
    }
}}}

function follow($idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$idtest.'?_rdr');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
	$head[] = "upgrade-insecure-requests: 1";
    // $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    // $head[] = "Accept-Language: en-us,en;q=0.5";
    // $head[] = "Accept-encoding: gzip, deflate, br";
    // $head[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-ch-ua-mobile: ?0";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36');
    //curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt($ch, CURLOPT_REFERER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
	//return $access;
	$url1 = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    if(strpos($access,'/a/subscribe.php?') !== false){
	$haha = explode('<a href="', $access);
	//$haha2 = null;
	//echo 1;
    for($v = 0; $v<count($haha); $v++){
	if(strpos($haha[$v],'/a/subscribe.php?') !==false){
		$haha2 = explode('" class=', $haha[$v])[0];
		break;
	}
	}
	//if()
	$link2 = html_entity_decode($haha2);
    // echo $url1;
	curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2.'&_rdr');
	curl_setopt($ch, CURLOPT_REFERER, $url1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $fl = curl_exec($ch);
	//echo curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
	curl_close($ch);
	//return $fl;
	}else{
		curl_close($ch);
		return 'id '.$idtest.' loi';
		//return $access;
	}
    
}


function share($access_token,$id, $cookie) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_COOKIE, $cookie);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
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
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
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
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
  $xu = getxu();
  $t = date('H:i:s');
  $idk = substr($id, 0,15);
  $rd = rand(1, 7);
  echo "\r";
      echo "                                              \r";
    $a = "\033[1;33m[".$dem."\033[1;33m] \033[1;31m❥ \033[1;36m$t\033[1;31m ❥\033[1;3".$rd."m$type\033[1;31m❥ \033[1;34mID ĐÃ ẨN \033[1;31m❥ \033[1;32m+$xujob \033[1;31m❥ \033[1;93m".$xu." Xu\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
    }
}
function delay($delay) {
    $time = $delay; 
    for ( $x = $time; $x--; $x ) {
    echo "                                                      \r";
       echo "\033[1;32mLIEN MOM  VIP~~~>\033[1;93m $x\033[1;91m | ";
usleep(133333);
echo "\033[1;31m -  ";
usleep(133333);
echo "\033[1;32m -  ";
usleep(133333);
echo "\033[1;33m -  ";
usleep(133333);
echo "\033[1;34m -  ";
usleep(133333);
echo "\033[1;35m -  ";
usleep(133333);
        echo "\r \033[1;31m> Đang tìm nhiệm vụ.. Loading..\033[1;36m ❥\033[1;32m ❥\033[1;33m ❥ \033[0m\r";
}}
function delay2($delaybl){
  $green="\e[1;32m";
  $yellow="\e[1;33m";
  for($j = $delaybl;$j> 0;$j--){
    echo "\r";
    echo "                                                      \r";
    echo $green."Đang Chờ Delay Tránh Block$yellow $j Giây";
             sleep(1);
      
           }
  echo "\r";
  echo "                                                      \r";
}
function getcookiettc($TTC_Access_token,$useragent){
  $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/logintoken.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "ttc.txt");
curl_setopt($ch, CURLOPT_USERAGENT,$useragent);
$login =array('access_token' => $TTC_Access_token);
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
$source=curl_exec($ch);
curl_close($ch);
return $source;
}
function datnick($idfb,$useragent){
$url = 'https://tuongtaccheo.com/cauhinh/datnick.php';
$header = array(
  "Host: tuongtaccheo.com",
  "accept: */*",
  "x-requested-with: XMLHttpRequest",
  "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36",
  "content-type: application/x-www-form-urlencoded; charset=UTF-8",
  "origin: https://tuongtaccheo.com",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "referer: https://tuongtaccheo.com/cauhinh/",
);
  $data = 'iddat%5B%5D='.$idfb."&loai=fb";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_PORT, "443");
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_ENCODING, "");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_TIMEOUT, 30);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_COOKIEFILE, "ttc.txt");
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  $h = curl_exec($ch);
  curl_close($ch);
  return $h;
}
function getlike($useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "ttc.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function nhantienlike($id,$useragent){
  $ch= curl_init();
  $data= ('id=').$id;
  curl_setopt($ch, CURLOPT_URL, 'https://tuongtaccheo.com/kiemtien/nhantien.php');
  $head[]='Host: tuongtaccheo.com';
  $head[]='content-length: '.strlen($data);
  $head[]='x-requested-with: XMLHttpRequest';
  $head[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
  $head[]='origin: https://tuongtaccheo.com';
  $head[]='referer: https://tuongtaccheo.com/kiemtien/';
  $head[]='cookie: TawkConnectionTime=0';
  curl_setopt($ch,CURLOPT_USERAGENT, $useragent);
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch,CURLOPT_POST, 1);
  curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
  curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
  curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
  curl_setopt($ch,CURLOPT_ENCODING, TRUE);
  curl_setopt($ch,CURLOPT_COOKIEFILE,"ttc.txt");
  $xu= json_decode(curl_exec($ch), true);
  curl_close($ch);
  return $xu;
}
function getxu(){
  $url = "https://tuongtaccheo.com/home.php";
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_SSL_VERIFYPEER => true,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_COOKIEFILE => "ttc.txt"
  ));
  $data = curl_exec($curl);
  curl_close($curl);
  preg_match('#id="soduchinh">(.+?)<#is', $data, $sd);
  $xu = $sd["1"];
  return $xu; 
}
function getnv($loai,$useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/'.$loai.'cheo/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/'.$loai.'cheo';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "ttc.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function getnvcxcmt($useragent){
 $ch=curl_init();
 curl_setopt($ch, CURLOPT_URL,'https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/getpost.php');
 $head[]='Host: tuongtaccheo.com';
 $head[]='accept: application/json, text/javascript, *'.'/'.'*; q=0.01';
 $head[]='x-requested-with: XMLHttpRequest';
 $head[]='user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36';
 $head[]='referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan';
 curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
 curl_setopt($ch,CURLOPT_FOLLOWLOCATION, TRUE);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
 curl_setopt($ch,CURLOPT_POST,1);
 curl_setopt($ch,CURLOPT_HTTPGET, true);
 curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch,CURLOPT_HTTPHEADER, $head);
 curl_setopt($ch,CURLOPT_ENCODING, TRUE);
 curl_setopt($ch,CURLOPT_COOKIEFILE, "ttc.txt");
 return json_decode(curl_exec($ch),true);
 curl_close($ch);
}
function traluong($loai,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/$loai"."cheo/nhantien.php";
    $data= ('id=').$id;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/$loai"."cheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "ttc.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}

// function gettoken($cookie,$useragent){
// $ch = curl_init();
  // curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/me');
// $head[] = "Connection: keep-alive";
// $head[] = "Keep-Alive: 300";
// $head[] = "authority: m.facebook.com";
// $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
// $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
// $head[] = "cache-control: max-age=0";
// $head[] = "upgrade-insecure-requests: 1";
// $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
// $head[] = "sec-fetch-site: none";
// $head[] = "sec-fetch-mode: navigate";
// $head[] = "sec-fetch-user: ?1";
// $head[] = "sec-fetch-dest: document";
// curl_setopt($ch, CURLOPT_USERAGENT,$useragent );
// curl_setopt($ch, CURLOPT_ENCODING, '');
// curl_setopt($ch, CURLOPT_COOKIE, $cookie);
// curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// curl_setopt($ch, CURLOPT_TIMEOUT, 60);
// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
// $access = curl_exec($ch);
// curl_close($ch);
// $uid = ;
// $r = '/profile_id=(\d*)/';
// if(preg_match($r,$s,$matches)){
// $uid = $matches[1];
// return $uid;
// }else{
// return false;
// }
// }
function gettoken($cookie,$useragent){
$head= array("Connection: keep-alive","Keep-Alive: 300","authority: business.facebook.com","ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7","accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5","cache-control: max-age=0","upgrade-insecure-requests: 1","accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9","sec-fetch-site: none","sec-fetch-mode: navigate","sec-fetch-user: ?1","sec-fetch-dest: document");
$ch=curl_init();
	curl_setopt_array($ch , array(
		CURLOPT_URL => "https://business.facebook.com/content_management",
		CURLOPT_USERAGENT => $useragent,
		CURLOPT_COOKIE => $cookie,
		CURLOPT_HTTPHEADER => $head,
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_SSL_VERIFYPEER => FALSE,
		CURLOPT_TIMEOUT => 60,
		CURLOPT_CONNECTTIMEOUT => 60,
		CURLOPT_FOLLOWLOCATION => TRUE
	));
	$access = curl_exec($ch);
	curl_close($ch);
$access_token = 'EAAG'.explode('","', explode('EAAG', $access)[1])[0];
if(strlen($access_token) > 5){
	return $access_token;
} else {
	return 'die';
}
}
function camxuc($idcx, $type, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/reactions/picker/?is_permalink=1&ft_id='.$idcx);
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "Accept-Language: en-us,en;q=0.5";
	$head[] = "sec-ch-ua-mobile: ?0";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect
    // :'));
    $cx = curl_exec($ch);
    $haha = explode('<a href="', $cx);
    if ($type == 'LIKE') {
        $haha2 = explode('" style="display:block"', $haha[1])[0];
    } else if ($type == 'LOVE') {
        $haha2 = explode('" style="display:block"', $haha[2])[0];
    } else if ($type == 'WOW') {
        $haha2 = explode('" style="display:block"', $haha[5])[0];
    } else if ($type == 'CARE') {
        $haha2 = explode('" style="display:block"', $haha[3])[0];
    } else if ($type == 'HAHA') {
        $haha2 = explode('" style="display:block"', $haha[4])[0];
    } else if ($type == 'SAD') {
        $haha2 = explode('" style="display:block"', $haha[6])[0];
    } else {
        $haha2 = explode('" style="display:block"', $haha[7])[0];
    }
    $link2 = html_entity_decode($haha2);
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com'.$link2);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_exec($ch);
    curl_close($ch);
}
function traluongcx($type,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheo/nhantien.php";
    $data= 'id='.$id.'&loaicx='.$type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheo/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIEFILE => "ttc.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function traluonglikecmt($type,$id)
{
    $url  = "https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/nhantien.php";
    $data= 'id='.$id.'&loaicx='.$type;
    $head = array(
        "Host: tuongtaccheo.com",
        "content-length: " . strlen($data),
        "x-requested-with: XMLHttpRequest",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36",
        "content-type: application/x-www-form-urlencoded; charset=UTF-8",
        "origin: https://tuongtaccheo.com",
        "referer: https://tuongtaccheo.com/kiemtien/camxuccheobinhluan/"
    );
    $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_COOKIEFILE => "ttc.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = json_decode(curl_exec($ch), true);
    return $a;
}
function page($idpage, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mbasic.facebook.com/'.$idpage.'?_rdr');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
	$head[] = "upgrade-insecure-requests: 1";
    // $head[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    // $head[] = "Accept-Language: en-us,en;q=0.5";
    // $head[] = "Accept-encoding: gzip, deflate, br";
    // $head[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
	$head[] = "sec-ch-ua-mobile: ?0";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $page = curl_exec($ch);
    if (explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0]) {
        $get = explode('&amp;refid=', explode('pageSuggestionsOnLiking=1&amp;gfid=', $page)[1])[0];
        $link = 'https://mbasic.facebook.com/a/profile.php?fan&id='.$idpage.'&origin=page_profile&pageSuggestionsOnLiking=1&gfid='.$get.'&refid=17';
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
    }
    curl_close($ch);

}
function get_request($url,$cc = null){
   $curl = curl_init();
   $head[] = "sec-ch-ua-mobile: ?0";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-dest: document";
	$head[] = "upgrade-insecure-requests: 1";
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_COOKIE, $cc);
   curl_setopt($curl, CURLOPT_REFERER, 'https://www.facebook.com/');
   curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36');
   $ch = curl_exec($curl);
   curl_close($curl);
   return $ch;
   }
?>