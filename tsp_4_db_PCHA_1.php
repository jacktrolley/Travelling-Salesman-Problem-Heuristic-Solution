<?php
session_start();
ini_set('memory_limit', '1024M');     
ini_set('max_execution_time', 10800);  
?>



<?php


function compare_string_part_1($fn_first_string,$fn_second_string)  
{  
GLOBAL $first_string,$second_string;

$pattern_3F_mR = '/('.",".$fn_second_string.')$/';             
$pattern_3F_mL = '/^('.$fn_second_string.",".')/';             
$pattern_3F_mB = '/('.",".$fn_second_string.",".')/';          
$pattern_3F_mF = '/^('.$fn_second_string.')$/';                

$fn_first_string_components = explode("#",$fn_first_string);
$count = count($fn_first_string_components);

for($i=0;$i<$count;$i++)
{

$fn_first_string_components_2nd_dimension = explode(",",$fn_first_string_components[$i]);
$fn_first_string_components_2nd_dimension_reverse = array_reverse($fn_first_string_components_2nd_dimension);
$fn_first_string_components_reverse[$i] = implode(",",$fn_first_string_components_2nd_dimension_reverse);

$count_of_vertices = count($fn_first_string_components_2nd_dimension); 

if($count_of_vertices == 3)  
{

$counter_1 = preg_match_all($pattern_3F_mF,$fn_first_string_components[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}

$counter_1 = preg_match_all($pattern_3F_mF,$fn_first_string_components_reverse[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}

}  


if($count_of_vertices > 3) 
{

$counter_1 = preg_match_all($pattern_3F_mR,$fn_first_string_components[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}

$counter_1 = preg_match_all($pattern_3F_mR,$fn_first_string_components_reverse[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}

$counter_1 = preg_match_all($pattern_3F_mL,$fn_first_string_components[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}

$counter_1 = preg_match_all($pattern_3F_mL,$fn_first_string_components_reverse[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}

$counter_1 = preg_match_all($pattern_3F_mB,$fn_first_string_components[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}


$counter_1 = preg_match_all($pattern_3F_mB,$fn_first_string_components_reverse[$i],$matches_1);

if($counter_1 == 1)
{
return true;
}

}

}

return false;

} 


function compare_string_part_2($fn_first_string,$fn_second_string)
{
GLOBAL $first_string,$second_string;
$edge_replaced = 0;    


$fn_second_string_components = explode(",",$fn_second_string);

$fn_second_string_small_part_1 = $fn_second_string_components[0].",".$fn_second_string_components[2];
$fn_second_string_small_part_2 = $fn_second_string_components[1];

$fn_first_string_components = explode("#",$fn_first_string);
$count = count($fn_first_string_components);

$pattern_2F_mR = "/(,".$fn_second_string_small_part_1.")$/";  
$pattern_2F_mL = "/^(".$fn_second_string_small_part_1.",)/";  
$pattern_2F_mM = "/(,".$fn_second_string_small_part_1.",)/";  

$replacement_string_2F_mR = ",".$fn_second_string;       
$replacement_string_2F_mL = $fn_second_string.",";       
$replacement_string_2F_mM = ",".$fn_second_string.",";   
 
$tmp_string = explode("#",$fn_first_string);  
$tmp_string = implode(",",$tmp_string);
$tmp_string = explode(",",$tmp_string);


$tmp_value = in_array($fn_second_string_small_part_2,$tmp_string);

if($tmp_value)  
{
$tmp_count = 1;
}
else
{
$tmp_count = 0;
}


if($tmp_count == 0)
{


for($i=0;$i<$count;$i++)
{

$fn_first_string_components_2nd_dimension = explode(",",$fn_first_string_components[$i]);
$fn_first_string_components_2nd_dimension_reverse = array_reverse($fn_first_string_components_2nd_dimension);
$fn_first_string_components_reverse[$i] = implode(",",$fn_first_string_components_2nd_dimension_reverse);

$counter_match = preg_match_all($pattern_2F_mR,$fn_first_string_components[$i],$matches_1);

if($counter_match == 1)
{
$tmp_string = preg_replace($pattern_2F_mR,$replacement_string_2F_mR,$fn_first_string_components[$i],-1,$counter_replace);

if($counter_replace == 1)
{
$fn_first_string_components[$i] = $tmp_string;
$edge_replaced = 1;
break;                                                 
}

}


$counter_match = preg_match_all($pattern_2F_mR,$fn_first_string_components_reverse[$i],$matches_1);

if($counter_match == 1)
{
$tmp_string = preg_replace($pattern_2F_mR,$replacement_string_2F_mR,$fn_first_string_components_reverse[$i],-1,$counter_replace);

if($counter_replace == 1)
{
$fn_first_string_components[$i] = $tmp_string; 
$edge_replaced = 1;
break;                                        
}

}


$counter_match = preg_match_all($pattern_2F_mL,$fn_first_string_components[$i],$matches_1);

if($counter_match == 1)
{
$tmp_string = preg_replace($pattern_2F_mL,$replacement_string_2F_mL,$fn_first_string_components[$i],-1,$counter_replace);

if($counter_replace == 1)
{
$fn_first_string_components[$i] = $tmp_string; 
$edge_replaced = 1;
break;                                        
}

}


$counter_match = preg_match_all($pattern_2F_mL,$fn_first_string_components_reverse[$i],$matches_1);

if($counter_match == 1)
{
$tmp_string = preg_replace($pattern_2F_mL,$replacement_string_2F_mL,$fn_first_string_components_reverse[$i],-1,$counter_replace);

if($counter_replace == 1)
{
$fn_first_string_components[$i] = $tmp_string; 
$edge_replaced = 1;
break;                                        
}

}


$counter_match = preg_match_all($pattern_2F_mM,$fn_first_string_components[$i],$matches_1);

if($counter_match == 1)
{
$tmp_string = preg_replace($pattern_2F_mM,$replacement_string_2F_mM,$fn_first_string_components[$i],-1,$counter_replace);

if($counter_replace == 1)
{
$fn_first_string_components[$i] = $tmp_string; 
$edge_replaced = 1;
break;                                        
}

}


$counter_match = preg_match_all($pattern_2F_mM,$fn_first_string_components_reverse[$i],$matches_1);

if($counter_match == 1)
{
$tmp_string = preg_replace($pattern_2F_mM,$replacement_string_2F_mM,$fn_first_string_components_reverse[$i],-1,$counter_replace);

if($counter_replace == 1)
{
$fn_first_string_components[$i] = $tmp_string; 
$edge_replaced = 1;
break;                                        
}

}

}  


if($edge_replaced == 0)
{
return false;
}

else
if($edge_replaced == 1)
{
$fn_first_string = implode("#",$fn_first_string_components);
$first_string = $fn_first_string;
return true;
}

}

else
{
return false;
}


}


function compare_string_part_3($fn_first_string,$fn_second_string)
{
GLOBAL $first_string,$second_string;

$fn_second_string_components = explode(",",$fn_second_string);

$tmp_string = explode("#",$fn_first_string);
$tmp_string = implode(",",$tmp_string);
$tmp_string = explode(",",$tmp_string);

$count_1_value = in_array($fn_second_string_components[0],$tmp_string);
$count_2_value = in_array($fn_second_string_components[1],$tmp_string);
$count_3_value = in_array($fn_second_string_components[2],$tmp_string);

if(!($count_1_value)) 
{
$count_1 = 0;
}
else
{
$count_1 = 1;
}

if(!($count_2_value)) 
{
$count_2 = 0;
}
else
{
$count_2 = 1;
}

if(!($count_3_value)) 
{
$count_3 = 0;
}
else
{
$count_3 = 1;
}


if ( ( $count_1 == 0 ) and ( $count_2 == 0 ) and ( $count_3 == 0 ) )
{
$fn_first_string_components = explode("#",$fn_first_string);
$total_count = count($fn_first_string_components);
$fn_first_string_components[$total_count] = $fn_second_string;
$fn_first_string = implode("#",$fn_first_string_components);
$first_string = $fn_first_string;
return true;
}
else
{
return false;
}


}


function compare_string_part_4($fn_first_string,$fn_second_string,$fn_no_of_vertices)
{
GLOBAL $first_string,$second_string,$array_of_all_vertices,$completed;

$replacement_count = 0;
$first_replacement_index = -1;
$second_replacement_index = -1;
$temporary_string = "";
$tmp_string = "";
$tmp_array_data = "";
$tmp_array_data_index = "";
$counter_10 = "";
$counter_11 = "";
$counter_12 = "";
$counter_14 = "";
$counter_15 = "";
$counter_16 = "";

/*
A good way to rememeber '$fn_second_string_substr_2L_mR' is 2 characters from the left of the second string matches the right side of the first string
*/



$fn_second_string_components = explode(",",$fn_second_string);  

$fn_second_string_substr_2L_mR = ",".$fn_second_string_components[0].",".$fn_second_string_components[1];  
$fn_second_string_substr_2R_mL = $fn_second_string_components[1].",".$fn_second_string_components[2].","; 

$fn_second_string_substr_1L_mR = ",".$fn_second_string_components[0];   
$fn_second_string_substr_1R_mL = $fn_second_string_components[2].",";   

$pattern_2L_mR = '/('.$fn_second_string_substr_2L_mR.')$/';    
$pattern_2R_mL = '/^('.$fn_second_string_substr_2R_mL.')/';    

$pattern_1L_mR = '/('.$fn_second_string_substr_1L_mR.')$/';    
$pattern_1R_mL = '/^('.$fn_second_string_substr_1R_mL.')/';    

$replacement_string_2L_mR = ",".$fn_second_string;
$replacement_string_2R_mL = $fn_second_string.",";

$replacement_string_1L_mR = ",".$fn_second_string;
$replacement_string_1R_mL = $fn_second_string.",";



$fn_first_string_components = explode("#",$fn_first_string);

$count = count($fn_first_string_components);

if($count == 1)  
{
$count_full = count($array_of_all_vertices); 
$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$array_of_vertices_of_first_string_reverse = array_reverse($array_of_vertices_of_first_string);
$fn_first_string_components_reverse[0] = implode(",",$array_of_vertices_of_first_string_reverse);


$count_part = count($array_of_vertices_of_first_string);  

if($count_part == ($count_full + 1))   
{
$completed = 1;
return false;       

}


if($count_part == $count_full)  
{

/*	
array_push($array_of_vertices_of_first_string,$array_of_vertices_of_first_string[0]);
$fn_first_string_components[0] = implode(",",$array_of_vertices_of_first_string);
$fn_first_string = implode("#",$fn_first_string_components);
$first_string = $fn_first_string;   
$completed = 1;   
return true;
*/



$count_1 = preg_match_all($pattern_2L_mR,$fn_first_string_components[0],$matches_1);

if($count_1 == 1)
{
$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components[0],-1,$counter_1);

if($counter_1 == 1)
{

$tmp_array = explode(",",$tmp_string);

if($tmp_array[0] == end($tmp_array))
{	
$fn_first_string_components[0] = implode(",",$tmp_array);   
$fn_first_string = implode("#",$fn_first_string_components);
$first_string = $fn_first_string;
$completed = 1;
return true;
}	
else
{
return false;	
}

}
}


$count_2 = preg_match_all($pattern_2R_mL,$fn_first_string_components[0],$matches_2);

if($count_2 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components[0],-1,$counter_2);

if($counter_2 == 1)
{

$tmp_array = explode(",",$tmp_string);

if($tmp_array[0] == end($tmp_array))
{	
$fn_first_string_components[0] = implode(",",$tmp_array);   
$fn_first_string = implode("#",$fn_first_string_components);
$first_string = $fn_first_string;
$completed = 1;
return true;
}	
else
{
return false;	
}

}
}



$count_3 = preg_match_all($pattern_2L_mR,$fn_first_string_components_reverse[0],$matches_3);

if($count_3 == 1)
{
$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components_reverse[0],-1,$counter_3);

if($counter_3 == 1)
{

$tmp_array = explode(",",$tmp_string);

if($tmp_array[0] == end($tmp_array))
{	
$fn_first_string_components_reverse[0] = implode(",",$tmp_array);   
$fn_first_string = implode("#",$fn_first_string_components_reverse);
$first_string = $fn_first_string;
$completed = 1;
return true;
}	
else
{
return false;	
}

}
}



$count_4 = preg_match_all($pattern_2R_mL,$fn_first_string_components_reverse[0],$matches_4);

if($count_4 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components_reverse[0],-1,$counter_4);

if($counter_4 == 1)
{
	
$tmp_array = explode(",",$tmp_string);

if($tmp_array[0] == end($tmp_array))
{	
$fn_first_string_components_reverse[0] = implode(",",$tmp_array);   
$fn_first_string = implode("#",$fn_first_string_components_reverse);
$first_string = $fn_first_string;
$completed = 1;
return true;
}	
else
{
return false;	
}	
	
}

}

}




if($count_part == ($count_full - 1))  
{

$count_1 = preg_match_all($pattern_2L_mR,$fn_first_string_components[0],$matches_1);  

if($count_1 == 1)
{
$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components[0],-1,$counter_1);

if($counter_1 == 1)
{

$fn_first_string_components[0] = $tmp_string;   

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[2]];


if($repitition_count > 1)  
{
return false;
}
else
{
$tmp_array = explode(",",$fn_first_string_components[0]);

//array_push($tmp_array,$tmp_array[0]);   

$fn_first_string = implode(",",$tmp_array);
$first_string = $fn_first_string;
return true;
}

}
}

$count_2 = preg_match_all($pattern_2R_mL,$fn_first_string_components[0],$matches_2);

if($count_2 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components[0],-1,$counter_2);

if($counter_2 == 1)
{

$fn_first_string_components[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[0]];

if($repitition_count > 1)
{
return false;
}
else
{
$tmp_array = explode(",",$fn_first_string_components[0]);

//array_push($tmp_array,$tmp_array[0]);

$fn_first_string = implode(",",$tmp_array);
$first_string = $fn_first_string;
return true;
}

}
}

$count_3 = preg_match_all($pattern_2L_mR,$fn_first_string_components_reverse[0],$matches_3);

if($count_3 == 1)
{
$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components_reverse[0],-1,$counter_3);

if($counter_3 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[2]];

if($repitition_count > 1)
{
return false;
}

else
{
$tmp_array = explode(",",$fn_first_string_components_reverse[0]);

//array_push($tmp_array,$tmp_array[0]);

$fn_first_string = implode(",",$tmp_array);
$first_string = $fn_first_string;
return true;
}

}

}


$count_4 = preg_match_all($pattern_2R_mL,$fn_first_string_components_reverse[0],$matches_4);

if($count_4 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components_reverse[0],-1,$counter_4);

if($counter_4 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;


$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[0]];


if($repitition_count > 1)
{
return false;
}
else
{
$tmp_array = explode(",",$fn_first_string_components_reverse[0]);

//array_push($tmp_array,$tmp_array[0]);

$fn_first_string = implode(",",$tmp_array);
$first_string = $fn_first_string;
return true;
}
}

}


