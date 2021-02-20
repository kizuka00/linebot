 <?php
  

function send_LINE($msg){
 $access_token = 'H29lzy1wr15YxIRPyaXWCdaOJWJ4bv6LdsnemgfAAVpbWYqZfC8/n7iPwM0Hz/RT1rVo+dTiPN5QZDbnAdO21QBEf6O/tz2dlvyWyPRiwHJ6Gx+Aifn9QsLpBSaaHdewLDmuoVHMRywzuvQwuj7IEgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ue5ae775842abdaf788d6062538a70e69',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
