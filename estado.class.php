<?php
class Estado {
    public function listaEstado() {
        return mysql_query('select * FROM estado');
    }
    
    public function lista_cidades($estado_nm) {
      $estado_string = mysql_real_escape_string($estado_nm);
      $query = "select nm_cidade FROM cidade c "
              . "INNER join estado "
              .   "on e.id_estado = c.id_estado "
              . "WHERE e.nm_estado = '" . $estado_string ."'";
      return mysql_query($query);
    }
    
    public function cria($estado) {
        $estado_string = mysql_real_escape_string($estado);
        $query = "INSERT into estado (nm_estado) VALUES ('".$estado_string."')";
        mysql_query($query);       
    }
}
