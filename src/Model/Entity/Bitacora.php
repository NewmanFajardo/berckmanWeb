<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bitacora Entity
 *
 * @property int $id
 * @property string $accion
 * @property string $modulo
 * @property int $relacion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $usuario_id
 *
 * @property \App\Model\Entity\Usuario $usuario
 */
class Bitacora extends Entity
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
        'accion' => true,
        'modulo' => true,
        'relacion' => true,
        'created' => true,
        'modified' => true,
        'usuario_id' => true,
        'usuario' => true
    ];
}
