<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Curriculums Model
 *
 * @property \App\Model\Table\ProfesionesTable|\Cake\ORM\Association\BelongsTo $Profesiones
 *
 * @method \App\Model\Entity\Curriculum get($primaryKey, $options = [])
 * @method \App\Model\Entity\Curriculum newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Curriculum[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Curriculum|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Curriculum patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Curriculum[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Curriculum findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CurriculumsTable extends Table
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

        $this->setTable('curriculums');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Profesiones', [
            'foreignKey' => 'profesion_id',
            'joinType' => 'INNER'
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
            ->scalar('cedula')
            ->maxLength('cedula', 10)
            ->requirePresence('cedula', 'create')
            ->notEmpty('cedula');

        $validator
            ->scalar('estatus')
            ->maxLength('estatus', 20)
            ->requirePresence('estatus', 'create')
            ->notEmpty('estatus');

        $validator
            ->scalar('link')
            ->requirePresence('link', 'create')
            ->notEmpty('link');

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
        $rules->add($rules->existsIn(['profesion_id'], 'Profesiones'));

        return $rules;
    }
}
