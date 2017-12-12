<?php
use Migrations\AbstractMigration;

class CurriculumsTable extends AbstractMigration
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
        $table = $this->table("curriculums");
        $table->addColumn('nombre','string',array('limit' => 20 ,'null' => false))
              ->addColumn('apellido','string',array('limit' => 20 ,'null' => false))
              ->addColumn('cedula','string',array('limit' => 10 ,'null' => false))
              ->addColumn('estatus','string',array('limit' => 20 , 'null' => false ))
              ->addColumn('link','text',array('null' => false))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('profesion_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('profesion_id', 'profesiones' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->create();
    }
}
