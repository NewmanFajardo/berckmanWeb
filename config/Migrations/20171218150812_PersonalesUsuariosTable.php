<?php
use Migrations\AbstractMigration;

class PersonalesUsuariosTable extends AbstractMigration
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
        $table = $this->table("personales_usuarios");
        $table->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('personale_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('personale_id', 'personales' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->addColumn('usuario_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('usuario_id', 'usuarios' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->create();
    }
}
