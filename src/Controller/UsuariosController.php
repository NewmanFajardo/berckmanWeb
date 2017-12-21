<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Usuarios Controller
 *
 * @property \App\Model\Table\UsuariosTable $Usuarios
 *
 * @method \App\Model\Entity\Usuario[] paginate($object = null, array $settings = [])
 */
class UsuariosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $clientes = $this->Usuarios->Clientes->find();
        // $usuarios = $this->Usuarios->Personales->find('list',['fields'=>'Personales.nombre']);

        //$personales = $this->Usuarios->Personales->find(['contain' => 'Usuarios']);
        
        // $this->set(compact('personales','clientes'));
        $this->set(compact('clientes'));
        // $this->set('_serialize', ['personales','Clientes']);
        $this->set('_serialize', ['Clientes']);
    }

    /**
    * Metodo para agragar nuevos clientes
    */
    public function agregarcliente()
    {
        $cliente = $this->Usuarios->Clientes->newEntity();
        if ($this->request->is('post')) {
            // debug($this->request->data);
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->data());
            $cliente->estatus = "Pendiente";
            $cliente->posicion = 0;
            $cliente->activador = 0;
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('Registrado con exito.'));
                //return $this->redirect(['controller' => 'Usuarios']);
            }
            else{
                $this->Flash->error(__('Error al registrar, intente nuevamente.'));
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }
    /**
     * Metodo para ver los detalles de los clientes.
     */
    public function vercliente($id = null)
    {
        $cliente = $this->Usuarios->Clientes->get($id, ['contain' => 'Usuarios']);

        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);
    }
    /**
     * Metodo activar los clientes.
     */
    public function activarcliente($id = null){
        $cliente = $this->Usuarios->clientes->get($id, [ 'contain' => ['Usuarios'] ]);
        //debug($cliente);
        /*
            'clave' => true,
            'estatus' => true,
            'posicion' => true,
            'intentos' => true,
            'created' => true,
            'modified' => true,
            'bitacoras' => true,
            'recuperaciones' => true,
            'clientes' => true,
            'personales' => true
        */
        $usuario=[];
        $usuario['clave']="123controlador";
        $usuario['estatus']="Activo";
        $usuario['estatus']="Activo";

        $usuario = $this->Usuarios->patchEntity();
        debug($usuario);
        // if ($this->request->is(['patch', 'post', 'put'])) {
        //     $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
        //     if ($this->Usuarios->save($usuario)) {
        //         $this->Flash->success(__('The usuario has been saved.'));

        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        // }
        // $clientes = $this->Usuarios->Clientes->find();
        // $this->set(compact('usuario', 'clientes'));
        // $this->set('_serialize', ['usuario']);
    }
    






    /**
     * Metodo para agregar los usuarios.
     */
    public function agregarp()
    {
        $usuario = $this->Usuarios->newEntity();
        if ($this->request->is('post')) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        //$clientes = $this->Usuarios->Clientes->find('list', ['limit' => 200]);
        $personales = $this->Usuarios->Personales->find('list', ['fields'=>'Personales.id','Personales.nombre']);
        $this->set(compact('usuario', 'personales'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * View method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usuarios = $this->Usuarios->get($id, [
            'contain' => ['Clientes', 'Personales', 'Bitacoras', 'Recuperaciones']
        ]);

        $this->set('usuario', $usuario);
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    

    /**
     * Edit method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usuario = $this->Usuarios->get($id, [
            'contain' => ['Clientes', 'Personales']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usuario = $this->Usuarios->patchEntity($usuario, $this->request->getData());
            if ($this->Usuarios->save($usuario)) {
                $this->Flash->success(__('The usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The usuario could not be saved. Please, try again.'));
        }
        $clientes = $this->Usuarios->Clientes->find('list', ['limit' => 200]);
        $personales = $this->Usuarios->Personales->find('list', ['limit' => 200]);
        $this->set(compact('usuario', 'clientes', 'personales'));
        $this->set('_serialize', ['usuario']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usuario = $this->Usuarios->get($id);
        if ($this->Usuarios->delete($usuario)) {
            $this->Flash->success(__('The usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
