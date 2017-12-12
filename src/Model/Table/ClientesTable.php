<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsToMany $Usuarios
 *
 * @method \App\Model\Entity\Cliente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cliente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cliente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cliente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cliente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cliente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ClientesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('clientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'cliente_id',
            'targetForeignKey' => 'usuario_id',
            'joinTable' => 'clientes_usuarios'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('registro')
            ->requirePresence('registro', 'create')
            ->notEmpty('registro');

        $validator
            ->integer('activador')
            ->requirePresence('activador', 'create')
            ->notEmpty('activador');

        $validator
            ->integer('posicion')
            ->requirePresence('posicion', 'create')
            ->notEmpty('posicion');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->scalar('estatus')
            ->maxLength('estatus', 20)
            ->requirePresence('estatus', 'create')
            ->notEmpty('estatus');

        $validator
            ->scalar('img')
            ->requirePresence('img', 'create')
            ->notEmpty('img');

        $validator
            ->scalar('razon_social')
            ->requirePresence('razon_social', 'create')
            ->notEmpty('razon_social');

        $validator
            ->scalar('pais')
            ->maxLength('pais', 50)
            ->requirePresence('pais', 'create')
            ->notEmpty('pais');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 50)
            ->requirePresence('correo', 'create')
            ->notEmpty('correo');

        return $validator;
    }
}
