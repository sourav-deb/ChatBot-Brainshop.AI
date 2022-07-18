<?php

// $APIKey = 'e24f48aac7fb7193076811bf0cf6a1201d14a0295a14a0e99036b0cb15d73ba1';
// $URL = 'https://api.ipinfodb.com/v3/ip-city/?key='.$APIKey.'&ip='.$ip.'&format=json';

try{
 $ip=$_GET['ip'];
 $url = 'https://api.ipinfodb.com/v3/ip-city/?key=e24f48aac7fb7193076811bf0cf6a1201d14a0295a14a0e99036b0cb15d73ba1&ip='.$ip.'&format=json';
 $response = file_get_contents($url);
 $json_array=json_decode($response,true); 

//  if($response !== false){
// 	echo $response;
//  }
 echo $json_array['countryName'];
 echo $json_array['zipCode'];


//  function display_array_recursive($json_rec){
// 		if($json_rec){
// 			foreach($json_rec as $key=> $value){
// 				if(is_array($value)){
// 					display_array_recursive($value);
// 				}else{
// 					echo $key.'--'.$value.'<br>';
// 				}	
// 			}	
// 		}	
// 	}
//   	display_array_recursive($json_array);
}catch(Exception $e){
    echo $e->getMessage();
}
?>