


<?php
 //http://stackoverflow.com/questions/18382740/cors-not-working-php
 if (isset($_SERVER['HTTP_ORIGIN'])) {
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }
 
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
 
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         
 
        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
 
        exit(0);
    }
 
 
    //http://stackoverflow.com/questions/15485354/angular-http-post-to-php-and-undefined
    $postdata = file_get_contents("php://input");
 if (isset($postdata)) {
 $request = json_decode($postdata);
 $mydata = $request->mydata;

 
 
 if($mydata == "On"){
     echo "I'm your pet, thanks again for feeding me :) SENT FROM RASPBERRY PI ";
      include 'echo.php';
 }elseif($mydata == "Off"){
     echo "This is your pet.... Why would you do this to me? :(";
     
 } elseif($mydata == "test1"){
     $mytest = shell_exec('python testpython.py');
     echo $mytest;
 }elseif ($mydata != "") {
 echo  $mydata . ", hello my friend, I'm a fellow server. Here's your data!: ...jk ";

 }

 
 
 else {
 echo "Holy cow what happened?";
 }
}
?>
