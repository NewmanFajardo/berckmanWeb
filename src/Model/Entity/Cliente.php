<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property int $id
 * @property string $registro
 * @property int $activador
 * @property int $posicion
 * @property string $descripcion
 * @property string $estatus
 * @property string $img
 * @property string $razon_social
 * @property string $pais
 * @property string $correo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Cliente extends Entity
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
        'registro' => true,
        'activador' => true,
        'posicion' => true,
        'descripcion' => true,
        'estatus' => true,
        'img' => true,
        'razon_social' => true,
        'pais' => true,
        'correo' => true,
        'created' => true,
        'modified' => true,
        'usuarios' => true
    ];
    /*protected function _setActivador($activador){
        return $activador=0;
    }
    protected function _setPosicion($posicion){
        return $posicion=0;
    }*/
}
