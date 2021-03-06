<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Core\Configure;
use Cake\Routing\Router;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    
    /** @var object $controller Controller name. */
    public $controller = null;

    /** @var object $action Action name. */
    public $action = null;
    public $session = null;
    public $current_url = '';
    public $BASE_URL = '';

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }
    
    /**
     * Before filter event
     * @param Event $event
     */
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        
        // Start session
//        if (empty($this->request->session()->id())) {
//            $this->request->session()->start();
//        }
        
//        $this->session = $this->request->session();
        $this->controller = strtolower($this->request->params['controller']);
        $this->action = strtolower($this->request->params['action']);
        $this->current_url = Router::url($this->here, true);
        $this->BASE_URL = Router::fullBaseUrl();
    }

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        
        // Set common param
//        $this->set('session', $this->session);
//        $this->set('cookie', $this->Cookie);
        $this->set('controller', $this->controller);
        $this->set('action', $this->action);
        $this->set('current_url', $this->current_url);
        $this->set('BASE_URL', $this->BASE_URL);
        $this->set('isMobile', $this->isMobile());
        
        // Set default layout
        $this->setLayout();
    }
    
    /**
     * Common function set layout for view.
     */
    public function setLayout() {
        if ($this->controller == 'ajax') {
            $this->viewBuilder()->layout('ajax');
        } else if (in_array($this->controller, array('home'))) {
            $this->viewBuilder()->layout('conlatatca');
        } else {
            $this->viewBuilder()->layout('default');
        }
    }
    
    public function isMobile() {
        return $this->RequestHandler->isMobile();
    }
}
