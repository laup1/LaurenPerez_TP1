<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Codes Controller
 *
 * @property \App\Model\Table\CodesTable $Codes
 *
 * @method \App\Model\Entity\Code[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CodesController extends AppController
{
    
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
        $agencie = $this->Codes->find('list', ['limit' => 200]);

        return $agencie;
            
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
        $codes = $this->paginate($this->Codes);

        $this->set(compact('codes'));
    }

    /**
     * View method
     *
     * @param string|null $id Code id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $code = $this->Codes->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('code', $code);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $code = $this->Codes->newEntity();
        if ($this->request->is('post')) {
            $code = $this->Codes->patchEntity($code, $this->request->getData());
            if ($this->Codes->save($code)) {
                $this->Flash->success(__('The code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The code could not be saved. Please, try again.'));
        }
        $this->set(compact('code'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Code id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $code = $this->Codes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $code = $this->Codes->patchEntity($code, $this->request->getData());
            if ($this->Codes->save($code)) {
                $this->Flash->success(__('The code has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The code could not be saved. Please, try again.'));
        }
        $this->set(compact('code'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Code id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $code = $this->Codes->get($id);
        if ($this->Codes->delete($code)) {
            $this->Flash->success(__('The code has been deleted.'));
        } else {
            $this->Flash->error(__('The code could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
