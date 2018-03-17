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
        $ids = array();
        $ids[] = $id;
        $cateName = '';
        foreach ($this->_settings['cates'] as $c) {
            if ($c['id'] == $id) {
                $cateName = $c['name'];
            }
            if ($c['root_id'] == $id) {
                $ids[] = $c['id'];
            }
        }
        $param = array(
            'cate_id' => implode(',', $ids),
            'page' => 1,
            'limit' => 7
        );
        $data = Api::call(Configure::read('API.url_posts_all'), $param);
        $param['cate_name'] = $cateName;
        $this->set('data', $data);
        $this->set('param', $param);
    }
}