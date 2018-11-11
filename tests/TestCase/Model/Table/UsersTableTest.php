<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersTable Test Case
 */
class UsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersTable
     */
    public $Users;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users',
        'app.agencies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Users') ? [] : ['className' => UsersTable::class];
        $this->Users = TableRegistry::getTableLocator()->get('Users', $config);
    }
    
     
     /*public function testFindById() {
        $query = $this->Users->findById('5')->first();
        $this->assertInstanceOf('Cake\ORM\Query', $query);
        $result = $query->hydrate(false)->toArray();
        $expected = [
            [
                
                'id' => 5,
                 'created' => '2018-10-09',
                 'modified' => '2018-10-09',
                 'username' => 'cryspelo',
                 'email' =>'arhalltraste@hotmail.com',               
                 'password' => '1234'
                
                
              
            ],
        ];
        $this->assertEquals($expected, $result);
     }
*/
    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Users);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    
    public function testValidationDefault()
    {
        
        
        /* $this->loadFixtures('Users');
        $table = $this->getTableLocator()->get('users');
        $user = $table->find()->where(['id' => 5])->first();
        //$this->assertEquals(new Time('2007-03-17 01:16:23'), $user->created);
        //$this->assertEquals(new Time('2007-03-17 01:18:31'), $user->updated);
        
         //$query = $this->Users->findById('5');
        //$this->assertInstanceOf('Cake\ORM\Query', $query);
        $result = $user->hydrate(false)->toArray();
        $expected = [
            [
                
                'id' => 5,
                 'created' => '2018-10-09',
                 'modified' => '2018-10-09',
                 'username' => 'cryspelo',
                 'email' =>'arhalltraste@hotmail.com',               
                 'password' => '1234'
                
                
              
            ],
        ];
  
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );*/
    
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
