<?php 

	class connect{

		private $server = "localhost";
		private $dbuser = "root";
		private $dbpwrd = "";
		private $dbase = "ola2";

		private $dbtype = "mysql";
		public $conn = NULL;
		private $myDSN = NULL;
		public $query = NULL;
		public $result = NULL;
		public function __construct(){
			$this->setDSN();
			$this->connect();
		}

		public function connect(){
			try{
				$this->conn = new PDO($this->myDSN, $this->dbuser, $this->dbpwrd);
			//echo "Connected";
			}catch(PDOException $e){
				die("Connection ERROR, because: ".$e->getMessage());
			}

		}


		public function select($item,$table,$criteria){
			  Try{
                  $sql = "SELECT ".$item." FROM ".$table." where ".$criteria;
                  $insert = $this->conn->prepare($sql);
                  $insert->execute();
                  $this->result = $insert->fetchAll();
                }catch(PDOException $e){
                   echo $e->getMessage();
                }
		}

		private function setDSN(){
			$this->myDSN = $this->dbtype.":host=".$this->server.";dbname=".$this->dbase;
		}

	
		}

	


?>