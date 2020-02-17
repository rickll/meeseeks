<?php
 
//$num01 = filter_input(INPUT_POST, "txtNumero1");
$num01 =  array('Naruto','Sakura', 'Sasuke', 'Kiba' );
$num02 =  array('Rasengan Naruto Combo Shadow Clones', 'Inner Sakura Punch Cure', 'Sharingan Lion Combo Chidori','Kiba' );
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";
$img = "";

 
if($num01  && $num02){
  switch($opera){
    case 1:
      $resul = ($num01[0] ." ". $num02[0]);
      //$img = "<img src=\"1.png\">";
    break;
    case 2:
      $resul = ($num01[1] ." ". $num02[1]);
     // $img = "<img src=\"2.png\">";
    break;
    case 3:
      $resul = ($num01[2] ." ". $num02[2]);
     // $img = "<img src=\"3.png\">";
    break;
    case 4:
      $resul = ($num01[3] ." ". $num02[3]);
     // $img = "<img src=\"4.png\">";
    break;
  }
}
 
?>
 
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <link href="estilo_ricardo.css" rel="stylesheet" type="text/css">
     <style>
      input, select{padding:20px; margin: 5px;}
     </style>
   </head>
   <body backgroud-color= "ffff00">
   	
     <label><h1>Naruto Arena Helper</h1></label>
     <img src="rick.png" width=320 height=101>
     <form method="post">
               <label>Consulta: 
         <select name="slOperacao">
           <option value="1">Naruto Uzumaki</option>
           <option value="2">Sakura Haruno</option>
           <option value="3">Sasuke Uchiha</option>
           <option value="4">Inuzuka Kiba</option>

         </select>
       </label>
       <input type="submit" name="btnCalcular" value="Ok"><br>
        <h2>Resultado = <?=$resul;?></h2>
        <center><?php if($opera > 0){echo "<img src=\"".$opera.".png\">";}?></center>
     </form>
    
   </body>
 </html>