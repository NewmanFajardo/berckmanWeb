<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NoticiasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NoticiasTable Test Case
 */
class NoticiasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NoticiasTable
     */
    public $Noticias;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.noticias',
        'app.empresas',
        'app.banners',
        'app.certificaciones',
        'app.descargas',
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
        $config = TableRegistry::exists('Noticias') ? [] : ['className' => NoticiasTable::class];
        $this->Noticias = TableRegistry::get('Noticias', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Noticias);

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
