<?php
use Migrations\AbstractSeed;

/**
 * Invoices seed.
 */
class InvoicesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '3',
                'agencie_id' => '4',
                'status_id' => '1',
                'invoice_details' => 'payé',
                'created' => '2018-10-10',
                'modified' => '2018-10-11',
            ],
            [
                'id' => '4',
                'agencie_id' => '5',
                'status_id' => '2',
                'invoice_details' => 'parler avec la personne',
                'created' => '2018-10-11',
                'modified' => '2018-10-11',
            ],
        ];

        $table = $this->table('invoices');
        $table->insert($data)->save();
    }
}
