<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class ArticlesController extends AppController {
    /**
     * People top page
     */
    public function index($id = '') {
        $param = array(
            'id' => $id,
            'get_relations' => 1
        );
        $data = Api::call(Configure::read('API.url_posts_detail'), $param);
        $this->set('data', $data);
    }
}