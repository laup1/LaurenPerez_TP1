<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgenciesFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgenciesFilesTable Test Case
 */
class AgenciesFilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgenciesFilesTable
     */
    public $AgenciesFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.agencies_files',
        'app.agencies',
        'app.files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AgenciesFiles') ? [] : ['className' => AgenciesFilesTable::class];
        $this->AgenciesFiles = TableRegistry::getTableLocator()->get('AgenciesFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AgenciesFiles);

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
