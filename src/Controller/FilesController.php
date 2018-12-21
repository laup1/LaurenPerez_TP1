<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;

/**
 * Files Controller
 *
 * @property \App\Model\Table\FilesTable $Files
 *
 * @method \App\Model\Entity\File[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilesController extends AppController
{
public function isAuthorized($user) {
        $action = $this->request->getParam('action');
        // The edit and delete actions are allowed to logged in users for comments.
        if (in_array($action, ['add', 'edit', 'delete'])) {
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
        $files = $this->paginate($this->Files);
        //$user = $this->Auth->user();
        $this->set(compact('files'));
    }

    /**
     * View method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $file = $this->Files->get($id, [
            'contain' => []
        ]);

        $this->set('file', $file);
         $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
  /*public function add() {
        $file = $this->Files->newEntity();
        //if ($this->request->is('post')) {
            //if (!empty($this->request->data['name']['name'])) {
              //  $fileName = $this->request->data['name']['name'];
        if ($this->request->is('post') or $this->request->is('ajax')) {
            if (!empty($this->request->data['file']['name'])) {
                $fileName = $this->request->data['file']['name'];
        
                $uploadPath = 'Files/';
                $uploadFile = $uploadPath . $fileName;
                //if (move_uploaded_file($this->request->data['name']['tmp_name'], 'img/' . $uploadFile)) {
                   // $file = $this->Files->patchEntity($file, $this->request->getData());
                 if (move_uploaded_file($this->request->data['file']['tmp_name'], 'img/' . $uploadFile)) {   
                $file->name = $fileName;
                    $file->path = $uploadPath;
                    if ($this->Files->save($file)) {
                        $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                    } else {
                        $this->Flash->error(__('Unable to upload file, please try again.'));
                    }
                } else {
                    $this->Flash->error(__('Unable to save/upload file, please try again.'));
                }
            } else {
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
       // $agencies = $this->Files->Agencies->find('list', ['limit' => 200]);
        //$this->set(compact('file', 'agencies'));
         $this->set(compact('file'));
        $this->set('_serialize', ['file']);
    }*/
    
      public function add() {
        $file = $this->Files->newEntity();
        if ($this->request->is('post') or $this->request->is('ajax')) {
            //debug($this->request->data);
            //die();
            if (!empty($this->request->data['file']['name'])) {
                //debug($this->request->data);
                //die();
                $fileName = $this->request->data['file']['name'];
                $uploadPath = 'Files/';
                $uploadFile = $uploadPath . $fileName;
                if (move_uploaded_file($this->request->data['file']['tmp_name'], 'img/' . $uploadFile)) {
                    //$file = $this->Files->patchEntity($file, $this->request->getData());
                    $file->name = $fileName;
                    $file->path = $uploadPath;
                    $file->status = 1;
                    if ($this->Files->save($file)) {
                        $this->Flash->success(__('File has been uploaded and inserted successfully.'));
                    } else {
                        $this->Flash->error(__('Unable to upload file, please try again.'));
                    }
                } else {
                    $this->Flash->error(__('Unable to upload file, please try again.'));
                }
            } else {
                $this->Flash->error(__('Please choose a file to upload.'));
            }
        }
        $articles = $this->Files->Articles->find('list', ['limit' => 200]);
        $this->set(compact('file', 'articles'));
        $this->set('_serialize', ['file']);
    }


    /**
     * Edit method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $file = $this->Files->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->Files->patchEntity($file, $this->request->getData());
            if ($this->Files->save($file)) {
                $this->Flash->success(__('The file has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The file could not be saved. Please, try again.'));
        }
        $this->set(compact('file'));
    }

    /**
     * Delete method
     *
     * @param string|null $id File id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
     public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $file = $this->Files->get($id);
        if ($this->Files->delete($file)) {
            $this->Flash->success(__('The file has been deleted.'));
        } else {
            $this->Flash->error(__('The file could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
