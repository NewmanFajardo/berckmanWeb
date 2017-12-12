<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonalesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonalesTable Test Case
 */
class PersonalesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonalesTable
     */
    public $Personales;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.personales',
        'app.empresas',
        'app.banners',
        'app.certificaciones',
        'app.descargas',
        'app.noticias',
        'app.productos',
        'app.profeciones',
        'app.servicios',
        'app.usuarios',
        'app.bitacoras',
        'app.recuperaciones',
        'app.clientes',
        'app.clientes_usuarios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Personales') ? [] : ['className' => PersonalesTable::class];
        $this->Personales = TableRegistry::get('Personales', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Personales);

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
