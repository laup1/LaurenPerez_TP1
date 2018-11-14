<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

?>
 
<?= $this->Form->create($status); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Status']) ?></legend>
    <?php
  
    echo $this->Form->control('description_Status');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
