<?php
use Migrations\AbstractSeed;

/**
 * Codes seed.
 */
class CodesSeed extends AbstractSeed
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
                'code_description' => 'gouvernement',
                'created' => '2018-08-27',
                'modified' => '2018-08-27',
            ],
        ];

        $table = $this->table('codes');
        $table->insert($data)->save();
    }
}
