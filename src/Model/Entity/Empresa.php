<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Empresa Entity
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $mision
 * @property string $vision
 * @property string $valires
 * @property string $direccion
 * @property string $telefono1
 * @property string $telefono2
 * @property string $correo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Banner[] $banners
 * @property \App\Model\Entity\Certificacione[] $certificaciones
 * @property \App\Model\Entity\Descarga[] $descargas
 * @property \App\Model\Entity\Noticia[] $noticias
 * @property \App\Model\Entity\Personale[] $personales
 * @property \App\Model\Entity\Producto[] $productos
 * @property \App\Model\Entity\Profecione[] $profeciones
 * @property \App\Model\Entity\Servicio[] $servicios
 */
class Empresa extends Entity
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
        'mision' => true,
        'vision' => true,
        'valires' => true,
        'direccion' => true,
        'telefono1' => true,
        'telefono2' => true,
        'correo' => true,
        'created' => true,
        'modified' => true,
        'banners' => true,
        'certificaciones' => true,
        'descargas' => true,
        'noticias' => true,
        'personales' => true,
        'productos' => true,
        'profeciones' => true,
        'servicios' => true
    ];
}
