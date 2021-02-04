<?php
define('LINE_API', "https://notify-api.line.me/api/notify");
$token = "8KjMM1yp6C6C6A3FlD8Ii95JgRWA7hWFnMK57iAe1kI"; //ใส่Token ที่copy เอาไว้
$params = array(
  "message"        => "คิวที่:1\nบัญชี:นายวัชระพล อัคฮาด\nเลขที่:012-345-6789\nธนาคาร:กรุงไทย\nสถานะ:รอการอนุมัติ\nจัดการ:https://www.facebook.com/", //ข้อความที่ต้องการส่ง สูงสุด 1000 ตัวอักษร
  "stickerPkg"     => 2, //stickerPackageId
  "stickerId"      => 34, //stickerId
  "imageThumbnail" => "https://www.thairath.co.th/media/dFQROr7oWzulq5FZUEbeR55pK8y864BcgC8odj6S99FBGl2zbqsAJSxZyDMiDKT7IDt.jpg", // max size 240x240px JPEG
  "imageFullsize"  => "https://www.thairath.co.th/media/dFQROr7oWzulq5FZUEbeR55pK8y864BcgC8odj6S99FBGl2zbqsAJSxZyDMiDKT7IDt.jpg", //max size 1024x1024px JPEG
);
$res = notify_message($params, $token);
// print_r($res);
 
function notify_message($params, $token) {
  $queryData = array(
    'message'          => $params["message"],
    'imageThumbnail'   => $params["imageThumbnail"],
    'imageFullsize'    => $params["imageFullsize"],
  );
  $queryData = http_build_query($queryData, '', '&');
  $headerOptions = array(
    'http' => array(
      'method'  => 'POST',
      'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
      . "Authorization: Bearer " . $token . "\r\n"
      . "Content-Length: " . strlen($queryData) . "\r\n",
      'content' => $queryData,
    ),
  );
  $context = stream_context_create($headerOptions);
  $result = file_get_contents(LINE_API, FALSE, $context);
  $res = json_decode($result);
  return $res;
}
?>

