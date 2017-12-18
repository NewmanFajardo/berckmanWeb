<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Personale Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $cargo
 * @property string $correo
 * @property string $departamento
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $empresa_id
 *
 * @property \App\Model\Entity\Empresa $empresa
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Personale extends Entity
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
        'cargo' => true,
        'correo' => true,
        'departamento' => true,
        'created' => true,
        'modified' => true,
        'empresa_id' => true,
        'empresa' => true,
        'usuarios' => true
    ];
}
