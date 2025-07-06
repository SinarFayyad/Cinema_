<?php 

class UserService {

    public static function usersToArray($users_db){
        $results = [];

        foreach($users_db as $a){
             $results[] = $a->toArray();  
        } 

        return $results;
    }



}