<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servicio Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $img
 * @property int $posicion
 * @property int $activador
 * @property int $nivel
 * @property string $estatus
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Servicio extends Entity
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
        'nombre' => true,
        'descripcion' => true,
        'img' => true,
        'posicion' => true,
        'activador' => true,
        'nivel' => true,
        'estatus' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
