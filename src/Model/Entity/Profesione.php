<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profesione Entity
 *
 * @property int $id
 * @property string $profecion
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Profesione extends Entity
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
        'profecion' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
