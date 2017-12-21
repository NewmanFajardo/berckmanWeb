<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @property \App\Model\Table\BitacorasTable|\Cake\ORM\Association\HasMany $Bitacoras
 * @property \App\Model\Table\RecuperacionesTable|\Cake\ORM\Association\HasMany $Recuperaciones
 * @property \App\Model\Table\ClientesTable|\Cake\ORM\Association\BelongsToMany $Clientes
 * @property \App\Model\Table\PersonalesTable|\Cake\ORM\Association\BelongsToMany $Personales
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsuariosTable extends Table
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

        $this->setTable('usuarios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Bitacoras', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->hasMany('Recuperaciones', [
            'foreignKey' => 'usuario_id'
        ]);
        $this->belongsToMany('Clientes', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'cliente_id',
            'joinTable' => 'clientes_usuarios'
        ]);
        $this->belongsToMany('Personales', [
            'foreignKey' => 'usuario_id',
            'targetForeignKey' => 'personale_id',
            'joinTable' => 'personales_usuarios'
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
            ->scalar('clave')
            ->maxLength('clave', 255)
            ->requirePresence('clave', 'create')
            ->notEmpty('clave');

        $validator
            ->scalar('estatus')
            ->maxLength('estatus', 20)
            ->requirePresence('estatus', 'create')
            ->notEmpty('estatus');

        $validator
            ->integer('intentos')
            ->requirePresence('intentos', 'create')
            ->notEmpty('intentos');

        $validator
            ->integer('nivel')
            ->requirePresence('nivel', 'create')
            ->notEmpty('nivel');

        return $validator;
    }
}
