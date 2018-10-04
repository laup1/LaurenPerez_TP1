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

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
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
            'contain' => ['Files', 'Tags']
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
        $files = $this->Agencies->Files->find('list', ['limit' => 200]);
        $tags = $this->Agencies->Tags->find('list', ['limit' => 200]);
        $this->set(compact('agency', 'files', 'tags'));
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
        $files = $this->Agencies->Files->find('list', ['limit' => 200]);
        $tags = $this->Agencies->Tags->find('list', ['limit' => 200]);
        $this->set(compact('agency', 'files', 'tags'));
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
