<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */

    public function display(...$path)
    {
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    /**
     * [metodo home]
     * @return [public] [muestra los datos de la pagina de aterrizaje]
     */
    public function home(){
        $this->loadModel('Empresas');
        $this->loadModel('Clientes');
        $this->loadModel('Noticias');
        $this->loadModel('Servicios');
        $this->loadModel('Certificaciones');
        $this->loadModel('Curriculums');


        $curriculo = TableRegistry::get('Curriculums');
        $curriculo = $curriculo->newEntity(['associated' => 'Profesiones']);

        $empresa = $this->Empresas->find('all');
        $cliente = $this->Clientes->find(
                                            'all',
                                            array('conditions' => array('estatus'=>'Activo')),
                                            array('order' => 'posicion ASC')
                                        );

        $certificacion = $this->Certificaciones->find('all');

        $noticia = $this->Noticias->find(
                                            'all',
                                            array(
                                                'conditions' => array('estatus'=>'Activo'), 
                                                'order' => 'id DESC',
                                                'limit' => 3,
                                            )
                                        );

        $servicio = $this->Servicios->find(
                                            'all',
                                            array(
                                                'conditions' => array('estatus'=>'Activo','activador' => 1), 
                                                'order' => 'posicion ASC',
                                                'limit' => 5,
                                            )
                                        );

        $this->set(compact('empresa',$empresa,'cliente',$cliente,'noticia',$noticia,'certificacion',$certificacion,'servicio',$servicio,'curriculo',$curriculo));

    }
}