<?php

	function dec_hex($dec) {
	    $hex = "";
	    if($dec == 0){$hex = "0";}
	 	while($dec > 0){
	 		$int  = intVal($dec/16);
	 		$float = ($dec/16) - $int;
	 		$digit = (string)($float*16);
	 		if ($digit == "10"){ $digit = "A"; }
	 		elseif($digit == "11"){ $digit = "B"; }
	 		elseif($digit == "12"){ $digit = "C"; }
	 		elseif($digit == "13"){ $digit = "D"; }
	 		elseif($digit == "14"){ $digit = "E"; }
	 		elseif($digit == "15"){ $digit = "F"; }
	 		$hex = $digit.$hex;
	 		$dec = $int;
	 	}
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

	for ($i = 1; $i <= 10; $i++) {
		$R = rand(-300, 300);
		$G = rand(-300, 300);
		$B = rand(-300, 300);
    	echo "RGB: ".$R.", ".$G.", ".$B."<br/>";
    	echo "Hex = ".RGB_hex($R,$G,$B)."<br/> <br/>";
	}
	

?>