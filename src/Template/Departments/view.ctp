<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>

<div class="departments view large-9 medium-8 columns content">
    <h3><?= h($department->name) ?></h3>
   
     
    
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph($department->name); ?>
    </div>
    
    <div class="row">
     <tr>
         <h4><?= __('Responsable') ?></h4>            
          <td><?= $this->Text->autoParagraph($department->responsable) ?></td>
        </tr>
        </div>
    <div class="row">
        <h4><?= __('Created') ?></h4>
        <?= $this->Text->autoParagraph($department->created); ?>
    </div>
    <div class="row">
        <h4><?= __('Modified') ?></h4>
        <?= $this->Text->autoParagraph($department->modified); ?>
    </div>
</div>