$count_5 = preg_match_all($pattern_1L_mR,$fn_first_string_components[0],$matches_5);

if($count_5 == 1)
{
$tmp_string = preg_replace($pattern_1L_mR,$replacement_string_1L_mR,$fn_first_string_components[0],-1,$counter_5);

if($counter_5 == 1)
{

$fn_first_string_components[0] = $tmp_string;


$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[1]];         




if($repitition_count > 1)
{
return false;
}
else
{
$tmp_array = explode(",",$fn_first_string_components[0]);
$first_value = $tmp_array[0];
$end_value = end($tmp_array);

if($first_value != $end_value)
{
return false;
}
else
{
$fn_first_string = implode(",",$tmp_array);
$first_string = $fn_first_string;
$completed = 1;
return true;
}

}

}

}


$count_6 = preg_match_all($pattern_1R_mL,$fn_first_string_components[0],$matches_6);

if($count_6 == 1)
{
$tmp_string = preg_replace($pattern_1R_mL,$replacement_string_1R_mL,$fn_first_string_components[0],-1,$counter_6);

if($counter_6 == 1)
{

$fn_first_string_components[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[1]];


if($repitition_count > 1)
{
return false;
}
else
{
$tmp_array = explode(",",$fn_first_string_components[0]);
$first_value = $tmp_array[0];
$end_value = end($tmp_array);

if($first_value != $end_value)
{
return false;
}
else
{
$fn_first_string = implode(",",$tmp_array);
$first_string = $fn_first_string;
$completed = 1;
return true;
}
}
}
}

