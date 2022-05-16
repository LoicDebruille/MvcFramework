<?php

namespace App\Models;

use Oframework\Utils\Database;
use PDO;

// Mdoel for the table "example"
class ExampleModel extends \Oframework\Models\CoreModel {
    // here I should define every field as a property
    protected $field1;
    protected $field2;
    // etc.

    // I must implements these methods
    public static function find($id) {
        // TODO
    }

    public static function findAll() {
        // TODO
    }

    protected function insert(): bool {
        // TODO
    }

    protected function update(): bool {
        // TODO
    }

    public function delete(): bool {
        // TODO
    }

    // GETTERS

    /**
     * Get the value of field1
     */ 
    public function getField1()
    {
        return $this->field1;
    }

    /**
     * Get the value of field2
     */ 
    public function getField2()
    {
        return $this->field2;
    }

    // SETTERS

    /**
     * Set the value of field1
     */ 
    public function setField1($field1)
    {
        $this->field1 = $field1;
    }

    /**
     * Set the value of field2
     */ 
    public function setField2($field2)
    {
        $this->field2 = $field2;
    }
}