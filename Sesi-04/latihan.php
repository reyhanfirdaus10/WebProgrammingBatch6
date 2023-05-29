<?php
    $a = "hungry";
    $output = "";
  
    // ternary
    $out = $a == "hungry" ? 'eat' : 'iam happy';
  
    // simple
    if ($a == "hungry") :
        $output = "eat";
    else :
        $output = "iam happy";
    endif;
  
    // kurung kurawal {}
    if ($a == "hungry") {
        $output = "eat";
    } else {
        $output = "iam happy";
    }
  
    var_dump("Hasil nya : $out");
  ?>