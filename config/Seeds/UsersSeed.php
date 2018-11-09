<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'id' => '5',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
                'username' => 'cryspelo',
                'email' => 'arhalltraste@hotmail.com',
                'password' => '$2y$10$U2IaenpdF1nOwj8XvQ0xDOZRffH8H9D2kvDsauJ5ibf17usH8/LcG',
                'type' => 'agencie',
            ],
            [
                'id' => '6',
                'created' => '2018-10-09',
                'modified' => '2018-10-09',
                'username' => 'admin',
                'email' => 'laurent_perez@hotmail.com',
                'password' => '$2y$10$gVRzGQk0/R5r8BxeOSKS.uYPE3raLxqg65wUo40/MdwTsM03nrsbq',
                'type' => 'admin',
            ],
            [
                'id' => '10',
                'created' => '2018-10-12',
                'modified' => '2018-10-12',
                'username' => 'kkk',
                'email' => 'williamzeus91@hotmail.com',
                'password' => '$2y$10$.ItlaQgLKNlUsZSfVBbf/.YtjmkPSwRVbFz5nbD0y1qM/km5QkY/y',
                'type' => 'agencie',
            ],
            [
                'id' => '11',
                'created' => '2018-10-12',
                'modified' => '2018-10-12',
                'username' => 'rocio',
                'email' => 'laurenrpl0@gmail.com',
                'password' => '$2y$10$kJdXTHQJOMTFHfHxWwu9/.M9cREMatdwnVJwv1NtVGhVBVxmIEN0q',
                'type' => 'agencie',
            ],
            [
                'id' => '12',
                'created' => '2018-10-12',
                'modified' => '2018-10-12',
                'username' => 'jaja',
                'email' => 'jaja@jajaj.jaja',
                'password' => '$2y$10$NhOHNUuWgZq3qTup5h9d7OWgwLNc6rOmoBKxMjuLFO6vng9Tb9vKC',
                'type' => 'agencie',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
