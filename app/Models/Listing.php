<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat debitis dignissimos enim cum ratione perferendis sapiente id! Quaerat culpa repellat cupiditate quam veritatis facilis repudiandae, aut officia unde, temporibus vero.'
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat debitis dignissimos enim cum ratione perferendis sapiente id! Quaerat culpa repellat cupiditate quam veritatis facilis repudiandae, aut officia unde, temporibus vero.'
            ],
            [
                'id' => 3,
                'title' => 'Listing three',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat debitis dignissimos enim cum ratione perferendis sapiente id! Quaerat culpa repellat cupiditate quam veritatis facilis repudiandae, aut officia unde, temporibus vero.'
            ],
            [
                'id' => 4,
                'title' => 'Listing four',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat debitis dignissimos enim cum ratione perferendis sapiente id! Quaerat culpa repellat cupiditate quam veritatis facilis repudiandae, aut officia unde, temporibus vero.'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($id == $listing['id']){
                return $listing;
            }
        }
    }
}