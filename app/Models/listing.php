<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'listing one',
                'description' => '
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra est volutpat felis iaculis dictum. In at ligula at eros tincidunt fringilla. Quisque velit ante, sollicitudin quis tincidunt nec, aliquam id diam. Aliquam a tellus in metus accumsan lacinia. Sed vitae lectus orci. Pellentesque tristique at enim id vulputate. Ut consequat luctus justo vitae semper. Sed dignissim, quam nec venenatis consequat, lacus enim volutpat mi, aliquam aliquet dui libero vitae mi. Cras quis risus et nisi porttitor dignissim id interdum libero.'

            ],
            [
                'id' => 2,
                'title' => 'listing two',
                'description' => '
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pharetra est volutpat felis iaculis dictum. In at ligula at eros tincidunt fringilla. Quisque velit ante, sollicitudin quis tincidunt nec, aliquam id diam. Aliquam a tellus in metus accumsan lacinia. Sed vitae lectus orci. Pellentesque tristique at enim id vulputate. Ut consequat luctus justo vitae semper. Sed dignissim, quam nec venenatis consequat, lacus enim volutpat mi, aliquam aliquet dui libero vitae mi. Cras quis risus et nisi porttitor dignissim id interdum libero.'

            ]
        ];
    }
    public static function find($id)
    {
        $listings = self::all();
        foreach ($listings as $lis) {
            if ($lis['id'] == $id) {
                return $lis;
            }
        }
    }
}

?>