<?php
    include '../Persistence/ConnectionDB.php ';

    class UserDAO {
        private $connection = null;

        public function __construct() {
                $this->connection = ConnectionDB::getInstance(); 
        }

        public function create($user) {
                try {
                    $statemente = $this->connection->prepare(
                        "INSERT INTO usuarios (nome, sobrenome, email, senha, nomePet, racaPet) VALUES (?,?,?,?)"
                    );

                    $statemente->bindValue(1, $user->nome);
                    $statemente->bindValue(2, $user->sobrenome);
                    $statemente->bindValue(3, $user->email);
                    $statemente->bindValue(4, $user->senha);

                    $statemente->execute();

                    //var_dump($statemente); die();

                    $this->connection = null;
                } catch (PDOException $e) {
                    echo "Ocorreram erros ao inserir novo usuário";
                    echo $e;
                }
        }

        public function search(){
            try{
                $statemente = $this->connection->prepare("SELECT * FROM usuarios");
                $statemente ->execute();
                $dados = $statemente->fetchAll();
                $this->connection = null;

                return $dados;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os usuários";
                echo $e;

            }
        }
        public function delete($id) {
            try{
                $statemente = $this->connection->prepare("DELETE FROM Usuarios WHERE id = ?");
                $statemente->bindValue(1, $id);
                $statemente->execute();

                $this->connection = null;
            }  catch (PDOException $e) {
                echo  "Ocorreram erros ao deletar o usuário";
                echo $e;    
            }

        }
        public function find($email, $senha) {
            try{
                $statemente = $this->connection->prepare("SELECT * FROM Usuarios WHERE email = ? and senha = ?");
                $statemente->bindValue(1, $email);
                $statemente->bindValue(2, $senha);
                $statemente->execute();
                $user = $statemente->fetchAll();

                $this->connection = null;
                return $user;
                } catch(PDOException $e){
                    echo "Ocorreram erros ao deletar o usuário";
                    echo $e;
                }

        }
}
?>