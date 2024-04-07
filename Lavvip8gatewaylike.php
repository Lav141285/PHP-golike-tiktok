
$red="\033[1;31m";

$green="\033[1;32m";

$yellow="\033[1;33m";

$blud="\033[1;34m";

$res="\033[1;35m";

$nau="\033[1;36m";

$trang="\033[1;37m";

$cam= "\e[38;5;208m";

$loijob=[];

$loitk=[];

error_reporting(0);
system('clear');



function GET($host,$tsm){
  $mr = curl_init();

  curl_setopt_array($mr, array(
  CURLOPT_PORT => "443",

  CURLOPT_URL => "$host",

  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,

  CURLOPT_CUSTOMREQUEST => "GET",

  CURLOPT_HTTPHEADER => $tsm,


  CURLOPT_FOLLOWLOCATION => true,));

  $mr2 = curl_exec($mr); curl_close($mr);
  return $mr2;}

  
  function HEAD($host,$tsm,$data){
  $mr = curl_init();

  curl_setopt_array($mr, array(

  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",

  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_SSL_VERIFYPEER => false,

  CURLOPT_CUSTOMREQUEST => "HEAD",
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,

  CURLOPT_HEADER => true));
  $mr2 = curl_exec($mr); curl_close($mr);
 return $mr2;}


function POST($host,$tsm,$data){
  $mr = curl_init();

  curl_setopt_array($mr, array(

  CURLOPT_PORT => "443",
  CURLOPT_URL => "$host",
  CURLOPT_RETURNTRANSFER => true,


  CURLOPT_SSL_VERIFYPEER => false,

  CURLOPT_CUSTOMREQUEST => "POST",

  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => $tsm,

  //CURLOPT_HEADER => true
));
  $mr2 = curl_exec($mr); curl_close($mr);

 return $mr2;}



 function cc($vanban){$str = strlen($vanban);
 for($i=0;$i<=$str;$i++){echo $vanban[$i]; usleep(1000);}
return 1;}





$a1="Host: dev.golike.net";
$a2="user-agent: Mozilla/5.0 (Linux; Android 12; SM-A025F Build/SP1A.210812.016;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.141 Mobile Safari/537.36";

$a3="authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MTI0MjkwMjUsImV4cCI6MTc0Mzk2NTAyNSwibmJmIjoxNzEyNDI5MDI1LCJqdGkiOiI5c0Z0dDZSV2hpTVNWS1BUIiwic3ViIjoyNTA2MjE4LCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.8oPNin3pHBdkM8qx35pHEvS_T7aZWz8M-DEFTv5oegI        ";/*[Tool Tao Cấm Buôn Bán ]*/
/*[Tools Nguyễn Văn Phúc ]*/
$a4 = "origin: https://app.golike.net";
 
$a5 = "t: VFZSWk5FOVVXVFJPVkdzd1RsRTlQUT09";
 
 
 
 
 
 
$tsm = array($a1, $a2, $a3, $a4, $a5);
$tsm1 = array($a1, $a2, $a3, $a4, $a5);
 
 
 
 
 
$go = get("https://gateway.golike.net/api/tiktok-account", $tsm);
 
$go = json_decode($go, true);
 
 
$ff = 0;
 
while (true) {
 
 
 
 
    $id = $go['data'][$ff]['id'];
    $ten = $go['data'][$ff]['nickname'];
    if ($ten == true) {
        echo $yellow." [$ff] => NAME : $ten | ID : $id      \n";
        $ff++; continue;
    } else {
        break;
    }
}
 
 
 
echo "\nNhập Tài Khoản Chạy : ";
 
$co = trim(fgets(STDIN));
 
 
 
$id = $go['data'][$co]['id'];
 
$ten = $go['data'][$co]['nickname'];
 
 
 
 


 
while (true) {
 
    $golike = get("https://gateway.golike.net/api/advertising/publishers/tiktok/jobs?account_id=".$id."&data=null", $tsm1);
 
    $golike = json_decode($golike, true);
    $link = $golike['data']['link'];
    $uid = $golike['data']['id'];
    $st = $golike['status'];
    $ty = $golike['data']['package_name'];
    $coin = $golike['data']['price_per_after_cost'];
 
        
        
 
 
    $linknow = explode(' ', explode('com/', $link)[1])[0];
    $now = "https://now.tiktok.com/$linknow";
 
 
    $loi_id = $golike['data']['object_id'];
 
    if ($ty == "comment" or $ty == "follow") {
        echo "Job $ty         \r";
        $data = '{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}';
 
        $tsm3 = array($a1, $a2, $a3, $a4, $a5, "content-length: ".strlen($data), "content-type: application/json;charset=UTF-8", "accept: application/json, text/plain, */*", "referer: https://app.golike.net/");
 
        $loi = post("https://gateway.golike.net/api/advertising/publishers/tiktok/skip-jobs", $tsm3, $data);
        $loi = json_decode($loi, true);
        $mes = $loi['message'];
        if($mes == "Tôi không muốn làm Job này"){
$p = $red."Thành công           \r";
cc($p);}else{echo $yellow."Tôi không muốn làm Job này            \r";}
continue;}else{}

 
 
 
 if ($st >= "400") {
    echo "Đang Load Lại Job            \r"; sleep(10); continue;
} else {
    echo "Đang Làm job $ty | $uid          \r";
}



 
 
 
 
 
    

    $data = '{"ads_id":'.$uid.',"account_id":'.$id.',"async":true,"data":null}';
 
    $tsm2 = array($a1, $a2, $a3, $a4, $a5, "content-length: ".strlen($data), "content-type: application/json;charset=UTF-8", "accept: application/json, text/plain, */*", "referer: https://app.golike.net/",);
 
 
 
 
 
 
    $nhan = post("https://gateway.golike.net/api/advertising/publishers/tiktok/complete-jobs", $tsm2, $data);
 
 
 
 
    $nhan = json_decode($nhan, true);
 
 
    $se = $nhan['success'];
 
 
 
 
 
 
 
    if($se == "1"){

date_default_timezone_set('Asia/Ho_Chi_Minh');
$ngay=date("H:i");$noe++;

$uu=$nau."$noe •".$cam." [$ngay] •".$trang." [$yellow$ty ".$trang."- $nau$uid".$trang."] •".$green." ꈤᐯᖘ •".$yellow." ".$red."=> ".$trang."[ +$coin ]  \n";cc($uu);
for($time=$delay;$time>-1;$time--){
echo $yellow."Vui lòng đợi $time để thực hiện...... \r";sleep(1);}}else{
$data = '{"ads_id":'.$uid.',"object_id":"'.$loi_id.'","account_id":'.$id.',"type":"'.$ty.'"}';

$tsm3 = array($a1,$a2,$a3,$a4,$a5,"content-length: ".strlen($data),"content-type: application/json;charset=UTF-8","accept: application/json, text/plain, */*","referer: https://app.golike.net/");
$loi = post("https://gateway.golike.net/api/advertising/publishers/tiktok/skip-jobs",$tsm3,$data);

$loi = json_decode($loi,true);
$mes = $loi['message'];
if($mes == "Tôi không muốn làm Job này"){
$p = $red." Thành công           \r";
cc($p);}else{echo $yellow."Tôi không muốn làm Job này            \r";}


}


}




/*Lời Cảm Ơn Mọi Người Tôn Trọng và Ủng Hộ Ib Qua Zalo*/












