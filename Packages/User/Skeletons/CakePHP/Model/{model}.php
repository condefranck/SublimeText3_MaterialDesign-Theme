<?php
class {model} extends AppModel{

    public function afterFind($results, $primary = false){
        return $results;
    }

    public function afterSave($created, $options = array()){

    }

}