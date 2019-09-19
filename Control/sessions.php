<?php

// Functions to manage Sessions and logins


// check credentials and return boolean result
function authenticate($user, $password) {
   if ($user == "user1" && $password == "password") {
     return true;
   }
   return false;
 }

/* Get credentials and redirect on success
   render error on failure
*/
function login() {
   $user = $_GET["user"];
   $password = $_GET["passwd"];
   if (authenticate($user, $password)) {
      $_SESSION["token"] = "test";
      $_SESSION["authenticated"] = true;

          //echo "token: " . $_SESSION["token"] . "<br>";
          //echo "authenticated" . $_SESSION["authenticated"] . "<br>";
      header("Location: auctions.php");
   }
   else {
      echo '<h4 style="color: red;">Login Failed try again</h4>';
      echo "user: ".$user." password: ".$password;
   }
}

/* Logs out user */
function logout() {
   session_destroy();
   $_SESSION["token"] = "";
   $_SESSION["authenticated"] = false;
}

function test() {
   echo "<br>test successful<br>";
}
?>