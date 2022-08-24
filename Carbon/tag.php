<?php



function runcode($code){
  preg_match("#<(.*)></(.*)>#",$code,$m);
  $path = glob("tags/*.*");
$code = "tags/" . $m[1] . ".html";
if (in_array($code,$path)) {
$file = file_get_contents($code);
return $file;
}else {
  return "Code not found";
}


}




function router(array $route, array $code){

if (in_array($_GET["path"],$route)) {
$currentRoute = array_search($_GET["path"],$route);
echo runcode($code[$currentRoute]);
}else {
  echo "<center><h1>404 , "  . " " . $_GET['path'] .  " " . " Not Found</h1></center>";

}
}
