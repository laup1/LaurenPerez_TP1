<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AgenciesTag $agenciesTag
 */
?>

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
