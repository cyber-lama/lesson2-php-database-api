<?php

include 'database.php';

class transformArray
{
    public $db;
    public function __construct()
    {
        $this->db = new database();
    }
    function transform($decode){

        $arrayParsingItems = [];



        foreach($decode as $items){
            foreach($items as $key => $item){
                if(!is_string ( $item ) ){
                    continue;
                }
                $it = $items[$key] = "'$item'";
                array_push($arrayParsingItems, $it);
            };
        };
        $strParsingItems = implode(",", $arrayParsingItems);
        print_r($strParsingItems);

    }




}