<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controlador de clientes
 */
class ClientesController extends AppController
{

    /**
    * Metodo para mostrar todos clientes
    */
    public function index()
    {
        $cliente = $this->Clientes->find();
        /*$cliente = $this->paginate($this->Clientes);*/
        $this->set('clientes', $cliente);
    }
    
    /**
    * Metodo para agragar nuevos clientes
    */
    public function agregar()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            // debug($this->request->data);
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Registrado con exito.'));
                return $this->redirect(['controller' => 'Clientes']);
            }
            else{
                $this->Flash->error(__('Error al registrar, intente nuevamente.'));
            }
        }
        $this->set(compact('cliente'));
    }

    /**
     * Metodo para ver los detalles de los clientes.
     */
    public function ver($id = null)
    {
        $cliente = $this->Clientes->get($id);

        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);
    }
    
    /**
    * Metodo para modificar los clientes.
    */
    public function modificar($id = null)
    {
        $cliente = $this->Clientes->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Modificacion exitosa.'));
                /*return $this->redirect(['action' => 'index']);*/
            }
            else{
                $this->Flash->error(__('Error al modificar, Intente de nuevo.'));
            }
        }

        $this->set(compact('cliente'));
    }
    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('Cliente eliminado con exito.'));
        } else {
            $this->Flash->error(__('Error al eliminar, intente nuevamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
