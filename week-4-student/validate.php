<?php
    class validate{
        public function checkEmpty($data, $fields){
            $msg = null;
            foreach($fields as $value){
                if(empty($data[$value])){
                    $msg .= "<p>$value field cannot be empty</p>";
                }
            }
            return $msg;
        }
        //Check our age

        public function validAge($age){
            //check to see if our age is numeric
            if(preg_match("/^[0-9]+$/", $age)){
                return true;
            }
            return false;
        }

        //check to see if our email follows the email format
        public function validEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;

        }
    }


?>