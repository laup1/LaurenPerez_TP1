<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\Mailer\Email;

   class EmailsController extends AppController{
       
      public function index(){
          
         $email = new Email('default');
         //$uuid = Text::uuid();
         $confirmation_link = "http://" . $_SERVER['HTTP_HOST'] . $this->request->webroot . "users/confirm/uuid";
         $email->to('abc@gmail.com')->subject('Confirmation link ')->send($confirmation_link);
         $this->Flash->success(__('courriel envoyé.'));
      }
   }
?>