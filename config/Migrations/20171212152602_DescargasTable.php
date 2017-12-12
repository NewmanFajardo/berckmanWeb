<?php
use Migrations\AbstractMigration;

class DescargasTable extends AbstractMigration
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
        $table = $this->table("descargas");
        $table->addColumn('nombre','text',array('null' => false))
              ->addColumn('descripcion','text',array('null' => false))
              ->addColumn('img','text',array('null' => false))
              ->addColumn('posicion','integer',array('null' => false))
              ->addColumn('activador','integer',array('null' => false))
              ->addColumn('nivel','integer',array('null' => false))
              ->addColumn('link','text',array('null' => false ))
              ->addColumn('created','datetime')
              ->addColumn('modified','datetime')
              ->addColumn('empresa_id','integer',array('signed' => 'disabled'))
              ->addForeignKey('empresa_id', 'empresas' , 'id' , array('delete' => 'CASCADE' , 'update' => 'CASCADE') )
              ->create();
    }
}
