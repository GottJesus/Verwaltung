<?php
/**
 *	Den 1.04.2024
 */

class Login {
	use Controller;
			
	public function index(){
		//echo'This is the Login controller';
		
		// javascript anbinden von public, gesendet an views/head.view.php
		$this->js = array('public/js/login.js');

		$loginmodel = new LoginModel;
		
		/**
		 * wenn input Feld ist gefüllt und den Enter gedrückt dann wird eine 
		 * POST Request abgesendet, hier unten wird den eingegebenes Passwort
		 * in MD5 verschlüsselt und zum validate(LoginModel class) gesendet... wenns
		 * der Passwort stimmt wird eine true zurückgesendet, und hier in If dann weiter
		 * geleitet zum customer,
		 */
		if($_SERVER['REQUEST_METHOD'] == 'POST' ){
		
			$pass = MD5($_POST['pass']);
			if( $loginmodel->validate($pass) ){
				
				sleep(1);
				redirect('customer');
				
			} 
				
		}
		
		$data['errors'] = $loginmodel->errors;
		
		/**
		 * wenn eine session ist gesetzt wird unmöglich die Login Seite abzurufen,
		 */
		session_start();
		if(isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])){
			$this->title = "Customer";
			$this->view('customer');	
		} else {
			$this->title = "Login";
			$this->view('login', $data);
		}
	
	}
	
}
?>