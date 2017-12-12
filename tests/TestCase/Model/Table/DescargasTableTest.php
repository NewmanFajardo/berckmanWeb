<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DescargasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DescargasTable Test Case
 */
class DescargasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DescargasTable
     */
    public $Descargas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.descargas',
        'app.empresas',
        'app.banners',
        'app.certificaciones',
        'app.noticias',
        'app.personales',
        'app.usuarios',
        'app.bitacoras',
        'app.recuperaciones',
        'app.clientes',
        'app.clientes_usuarios',
        'app.productos',
        'app.profeciones',
        'app.servicios'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Descargas') ? [] : ['className' => DescargasTable::class];
        $this->Descargas = TableRegistry::get('Descargas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Descargas);

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
