<?php
use Migrations\AbstractMigration;

class UsuariosTable extends AbstractMigration
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
        $table = $this->table("usuarios");
        $table->addColumn('clave','string',array('limit' => 255 , 'null' => false ))
              ->addColumn('estatus','string',array('limit' => 20 , 'null' => false ))
              ->addColumn('posicion','integer',array('null' => false , 'signed' => 'disabled'))
              ->addColumn('intentos','integer',array('null' => false , 'signed' => 'disabled'))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->create();
    }
}
