<?php
use Migrations\AbstractMigration;

class ClientesTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table("clientes");
        $table->addColumn('registro','text',array('null' => false))
              ->addColumn('activador','integer',array('null' => false))
              ->addColumn('posicion','integer',array('null' => false))
              ->addColumn('descripcion','text',array('null' => false))
              ->addColumn('estatus','string',array('limit' => 20 , 'null' => false ))
              ->addColumn('img','text',array('null' => false))
              ->addColumn('razon_social','text',array('null' => false))
              ->addColumn('pais','string',array('limit' => 50 , 'null' => false ))
              ->addColumn('correo','string',array('limit' => 50 , 'null' => false ))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();
    }
}
