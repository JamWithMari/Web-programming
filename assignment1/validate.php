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
        public function validEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            return false;

        }

        
        public function validPhone($phone){
            if(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)){
                return true;
            }
            return false;
        }
    }
?>