<?php
/****************************************************************
  Coded by Marcel Pewny
	
	https://github.com/MPewny
	
	DON'T HOST ONLINE!!!
	 This is for localhost usage only
	 otherwise Your server can be hacked (shell injection)
	 
	READ README.txt BEFORE USING THIS SCRIPT!
****************************************************************/
function get_gui($gui) {
	if ($gui == "" || $gui == true || $gui == "on" || $gui == "yes" ) return true;
	else return false;
}
function check_gui(){
	if (get_gui($_GET['gui']) || get_gui($_GET['g']) || get_gui($_GET['interface'])) return true;
	else return false;
}

function title(){
	 $number = rand(2, 256);
	 $number = $number.rand(32, 512);
	 $number = md5($number);
	 $title= "phpnote".$number;
	 return $title;
}

//check gui - START
if(isset($_GET['gui']) || isset($_GET['g']) || isset($_GET['interface'])) $gui = check_gui();
else $gui = false;
//check gui - END
//no gui get data- START
if(!$gui){

 if(isset($_GET['t'])){
  	$title = $_GET['t'];
	if($title == "title" || $title == "" || $title == "phpnote"){
		$title = title();
	}
  } else {
	 $title = title();
  }
  if(isset($_GET['type'])){
   $doctype = $_GET['type'];
  }else{
   $doctype = "txt";
  }
  if(isset($_GET['x'])){
   $content = $_GET['x'];
  }else{
   echo "<script>alert('error: no document content');</script>";
  }
}
//no gui get data - END
//gui get data - START
if($gui){
if(isset($_POST['formsent'])){
  echo "<script>alert('OK');</script>";
  if(isset($_POST['t']) && !empty($_POST['t'])){
    $title = $_POST['t'];
		if($title == "title" ){
		 $title = title();
		}
	}else{
   echo "<script>alert('error: no document title');</script>";
  }
	 
  if(isset($_POST['type']) && !empty($_POST['type'])){
   $doctype = $_POST['type'];
  }else{
   $doctype = "txt";
  }
  if(isset($_POST['x']) && !empty($_POST['x'])){
   $content = $_POST['x'];
  }else{
   echo "<script>alert('error: no document content');</script>";
  }
 }
}
//gui get data END
// create file - START
if(isset($title) && isset($doctype) && isset($content)){
 $file = fopen("notes/".$title.".".$doctype,"w");
 fwrite($file,$content);
 fclose($file);
 echo "<script>alert('file ".$title.".".$doctype." has been created succesfully!');</script>";
}else{
echo "<script>alert('file has not been created!');</script>";
}
// create file - END


// User Grafic Interface - START
if($gui){
require_once('interface.html')
}
//User Grafic Interface - END
?>
