<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Empresas Controller
 *
 */
class EmpresasController extends AppController
{

    /**
     * Metodo para modificar datos de la empresa
     */
    public function edit($id = 1)
    {
        $empresa = $this->Empresas->get($id);
        if ($this->request->is(['patch', 'post', 'put'])){
            $empresa = $this->Empresas->patchEntity($empresa,$this->request->data);
            if($this->Empresas->save($empresa)){
                $this->Flash->success('Datos de la empresa modificados correctamente!');
                return $this->redirect(['action'=> 'edit']);
            }else{
                $this->Flash->error('Los datos de la empresa no han podido actualizarse, por favor intente nuevamente!');
            }
        }
        $this->set(compact('empresa'));
    }
}