$count_7 = preg_match_all($pattern_1L_mR,$fn_first_string_components_reverse[0],$matches_7);

if($count_7 == 1)
{
$tmp_string = preg_replace($pattern_1L_mR,$replacement_string_1L_mR,$fn_first_string_components_reverse[0],-1,$counter_7);

if($counter_7 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[1]];


if($repitition_count > 1)
{
return false;
}
else
{
$tmp_array = explode(",",$fn_first_string_components_reverse[0]);
$first_value = $tmp_array[0];
$end_value = end($tmp_array);

if($first_value != $end_value)
{
return false;
}
else
{
$fn_first_string = implode(",",$tmp_array); 
$first_string = $fn_first_string;
$completed = 1;
return true;
}
}
}
}

$count_8 = preg_match_all($pattern_1R_mL,$fn_first_string_components_reverse[0],$matches_8);
if($count_8 == 1)
{
$tmp_string = preg_replace($pattern_1R_mL,$replacement_string_1R_mL,$fn_first_string_components_reverse[0],-1,$counter_8);

if($counter_8 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$repitition_count = $tmp_array_count_values[$fn_second_string_components[1]];


if($repitition_count > 1)
{
return false;
}
else
{
$tmp_array = explode(",",$fn_first_string_components_reverse[0]);
$first_value = $tmp_array[0];
$end_value = end($tmp_array);

if($first_value != $end_value)
{
return false;
}
else
{
$fn_first_string = implode(",",$tmp_array);
$first_string = $fn_first_string;
$completed = 1;
return true;
}
}
}
}


}

if($count_part < ($count_full - 1)) 
{

$count_1 = preg_match_all($pattern_2L_mR,$fn_first_string_components[0],$matches_1);

if($count_1 == 1)
{
$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components[0],-1,$counter_1);

if($counter_1 == 1)
{

$fn_first_string_components[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$vertex_count = $tmp_array_count_values[$fn_second_string_components[2]];


if($vertex_count > 1)
{
return false;
}
else
{
$first_string = $fn_first_string_components[0];
return true;
}

}

}

$count_2 = preg_match_all($pattern_2R_mL,$fn_first_string_components[0],$matches_2);

if($count_2 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components[0],-1,$counter_2);

if($counter_2 == 1)
{

$fn_first_string_components[0] = $tmp_string;


$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$vertex_count = $tmp_array_count_values[$fn_second_string_components[0]];


if($vertex_count > 1)
{
return false;
}
else
{
$first_string = $fn_first_string_components[0];
return true;
}
}
}

$count_3 = preg_match_all($pattern_2L_mR,$fn_first_string_components_reverse[0],$matches_3);  

if($count_3 == 1)
{
$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components_reverse[0],-1,$counter_3);

if($counter_3 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$vertex_count = $tmp_array_count_values[$fn_second_string_components[2]];

if($vertex_count > 1)
{
return false;
}
else
{
$first_string = $fn_first_string_components_reverse[0];
return true;
}
}
}


