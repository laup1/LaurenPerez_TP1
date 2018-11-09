<?php
$urlToCarsAutocompletedemoJson = $this->Url->build([
    "controller" => "Departments",
    "action" => "findDepartment",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToCarsAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Departments/autocompletedemo', ['block' => 'scriptBottom']);
?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Department $department
 */
?>

<div class="departments form large-9 medium-8 columns content">
    <?= $this->Form->create($department) ?>
   <fieldset>
        <legend><?= __('Ajouter departement') ?></legend>
        <?php
        
          echo $this->Form->control('name');
          
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
