<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [

            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem 
                cum perferendis sapiente, reiciendis sit aliquam. Sit repudiandae optio et laborum, 
                eveniet ipsum quos dicta earum ratione veniam molestiae dolor omnis.'
            ],

            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem 
                cum perferendis sapiente, reiciendis sit aliquam. Sit repudiandae optio et laborum, 
                eveniet ipsum quos dicta earum ratione veniam molestiae dolor omnis.'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
