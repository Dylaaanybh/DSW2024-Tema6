<?php

namespace Dsw\Tema6\Models;

class User {
    static private $users = [
        [
            'id' => 1,
            'name' => 'Juan',
            'surname' => 'Perez'
        ],
        [
            'id' => 2,
            'name' => 'Maria',
            'surname' => 'Gomez'
        ],
        [
            'id' => 3,
            'name' => 'Carlos',
            'surname' => 'Lopez'
        ],
        [
            'id' => 4,
            'name' => 'Ana',
            'surname' => 'Martinez'
        ],
        [
            'id' => 5,
            'name' => 'Luis',
            'surname' => 'Hernandez'
        ]
    ];

    public static function all(){
        return self::$users;
    }
    public static function get($id){
        return array_first(self::$users, function($user) use($id){
            return $user['id'] == $id;
        });
    }
}