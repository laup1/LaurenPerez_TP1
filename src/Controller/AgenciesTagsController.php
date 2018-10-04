<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AgenciesTags Controller
 *
 * @property \App\Model\Table\AgenciesTagsTable $AgenciesTags
 *
 * @method \App\Model\Entity\AgenciesTag[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgenciesTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tags']
        ];
        $agenciesTags = $this->paginate($this->AgenciesTags);

        $this->set(compact('agenciesTags'));
    }

    /**
     * View method
     *
     * @param string|null $id Agencies Tag id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agenciesTag = $this->AgenciesTags->get($id, [
            'contain' => ['Tags']
        ]);

        $this->set('agenciesTag', $agenciesTag);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agenciesTag = $this->AgenciesTags->newEntity();
        if ($this->request->is('post')) {
            $agenciesTag = $this->AgenciesTags->patchEntity($agenciesTag, $this->request->getData());
            if ($this->AgenciesTags->save($agenciesTag)) {
                $this->Flash->success(__('The agencies tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agencies tag could not be saved. Please, try again.'));
        }
        $tags = $this->AgenciesTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('agenciesTag', 'tags'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Agencies Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agenciesTag = $this->AgenciesTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agenciesTag = $this->AgenciesTags->patchEntity($agenciesTag, $this->request->getData());
            if ($this->AgenciesTags->save($agenciesTag)) {
                $this->Flash->success(__('The agencies tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agencies tag could not be saved. Please, try again.'));
        }
        $tags = $this->AgenciesTags->Tags->find('list', ['limit' => 200]);
        $this->set(compact('agenciesTag', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agencies Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agenciesTag = $this->AgenciesTags->get($id);
        if ($this->AgenciesTags->delete($agenciesTag)) {
            $this->Flash->success(__('The agencies tag has been deleted.'));
        } else {
            $this->Flash->error(__('The agencies tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
