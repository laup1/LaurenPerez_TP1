<?php
$urlToCarsAutocompletedemoJson = $this->Url->build([
    "controller" => "Departments",
    "action" => "findDepartment",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToCarsAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Departments/autocompletedemo', ['block' => 'scriptBottom']);
?>



<?= $this->Form->create('Departments') ?>
<fieldset>
    <legend><?= __('Search Department') ?></legend>
    <?php
    echo $this->Form->input('name', ['id' => 'autocomplete']);
    
    ?>
</fieldset>
<?= $this->Form->end() ?>

