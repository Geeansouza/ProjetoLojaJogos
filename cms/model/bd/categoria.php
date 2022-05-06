<?php

 require_once("conexaoMySql.php");

    function insertCategoria($dadosCategoria){

        $conexao = conexaoMysql();

        $sql = "insert into tblcategorias
                (categoria)
                values(
            '".$dadosCategoria["categoria"]."');"; 
            
        if(mysqli_query($conexao, $sql)){
            if(mysqli_affected_rows($conexao)){
                $statusResultado = true;
            }else{
                $statusResultado = false;
            }      
          }else{
            $statusResultado = false;
          }
            fecharConexaoMysql($conexao);
            return $statusResultado;
        }
    
function selectAllCategorias(){
        $conexao = conexaoMysql();
        $sql = "select * from tblcategorias order by idcategorias desc";
        $result = mysqli_query($conexao, $sql);
    
        if($result)
        {
          $cont = 0;
          while($rsDados = mysqli_fetch_assoc($result))
          {
            $arrayDados[$cont] = array(
              "id"        => $rsDados["idcategorias"],
              "name"      => $rsDados["categoria"],
            );
            $cont++;
          }   
            
            fecharConexaoMysql($conexao);
    
            if(isset($arrayDados))
                return $arrayDados;
              else
              return false;
        }
      }
function deleteCategoria($id){

        $conexao = conexaoMysql();
    
        $sql = "delete from tblcategorias where idcategorias =".$id;
        
        

        if(mysqli_query($conexao, $sql)){
          if(mysqli_affected_rows($conexao)){
              $statusResultado = true;
          }else{
              $statusResultado = false;
          }
    
         }else{
          $statusResultado = false;
         }
    
        fecharConexaoMysql($conexao);

        return $statusResultado;
      }
function updateCategorias(){
  $statusResultado = (boolean) false;

  //abrindo conexão com o bd
  $conexao = conexaoMysql();
}
?>