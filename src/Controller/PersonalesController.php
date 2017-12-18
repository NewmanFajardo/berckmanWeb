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
     * Index method
     *
     * @return \Cake\Http\Response|void
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
     * View method
     *
     * @param string|null $id Personale id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personale = $this->Personales->get($id, [
            'contain' => ['Empresas', 'Usuarios']
        ]);

        $this->set('personale', $personale);
        $this->set('_serialize', ['personale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personale = $this->Personales->newEntity();
        if ($this->request->is('post')) {
            $personale = $this->Personales->patchEntity($personale, $this->request->getData());
            if ($this->Personales->save($personale)) {
                $this->Flash->success(__('The personale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personale could not be saved. Please, try again.'));
        }
        $empresas = $this->Personales->Empresas->find('list', ['limit' => 200]);
        $usuarios = $this->Personales->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('personale', 'empresas', 'usuarios'));
        $this->set('_serialize', ['personale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Personale id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personale = $this->Personales->get($id, [
            'contain' => ['Usuarios']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personale = $this->Personales->patchEntity($personale, $this->request->getData());
            if ($this->Personales->save($personale)) {
                $this->Flash->success(__('The personale has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personale could not be saved. Please, try again.'));
        }
        $empresas = $this->Personales->Empresas->find('list', ['limit' => 200]);
        $usuarios = $this->Personales->Usuarios->find('list', ['limit' => 200]);
        $this->set(compact('personale', 'empresas', 'usuarios'));
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
