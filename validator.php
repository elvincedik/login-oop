<?php

class validator {
    //property
    private $errors = [];


    //methods
    public function validateEmpty($value, $fieldName) {
        if(empty($value)) {
            if($fieldName == "fullName") {
                $this->errors[$fieldName] = "pls enter fullname";
            } elseif($fieldName == "email") {
                $this->errors[$fieldName] = "pls enter email";
            } elseif($fieldName == "pwd") {
                $this->errors[$fieldName] = "pls enter password";
            } elseif($fieldName == "confirmPwd") {
                $this->errors[$fieldName] = "pls enter confirm password";
            } else {
                $this->errors[$fieldName] = "field is required";
            }
        }
    }

    // to check if there are errors
    public function hasErrors() {
        return !empty($this->errors);
    }

    // below is to retrieve the error
    public function getErrors() {
        return $this->errors;
    }
}