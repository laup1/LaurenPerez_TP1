<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agencies Controller
 *
 * @property \App\Model\Table\AgenciesTable $Agencies
 *
 * @method \App\Model\Entity\Agency[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgenciesController extends AppController
{
    
      public function initialize() {
        parent::initialize();
        $this->Auth->allow(['tags']);
        
        $this->loadComponent('RequestHandler');
    }
    
     public function isAuthorized($user) {
        $action = $this->request->getParam('action');
        // The add and tags actions are always allowed to logged in users.
        if (in_array($action, ['add', 'tags'])) {
            return true;
        }

        // All other actions require a slug.
        $id = $this->request->getParam('pass.0');
        if (!$id) {
            return false;
        }
        if ($user['type'] === 'agencie'){            
         // Check that the article belongs to the current user.
        $agencie = $this->Agencies->findById($id)->first();

        return $agencie->user_id === $user['id'];
            
        }
        
         if ($user['type'] === 'admin'){
            return true;
       
        } 
        

      
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Codes']
        ];
        $agencies = $this->paginate($this->Agencies);

        $this->set(compact('agencies'));
         $this->set('_serialize', ['agencies']);
    }

    /**
     * View method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agency = $this->Agencies->get($id, [
            'contain' => ['Users', 'Codes', 'Files', 'Tags',  'Subcategories']
        ]);

        $this->set('agency', $agency);
         $this->set('_serialize', ['agency']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agency = $this->Agencies->newEntity();
        if ($this->request->is('post')) {
            $agency = $this->Agencies->patchEntity($agency, $this->request->getData());
            
             $user = $this->Auth->user();
            // Changed: Set the user_id from the session.
           // $article->user_id = $this->Auth->user();
            
            if ($this->Agencies->save($agency)) {
                $this->Flash->success(__('The agency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agency could not be saved. Please, try again.'));
        }
        
         // Bâtir la liste des catégories  
        $this->loadModel('Categories');
        $categories = $this->Categories->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $categories = $categories->toArray();
        reset($categories);
        $category_id = key($categories);

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $subcategories = $this->Agencies->Subcategories->find('list', [
            'conditions' => ['Subcategories.category_id' => $category_id],
        ]);
        
      $users = $this->Agencies->Users->find('list', ['limit' => 200]);
        $codes = $this->Agencies->Codes->find('list', ['limit' => 200]);
        $files = $this->Agencies->Files->find('list', ['limit' => 200]);
        $tags = $this->Agencies->Tags->find('list', ['limit' => 200]);
         $user = $this->Auth->user();
        $this->set(compact('agency', 'users', 'codes', 'files', 'tags', 'user', 'subcategories', 'categories'));
     $this->set('_serialize', ['agency', 'users', 'codes', 'files', 'tags', 'user', 'subcategories', 'categories']);
        
            }

    /**
     * Edit method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agency = $this->Agencies->get($id, [
            'contain' => ['Files', 'Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agency = $this->Agencies->patchEntity($agency, $this->request->getData());
            if ($this->Agencies->save($agency)) {
                $this->Flash->success(__('The agency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agency could not be saved. Please, try again.'));
        }
        
        // Bâtir la liste des catégories  
        $this->loadModel('Categories');
        $categories = $this->Categories->find('list', ['limit' => 200]);

        // Extraire le id de la première catégorie
        $categories = $categories->toArray();
        reset($categories);
        $category_id = key($categories);

        // Bâtir la liste des sous-catégories reliées à cette catégorie
        $subcategories = $this->Agencies->Subcategories->find('list', [
            'conditions' => ['Subcategories.category_id' => $category_id],
        ]);
        
        $users = $this->Agencies->Users->find('list', ['limit' => 200]);
        $codes = $this->Agencies->Codes->find('list', ['limit' => 200]);
        $files = $this->Agencies->Files->find('list', ['limit' => 200]);
        $tags = $this->Agencies->Tags->find('list', ['limit' => 200]);
          $user = $this->Auth->user();
         $this->set(compact('agency', 'users', 'codes', 'files', 'tags', 'user', 'subcategories', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agency id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agency = $this->Agencies->get($id);
        if ($this->Agencies->delete($agency)) {
            $this->Flash->success(__('The agency has been deleted.'));
        } else {
            $this->Flash->error(__('The agency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
