<?php
/**
*	Den 1.04.2024
*/

class Customer {
	use Controller;
	
	function __construct(){
		
	}
	
	public function index(){
		
		//$this->js = array('public/js/customer.js');
		Auth::handleLogin();	
		$customer = new CustomerModel;
		
		
		/**
		 *  die function an CustomeModel senden dient als versuch, den Fehler zu Testen
		 * und in customer.view.php anzeigen lassen
		 */
		if( $customer->ladenAuswahl('Test') ){
			
			//return true;  // von CustomerLogin
		}
		
		$data['errors'] = $customer->errors;
		
		
		$this->title = "Customer";
		$this->view('customer', $data);	
	}
	
	/**
	 * der logout Button in customer.view.php
	 */
	public function logout(){
		
		Session::destroy();
		header('location:'.URL.'login');
		exit;
		
	}
	
}
?>