 <?php
  

function send_LINE($msg){
 $access_token = 'C0jYgehR6Baz7bFAvDfO3L671u5Gdk5ms5mUZ5aes7M29+hxXhLoRRYrWDSO6IedYdll3tzLIvZMhIK4cOc5LrSBVMkcZzoYS4AwSg13+B5K42GU5eC4y7sh7N9vNbTTs+MpSsA3pM2I7pbsFOlV1QdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ue38ab2c1c6c699ad1c8174ba463b5b8e',
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
