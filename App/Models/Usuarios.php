<?php
  /*
  * Definição da class Usuários(Model) contendo métodos(procedimentos) específicos
  * responsaveis por tratar regras de negócios e acessos aos dados perante aplicação
  */
  namespace App\Models;

  use App\Core\Model;

  class Usuarios extends Model {

    private function verificaCadastro($email) {
      $query = "SELECT * FROM usuarios WHERE email = :email";
      $query = $this->pdo->prepare($query);
      $query->bindValue(":email", $email);
      $query->execute();
      if($query->rowCount() === 0) {
        return true;
      }else {
        return false;
      }
    }

    public function salvarCadastro($nome, $email, $senha, $data_nascimento) {
      if($this->verificaCadastro($email) == true) {
        $query = "INSERT INTO usuarios (nome,email,senha,data_nascimento) VALUES (:nome,:email,:senha,:data_nascimento)";
        $query = $this->pdo->prepare($query);
        $query->bindValue(":nome", $nome);
        $query->bindValue(":email", $email);
        $query->bindValue(":senha", $senha);
        $query->bindValue(":data_nascimento", $data_nascimento);
        $query->execute();
        return true;
      }
    }
  }
?>
