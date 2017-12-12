<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Certificacione Entity
 *
 * @property int $id
 * @property string $codigo
 * @property string $img
 * @property string $link
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 */
class Certificacione extends Entity
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
        'codigo' => true,
        'img' => true,
        'link' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'empresa' => true
    ];
}
