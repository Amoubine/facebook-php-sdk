 require_once("facebook.php");

  $config = array();
  $config['appId'] = '1400712613485469';
  $config['secret'] = 'd97ea260514f97d7b320a52890f72427';
  $config['fileUpload'] = false; // optional

  $facebook = new Facebook($config);
