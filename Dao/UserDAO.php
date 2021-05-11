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
                        "INSERT INTO usuarios (nome, sobrenome, email, senha, nomePet, racaPet) VALUES (?,?,?,?,?,?)"
                    );

                    $statemente->bindValue(1, $user->nome);
                    $statemente->bindValue(2, $user->sobrenome);
                    $statemente->bindValue(3, $user->email);
                    $statemente->bindValue(4, $user->senha);
                    $statemente->bindValue(5, $user->nomepet);
                    $statemente->bindValue(6, $user->raca);

                    $statemente->execute();

                    //var_dump($statemente); die();

                    $this->connection = null;
                } catch (PDOException $e) {
                    echo "Ocorreram erros ao inserir novo usuário";
                    echo $e;
                }
        }
    }
?>