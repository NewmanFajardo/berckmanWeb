<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecuperacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecuperacionesTable Test Case
 */
class RecuperacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecuperacionesTable
     */
    public $Recuperaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recuperaciones',
        'app.usuarios',
        'app.bitacoras',
        'app.personales',
        'app.empresas',
        'app.banners',
        'app.certificaciones',
        'app.descargas',
        'app.noticias',
        'app.productos',
        'app.profeciones',
        'app.servicios',
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
        $config = TableRegistry::exists('Recuperaciones') ? [] : ['className' => RecuperacionesTable::class];
        $this->Recuperaciones = TableRegistry::get('Recuperaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recuperaciones);

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
