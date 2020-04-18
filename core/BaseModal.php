<?php
    class BaseModel extends Connection
    {
        protected $table;

        public function __construct()
        {
            parent::__construct();
        }

        public function getAll()
        {
            try
            {
                $sql = $this->dbConnection->prepare("SELECT * FROM ".$this->table);
                $sql->execute();
                $resultSet = null;

                while ($row = $sql->fetch(PDO::FETCH_OBJ))
                {
                    $resultSet[] = $row;
                }
                return $resultSet;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
                die();
            }
        }
    }
?>