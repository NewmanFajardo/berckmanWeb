<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfesionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfesionesTable Test Case
 */
class ProfesionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfesionesTable
     */
    public $Profesiones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.profesiones',
        'app.empresas',
        'app.banners',
        'app.certificaciones',
        'app.descargas',
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
        $config = TableRegistry::exists('Profesiones') ? [] : ['className' => ProfesionesTable::class];
        $this->Profesiones = TableRegistry::get('Profesiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Profesiones);

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
