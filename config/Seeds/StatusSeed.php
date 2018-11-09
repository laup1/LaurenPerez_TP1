<?php
use Migrations\AbstractSeed;

/**
 * Status seed.
 */
class StatusSeed extends AbstractSeed
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
                'description_Status' => 'payee',
                'created' => '2018-08-27',
                'modified' => '2018-08-27',
            ],
            [
                'id' => '2',
                'description_Status' => 'payée',
                'created' => '2018-10-09',
                'modified' => '2018-10-11',
            ],
            [
                'id' => '3',
                'description_Status' => 'annulé',
                'created' => '2018-10-09',
                'modified' => '2018-10-11',
            ],
            [
                'id' => '4',
                'description_Status' => 'en attente',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
            ],
            [
                'id' => '5',
                'description_Status' => 'en retard',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
            ],
        ];

        $table = $this->table('status');
        $table->insert($data)->save();
    }
}
