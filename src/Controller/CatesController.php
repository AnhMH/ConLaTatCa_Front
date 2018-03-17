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
        $param['cate_name'] = !empty($data[0]['cate_name']) ? $data[0]['cate_name'] : '';
        $this->set('data', $data);
        $this->set('param', $param);
    }
}