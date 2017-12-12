<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\BannersTable|\Cake\ORM\Association\HasMany $Banners
 * @property \App\Model\Table\CertificacionesTable|\Cake\ORM\Association\HasMany $Certificaciones
 * @property \App\Model\Table\DescargasTable|\Cake\ORM\Association\HasMany $Descargas
 * @property \App\Model\Table\NoticiasTable|\Cake\ORM\Association\HasMany $Noticias
 * @property \App\Model\Table\PersonalesTable|\Cake\ORM\Association\HasMany $Personales
 * @property \App\Model\Table\ProductosTable|\Cake\ORM\Association\HasMany $Productos
 * @property \App\Model\Table\ProfecionesTable|\Cake\ORM\Association\HasMany $Profeciones
 * @property \App\Model\Table\ServiciosTable|\Cake\ORM\Association\HasMany $Servicios
 *
 * @method \App\Model\Entity\Empresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empresa newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Empresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Banners', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Certificaciones', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Descargas', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Noticias', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Personales', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Productos', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Profeciones', [
            'foreignKey' => 'empresa_id'
        ]);
        $this->hasMany('Servicios', [
            'foreignKey' => 'empresa_id'
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
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('descripcion')
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

        $validator
            ->scalar('mision')
            ->requirePresence('mision', 'create')
            ->notEmpty('mision');

        $validator
            ->scalar('vision')
            ->requirePresence('vision', 'create')
            ->notEmpty('vision');

        $validator
            ->scalar('valires')
            ->requirePresence('valires', 'create')
            ->notEmpty('valires');

        $validator
            ->scalar('direccion')
            ->requirePresence('direccion', 'create')
            ->notEmpty('direccion');

        $validator
            ->scalar('telefono1')
            ->maxLength('telefono1', 11)
            ->requirePresence('telefono1', 'create')
            ->notEmpty('telefono1');

        $validator
            ->scalar('telefono2')
            ->maxLength('telefono2', 11)
            ->requirePresence('telefono2', 'create')
            ->notEmpty('telefono2');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 50)
            ->requirePresence('correo', 'create')
            ->notEmpty('correo');

        return $validator;
    }
}
