<?php
use Migrations\AbstractSeed;

/**
 * AgenciesFiles seed.
 */
class AgenciesFilesSeed extends AbstractSeed
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
                'agencie_id' => '4',
                'file_id' => '1',
            ],
            [
                'id' => '2',
                'agencie_id' => '5',
                'file_id' => '1',
            ],
            [
                'id' => '3',
                'agencie_id' => '6',
                'file_id' => '1',
            ],
            [
                'id' => '4',
                'agencie_id' => '7',
                'file_id' => '1',
            ],
        ];

        $table = $this->table('agencies_files');
        $table->insert($data)->save();
    }
}
