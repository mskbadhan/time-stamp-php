<title>Welcome to the chat</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;;
    }
    textarea{
        font-size:17px;
    }
    .submit{
        width:100px;
        height:40px;
        background: #2dffdf;
        font-size: 17px;
    }
</style>

<?php

$timeNow = time();

$actual_time=date("d M Y @H:i:s",$timeNow);
$modified = date("d M Y",strtotime("+1 week")); //1 week added from the current time
echo "the actual time is: ".$actual_time. "<br><br> but the modified time is: ".$modified;
?>
