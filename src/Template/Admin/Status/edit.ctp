<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');


?>
  


<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $status->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $status->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List status'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($status); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['status']) ?></legend>
    <?php
 
    echo $this->Form->control('description_Status');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
