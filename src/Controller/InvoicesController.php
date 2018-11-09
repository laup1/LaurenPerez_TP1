<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\I18n\I18n;

/**
 * Invoices Controller
 *
 * @property \App\Model\Table\InvoicesTable $Invoices
 *
 * @method \App\Model\Entity\Invoice[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InvoicesController extends AppController
{
 public function initialize() {
        parent::initialize();
        $this->Auth->allow(['add']);
       
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
        $agencie = $this->Invoices->Agencies->findById($id)->first();

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
       // $invoice = $this->Invoices->get(3);
       // $invoice->translation('es')->invoice_details = 'pagado';
        //$invoice->translation('en')->invoice_details = 'paid';
        //$this->Invoices->save($invoice);
        
       // $invoice2 = $this->Invoices->get(4);
        //$invoice2->translation('es')->invoice_details = 'hablar con la persona';
        //$invoice2->translation('en')->invoice_details = 'speak with the person';
        //$this->Invoices->save($invoice2);
      
        
        $this->paginate = [
            'contain' => ['Agencies', 'Status']
        ];
        $invoices = $this->paginate($this->Invoices);
       
        
        
        
        $this->set(compact('invoices'));
    }

    /**
     * View method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $invoice = $this->Invoices->get($id, [
            'contain' => ['Agencies', 'Status']
        ]);

        $this->set('invoice', $invoice);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $invoice = $this->Invoices->newEntity();
        if ($this->request->is('post')) {
            $invoice = $this->Invoices->patchEntity($invoice, $this->request->getData());
            if ($this->Invoices->save($invoice)) {
                $this->Flash->success(__('The invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice could not be saved. Please, try again.'));
        }
        $agencies = $this->Invoices->Agencies->find('list', ['limit' => 200]);
        $status = $this->Invoices->Status->find('list', ['limit' => 200]);
          $user = $this->Auth->user();
           $agencie = $this->Invoices->Agencies->findByUser_id($user['id']);
        $this->set(compact('invoice', 'agencies', 'status','user', 'agencie'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $invoice = $this->Invoices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $invoice = $this->Invoices->patchEntity($invoice, $this->request->getData());
            if ($this->Invoices->save($invoice)) {
                $this->Flash->success(__('The invoice has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The invoice could not be saved. Please, try again.'));
        }
        $agencies = $this->Invoices->Agencies->find('list', ['limit' => 200]);
        $status = $this->Invoices->Status->find('list', ['limit' => 200]);
         $user = $this->Auth->user();
           $agencie = $this->Invoices->Agencies->findByUser_id($user['id']);
        $this->set(compact('invoice', 'agencies', 'status', 'user', 'agencie'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Invoice id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $invoice = $this->Invoices->get($id);
        if ($this->Invoices->delete($invoice)) {
            $this->Flash->success(__('The invoice has been deleted.'));
        } else {
            $this->Flash->error(__('The invoice could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
