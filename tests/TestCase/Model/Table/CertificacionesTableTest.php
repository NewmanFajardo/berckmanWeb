<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CertificacionesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CertificacionesTable Test Case
 */
class CertificacionesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CertificacionesTable
     */
    public $Certificaciones;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.certificaciones',
        'app.empresas',
        'app.banners',
        'app.descargas',
        'app.noticias',
        'app.personales',
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
        $config = TableRegistry::exists('Certificaciones') ? [] : ['className' => CertificacionesTable::class];
        $this->Certificaciones = TableRegistry::get('Certificaciones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Certificaciones);

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
