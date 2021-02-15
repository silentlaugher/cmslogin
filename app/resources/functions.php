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
?>