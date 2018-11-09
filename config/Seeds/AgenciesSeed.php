<?php
use Migrations\AbstractSeed;

/**
 * Agencies seed.
 */
class AgenciesSeed extends AbstractSeed
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
                'id' => '4',
                'agencie_details' => 'agency1',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
                'user_id' => '5',
                'code_id' => '1',
            ],
            [
                'id' => '5',
                'agencie_details' => 'agency2',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
                'user_id' => '6',
                'code_id' => '1',
            ],
            [
                'id' => '6',
                'agencie_details' => 'agencie5',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
                'user_id' => '5',
                'code_id' => '1',
            ],
            [
                'id' => '7',
                'agencie_details' => 'agencie15',
                'created' => '2018-10-10',
                'modified' => '2018-10-10',
                'user_id' => '5',
                'code_id' => '1',
            ],
        ];

        $table = $this->table('agencies');
        $table->insert($data)->save();
    }
}
