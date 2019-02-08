<?php
if($_REQUEST['srv']=="true"){
$result=array(
  "rec1"=>array(

  ),
);}
elseif($_REQUEST['srv']=="true"){
$result=array(
  "rec1"=>array(

  ),
  "rec2"=>array(

  ),
);}
else{
$result=array(
"error"=>"unknow request"
)
}
echo json_encode($result);
?>