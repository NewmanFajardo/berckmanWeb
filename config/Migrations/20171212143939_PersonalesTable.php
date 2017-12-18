<?php
use Migrations\AbstractMigration;

class PersonalesTable extends AbstractMigration
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
        $table = $this->table("personales");
        $table->addColumn('nombre','string',array('limit' => 20 , 'null' => false))
              ->addColumn('apellido','string',array('limit' => 20 , 'null' => false))
              ->addColumn('cargo','string',array('limit' => 20 , 'null' => false))
              ->addColumn('correo','string',array('limit' => 50 , 'null' => false))
              ->addColumn('departamento','string',array('limit' => 50 , 'null' => false))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('empresa_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('empresa_id', 'empresas' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->create();
    }
}
