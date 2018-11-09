<?php
use Migrations\AbstractSeed;

/**
 * I18ns seed.
 */
class I18nSeed extends AbstractSeed
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
                'id' => '1',
                'locale' => 'es',
                'model' => 'Invoices',
                'foreign_key' => '3',
                'field' => 'invoice_details',
                'content' => 'pagado',
            ],
            [
                'id' => '2',
                'locale' => 'en',
                'model' => 'Invoices',
                'foreign_key' => '3',
                'field' => 'invoice_details',
                'content' => 'paid',
            ],
            [
                'id' => '3',
                'locale' => 'es',
                'model' => 'Invoices',
                'foreign_key' => '4',
                'field' => 'invoice_details',
                'content' => 'hablar con la persona',
            ],
            [
                'id' => '4',
                'locale' => 'en',
                'model' => 'Invoices',
                'foreign_key' => '4',
                'field' => 'invoice_details',
                'content' => 'speak with the person',
            ],
        ];

        $table = $this->table('i18n');
        $table->insert($data)->save();
    }
}
