<?php

$con=mysqli_connect("localhost","root","654654","seat");
if(mysqli_connect_errno($con)){
	echo "Failed to connect to MySQL: " . mysqli_connect_errno();
}
mysqli_set_charset($con,"utf8");

$res = mysqli_query($con,"select * from seat");

$result = array();


while($row = mysqli_fetch_array($res)){
	//echo $row[1];
	array_push($result, array(
		'idesat' =>$row[0],
		'name'=>$row[1],
		'time'=>$row[2],
		'usage'=>$row[3]
	));
}

$output_data =  json_encode(array("result"=>$result),JSON_UNESCAPED_UNICODE + JSON_PRETTY_PRINT);
//json_encode("result=>"$result, JSON_UNESCAPED_UNICODE + JSON_PRETTY_PRINT);
mysqli_close($con);
Header('Content-Type: application/json');
print($output_data);
?>