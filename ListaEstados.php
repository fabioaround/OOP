<!DOCTYPE html>
<html>
    <body>
<?php
  require('conexaoMySql.class.php');
  require('estado.class.php');

  $conexao = new Conexao;
  $conexao->conectar();
  $conexao->selecionarBD();
?>


<?php
        $estado = new Estado;
        $listaEstado = $estado->listaEstado();
?>
 

    <table border='1' style="width:300px">
       <tr>
          <th>Cod.</th>
          <th>Nome</th>
       </tr>
       

<?php       
       while($row = mysql_fetch_array($listaEstado))
       {
         echo "<tr>
                 <td>" . $row['id_estado'] . "</td>
                 <td>" . $row['nm_estado'] . "</td>
               </tr>" ;
       }
 ?>     
    </table>
     
<?php
        $conexao->fechar();
?>

    </body>
</html>
