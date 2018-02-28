<?php 
//variable example
$newVar = "Hello";

//switch with endswitch syntactic sugar
Switch($newVar):
    case "Hello": echo $newVar;
    break;
    //fall through case
    case "Good Bye":
    case "Bye":
    case "Later":
    //. concatinates like + in JS
    echo "Hello"."Not";
    break;
endswitch;
?>