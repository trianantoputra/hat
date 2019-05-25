<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$GLOBALS['temp_x'] = [];
$GLOBALS['step_rumus'] = [];
$GLOBALS['step_hasil'] = [];
class M_main extends CI_Model {

	function mexican($data1,$data3,$data4,$data5)
	{
		function sigma($x,$c,$r,$i){
	    $r1 = $r[0];
	    $r2 = $r[1];
	    $c1 = $c[0];
	    $c2 = $c[1];

	    $temp1 = 0;
	    $temp2 = 0;
	    $temp3 = 0;
	    $temp1_string = [];
	    $temp2_string = [];
	    $temp3_string = [];
	    $temp1_string_value = [];
	    $temp2_string_value = [];
	    $temp3_string_value = [];

	    $count = 0;
	    for($k = (-1*$r1); $k<$r1+1; $k++)
	    {
	        if($i+$k <=0 || $i+$k>=count($x))
	            continue;
	        else
	        {
	            $temp1 += $x[$i+$k-1];
	            $temp1_string[$count] = "X".($i+$k-1);
	            $temp1_string_value[$count] = "".($x[$i+$k-1]);
	            $count++;
	        }
	    } 
	    $temp1_string = implode('+', $temp1_string);
	    $temp1_string_value = implode('+', $temp1_string_value);

	    $count = 0;
	    for($k = (-1*$r2); $k<(-1*$r1); $k++)
	    {
	        if($i+$k <=0 || $i+$k>=count($x))
	            continue;
	        else
	        {
	            $temp2 += $x[$i+$k-1];
	            $temp2_string[$count] = "X".($i+$k-1);
	            $temp2_string_value[$count] = "".($x[$i+$k-1]);
	            $count++;
	        }
	    }  
	    $temp2_string = implode('+', $temp2_string);
	    $temp2_string_value = implode('+', $temp2_string_value);

	    $count = 0;
	    for($k = ($r1+1); $k<($r2+1); $k++)
	    {
	        if($i+$k <=0 || $i+$k>=count($x))
	            continue;
	        else
	        {
	            $temp3 += $x[$i+$k-1];
	            $temp3_string[$count] = "X".($i+$k-1);
	            $temp3_string_value[$count] = "".($x[$i+$k-1]);
	            $count++;
	        }
	    }
	    $temp3_string = implode('+', $temp3_string);
	    $temp3_string_value = implode('+', $temp3_string_value);

	    if($temp1_string == "")
	    	$temp1_string = 0;
	    if($temp2_string == "")
	    	$temp2_string = 0;
	    if($temp3_string == "")
	    	$temp3_string = 0;

	    if($temp1_string_value == "")
	    	$temp1_string_value = 0;
	    if($temp2_string_value == "")
	    	$temp2_string_value = 0;
	    if($temp3_string_value == "")
	    	$temp3_string_value = 0;

	    $hasil = $c1*$temp1 + $c2*$temp2 + $c2*$temp3;
	    $hasil = number_format((float)$hasil, 2, '.', '');
	    $GLOBALS['step_rumus'][$i] = "(c1*($temp1_string)) + (c2*($temp2_string)) + (c2*($temp3_string))";
	    $GLOBALS['step_value'][$i] = "($c1*($temp1_string_value)) + ($c2*($temp2_string_value)) + ($c2*($temp3_string_value)) = $hasil";
	    $GLOBALS['step_hasil'][$i] = $hasil;
	    return $hasil;
	}
	    
	function compute($x,$c,$r){
	    $n = count($x);
	    $x_i = [];
	    $x_max = 0;
	    for ($i = 0; $i < $n; $i++) {

	        array_push($x_i, number_format((float)sigma($x,$c,$r,$i+1), 2, '.', ''));
	    }
	    
	    $x_max = max($x_i);
	    $GLOBALS['step_fungsi'] = $x_max;
	    for($i = 0; $i<$n; $i++)
	    {
	        $x_i[$i] = min($x_max, max( 0,$x_i[$i]));
	    }
	    return $x_i;

	}
	    
	function mexican_hat($x,$c,$r,$t)
	{
	    //echo "\nX AWAL: : ".print_r($x)."\n\n";
	    $count = 1;
	    $GLOBALS['temp_x'][0] = $x;
	    for ($i=0; $i < count($t); $i++) 
	    {
	        $x = compute($x,$c,$r);
	        $GLOBALS['temp_x'][$count] = $x;
	        $GLOBALS['step'][$count] = $GLOBALS['step_rumus'];
	        $GLOBALS['step2'][$count] = $GLOBALS['step_value'];
	        $GLOBALS['step3'][$count] = $GLOBALS['step_hasil'];
	        $GLOBALS['step4'][$count] = $GLOBALS['step_fungsi'];
	        //echo "temp ".$count.": ".print_r($x);
	        $count++;
	    
	    }
	    //print_r($GLOBALS['temp_x']);
	}
		
		$data1 = explode(',', $data1);
		for ($i=0; $i < count($data1) ; $i++) { 
			$data1[$i] = (float)$data1[$i];
		}
		$data3 = explode(',', $data3);
		for ($i=0; $i < count($data3) ; $i++) { 
			$data3[$i] = (float)$data3[$i];
		}
		$data4 = explode(',', $data4);
		for ($i=0; $i < count($data4) ; $i++) { 
			$data4[$i] = (float)$data4[$i];
		}
		$data5 = explode(',', $data5);
		for ($i=0; $i < count($data5) ; $i++) { 
			$data5[$i] = (int)$data5[$i];
		}

		$rad = $data3;//[1,2]; // radius
		$konstanta = $data4;//[0.6, -0.4]; // $konstanta / C
        $tmax = $data5;//[0,1,2]; // t = 1 2 3
        
        mexican_hat($data1, $konstanta, $rad, $tmax);

		return ($GLOBALS['temp_x']);
	}
	function step_rumus()
	{
		return $GLOBALS['step'];
	}
	function step_value()
	{
		return $GLOBALS['step2'];
	}
	function step_hasil()
	{
		return $GLOBALS['step3'];
	}
	function step_fungsi()
	{
		return $GLOBALS['step4'];
	}
}

/* End of file M_main.php */
/* Location: ./application/models/M_main.php */