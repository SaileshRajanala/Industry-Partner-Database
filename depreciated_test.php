<?php

$email = "subash@adfa..com";

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "success" ;
}else{
	echo "failure"  ;
}

?>