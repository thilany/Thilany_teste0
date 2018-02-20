<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;

class MotoristasController extends AppController{
	public function index(){

	}

	public function cadastrar(){
		$motoristaTable = TableRegistry::get('motoristas'); 
		$motorista = $motoristaTable->newEntity(); 
		$this->set('motoristas', $motorista);
	}

	public function salvar(){
		$motoristaTable = TableRegistry::get('motoristas');
		$motorista = $motoristaTable->newEntity($this->request->data());
		$motorista["status"] = "1";
		$data = new Time($motorista['data_nsc_m']);
		$motorista['data_nsc_m'] = $data->format('Y-m-d');

		if($motoristaTable = $motoristaTable->save($motorista)){
			$this->Flash->set('Motorista cadastrada com sucesso', ['element' => 'success']);
			return $this->redirect(['controller' => 'Motoristas', 'action' => 'index']);
		}	
		else
		{
			$this->Flash->set('Motorista não foi cadastrada! Erro!', ['element' => 'error']);
			return $this->redirect(['controller' => 'Motoristas', 'action' => 'index']);
		}	
	}

	public function cadastrados(){
		$motoristas = $this->Motoristas->find();
        $this->set("motoristas", $motoristas);
	}

	public function mudarstatus($id_motorista, $status){
		$conn = ConnectionManager::get('default');
		if($status == "1")
        	$status = $conn->execute("UPDATE motoristas SET status = '0' WHERE id_motorista = {$id_motorista}");	
        else
        	$status = $conn->execute("UPDATE motoristas SET status = '1' WHERE id_motorista = {$id_motorista}");

        $this->Flash->set('Status alterado com sucesso', ['element' => 'success']);
		return $this->redirect(['controller' => 'Motoristas', 'action' => 'cadastrados']);
    }
}
