<?php
  $conexion = new mysqli("localhost","root","everla","");
  
  if($conexion){
      echo"exito";
  }else{
    echo('No pudo conectarse:'. mysql_error());
  }

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  /*mysql_connect ("localhost","root","");
  mysql_select_db("everlan");
  $res=mysql_query("select * from archivo");

  echo"<table>";
  while($row=mysql_fetch_arrray($res))
  {
      echo"<tr>";
      echo"td>"; echo $row["name"];echo"</td>";
      echo"<td>";?><a href="<?php echo $row["src"];?>">Download</a><?php echo"</td>">;
      echo"</tr>";
  
  }
  echo"</table>";*/
?>