<?php 
//global variables not available in functions
$newVar = "Hello";
//to use global in function (can transfer multiple):
global $newVar, $otherVariable, $otherother;
$GLOBALS['newVar'] = global $newVar;
//makes function variables not delete after run
static $x = 0 
$cars = array("Volvo","BMW","Toyota");
count($cars);//gets length 3
array_push($fav_bands, "Maroon 5");
//associative arrays use keys you make
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
$age['Peter']// "35";
//to loop through associative
foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
//array sorting
sort()// ascending order
rsort()//descending order
asort()//sort associative arrays in ascending order, according to the value
ksort()//sort associative arrays in ascending order, according to the key
arsort()// sort associative arrays in descending order, according to the value
krsort()// sort associative arrays in descending order, according to the key
print join(":", $array); // prints "7:5:3:1"

//super globals (always accessible)
$GLOBALS
$_SERVER
    $_SERVER['PHP_SELF']//Returns the filename of the currently executing script
    $_SERVER['GATEWAY_INTERFACE']//Returns the version of the Common Gateway Interface (CGI) the server is using
    $_SERVER['SERVER_ADDR']	//Returns the IP address of the host server
    $_SERVER['SERVER_NAME']	//Returns the name of the host server (such as www.w3schools.com)
    $_SERVER['SERVER_SOFTWARE']	//Returns the server identification string (such as Apache/2.2.24)
    $_SERVER['SERVER_PROTOCOL']	//Returns the name and revision of the information protocol (such as HTTP/1.1)
    $_SERVER['REQUEST_METHOD']//Returns the request method used to access the page (such as POST)
    $_SERVER['REQUEST_TIME']//Returns the timestamp of the start of the request (such as 1377687496)
    $_SERVER['QUERY_STRING']//Returns the query string if the page is accessed via a query string
    $_SERVER['HTTP_ACCEPT']	//Returns the Accept header from the current request
    $_SERVER['HTTP_ACCEPT_CHARSET']	//Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
    $_SERVER['HTTP_HOST']//Returns the Host header from the current request
    $_SERVER['HTTP_REFERER']//Returns the complete URL of the current page (not reliable because not all user-agents support it)
    $_SERVER['HTTPS']//Is the script queried through a secure HTTP protocol
    $_SERVER['REMOTE_ADDR']//Returns the IP address from where the user is viewing the current page
    $_SERVER['REMOTE_HOST']//Returns the Host name from where the user is viewing the current page
    $_SERVER['REMOTE_PORT']	//Returns the port being used on the user's machine to communicate with the web server
    $_SERVER['SCRIPT_FILENAME']	//Returns the absolute pathname of the currently executing script
    $_SERVER['SERVER_ADMIN']	//Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
    $_SERVER['SERVER_PORT']	//Returns the port on the server machine being used by the web server for communication (such as 80)
    $_SERVER['SERVER_SIGNATURE']//Returns the server version and virtual host name which are added to server-generated pages
    $_SERVER['PATH_TRANSLATED']	//Returns the file system based path to the current script
    $_SERVER['SCRIPT_NAME']	//Returns the path of the current script
    $_SERVER['SCRIPT_URI']	//Returns the URI of the current page
$_REQUEST
//more expensive to run?
//merges post and get, good for validations
$_POST
    //used to collect data from inputs
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

$_GET
//pulls variable from URL Params
<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a> 
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];

$_FILES
$_ENV
$_COOKIE
$_SESSION

//string functions
strlen("Hello world!"); // counts chars 12
str_word_count("Hello world!"); // counts words 2
strrev("Hello world!"); // reverse !dlrow olleH
strpos("Hello world!", "world"); // finds first char of "world" outputs 6
str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
strtoupper()
substr($name, 0, 2); //char to start at and how many chars you want //em if $name is emi
strpos("emily", "e"); //0 returns first appearance or false if not there
//php constant
define(name, value, case-insensitive)
define("GREETING", "Welcome to W3Schools.com!", true); //ex
echo greeting; echo GREETING; // either ok

//functions
//sets default to 50
function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

//operators & math
$x ** $y //x  to the yth power
++$x //Increments $x by one, then returns $x
$x xor $y	//True if either $x or $y is true, but not both
$txt1 .= $txt2	//Appends $txt2 to $txt1 ($txt1 === $txt1$txt2)
//array can use + to combine arrays
round(8.911, 2) //8.91
print rand();// prints a number between 0 and 32767
print rand(1,10);// prints a number between 1 and 10

//executes for each value in array
foreach ($array as $value) {
    code to be executed;
}
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