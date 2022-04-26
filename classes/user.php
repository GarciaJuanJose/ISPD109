<?php
include('password.php');
class User extends Password{

    private $_db;

    function __construct($db){
    	parent::__construct();

    	$this->_db = $db;
    }

	private function get_user_hash($numdni){

		try {
			$stmt = $this->_db->prepare('SELECT PASSWORD, NUMERO_DNI, ID_USUARIO FROM usuarios WHERE NUMERO_DNI = :numdni AND active="Yes" ');
			$stmt->execute(array('NUMERO_DNI' => $numdni));

			return $stmt->fetch();

		} catch(PDOException $e) {
		    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}

	public function isValidUsername($numdni){
		if (strlen($numdni) < 3) return false;
		if (strlen($numdni) > 17) return false;
		if (!ctype_alnum($numdni)) return false;
		return true;
	}

	public function login($username,$password){
		if (!$this->isValidUsername($numdni)) return false;
		if (strlen($password) < 3) return false;

		$row = $this->get_user_hash($numdni);

		if($this->password_verify($password,$row['PASSWORD']) == 1){

		    $_SESSION['loggedin'] = true;
		    $_SESSION['numdni'] = $row['NUMERO_DNI'];
		    $_SESSION['ID_USUARIO'] = $row['ID_USUARIO'];
		    return true;
		}
	}

	public function logout(){
		session_destroy();
	}

	public function is_logged_in(){
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}

}


?>
