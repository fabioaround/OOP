<!DOCTYPE html>

<?php
require('estadoController.php');
?>

<html>
    <body>

        
<!-- form de inserção de estado -->

<form method = 'post' action = 'estadoController.php'>
    <label for ='nm_estado'> Insira novo estado </label>
    <input type ='text' id ='nm_estado' name ='nm_estado'>
    <input type ='submit' value='Salvar' name ='submit' />
</form>

<br/>
<br/>

<!-- insere tabela com cidades do estado cadastrado -->

<table border='1'style="width:300px">
       <tr>
          <th>Nome cidade</th>
       </tr>

<?php 
  while($row = mysql_fetch_array($list_cidades))
  {
    echo "<tr>
      <td>" . $row['nm_cidade'] . "</td>
      </tr>" ;
  }
 ?> 
</table>
      
<br/>
<br/>

<!-- lista estados existentes -->
 <table border='1'style="width:300px">
       <tr>
          <th>Cod.</th>
          <th>Nome</th>
       </tr>

<?php 
  while($row = mysql_fetch_array($list_estado))
  {
    echo "<tr>
      <td>" . $row['id_estado'] . "</td>
      <td>" . $row['nm_estado'] . "</td>
      </tr>" ;
  }
 ?> 
 </table>
              
</body>
</html>
