<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MotoristasTable extends Table{
	public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence([
            		'nome_m',
                    'data_nsc_m',
                    'cpf_m',
                    'mod_carro',
                    'status'
            	]);
        return $validator;
    }
}