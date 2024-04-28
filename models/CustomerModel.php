<?php
/**
 *	Den 1.04.2024
 */
 
 class CustomerModel {	 
	use Model;
    
    
    /**
     *  die function dient als Versuch den Fehler zu testen,
     *  kann später umgeändert werden, angepasst an eigenes version
     */
    function ladenAuswahl($data){
        
        $this->errors = [];
        if($data == 'Test'){
            
            // true ausführen was
            
        } else {
            
            $this->errors['Test'] = " Test Fehler Anzeigen";
        }
        
        if(empty($this->errors)){
            return true;
        }
            return false;
        
    }
    	 
 }
?>