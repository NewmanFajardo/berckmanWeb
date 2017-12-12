<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BitacorasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BitacorasTable Test Case
 */
class BitacorasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BitacorasTable
     */
    public $Bitacoras;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.bitacoras',
        'app.usuarios',
        'app.personales',
        'app.empresas',
        'app.banners',
        'app.certificaciones',
        'app.descargas',
        'app.noticias',
        'app.productos',
        'app.profeciones',
        'app.servicios',
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
        $config = TableRegistry::exists('Bitacoras') ? [] : ['className' => BitacorasTable::class];
        $this->Bitacoras = TableRegistry::get('Bitacoras', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bitacoras);

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
