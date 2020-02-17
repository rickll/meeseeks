<?php
 
//$num01 = filter_input(INPUT_POST, "txtNumero1");
$num01 =  array('Escolha a Opção','Naruto','Sakura', 'Sasuke', 'Kiba' );
$num02 =  array('','Rasengan Naruto Combo Shadow Clones', 'Inner Sakura Punch Cure', 'Sharingan Lion Combo Chidori','Kiba' );
$opera = filter_input(INPUT_POST, "slOperacao");
if(empty($opera)){
  $opera = 0;
}
$resul = "";

 
if($num01 && $num02){
  $resul = ($num01[$opera] ." ". $num02[$opera]);
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
   <body>
   	
     <label><h1>Naruto Arena Helper</h1></label>
     <img src="rick.png" width=320 height=101>
     <form method="post">
               <label>Consulta:
         <select name="slOperacao">
           <option value="0">Selecione</option>
           <option value="1">Naruto Uzumaki</option>
           <option value="2">Sakura Haruno</option>
           <option value="3">Sasuke Uchiha</option>
           <option value="4">Inuzuka Kiba</option>

         </select>
       </label>
       <input type="submit" name="btnCalcular" value="Ok"><br>
        <h2>Resultado = <?=$resul;?></h2>
        <center><?php echo "<img src=\"".$opera.".png\">";?></center>
     </form>
    
   </body>
 </html>