$count_4 = preg_match_all($pattern_2R_mL,$fn_first_string_components_reverse[0],$matches_4);

if($count_4 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components_reverse[0],-1,$counter_4);

if($counter_4 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);
$vertex_count = $tmp_array_count_values[$fn_second_string_components[0]];

if($vertex_count > 1)
{
return false;
}
else
{
$first_string = $fn_first_string_components_reverse[0];
return true;
}
}
}

$count_5 = preg_match_all($pattern_1L_mR,$fn_first_string_components[0],$matches_5);

if($count_5 == 1)
{
$tmp_string = preg_replace($pattern_1L_mR,$replacement_string_1L_mR,$fn_first_string_components[0],-1,$counter_5);

if($counter_5 == 1)
{

$fn_first_string_components[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$vertex_count_1 = $tmp_array_count_values[$fn_second_string_components[1]];
$vertex_count_2 = $tmp_array_count_values[$fn_second_string_components[2]];

if(($vertex_count_1 > 1) || ($vertex_count_2 > 1))
{
return false;
}
else
{
$first_string = $fn_first_string_components[0];
return true;
}
}
}


$count_6 = preg_match_all($pattern_1R_mL,$fn_first_string_components[0],$matches_6);

if($count_6 == 1)
{
$tmp_string = preg_replace($pattern_1R_mL,$replacement_string_1R_mL,$fn_first_string_components[0],-1,$counter_6);

if($counter_6 == 1)
{

$fn_first_string_components[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$vertex_count_1 = $tmp_array_count_values[$fn_second_string_components[0]];
$vertex_count_2 = $tmp_array_count_values[$fn_second_string_components[1]];

if(($vertex_count_1 > 1) || ($vertex_count_2 > 1))
{
return false;
}
else
{
$first_string = $fn_first_string_components[0];
return true;
}

}

}

$count_7 = preg_match_all($pattern_1L_mR,$fn_first_string_components_reverse[0],$matches_7);

if($count_7 == 1)
{
$tmp_string = preg_replace($pattern_1L_mR,$replacement_string_1L_mR,$fn_first_string_components_reverse[0],-1,$counter_7);

if($counter_7 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$vertex_count_1 = $tmp_array_count_values[$fn_second_string_components[1]];
$vertex_count_2 = $tmp_array_count_values[$fn_second_string_components[2]];

if(($vertex_count_1 > 1) || ($vertex_count_2 > 1))
{
return false;
}
else
{
$first_string = $fn_first_string_components_reverse[0];
return true;
}

}

}


$count_8 = preg_match_all($pattern_1R_mL,$fn_first_string_components_reverse[0],$matches_8);

if($count_8 == 1)
{
$tmp_string = preg_replace($pattern_1R_mL,$replacement_string_1R_mL,$fn_first_string_components_reverse[0],-1,$counter_8);

if($counter_8 == 1)
{

$fn_first_string_components_reverse[0] = $tmp_string;

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components_reverse[0]);

$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$vertex_count_1 = $tmp_array_count_values[$fn_second_string_components[0]];
$vertex_count_2 = $tmp_array_count_values[$fn_second_string_components[1]];

if(($vertex_count_1 > 1) || ($vertex_count_2 > 1))
{
return false;
}
else
{
$first_string = $fn_first_string_components_reverse[0];
return true;
}

}

}

}

}

else   
{
for($i=0;$i<$count;$i++)
{
$fn_first_string_components_2nd_dim = explode(",",$fn_first_string_components[$i]);
$fn_first_string_components_2nd_dim_reverse = array_reverse($fn_first_string_components_2nd_dim);
$fn_first_string_components_reverse[$i] = implode(",",$fn_first_string_components_2nd_dim_reverse);

$count_1 = preg_match_all($pattern_2L_mR,$fn_first_string_components[$i],$matches_1);

if($count_1 == 1)
{

$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components[$i],-1,$counter_1);

if($counter_1 == 1)
{


$fn_first_string_components[$i] = $tmp_string;   
++$replacement_count; 

if($replacement_count == 1)
{
$first_replacement_index = $i;

continue;
}

if($replacement_count == 2)
{
$first_replacement_index = $i;
break; 
}

}

}


$count_2 = preg_match_all($pattern_2R_mL,$fn_first_string_components[$i],$matches_2);

if($count_2 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components[$i],-1,$counter_2);

if($counter_2 == 1)
{

$fn_first_string_components[$i] = $tmp_string;
++$replacement_count;

if($replacement_count == 1)
{
$second_replacement_index = $i;
continue;
}

if($replacement_count == 2)
{
$second_replacement_index = $i;
break;
}

}

}

$count_3 = preg_match_all($pattern_2L_mR,$fn_first_string_components_reverse[$i],$matches_3);

if($count_3 == 1)
{
$tmp_string = preg_replace($pattern_2L_mR,$replacement_string_2L_mR,$fn_first_string_components_reverse[$i],-1,$counter_3);

if($counter_3 == 1)
{

$fn_first_string_components_reverse[$i] = $tmp_string;
$fn_first_string_components[$i] = $fn_first_string_components_reverse[$i];

++$replacement_count;

if($replacement_count == 1)
{
$first_replacement_index = $i;
continue;
}

if($replacement_count == 2)
{
$first_replacement_index = $i;
break;
}

}

}


$count_4 = preg_match_all($pattern_2R_mL,$fn_first_string_components_reverse[$i],$matches_4);

if($count_4 == 1)
{
$tmp_string = preg_replace($pattern_2R_mL,$replacement_string_2R_mL,$fn_first_string_components_reverse[$i],-1,$counter_4);

if($counter_4 == 1)
{

$fn_first_string_components_reverse[$i] = $tmp_string;
$fn_first_string_components[$i] = $fn_first_string_components_reverse[$i];
++$replacement_count;

if($replacement_count == 1)
{
$second_replacement_index = $i;
continue;
}

if($replacement_count == 2)
{
$second_replacement_index = $i;
break;
}

}

}

$count_5 = preg_match_all($pattern_1L_mR,$fn_first_string_components[$i],$matches_5);

if($count_5 == 1)
{
$tmp_string = preg_replace($pattern_1L_mR,$replacement_string_1L_mR,$fn_first_string_components[$i],-1,$counter_5);

if($counter_5 == 1)
{

$fn_first_string_components[$i] = $tmp_string;
++$replacement_count;

if($replacement_count == 1)
{
$first_replacement_index = $i;
continue;
}

if($replacement_count == 2)
{
$first_replacement_index = $i;
break;
}

}

}

$count_6 = preg_match_all($pattern_1R_mL,$fn_first_string_components[$i],$matches_6);

