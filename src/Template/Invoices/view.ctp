<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Invoice $invoice
 */
?>

<div class="invoices view large-9 medium-8 columns content">
    <h3  style="visibility: hidden"><?= h($invoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Agency') ?></th>
            <td><?= $invoice->has('agency') ? $this->Html->link($invoice->agency->id, ['controller' => 'Agencies', 'action' => 'view', $invoice->agency->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $invoice->has('status') ? $this->Html->link($invoice->status->id, ['controller' => 'Status', 'action' => 'view', $invoice->status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice Details') ?></th>
            <td><?= h($invoice->invoice_details) ?></td>
        </tr>
        <tr>
            <th  style="visibility: hidden" scope="row"><?= __('Id') ?></th>
            <td  style="visibility: hidden"><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($invoice->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($invoice->modified) ?></td>
        </tr>
    </table>
</div>
