<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class CatesController extends AppController {
    /**
     * People top page
     */
    public function index($id = '') {
        $param = array(
            'cate_id' => $id,
            'page' => 1,
            'limit' => 7
        );
        $data = Api::call(Configure::read('API.url_posts_all'), $param);
        $this->set('data', $data);
        $this->set('param', $param);
//        echo '<pre>';
//        print_r($data);
//        die();
    }
}