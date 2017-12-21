<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property string $clave
 * @property string $estatus
 * @property int $intentos
 * @property int $nivel
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Bitacora[] $bitacoras
 * @property \App\Model\Entity\Recuperacione[] $recuperaciones
 * @property \App\Model\Entity\Cliente[] $clientes
 * @property \App\Model\Entity\Personale[] $personales
 */
class Usuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'clave' => true,
        'estatus' => true,
        'intentos' => true,
        'nivel' => true,
        'created' => true,
        'modified' => true,
        'bitacoras' => true,
        'recuperaciones' => true,
        'clientes' => true,
        'personales' => true
    ];
}
