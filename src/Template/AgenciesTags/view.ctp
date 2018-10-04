<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesTag $agenciesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agencies Tag'), ['action' => 'edit', $agenciesTag->agency_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agencies Tag'), ['action' => 'delete', $agenciesTag->agency_id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenciesTag->agency_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agencies Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agencies Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agenciesTags view large-9 medium-8 columns content">
    <h3><?= h($agenciesTag->agency_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $agenciesTag->has('tag') ? $this->Html->link($agenciesTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $agenciesTag->tag->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agencie Id') ?></th>
            <td><?= $this->Number->format($agenciesTag->agencie_id) ?></td>
        </tr>
    </table>
</div>
