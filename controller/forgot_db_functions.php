<?php





	class DB_Functions {


		


		private $conn;


		


		// constructor


		function __construct() {


			require_once ("../include/DB_Connect.php");


			// connecting to database


			$db = new Db_Connect();


			$this->conn = $db->connect();


		}





		// destructor


		function __destruct() {


			


		}


		


		public function getLoginDetails($email) {





        $stmt = $this->conn->prepare("SELECT * FROM tbl_candidates WHERE email = ?");





        $stmt->bind_param("s", $email);





        if ($stmt->execute()) {


            $user = $stmt->get_result()->fetch_assoc();


            $stmt->close();





            // verifying user email


						$stored_email = $user['email'];



            // check for password equality


            if ($stored_email == $email) {



								// user authentication details are correct


                return $user;


            }


        } else {


            return NULL;


        }


    }


		


	}


	


?>
