<?php
use Migrations\AbstractMigration;

class EmpresasTable extends AbstractMigration
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
        $table = $this->table("empresas");
        $table->addColumn('nombre','text',array('null' => false))
              ->addColumn('descripcion','text',array('null' => false))
              ->addColumn('mision','text',array('null' => false))
              ->addColumn('vision','text',array('null' => false))
              ->addColumn('valires','text',array('null' => false))
              ->addColumn('direccion','text',array('null' => false))
              ->addColumn('telefono1','string',array('limit' => 11 , 'null' => false))
              ->addColumn('telefono2','string',array('limit' => 11 , 'null' => false))
              ->addColumn('correo','string',array('limit' => 50 , 'null' => false))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();
    }
}