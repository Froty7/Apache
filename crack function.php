<?php
// Crack
function crack($in, $box, $out='array', $sep=''){
$code  = "//code";
$code .= "\n".'$el'." = explode(' ', '$in');";
$code .= "\n".'$el = array_unique($el);';
$code .= "\n".'$arr[] = count($el)**' . "$box;";
for($i=0;$i<$box;$i++){
	$code .= "\n"."foreach(".'$el'." as " . '$e'. $i . "){";
}
$code .= "\n".'array_push($arr, ';
for($i=0;$i<$box;$i++){
	$code .= '$e' . $i . " . '$sep' . ";
	}
$code .= "'' );\n ". str_repeat('}',$box);

		//print($code); // Code
		eval( $code); 
if($out=='array'||$out==0){return $arr;}
if($out=='str'||$out==1){return join("\n",$arr);}
}
/*-----------------------------------------*/
$in = 's a r' ; // elements		  	       //
$box = 4      ; // boxes		            	//
$out = 'array'; // 'array' = 0 || 'str = 1   // default is array
$sep = ''     ; // separator = ''		   	// defult is ''
$crack = crack($in, $box, $out, $sep);
print_r($crack);
/*-----------------------------------------*/