if($count_6 == 1)
{
$tmp_string = preg_replace($pattern_1R_mL,$replacement_string_1R_mL,$fn_first_string_components[$i],-1,$counter_6);

if($counter_6 == 1)
{

$fn_first_string_components[$i] = $tmp_string;
++$replacement_count;

if($replacement_count == 1)
{
$second_replacement_index = $i;
continue;
}

if($replacement_count == 2)
{
$second_replacement_index = $i;
break;
}

}

}

$count_7 = preg_match_all($pattern_1L_mR,$fn_first_string_components_reverse[$i],$matches_7);

if($count_7 == 1)
{
$tmp_string = preg_replace($pattern_1L_mR,$replacement_string_1L_mR,$fn_first_string_components_reverse[$i],-1,$counter_7);

if($counter_7 == 1)
{

$fn_first_string_components_reverse[$i] = $tmp_string;
$fn_first_string_components[$i] = $fn_first_string_components_reverse[$i];
++$replacement_count;

if($replacement_count == 1)
{
$first_replacement_index = $i;
continue;
}

if($replacement_count == 2)
{
$first_replacement_index = $i;
break;
}

}

}

$count_8 = preg_match_all($pattern_1R_mL,$fn_first_string_components_reverse[$i],$matches_8);

if($count_8 == 1)
{
$tmp_string = preg_replace($pattern_1R_mL,$replacement_string_1R_mL,$fn_first_string_components_reverse[$i],-1,$counter_8);

if($counter_8 == 1)
{

$fn_first_string_components_reverse[$i] = $tmp_string;
$fn_first_string_components[$i] = $fn_first_string_components_reverse[$i];
++$replacement_count;

if($replacement_count == 1)
{
$second_replacement_index = $i;
continue;
}

if($replacement_count == 2)
{
$second_replacement_index = $i;
break;
}

}

}

}

}

if($replacement_count == 0)
{
$fn_first_string = implode("#",$fn_first_string_components);
$first_string = $fn_first_string;
}

if($replacement_count == 1)
{

if($first_replacement_index != -1)
{

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[$first_replacement_index]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$counter_10 = $tmp_array_count_values[$fn_second_string_components[0]];
$counter_11 = $tmp_array_count_values[$fn_second_string_components[1]];
$counter_12 = $tmp_array_count_values[$fn_second_string_components[2]];


if(($counter_10 > 1) || ($counter_11 > 1) || ($counter_12 > 1))
{

return false;

}


}

if($second_replacement_index != -1)
{

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[$second_replacement_index]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$counter_10 = $tmp_array_count_values[$fn_second_string_components[0]];
$counter_11 = $tmp_array_count_values[$fn_second_string_components[1]];
$counter_12 = $tmp_array_count_values[$fn_second_string_components[2]];


if(($counter_10 > 1) || ($counter_11 > 1) || ($counter_12 > 1))
{

return false;

}
}

$fn_first_string = implode("#",$fn_first_string_components);



$tmp_string = explode("#",$fn_first_string);
$tmp_string = implode(",",$tmp_string);
$array_of_vertices_of_first_string = explode(",",$tmp_string);  

$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$counter_10 = $tmp_array_count_values[$fn_second_string_components[0]];   
$counter_11 = $tmp_array_count_values[$fn_second_string_components[1]];
$counter_12 = $tmp_array_count_values[$fn_second_string_components[2]];


if(($counter_10 > 1) || ($counter_11 > 1) || ($counter_12 > 1))
{

return false;

}

$first_string = $fn_first_string;  
}

if($replacement_count == 2)
{

$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[$first_replacement_index]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$counter_10 = $tmp_array_count_values[$fn_second_string_components[0]];
$counter_11 = $tmp_array_count_values[$fn_second_string_components[1]];
$counter_12 = $tmp_array_count_values[$fn_second_string_components[2]];

if(($counter_10 > 1) || ($counter_11 > 1) || ($counter_12 > 1))
{

return false;

}


$array_of_vertices_of_first_string = explode(",",$fn_first_string_components[$second_replacement_index]);
$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$counter_10 = $tmp_array_count_values[$fn_second_string_components[0]];
$counter_11 = $tmp_array_count_values[$fn_second_string_components[1]];
$counter_12 = $tmp_array_count_values[$fn_second_string_components[2]];

if(($counter_10 > 1) || ($counter_11 > 1) || ($counter_12 > 1))
{

return false;

}


if($first_replacement_index > $second_replacement_index) 
{
$tmp_array_data = $fn_first_string_components[$first_replacement_index];
$fn_first_string_components[$first_replacement_index] = $fn_first_string_components[$second_replacement_index];
$fn_first_string_components[$second_replacement_index] = $tmp_array_data;

$tmp_array_data_index = $first_replacement_index;
$first_replacement_index = $second_replacement_index;
$second_replacement_index = $tmp_array_data_index;
} 

$fn_first_string_components[$first_replacement_index] = $fn_first_string_components[$first_replacement_index].",".$fn_first_string_components[$second_replacement_index];
array_splice($fn_first_string_components,$second_replacement_index,1);
$temporary_array = explode(",",$fn_first_string_components[$first_replacement_index]);
$temporary_array = array_unique($temporary_array);
$fn_first_string_components[$first_replacement_index] = implode(",",$temporary_array);
$fn_first_string = implode("#",$fn_first_string_components);



$tmp_string = explode("#",$fn_first_string);
$tmp_string = implode(",",$tmp_string);
$array_of_vertices_of_first_string = explode(",",$tmp_string);  

$tmp_array_count_values = array_count_values($array_of_vertices_of_first_string);

$counter_10 = $tmp_array_count_values[$fn_second_string_components[0]];   
$counter_11 = $tmp_array_count_values[$fn_second_string_components[1]];
$counter_12 = $tmp_array_count_values[$fn_second_string_components[2]];

if(($counter_10 > 1) || ($counter_11 > 1) || ($counter_12 > 1))
{

return false;

}

$first_string = $fn_first_string;

}

}


?>

<html>
<body>
<pre>


<?php

$no_of_vertices = $_SESSION['num_of_vertices'];
$array_of_vertices = $_SESSION['array_of_vertices'];
$array_of_strings_used_in_hamilton_circuit = array();
$array_of_strings_upto_the_hamilton_circuit_last_string = array();
$array_of_strings_not_present_in_hamilton_circuit = array();



unset($temporary_array);
$temporary_array = array();   


