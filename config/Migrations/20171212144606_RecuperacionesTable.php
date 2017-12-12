<?php
use Migrations\AbstractMigration;

class RecuperacionesTable extends AbstractMigration
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
        $table = $this->table("recuperaciones");
        $table->addColumn('pregunta','text',array('null' => false))
              ->addColumn('respuesta','text',array('null' => false))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('usuario_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('usuario_id', 'usuarios' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->create();
    }
}
