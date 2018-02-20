<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;

class PassageirosController extends AppController{


	public function cadastrar(){
		$passageiroTable = TableRegistry::get('passageiros'); 
		$passageiro = $passageiroTable->newEntity(); 
		$this->set('passageiros', $passageiro);
	}

	public function salvar(){
		$passageiroTable = TableRegistry::get('passageiros');
		$passageiro = $passageiroTable->newEntity($this->request->data());

		$data = new Time($passageiro['data_nsc_p']);
		$passageiro['data_nsc_p'] = $data->format('Y-m-d');
		
		if($passageiroTable = $passageiroTable->save($passageiro)){
			$this->Flash->set('Passageiro cadastrada com sucesso', ['element' => 'success']);
			return $this->redirect(['controller' => 'Passageiros', 'action' => 'cadastrados']);
		}	
		else
		{
			$this->Flash->set('Passageiro não foi cadastrada! Erro!', ['element' => 'error']);
			return $this->redirect(['controller' => 'Passageiros', 'action' => 'cadastrados']);
		}	
	}

	public function cadastrados(){
		$passageiros = $this->Passageiros->find();
        $this->set("passageiros", $passageiros);
	}
}
