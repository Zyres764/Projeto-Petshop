<?php
    include '../Persistence/ConnectionDB.php ';

    class PetDAO {
        private $connection = null;

        public function __construct() {
                $this->connection = ConnectionDB::getInstance(); 
        }

        public function create($user) {
                try {
                    $statemente = $this->connection->prepare(
                        "INSERT INTO pet (dono, nomePet, racaPet, Especie) VALUES (?,?,?,?)"
                    );

                    $statemente->bindValue(1, $user->user_id);
                    $statemente->bindValue(2, $user->nomePet);
                    $statemente->bindValue(3, $user->racaPet);
                    $statemente->bindValue(4, $user->Especie);

                    $statemente->execute();

                    //var_dump($statemente); die();

                    $this->connection = null;
                } catch (PDOException $e) {
                    echo "Ocorreram erros ao inserir novo pet";
                    echo $e;
                }
        }

        public function search(){
            try{
                $statemente = $this->connection->prepare("SELECT * FROM pet");
                $statemente ->execute();
                $dados = $statemente->fetchAll();
                $this->connection = null;

                return $dados;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os pet";
                echo $e;

            }
        }
        public function delete($id) {
            try{
                $statemente = $this->connection->prepare("DELETE FROM pet WHERE id = ?");
                $statemente->bindValue(1, $id);
                $statemente->execute();

                $this->connection = null;
            }  catch (PDOException $e) {
                echo  "Ocorreram erros ao deletar o pet";
                echo $e;    
            }

        }
}
?>