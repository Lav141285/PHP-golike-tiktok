
$ngay = date("d");
$thang = date("m");
$nam = date("Y");
 
 
$red = "\033[1;31m";
 
$green = "\033[1;32m";
 
$yellow = "\033[1;33m";
 
$blud = "\033[1;34m";
 
$res = "\033[1;35m";
 
$nau = "\033[1;36m";
 
$trang = "\033[1;37m";
 
$cam = "\e[38;5;208m";
 
$loijob = [];
 
$loitk = [];
$red="\033[1;31m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$green="\033[1;32m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$yellow="\033[1;33m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$blud="\033[1;34m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$res="\033[1;35m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$nau="\033[1;36m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$trang="\033[1;37m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$cam= "\e[38;5;208m";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loijob=[];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loitk=[];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
error_reporting(0);
system('clear');
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

function GET($host,$tsm){
  $mr = curl_init();/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_URL => "$host",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_CUSTOMREQUEST => "GET",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_HTTPHEADER => $tsm,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_FOLLOWLOCATION => true,));/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  
  function HEAD($host,$tsm,$data){
  $mr = curl_init();/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  curl_setopt_array($mr, array(/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_CUSTOMREQUEST => "HEAD",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_HEADER => true));
  $mr2 = curl_exec($mr); curl_close($mr);
 return $mr2;}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

function POST($host,$tsm,$data){
  $mr = curl_init();/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  curl_setopt_array($mr, array(/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_SSL_VERIFYPEER => false,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_CUSTOMREQUEST => "POST",/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
  //CURLOPT_HEADER => true
));
  $mr2 = curl_exec($mr); curl_close($mr);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
 return $mr2;}
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

 function cc($vanban){$str = strlen($vanban);
 for($i=0;$i<=$str;$i++){echo $vanban[$i]; usleep(1000);}
return 1;}







echo "Nhập Time delay: ";
$delay = trim(fgets(STDIN));

$html="htmlspecialchars_decode";
////////////////golike//////////////////////////
$a1="Host:gateway.golike.net";
$a2="user-agent: Mozilla/5.0 (Linux; Android 12; SM-A025F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.141 Mobile Safari/537.36";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$a3="authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MTA4MzEwNDcsImV4cCI6MTc0MjM2NzA0NywibmJmIjoxNzEwODMxMDQ3LCJqdGkiOiJPQ2tlQWRIdGJTMmdBemN3Iiwic3ViIjoyMTYzMjUxLCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.5OsJO-E7uH8RLo-CcErlhAx47Nh0YfVt_Ab4n6lCgRI        ";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$a4="origin: https://app.golike.net";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$a5 = "t: VFZSWk5FOVVXVFJPVkdzd1RsRTlQUT09";
 
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$b1 ="Host: gateway.golike.net";
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm = array($a1,$a2,$a3,$a4,$a5);
$tsm1 = array($b1,$a2,$a3,$a4,$a5);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/


$go = get("https://gateway.golike.net/api/tiktok-account",$tsm);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$go = json_decode($go,true);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

$ff =0;/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
while(true){/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
	/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
	
$id = $go['data'][$ff]['id'];
$ten = $go['data'][$ff]['nickname'];
if($ten == true){
echo $yellow." [$ff] => NAME : $ten | ID : $id      \n";
$ff++;continue;}else{break;}
}
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
echo "Nhập Tài Khoản Chạy : ";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$co = trim(fgets(STDIN));/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$id = $go['data'][$co]['id'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$ten = $go['data'][$co]['nickname'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

while(true){


$golike = get("https://gateway.golike.net/api/advertising/publishers/tiktok/jobs?account_id=".$id."&data=null",$tsm1);/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/


$golike = json_decode($golike,true);
$link = $golike['data']['link'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$uid = $golike['data']['id'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$st = $golike['status'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$ty = $golike['data']['package_name'];
$coin = $golike['data']['price_per_after_cost'];


$linknow = explode(' ', explode('com/', $link)[1])[0];
    $now = "https://now.tiktok.com/$linknow";
 /*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loi_id = $golike['data']['object_id'];/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
if($ty =="comment" or $ty == "follow"){
;$data = '{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}';/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm3 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/");/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$loi = post("https://gateway.golike.net/api/advertising/publishers/tiktok/skip-jobs",$tsm3,$data);

/*[Tools Nguyễn Văn Phúc ]*/cc($p);
continue;}else{}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
if($st=="$delay"){;sleep($delay);continue;}else{echo " $ty | $uid          \r";}/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
("termux-open $link");/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
for($time=$delay;$time>0;$time--){
;sleep(0);}/*[Tool Tao Cấm Buôn Bán ]*/





/*[Tools Nguyễn Văn Phúc ]*/
$data = '{"ads_id":'.$uid.',"account_id":'.$id.',"async":true,"data":null}';/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm2 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/",);
/*[Tool Tao Cấm Buôn Bán ]*//*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

$nhan = post("https://gateway.golike.net/api/advertising/publishers/tiktok/complete-jobs",$tsm2,$data);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$nhan = json_decode($nhan,true);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$se = $nhan['success'];
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/

if($se == "1"){/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ngay=date("H:i");$noe++;/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$uu=$nau."$noe •".$cam." [$ngay] •".$trang." [$yellow$ty ".$trang."- $nau$uid".$trang."] •".$green." ꈤᐯᖘ •".$yellow." ".$red."=> ".$trang."[ +$coin ]  \n";cc($uu);}else{
$data = '{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}';/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$tsm3 = array($b1,$a2,$a3,$a4,"content-length: ".strlen($data),$a5,"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/");
$loi = post("https://gateway.golike.net/api/advertising/publishers/tiktok/skip-jobs",$tsm3,$data);

cc($p);
/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
}


}





