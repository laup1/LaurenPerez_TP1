<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AgenciesFiles Controller
 *
 * @property \App\Model\Table\AgenciesFilesTable $AgenciesFiles
 *
 * @method \App\Model\Entity\AgenciesFile[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgenciesFilesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Agencies', 'Files']
        ];
        $agenciesFiles = $this->paginate($this->AgenciesFiles);

        $this->set(compact('agenciesFiles'));
    }

    /**
     * View method
     *
     * @param string|null $id Agencies File id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenciesFile = $this->AgenciesFiles->get($id, [
            'contain' => ['Agencies', 'Files']
        ]);

        $this->set('agenciesFile', $agenciesFile);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agenciesFile = $this->AgenciesFiles->newEntity();
        if ($this->request->is('post')) {
            $agenciesFile = $this->AgenciesFiles->patchEntity($agenciesFile, $this->request->getData());
            if ($this->AgenciesFiles->save($agenciesFile)) {
                $this->Flash->success(__('The agencies file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agencies file could not be saved. Please, try again.'));
        }
        $agencies = $this->AgenciesFiles->Agencies->find('list', ['limit' => 200]);
         $user = $this->Auth->user();
           $agencie = $this->Invoices->Agencies->findByUser_id($user['id']);
        $files = $this->AgenciesFiles->Files->find('list', ['limit' => 200]);
        $this->set(compact('agenciesFile', 'agencies', 'files', 'agencie'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agencies File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenciesFile = $this->AgenciesFiles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenciesFile = $this->AgenciesFiles->patchEntity($agenciesFile, $this->request->getData());
            if ($this->AgenciesFiles->save($agenciesFile)) {
                $this->Flash->success(__('The agencies file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agencies file could not be saved. Please, try again.'));
        }
        $agencies = $this->AgenciesFiles->Agencies->find('list', ['limit' => 200]);
        $files = $this->AgenciesFiles->Files->find('list', ['limit' => 200]);
         $user = $this->Auth->user();
           $agencie = $this->Invoices->Agencies->findByUser_id($user['id']);
        $this->set(compact('agenciesFile', 'agencies', 'files', 'agencie'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agencies File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenciesFile = $this->AgenciesFiles->get($id);
        if ($this->AgenciesFiles->delete($agenciesFile)) {
            $this->Flash->success(__('The agencies file has been deleted.'));
        } else {
            $this->Flash->error(__('The agencies file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
