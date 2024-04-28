<?php
/**
 *	Den 1.04.2024
 */

 class LoginModel {
    use Model;
    
    
    /**
     * der verschlüsselten Password aus dem json Datei laden und mit zugesendeten vergleichen...
     * 
     *  wenn Passwort stimmt dann session setzen(in ersten IF) und return true(Letzte IF)...,
     *  return wird zum controllers/login if( $loginmodel->validate($pass) ){.weiterleiten..}  
     *  gesendet un dann da wird weiter zum customer geleitet
     *
     *  errors, variable ist im Model initialisiert
     */
    function validate($data){
             
        $this->errors = [];

        if(!empty($data)){
            
            $json = json_decode(file_get_contents("public/json/token.json"));
            if($json != null && $data == $json->{'token'}){
                
                Session::init();
                Session::set('loggedIn', $json->{'admin'});

            } else {
                
                $this->errors['pass'] = "Falsches Passwort";
            }
        }
        
        /**
         * wenn error array leer ist dann return true, (die oberer if) dann in login/validate..
         * 
         * wenn errors array enthält eine Fehler Meldung(denn oberer else) dann return false,
         * wird einen Fehler angezeigt
         */
        if(empty($this->errors)){
            return true;
        }
            return false;
        
    }
     
 }
?>