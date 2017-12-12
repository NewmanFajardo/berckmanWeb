<?php
use Migrations\AbstractMigration;

class ProfesionesTable extends AbstractMigration
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
        $table = $this->table("profesiones");
        $table->addColumn('profecion','string',array('limit' => 50 , 'null' => false ))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('empresa_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('empresa_id', 'empresas' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->create();
    }
}
