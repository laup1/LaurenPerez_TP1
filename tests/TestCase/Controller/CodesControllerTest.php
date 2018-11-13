<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CodesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CodesController Test Case
 */
class CodesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.codes',
        'app.users'
    ];

    /**
     * Test index method
     *
     * @return void
     */
   

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
    
    
     public function testIndex()
    {
        $this->get('/codes');

        $this->assertResponseOk();
        // More asserts.
    }
     public function testIndexQueryData()
    {
        $this->get('/codes?page=1');

        $this->assertResponseOk();
        // More asserts.
    }



   /* public function testIndexPostData()
    {
        $data = [
            'id' => 1,
            'code_description' => 'gouvernement',
            'created' => '2018-08-27',
            'modified' => '2018-08-27',
           
        ];
        $this->post('/codes', $data);

        $this->assertResponseSuccess();
        $articles = TableRegistry::get('Codes');
        $query = $articles->find()->where(['title' => $data['title']]);
        $this->assertEquals(1, $query->count());
    }*/
}
