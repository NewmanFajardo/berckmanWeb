<?php
use Migrations\AbstractMigration;

class ClientesUsuariosTable extends AbstractMigration
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
        $table = $this->table("clientes_usuarios");
        $table->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('usuario_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('usuario_id', 'usuarios' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->addColumn('cliente_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('cliente_id', 'clientes' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->create();
    }
}
