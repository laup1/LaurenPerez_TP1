<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{
    
   

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users',
        'app.agencies'
    ];
    
    
     public function testEditNonIdentifie() {
        // Pas de données de session définies.
        $this->get('/users/edit/1');

        $this->assertRedirect(['controller' => 'Users', 'action' => 'login']);
    }
    
    public function testDeleteNonIdentifie() {
        // Pas de données de session définies.
        $this->get('/users/delete/1');

        $this->assertRedirect(['controller' => 'Users', 'action' => 'login']);
    }
    
   /* public function testAddAuthenticated()
{
    // Set session data
    $this->session([
        'Auth' => [
            'User' => [
               'id' => 5,
                 'created' => '2018-10-09',
                 'modified' => '2018-10-09',
                 'username' => 'cryspelo',
                 'email' =>'arhalltraste@hotmail.com',               
                 'password' => '1234'
            ]
        ]
    ]);
    $this->get('/articles/add');

    $this->assertResponseOk();
    // Other assertions.
}/*

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
