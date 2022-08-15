<?php 
//150000000 - > 150,000,000 VND
 function _format($money){
    return number_format($money,0,'.',',').'VND';
 }

 echo _format(150000000);
?>