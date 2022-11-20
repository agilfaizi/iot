<?php
$host   = "riset.revolusi-it.com";
$port     = 1883;
$username = "";
$password = "";

require("phpMQTT.php");
$message = "D3=1";
$message = @$_GET["message"];
$mqtt = new bluerhinos\phpMQTT($host, $port, "ClientID".rand());

if ($mqtt->connect(true,NULL,$username,$password)) {
  $mqtt->publish("iot/kendali",$message, 0);
  $mqtt->close();
  //echo "Mesaage TErkirim";
}else{
  echo "Fail or time out
";
}
?>
<html>
  <head>
  <style>
  a{
    text-decoration: none;
    color : white;
  }
  .button_green {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
.button_red {
  background-color: red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}

</style>
  </head>
  <body>
    <!-- D1 -->
    <a href="http://localhost/iot/send.php?message=D1=0"><button class="button_red">D1 Mati</button></a>
    <a href="http://localhost/iot/send.php?message=D1=1"><button class="button_green">D1 Nyala</button></a>
</br>
    <!-- D3 -->
    <a href="http://localhost/iot/send.php?message=D2=0"><button class="button_red">D2 Mati</button></a>
    <a href="http://localhost/iot/send.php?message=D2=1"><button class="button_green">D2 Nyala</button></a>
    </br>
    <!-- D3 -->
    <a href="http://localhost/iot/send.php?message=D3=0"><button class="button_red">D3 Mati</button></a>
    <a href="http://localhost/iot/send.php?message=D3=1"><button class="button_green">D3 Nyala</button></a>
    </br>
    <!-- D3 -->
    <a href="http://localhost/iot/send.php?message=D4=0"><button class="button_red">D4 Mati</button></a>
    <a href="http://localhost/iot/send.php?message=D4=1"><button class="button_green">D4 Nyala</button></a>
    </br>
  </body>
</html>