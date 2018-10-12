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
            'contain' => ['Users', 'Codes', 'Files', 'Tags']
        ]);

        $this->set('agency', $agency);
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
            if ($this->Agencies->save($agency)) {
                $this->Flash->success(__('The agency has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agency could not be saved. Please, try again.'));
        }
      $users = $this->Agencies->Users->find('list', ['limit' => 200]);
        $codes = $this->Agencies->Codes->find('list', ['limit' => 200]);
        $files = $this->Agencies->Files->find('list', ['limit' => 200]);
        $tags = $this->Agencies->Tags->find('list', ['limit' => 200]);
         $user = $this->Auth->user();
        $this->set(compact('agency', 'users', 'codes', 'files', 'tags', 'user'));
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
        $users = $this->Agencies->Users->find('list', ['limit' => 200]);
        $codes = $this->Agencies->Codes->find('list', ['limit' => 200]);
        $files = $this->Agencies->Files->find('list', ['limit' => 200]);
        $tags = $this->Agencies->Tags->find('list', ['limit' => 200]);
          $user = $this->Auth->user();
        $this->set(compact('agency', 'users', 'codes', 'files', 'tags', 'user'));
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
