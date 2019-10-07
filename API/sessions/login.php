<?php
  /* Accepts post request and authenticates user
     On success create and return cookie value
     On failure return null value 
  */
  
  // Get user from database
  function getUser($uname) {
    // e99a18c428cb38d5f260853678922e03
    return array('user'=>$uname,'pword'=>'abc123');
  }

  $user = $_POST['username'];
  $pword = $_POST['pword'];
  
  $result = getUser($user);

  if ($user == $result['user'] && $pword == $result['pword']) {
    echo md5($user.$pword);
  }
  else {
    //echo 'NULL: ' . null;
    header("HTTP/1.1 401 Unauthorized");
  }
?>
