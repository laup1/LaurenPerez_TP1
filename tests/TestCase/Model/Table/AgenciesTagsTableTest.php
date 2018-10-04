<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgenciesTagsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgenciesTagsTable Test Case
 */
class AgenciesTagsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgenciesTagsTable
     */
    public $AgenciesTags;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agencies_tags',
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
        $config = TableRegistry::getTableLocator()->exists('AgenciesTags') ? [] : ['className' => AgenciesTagsTable::class];
        $this->AgenciesTags = TableRegistry::getTableLocator()->get('AgenciesTags', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AgenciesTags);

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
