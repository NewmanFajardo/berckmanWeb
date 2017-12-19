<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Personales Controller
 *
 * @property \App\Model\Table\PersonalesTable $Personales
 *
 * @method \App\Model\Entity\Personale[] paginate($object = null, array $settings = [])
 */
class PersonalesController extends AppController
{

    /**
    * Metodo para mostrar todos clientes
    */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Empresas']
        ];
        $personales = $this->paginate($this->Personales);

        $this->set(compact('personales'));
        $this->set('_serialize', ['personales']);
    }

    /**
     * Metodo para agregar los personales.
     */
    public function agregar()
    {
        $personale = $this->Personales->newEntity();
        
        if ($this->request->is('post')) {
            $personale = $this->Personales->patchEntity($personale, $this->request->getData());
            $personale->empresa_id=1;
            if ($this->Personales->save($personale)) {
                $this->Flash->success(__('Personal registrado con exito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al registrar, intente nuevamente.'));
        }
        // $empresas = $this->Personales->Empresas->find('list', ['limit' => 200]);
        // $usuarios = $this->Personales->Usuarios->find('list', ['limit' => 200]);
        // $this->set(compact('personale', 'empresas', 'usuarios'));

        $this->set(compact('personale'));
        $this->set('_serialize', ['personale']);
    }

    /**
     * Metodo para ver los detalles de los personales.
     */
    public function ver($id = null)
    {
        $personale = $this->Personales->get($id);

        $this->set('personale', $personale);
        $this->set('_serialize', ['personale']);
    }

    /**
     * Metodo para modificar de los personales.
     */
    public function modificar($id = null)
    {
        $personale = $this->Personales->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personale = $this->Personales->patchEntity($personale, $this->request->getData());
            if ($this->Personales->save($personale)) {
                $this->Flash->success(__('Registro modificardo.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Error al modificar, intente nuevamente.'));
        }
        $this->set(compact('personale'));
        $this->set('_serialize', ['personale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Personale id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personale = $this->Personales->get($id);
        if ($this->Personales->delete($personale)) {
            $this->Flash->success(__('The personale has been deleted.'));
        } else {
            $this->Flash->error(__('The personale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