for($i=0;$i<$no_of_vertices;$i++)
{
for($j=0;$j<$no_of_vertices;$j++)
{
if($j!=$i)
{
$tmp = 'weight_'.$array_of_vertices[$i]."_".$array_of_vertices[$j];
$edge_name = $array_of_vertices[$i].",".$array_of_vertices[$j];
$edge_weight[$edge_name] = trim($_POST[$tmp]);


$input_pattern='/^[1-9]{1}[0-9]*$/';
$input_count = preg_match_all($input_pattern,trim($_POST[$tmp]));
if($input_count == 0)
{
echo"<br/>STOPPING SCRIPT DUE TO ERROR OF SOME MISSING WEIGHT VALUES NOT BEING TYPED IN THE PREVIOUS PAGE FORM. ALSO PLEASE NOTE TO TYPE IN ONLY POSITIVE INTEGER NUMBERS FOR WEIGHT VALUES. ALSO NO WEIGHTS SHOULD HAVE A VALUE OF 0<br/>";
echo"<br/>PLEASE GO BACK TO THE PREVIOUS PAGE AND TYPE IN THE CORRECT VALUES.<br/>";
exit();
}


}
}
}


$_SESSION['edge_weight'] = $edge_weight;


$counter=0;

foreach($edge_weight as $key=>$value)
{++$counter;
if($counter == 1)
{
$index_edge[1] = $key;
}
else
{
$index_edge[] = $key;
}
}


for($repeat_number = 1 ; $repeat_number <= $no_of_vertices ; $repeat_number++)  
{

for($i=(($no_of_vertices-1)*($repeat_number-1)+1);$i<=(($no_of_vertices-1)*$repeat_number);$i++) 
{
for($j=(($no_of_vertices-1)*($repeat_number-1)+1);$j<=(($no_of_vertices-1)*$repeat_number);$j++)
{

if($j > $i)
{

$string_1 = $index_edge[$i];
$string_2 = $index_edge[$j];
$array_2 = explode(",",$string_2);    
$array_2 = array_reverse($array_2);
$string_2 = implode(",",$array_2);
$string_3 = $string_2.",".$string_1;
$array_3 = explode(",",$string_3);
$array_3 = array_unique($array_3);
$string_3 = implode(",",$array_3);

$total_weight = $edge_weight[$string_1] + $edge_weight[$string_2];

$double_edge_weight[$string_3] = $total_weight;


}

}
}

}


$counter=0;

foreach($double_edge_weight as $key=>$value)
{++$counter;
if($counter == 1)
{
$index_double_edge[1] = $key;    
}
else
{
$index_double_edge[] = $key;
}
}


$combination_value = (($no_of_vertices-1) * (($no_of_vertices-1)-1))/2;  


$array_chunk_of_double_edge_weight = array_chunk($double_edge_weight,$combination_value,true);




$vertex_name = array();


for($i=0;$i<count($array_chunk_of_double_edge_weight);$i++)
{
$vertex_name[$array_of_vertices[$i]] = $array_chunk_of_double_edge_weight[$i];	
}






for($i=0;$i<$no_of_vertices;$i++)
{
$tmp_value = $array_chunk_of_double_edge_weight[$i];
asort($tmp_value);
$array_chunk_of_double_edge_weight[$i] = $tmp_value;
}



for($i=0;$i<$no_of_vertices;$i++)
{
$tmp_value = $array_chunk_of_double_edge_weight[$i];
$j=0;
foreach($tmp_value as $key=>$value)
{
$vertex_index_edge_ascending[$i][$j] = $key;
++$j;
}
}


for($j=0;$j<$combination_value;$j++)
{
for($i=0;$i<$no_of_vertices;$i++)
{
$level_index_edge[$j][$i] = $vertex_index_edge_ascending[$i][$j];
}
}


for($j=0;$j<$combination_value;$j++)
{
for($i=0;$i<$no_of_vertices;$i++)
{
$level_index_edge_weight[$level_index_edge[$j][$i]] = $double_edge_weight[$level_index_edge[$j][$i]];
}
}





$array_chunk_of_level_index_weight = array_chunk($level_index_edge_weight,$no_of_vertices,true);

for($i=0;$i<$combination_value;$i++)
{
$tmp_value = $array_chunk_of_level_index_weight[$i];
//asort($tmp_value);
arsort($tmp_value);
$array_chunk_of_level_index_weight[$i] = $tmp_value;   
}



for($j=0;$j<$combination_value;$j++)
{
foreach($array_chunk_of_level_index_weight[$j] as $key=>$value)
{
$level_edge_weight_descending[$key] = $value;  
}
}



$array_of_all_vertices = $array_of_vertices;  



foreach($level_edge_weight_descending as $key=>$value)
{
$array_of_second_strings[] = $key;
}





foreach($array_of_second_strings as $key=>$value)    
{                                                    
	

	
if($key == 1)
{
	break;    
}


$completed = 0;     




$first_string = $value;   

$array_of_strings_used_in_hamilton_circuit[] = $first_string;  

$count = count($array_of_second_strings);

for($i=0;$i<$count;$i++)
{

$second_string = $array_of_second_strings[$i];


$fn_value_1 = compare_string_part_1($first_string,$second_string);   
if($fn_value_1)   
{
continue;   
}
else
{
$fn_value_2 = compare_string_part_2($first_string,$second_string);

if($fn_value_2)
{
$array_of_strings_used_in_hamilton_circuit[] = $second_string;  
$i=-1;
continue;   
}

else
{
$fn_value_3 = compare_string_part_3($first_string,$second_string);
if($fn_value_3)
{
$array_of_strings_used_in_hamilton_circuit[] = $second_string;  
continue;   
}

else
{
$fn_value_4 = compare_string_part_4($first_string,$second_string,$no_of_vertices);


if($fn_value_4 == false)
{
continue;
}

if(($fn_value_4 == true) and ($completed == 1))
{
$array_of_strings_used_in_hamilton_circuit[] = $second_string; 
break;
}
else
{
if($fn_value_4 == true)	
{
$array_of_strings_used_in_hamilton_circuit[] = $second_string; 
continue;	
}
}

}

}

}

}

$full_circuit_name[] = $first_string;   

}  






$first_weight_of_hamilton_circuit=0;
$second_weight_of_hamilton_circuit=0;


foreach($full_circuit_name as $key=>$value)
{
$total_weight_of_circuit = 0;

$tmp_circuit_string = $value;
$tmp_circuit_array = explode(",",$tmp_circuit_string);

for($i=0;$i<$no_of_vertices;$i++)
{
$j=$i+1;
$tmp_edge = $tmp_circuit_array[$i].",".$tmp_circuit_array[$j];

$total_weight_of_circuit = $total_weight_of_circuit + $edge_weight[$tmp_edge];
}

$final_circuit_name_weight[$value] = $total_weight_of_circuit;   

}

