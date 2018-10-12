<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>        
        <div class="top-bar-section">
            <ul class="right">
                
                 <li>
                    <?php
                     $loguser = $this->request->getSession()->read('Auth.User');
                      if ($loguser) {
                      $user = $loguser['username'];
                      $role = $loguser['type'];
                      echo $this->Html->link($role .' '. $user . ' logout', ['controller' => 'Users', 'action' => 'logout']);
                             
                      } else {
                         echo $this->Html->link('login', ['controller' => 'Users', 'action' => 'login']);                           
                      }
                        ?>
                    </li>
                     <li>
                        <?php
                        $loguser = $this->request->getSession()->read('Auth.User');
                        if (!$loguser) {                         
                            echo $this->Html->link('new user', ['controller' => 'Users', 'action' => 'add']);
                        }
                        ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link('À propos', ['controller' => 'Users', 'action' => 'aPropos']);   ?>      
                        
                    </li>
                   
                    <li>
                        <?= $this->Html->link('Français', ['action' => 'changeLang', 'fr_CA'], ['escape' => false]) ?>
                    </li>
                    <li>
                        <?= $this->Html->link('English', ['action' => 'changeLang', 'en_US'], ['escape' => false]) ?>
                    </li>
                     <li>
                        <?= $this->Html->link('Español', ['action' => 'changeLang', 'es_CO'], ['escape' => false]) ?>
                    </li>
                     
         
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>    
      <li><?= $this->Html->link(__('List Agencies'), ['controller' => 'Agencies', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Invoices'), ['controller' => 'Invoices', 'action' => 'index']) ?></li>
      <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>      
       <li><?= $this->Html->link(__('List Codes'), ['controller' => 'Codes', 'action' => 'index']) ?></li>            
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>       
         <li><?= $this->Html->link(__('List Status'), ['controller' => 'Status', 'action' => 'index']) ?></li>       
         <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
      <li>
            <?php
              $loguser = $this->request->getSession()->read('Auth.User');             
               if ($loguser)                      
              echo $this->Html->link(__('New Agency'), ['controller' => 'Agencies', 'action' => 'add'])
               
             ?>
      </li>
      <li>  <?php
              $loguser = $this->request->getSession()->read('Auth.User');             
               if ($loguser)                 
              echo $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?>
       </li>  
       
        <li>  <?php
              $loguser = $this->request->getSession()->read('Auth.User');             
               if ($loguser)                 
              echo $this->Html->link(__('Profil'), ['controller' => 'Users', 'action' => 'view',$loguser['id']]) ?>
       </li>  
       <li>  <?php
              $loguser = $this->request->getSession()->read('Auth.User');             
               if ($loguser)             
              echo $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add'])  ?> 
       </li>
         <li>  <?php
              $loguser = $this->request->getSession()->read('Auth.User');             
               if ($loguser)                
              echo $this->Html->link(__('New Invoice'), ['controller' => 'Invoices', 'action' => 'add']) ?>
       </li
         <li>  <?php
              $loguser = $this->request->getSession()->read('Auth.User');             
               if ($loguser['type'] === 'admin')               
              echo $this->Html->link(__('New Status'), ['controller' => 'Status', 'action' => 'add'])?>
       </li>
        <li>  <?php
              $loguser = $this->request->getSession()->read('Auth.User');             
               if ($loguser['type'] === 'admin')                 
              echo  $this->Html->link(__('New Code'), ['controller' => 'Codes', 'action' => 'add']) ?>
       </li>
            
       
       
    </ul>
        
       
    
       
</nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
