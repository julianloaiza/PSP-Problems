<?php
	// Julián Loaiza
	function dec_hex($dec) {
	    $hex = "";
	    if($dec == 0){$hex = "00";}
	 	while($dec > 0){
	 		$int  = intVal($dec/16);
	 		$float = ($dec/16) - $int;
	 		$strDigit = (string)($float*16);
	 		if ($strDigit == "10"){ $strDigit = "A"; }
	 		elseif($strDigit == "11"){ $strDigit = "B"; }
	 		elseif($strDigit == "12"){ $strDigit = "C"; }
	 		elseif($strDigit == "13"){ $strDigit = "D"; }
	 		elseif($strDigit == "14"){ $strDigit = "E"; }
	 		elseif($strDigit == "15"){ $strDigit = "F"; }
	 		$hex = $strDigit.$hex;
	 		$dec = $int;
	 	}
	 	if(strlen($hex) == 1){$hex = '0'.$hex;}
	 	assert(strlen($hex) == 2);
    	return $hex;
	}

	function RGB_hex($R, $G, $B){
		if($R < 0){$R = 0;}
		elseif($R > 255){$R = 255;}
		if($G < 0){$G = 0;}
		elseif($G > 255){$G = 255;}
		if($B < 0){$B = 0;}
		elseif($B > 255){$B = 255;}
		return dec_hex($R).dec_hex($G).dec_hex($B);
	} 

	function main(){
		for ($i = 1; $i <= 10; $i++) {
			$R = rand(-300, 300);
			$G = rand(-300, 300);
			$B = rand(-300, 300);
	    	echo "RGB: ".$R.", ".$G.", ".$B."<br/>";
	    	echo "Hex = #".RGB_hex($R,$G,$B)."<br/> <br/>";
		}
	}
	main();

?>