<?php

namespace App\Controller\Api;

use App\Controller\Api\AppController;

class CocktailsController extends AppController {

    public $paginate = [
        'page' => 1,
        'limit' => 100,
        'maxLimit' => 150,
/*        'fields' => [
            'id', 'name', 'description'
        ],
*/        'sortWhitelist' => [
            'id', 'description_Status', 'created', 'modified'
        ]
    ];

}
