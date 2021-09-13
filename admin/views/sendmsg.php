 <?PHP $sql500 = "select * from user where state='".$state."' and city = '".$city."' and area = '".$area."'";



$q500 = $conn->query($sql500);











for ($i=0; $i < $q500->num_rows ; $i++) { 

   

$res500 = $q500->fetch_assoc();



$no =$res500['mobno'].', '.$no;



}













	// Account details

	$apiKey = urlencode('frEfnXI0iPQ-24fbHuIbWI97yqRmR75G4WKKybTj7M');

	

	// Message details

	

$no = $no.' '.'7875219661';	

	$numbers = array($no);

	$sender = urlencode('TXTLCL');




	$result = itexmo($numbers,"Test Message","ApiCode", "ApiPassword");
if ($result == ""){
echo "iTexMo: No response from server!!!
Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.	
Please CONTACT US for help. ";	
}else if ($result == 0){
echo "Message Sent!";
}
else{	
echo "Error Num ". $result . " was encountered!";
}





?>

