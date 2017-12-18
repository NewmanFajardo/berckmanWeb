<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Personales Model
 *
 * @property \App\Model\Table\EmpresasTable|\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\UsuariosTable|\Cake\ORM\Association\BelongsToMany $Usuarios
 *
 * @method \App\Model\Entity\Personale get($primaryKey, $options = [])
 * @method \App\Model\Entity\Personale newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Personale[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Personale|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Personale patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Personale[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Personale findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PersonalesTable extends Table
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

        $this->setTable('personales');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsToMany('Usuarios', [
            'foreignKey' => 'personale_id',
            'targetForeignKey' => 'usuario_id',
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
            ->scalar('nombre')
            ->maxLength('nombre', 20)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 20)
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        $validator
            ->scalar('cargo')
            ->maxLength('cargo', 20)
            ->requirePresence('cargo', 'create')
            ->notEmpty('cargo');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 50)
            ->requirePresence('correo', 'create')
            ->notEmpty('correo');

        $validator
            ->scalar('departamento')
            ->maxLength('departamento', 50)
            ->requirePresence('departamento', 'create')
            ->notEmpty('departamento');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
