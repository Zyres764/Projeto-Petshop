<?php
    include '../Persistence/ConnectionDB.php ';

    class ProprietarioDAO {
        private $connection = null;

        public function __construct() {
                $this->connection = ConnectionDB::getInstance(); 
        }

        public function create($Proprietario) {
                try {
                    $statemente = $this->connection->prepare(
                        "INSERT INTO Proprietario (nome, Estabelecimento, CNPJ) VALUES (?,?,?)"
                    );

                    $statemente->bindValue(1, $Proprietario->nome);
                    $statemente->bindValue(2, $Proprietario->Estabelecimento);
                    $statemente->bindValue(3, $Proprietario->CNPJ);

                    $statemente->execute();

                    //var_dump($statemente); die();

                    $this->connection = null;
                } catch (PDOException $e) {
                    echo "Ocorreram erros ao inserir novo proprietário";
                    echo $e;
                }
        }

        public function search(){
            try{
                $statemente = $this->connection->prepare("SELECT * FROM Proprietario");
                $statemente ->execute();
                $dados = $statemente->fetchAll();
                $this->connection = null;

                return $dados;
            } catch (PDOException $e) {
                echo "Ocorreram erros ao buscar os proprietarios";
                echo $e;

            }
        }
        public function delete($id) {
            try{
                $statemente = $this->connection->prepare("DELETE FROM Proprietario WHERE id = ?");
                $statemente->bindValue(1, $id);
                $statemente->execute();

                $this->connection = null;
            }  catch (PDOException $e) {
                echo  "Ocorreram erros ao deletar o proprietario";
                echo $e;    
            }

        }
}
?>