asort($final_circuit_name_weight);




$i=0;
foreach($final_circuit_name_weight as $key=>$value)
{
if($i == 1)
{
break;
}
echo "<br><br>";


$tmp_key = explode(",",$key);
$tmp_count = count($tmp_key);

echo "THE HAMILTON CIRCUIT WHICH PROBABLY MIGHT HAVE MINIMUM WEIGHT IS : <br/><br/>";

for($m=0;$m<$tmp_count;$m++)   
{
if($m == ($tmp_count - 1))
{
echo "&nbsp&nbsp".$tmp_key[$m]."&nbsp&nbsp";
break;
}
echo "&nbsp&nbsp".$tmp_key[$m]."&nbsp&nbsp".",";
}

echo "<br/><br/>THE ABOVE HAMILTON CIRCUIT HAS A TOTAL WEIGHT OF ".$value.".";
echo "<br><br>";

$first_weight_of_hamilton_circuit = $value;


++$i;
}






unset($array_of_strings_not_present_in_hamilton_circuit);
$array_of_strings_not_present_in_hamilton_circuit = array();





find_next_hamilton_circuit:


unset($array_of_strings_not_present_in_hamilton_circuit);
$array_of_strings_not_present_in_hamilton_circuit = array();




unset($second_arranged_part_of_array_of_second_strings);
$second_arranged_part_of_array_of_second_strings = array();
unset($first_arranged_part_of_array_of_second_strings);
$first_arranged_part_of_array_of_second_strings = array();
unset($combined_arranged_part_of_array_of_second_strings);
$combined_arranged_part_of_array_of_second_strings = array();

unset($levels_of_first_part);
unset($levels_of_second_part);
$levels_of_first_part = array();
$levels_of_second_part = array();
unset($levels_of_first_part_to_combine);
unset($levels_of_second_part_to_combine);
$levels_of_first_part_to_combine = array();
$levels_of_second_part_to_combine = array();  
unset($vertex_name_first_part);
unset($vertex_name_second_part);
$vertex_name_first_part=array();
$vertex_name_second_part=array();            


unset($temporary_array);
$temporary_array = array();



$temp_value = -1;
$last_index_of_triple_string_used_in_hamilton_circuit = -1;



foreach($array_of_strings_used_in_hamilton_circuit as $key=>$value)
{
$temp_value = array_search($value,$array_of_second_strings);
if($temp_value > $last_index_of_triple_string_used_in_hamilton_circuit)
{
$last_index_of_triple_string_used_in_hamilton_circuit = $temp_value;
}
}




for($i=0 ; $i <= $last_index_of_triple_string_used_in_hamilton_circuit ; $i++)  
{
$array_of_strings_upto_the_hamilton_circuit_last_string[] = $array_of_second_strings[$i];	
}


unset($temporary_array);
$temporary_array = array();


foreach($array_of_strings_used_in_hamilton_circuit as $key=>$value)
{
$temporary_array[] = $value;  
}



$array_of_strings_not_present_in_hamilton_circuit = array_diff($array_of_strings_upto_the_hamilton_circuit_last_string,$temporary_array);




unset($temporary_array);
$temporary_array = array();



$temporary_array = array_diff($array_of_second_strings,$array_of_strings_not_present_in_hamilton_circuit);

foreach($temporary_array as $key=>$value)
{
$second_arranged_part_of_array_of_second_strings[] = $value;	
}

unset($temporary_array);
$temporary_array=array();

$temporary_array = array_diff($array_of_second_strings, $second_arranged_part_of_array_of_second_strings);

foreach($temporary_array as $key=>$value)
{
$first_arranged_part_of_array_of_second_strings[] = $value;
}





					


for($i=0;$i<count($first_arranged_part_of_array_of_second_strings); $i++)
{
for($j=0;$j<count($array_of_vertices);$j++)
{



$tmp_array = explode(",",$first_arranged_part_of_array_of_second_strings[$i]);
if($tmp_array[1] == $array_of_vertices[$j])  
{
$vertex_name_first_part[$array_of_vertices[$j]][ $first_arranged_part_of_array_of_second_strings [$i]] = $vertex_name[$array_of_vertices[$j]][ $first_arranged_part_of_array_of_second_strings[$i]];
}
}
}

for($i=0;$i<count($array_of_vertices);$i++)  
{
if(isset($vertex_name_first_part[$array_of_vertices[$i]]))
{
asort($vertex_name_first_part[$array_of_vertices[$i]]);
}
}




$largest_number=0;    
for($i=0;$i<$no_of_vertices;$i++)
{
if(isset($vertex_name_first_part[$array_of_vertices[$i]]))
{
$no_of_substrings = count($vertex_name_first_part[$array_of_vertices[$i]]);
if($no_of_substrings > $largest_number)
{
$largest_number = $no_of_substrings;
}
}
}




for($i=0;$i<$no_of_vertices;$i++)
{

if(isset($vertex_name_first_part[$array_of_vertices[$i]]))
{ 
$j=0;

foreach($vertex_name_first_part[$array_of_vertices[$i]] as $key=>$value)
{

if(isset($vertex_name_first_part[$array_of_vertices[$i]][$key]))
{
//$levels_of_first_part[$j][$key] = $vertex_name_first_part[$array_of_vertices[$i]][$key];
$levels_of_first_part[$j][$key] = $value;
$j++;

}

}

}

}


for($i=0;$i<$largest_number;$i++)
{
arsort($levels_of_first_part[$i]);
}









for($i=0;$i<count($second_arranged_part_of_array_of_second_strings); $i++)
{
for($j=0;$j<count($array_of_vertices);$j++)
{



$tmp_array = explode(",",$second_arranged_part_of_array_of_second_strings[$i]);
if($tmp_array[1] == $array_of_vertices[$j]) 
{
$vertex_name_second_part[$array_of_vertices[$j]][ $second_arranged_part_of_array_of_second_strings [$i]] = $vertex_name[$array_of_vertices[$j]][ $second_arranged_part_of_array_of_second_strings[$i]];
}
}
}

for($i=0;$i<count($array_of_vertices);$i++)  
{
if(isset($vertex_name_second_part[$array_of_vertices[$i]]))
{
asort($vertex_name_second_part[$array_of_vertices[$i]]);
}
}

$largest_number=0;    
for($i=0;$i<$no_of_vertices;$i++)
{
if(isset($vertex_name_second_part[$array_of_vertices[$i]]))
{
$no_of_substrings = count($vertex_name_second_part[$array_of_vertices[$i]]);
if($no_of_substrings > $largest_number)
{
$largest_number = $no_of_substrings;
}
}
}






