<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgenciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgenciesTable Test Case
 */
class AgenciesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgenciesTable
     */
    public $Agencies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agencies',
        'app.users',
        'app.codes',
        'app.files',
        'app.tags'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agencies') ? [] : ['className' => AgenciesTable::class];
        $this->Agencies = TableRegistry::getTableLocator()->get('Agencies', $config);
    }

    
     public function testFindById() {
         
        $query = $this->Agencies->findById('5');
        $this->assertInstanceOf('Cake\ORM\Query', $query);
        $result = $query->hydrate(false)->toArray();
        $expected = [
            [
                
                'id' => 4,
                 'agencie_details' => 'agency1',
                 'created' => 'null',
                 'modified' => 'null',
                 'user_id' => 5,
                 'code_id' =>1,               
                 'subcategory_id' => 0
                
                
              
            ],
        ];
        $this->assertNotEquals($expected, $result);
     }

    
    
    
    
    
    
    
    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agencies);

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
        $this->markTestIncomplete('Not implemented yet.');
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
