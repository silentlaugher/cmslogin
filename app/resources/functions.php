<?php 
    /**
     * check input if value is passed
     * @return $array
     */
    function check_input_values(array $entries, array $form_errors): array{
        //foreach for each input
        foreach($entries as $entry){
            //check if input is empty
            if(empty($_POST[$entry])){
                $form_errors [] = "The ".$entry." field is required";
            }
        }
        return $form_errors;
    }

    /**
    * check input length is valid
    * @return $array
    */
    function check_input_length(array $entries, array $form_errors): array{
        //check each input and get length
        foreach($entries as $entry => $length){
            if(strlen(trim($_POST[$entry])) < $length){
                $form_errors[] = "The ".$entry." length is less than ".$length;
            }
        }
        return $form_errors;
    }

    /**
    * check if email is a valid address
    * @return $array
    */
    function check_valid_email(string $email, array $form_errors): array{
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $form_errors[] = "The email address ".$email." is not a valid address";
        }
        return $form_errors;
    }

    /**
    * Loop through and display all errors
    * @return $string
    */
    function get_errors(array $form_errors): string{
        $errors = "<p><ul style='color:red;'><li>There are ".count($form_errors)." on the form</li>";
            foreach($form_errors as $error){
                $errors .= "<li>{$error}</li>";
            }
            $errors .="</ul></p>";
            return $errors;
    }
?>