for($i=0;$i<$no_of_vertices;$i++)
{

if(isset($vertex_name_second_part[$array_of_vertices[$i]]))
{

$j=0;
foreach($vertex_name_second_part[$array_of_vertices[$i]] as $key=>$value)
{

if(isset($vertex_name_second_part[$array_of_vertices[$i]][$key]))
{

$levels_of_second_part[$j][$key] = $value;
$j++;

}

}

}

}

for($i=0;$i<$largest_number;$i++)
{
arsort($levels_of_second_part[$i]);
}





foreach($levels_of_first_part as $key=>$value)
{
foreach($value as $key_1=>$value_1)	
{
$levels_of_first_part_to_combine[] = $key_1;	
}
}




foreach($levels_of_second_part as $key=>$value)
{
foreach($value as $key_1=>$value_1)	
{
$levels_of_second_part_to_combine[] = $key_1;	
}
}



foreach($levels_of_first_part_to_combine as $key=>$value)
{
$combined_arranged_part_of_array_of_second_strings[] = $value;
}

foreach($levels_of_second_part_to_combine as $key=>$value)
{
$combined_arranged_part_of_array_of_second_strings[] = $value;	
}


unset($full_circuit_name);     
unset($final_circuit_name_weight);
unset($array_of_strings_used_in_hamilton_circuit_full_container);
$full_circuit_name = array();
$final_circuit_name_weight = array();
$array_of_strings_used_in_hamilton_circuit_full_container = array();





if(count($array_of_strings_not_present_in_hamilton_circuit) == 0)
{
echo "<br/>"."All the strings are present in the hamilton circuit. So exiting the program"."<br/>"	;
exit();
}







unset($temporary_array);
$temporary_array = array();


foreach($array_of_strings_not_present_in_hamilton_circuit as $key=>$value)
{
$temporary_array[] = $value;	
}

unset($array_of_strings_not_present_in_hamilton_circuit);
$array_of_strings_not_present_in_hamilton_circuit = array();

foreach($temporary_array as $key=>$value)
{
$array_of_strings_not_present_in_hamilton_circuit[] = $value;	
}






for($new_counter =0; $new_counter<$no_of_vertices;$new_counter++)  
{																	
$first_string = $array_of_second_strings[$new_counter];	           

unset($array_of_strings_used_in_hamilton_circuit);
$array_of_strings_used_in_hamilton_circuit = array();


$completed = 0;     



$array_of_strings_used_in_hamilton_circuit[] = $first_string;


$count = count($combined_arranged_part_of_array_of_second_strings);

for($i=0;$i<$count;$i++)
{

$second_string = $combined_arranged_part_of_array_of_second_strings[$i];


$fn_value_1 = compare_string_part_1($first_string,$second_string);   
if($fn_value_1)   
{
continue;   
}
else
{
$fn_value_2 = compare_string_part_2($first_string,$second_string);

if($fn_value_2)
{
$i=-1;
$array_of_strings_used_in_hamilton_circuit[] = $second_string; 

continue;   
}

else
{
$fn_value_3 = compare_string_part_3($first_string,$second_string);
if($fn_value_3)
{

$array_of_strings_used_in_hamilton_circuit[] = $second_string;  

continue;   
}

else
{
$fn_value_4 = compare_string_part_4($first_string,$second_string,$no_of_vertices);


if($fn_value_4 == false)
{
continue;
}

if(($fn_value_4 == true) and ($completed == 1))
{
$array_of_strings_used_in_hamilton_circuit[] = $second_string; 

break;
}
else
{	
if($fn_value_4 == true)	
{

$array_of_strings_used_in_hamilton_circuit[] = $second_string; 

continue;
}
}

}

}

}

}

$full_circuit_name[] = $first_string;
$array_of_strings_used_in_hamilton_circuit_full_container[] = $array_of_strings_used_in_hamilton_circuit;

}  


if(count($full_circuit_name) == 0)
{
echo "<br/>"."There are no hamilton circuits due to the absence of combinations of a particular number value. So exiting the program"."<br/>";
exit();
}


foreach($full_circuit_name as $key=>$value)
{
$total_weight_of_circuit = 0;

$tmp_circuit_string = $value;
$tmp_circuit_array = explode(",",$tmp_circuit_string);

for($i=0;$i<$no_of_vertices;$i++)
{
$j=$i+1;
$tmp_edge = $tmp_circuit_array[$i].",".$tmp_circuit_array[$j];
$total_weight_of_circuit = $total_weight_of_circuit + $edge_weight[$tmp_edge];
}

$final_circuit_name_weight[$value] = $total_weight_of_circuit;   

}

asort($final_circuit_name_weight);




$i=0;
foreach($final_circuit_name_weight as $key=>$value)
{
if($i==1)	
{
break;	
}

$least_weight_hamilton_circuit_string = $key;  

}

foreach($full_circuit_name as $key=>$value)
{
if( $value == $least_weight_hamilton_circuit_string )
{
$index_of_least_weight_hamilton_circuit = $key;	
}	
}



foreach($array_of_strings_used_in_hamilton_circuit_full_container as $key=>$value)
{
if($key == $index_of_least_weight_hamilton_circuit)	
{
$array_of_strings_used_in_hamilton_circuit = $value;	
}
}




$i=0;
foreach($final_circuit_name_weight as $key=>$value)
{
if($i == 1)
{
break;
}
echo "<br><br>";


$tmp_key = explode(",",$key);
$tmp_count = count($tmp_key);

echo "THE HAMILTON CIRCUIT WHICH PROBABLY MIGHT HAVE MINIMUM WEIGHT IS : <br/><br/>";

for($m=0;$m<$tmp_count;$m++)   
{
if($m == ($tmp_count - 1))
{
echo "&nbsp&nbsp".$tmp_key[$m]."&nbsp&nbsp";
break;
}
echo "&nbsp&nbsp".$tmp_key[$m]."&nbsp&nbsp".",";
}

echo "<br/><br/>THE ABOVE HAMILTON CIRCUIT HAS A TOTAL WEIGHT OF ".$value.".";
echo "<br><br>";

$second_weight_of_hamilton_circuit = $value;

++$i;
}

if($second_weight_of_hamilton_circuit < $first_weight_of_hamilton_circuit)
{
$first_weight_of_hamilton_circuit = $second_weight_of_hamilton_circuit;
$second_weight_of_hamilton_circuit = 0;	
goto find_next_hamilton_circuit;	
}


?>

</pre>
</body>
</html>


