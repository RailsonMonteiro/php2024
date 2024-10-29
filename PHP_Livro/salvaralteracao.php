<?php

require_once 'conexao.php';

try{
    $parametro = ['codigo' => $_POST['codigo'],
                  'nome' => $_POST['nome'],
                  'autor' => $_POST['autor'],
                  'editora' => $_POST['editora'],
                  'ano' => $_POST['ano'],];
                  if ($stmt = $conn->prepare('UPDATE livros SET codigo = :codigo, nome = :nome, autor = :autor, editora = :editora WHERE ano = :ano')){
                      if ($stmt->execute($parametro)){
                          echo 'Registro alterado com sucesso';
                      }
                    };
                    echo "<br>";
                    echo "<a href='index.php'>Voltar</a>";
                } catch (PDOException $e){
                    echo 'Erro: ' . $e->getCode() . ' Mensagem: ' . $e->getMessage();
}
?>