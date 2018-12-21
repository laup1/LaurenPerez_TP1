<?php
namespace App\Controller;

use App\Controller\AppController;
use Firebase\JWT\JWT;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController

{
    
    
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'fields' => [
            'id', 'username', 'type'
        ],
        'sortWhitelist' => [
            'id', 'username', 'type'
        ]
    ];
    
   
   public function initialize() {
        parent::initialize();
        $this->Auth->allow(['token']);
     
        $this->Auth->allow(['logout', 'add', 'menu','coverage']);
    }
    
        public function isAuthorized($user) {        
        
        $action = $this->request->getParam('action');
        // Droits par défaut
        if (in_array($action, ['add', 'logout', 'aPropos'])) {
            return true;
        }

        $id = $this->request->getParam('pass.0');
        if (!$id) {
            return false;
        }

        if ($user['type'] === 'agencie') {
            // Check that the article belongs to the current user.
            $user1 = $this->Users->findById($id)->first();
            if (in_array($action, ['view', 'add', 'edit', 'logout', 'login'])) {                
            return $user1->id === $user['id'];
            
            }
        
            //return $student->user_id === $user['id'];
        } else if ($user['type'] === 'admin'){
            return true;
       
        }   

    }
    
    
    public function login() {
        
        $this->loadComponent('CakeCaptcha.Captcha', [
            'captchaConfig' => 'LoginCaptcha'
        ]);
        if ($this->request->is('post')) {
            
             $isHuman = captcha_validate($this->request->data['CaptchaCode']);
            
            unset($this->request->data['CaptchaCode']);
           

  
 
  if ($isHuman) {
      // TODO: Captcha validation passed, perform protected action
      $user = $this->Auth->identify();
                if ($user) {
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Flash->error(__('Invalid username or password, try again'));
            } else {
     $this->Flash->error(__('CAPTCHA validation failed, try again.'));
  }
  }
 
            
                          
            }
          
        
    

    


    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
          $user = $this->Auth->user();

        $this->set(compact('users', 'user'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Agencies']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                  //  return $this->redirect( ['controller' => 'Emails', 'action' => 'index']);

                return $this->redirect(['action' => 'index']);
             
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
         
    
        
       
       
    }
    
    
    

    
    
   
    
     public function logout() {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    
    public function menu() {       
                          
       // return $this->redirect('\src\Template\Users\aPropos.php'); 
                   //return $this->redirect(['/Users/aPropos.php']);
              
                          
           
          
    }
    
        public function coverage() {       
                          
       // return $this->redirect('\src\Template\Users\aPropos.php'); 
                   //return $this->redirect(['/Users/aPropos.php']);
              
                          
           
        }
}
