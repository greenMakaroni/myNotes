<?php
    namespace App\Models;

    class Note {
        public static function all() {
            return   [
            [
                'id' => 1,
                'title' => 'My first note',
                'content' => 'Buy milk'
            ],
            [
                'id' => 2,
                'title' => 'My second note',
                'content' => 'Meeting with stakeholders at 2pm'
            ],
            [
                'id' => 3,
                'title' => 'My third note',
                'content' => 'Meeting with dev team at 5pm'
            ]
        ];
        }

        public static function find($id) {
            $notes = self::all();

            foreach($notes as $note) {
                if($note['id'] == $id) {
                    return $note;
                }
            }
        }
    }