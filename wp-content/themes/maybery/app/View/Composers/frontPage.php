<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class frontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        //
        'partials.content-front-page'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            //
        ];
    }

  

   
}
