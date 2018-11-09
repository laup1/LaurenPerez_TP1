<?php
use Migrations\AbstractSeed;

/**
 * Tags seed.
 */
class TagsSeed extends AbstractSeed
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
                'title' => 'tag1',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
            ],
        ];

        $table = $this->table('tags');
        $table->insert($data)->save();
    }
}
