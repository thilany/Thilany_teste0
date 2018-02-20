<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;

class CorridasController extends AppController{

	public function cadastrar(){
		$corridaTable = TableRegistry::get('corridas'); 
		$corridas = $corridaTable->newEntity(); 
		$this->set('corridas', $corridas);

		$this->set('motoristas', $this->Corridas->Motoristas->find('list', [ 'conditions' => ['status' => '1'], 'keyField' => 'id_motorista', 'valueField' => 'nome_m', ]));

		$this->set('passageiros', $this->Corridas->Passageiros->find('list', [ 'keyField' => 'id_passageiro', 'valueField' => 'nome_p' ]));
	}

	public function salvar(){
		$corridaTable = TableRegistry::get('corridas');
		$corridas = $corridaTable->newEntity($this->request->data());

		if($corridaTable = $corridaTable->save($corridas)){
			$this->Flash->set('Corrida cadastrada com sucesso', ['element' => 'success']);
			return $this->redirect(['controller' => 'Corridas', 'action' => 'cadastrados']);
		}	
		else
		{
			$this->Flash->set('Corrida não foi cadastrada! Erro!', ['element' => 'error']);
			return $this->redirect(['controller' => 'Corridas', 'action' => 'cadastrados']);
		}	
	}

	public function cadastrados(){
		
		$conn = ConnectionManager::get('default');
        $corridas = $conn->execute("SELECT c.id_corrida as id, m.nome_m as motorista, p.nome_p as passageiro, c.valor_corrida as valor FROM corridas as c inner join motoristas as m on c.id_motorista = m.id_motorista inner join passageiros as p on c.id_passageiro = p.id_passageiro;");
        $this->set('corridas', $corridas);
	}
}
