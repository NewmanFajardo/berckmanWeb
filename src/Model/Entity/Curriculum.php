<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Curriculum Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cedula
 * @property string $estatus
 * @property string $link
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $profesion_id
 *
 * @property \App\Model\Entity\Profesione $profesione
 */
class Curriculum extends Entity
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
        'apellido' => true,
        'cedula' => true,
        'estatus' => true,
        'link' => true,
        'created' => true,
        'modified' => true,
        'profesion_id' => true,
        'profesione' => true
    ];
}
