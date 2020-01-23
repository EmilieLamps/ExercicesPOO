<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * 
 */
// Instanciation de la classe  = création d’un objet à partir d’une classe
class Employe {
    protected $_id;
    protected  $_name;
    protected  $_surname;
    protected  $_birthdate;
    protected  $_salary;
    protected  $_gender;
    /**
     * 
     * @param type INTEGER $id 
     * @param type STRING $name
     * @param type STRING $surname
     * @param type STRING $birthdate
     * @param type FLOAT $salary
     * @param type STRING $gender
     */
    // Déclaration du constructeur
    public function __construct($id, $name, $surname, $birthdate, $salary, $gender){
        $this->_id = $id;
        $this->_name = $name;
        $this->_surname = $surname;
        $this->_birthdate = $birthdate;
        $this->_salary = $salary;
        $this->_gender = $gender;  
    }
    public function __toString() {
        return $this->_name. ' '. $this->_surname;
    }
}
