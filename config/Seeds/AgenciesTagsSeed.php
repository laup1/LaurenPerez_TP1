<?php
use Migrations\AbstractSeed;

/**
 * AgenciesTags seed.
 */
class AgenciesTagsSeed extends AbstractSeed
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
                'agencie_id' => '4',
                'tag_id' => '1',
            ],
        ];

        $table = $this->table('agencies_tags');
        $table->insert($data)->save();
    }
}
