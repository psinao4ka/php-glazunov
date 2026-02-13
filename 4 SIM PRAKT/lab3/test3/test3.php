<?php
$negr=['1.txt','2.txt','3.txt'];
$putin='';
foreach ($negr as $file){
   $putin .= file_get_contents($file);
}
file_put_contents('new.txt',$putin);