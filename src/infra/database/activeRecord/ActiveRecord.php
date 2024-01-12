<?php 

namespace src\infra\database\activeRecord;

use ReflectionClass;

abstract class ActiveRecord {

    protected $table = null;

    protected $atrributes = [];

    public function __construct() 
    {
        if(!$this->table) {
            $this->table = strtolower((new ReflectionClass($this))->getShortName());
            // var_dump($this->table);
        }
    }

    public function __set($atrribute, $value) 
    {
        $this->atrributes[$atrribute] = $value;
    }

    public function __get($attribute) {
        return $this->atrributes[$attribute];
    } 

    public function getAttribut() {
        return $this->atrributes;
    }
   

    public function getTable() {
        return $this->table;
    }

}

