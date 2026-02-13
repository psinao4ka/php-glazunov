<?php
$str= "x * 9 = 56";
$arr_char = explode(" ",$str);
$x_place = strpos ($str,'x');
if ($x_place == 0){
    $x_pos = 'left';
    $operand = $arr_char[2];    
}
    
else{
 $x_pos = 'right';
$operand = $arr_charp[4];
} 
$operator = $arr_char [1];
$result = $arr_char [4];
switch ($operator){

    case '*':
        $x = $result/$operand;
        break;
    case '+':
        $x= $result-$operand;
         break;
        case '-':
            if ($x_pos == 'left')
                $x= $result+$operand;
            else 
                $x= $operand-$result;
             break;
            case '/':
                if($x_pos == 'left')
                    $x= $result*$operand;
                else
                    $x=$operand/$result;


} echo $x;
?>






