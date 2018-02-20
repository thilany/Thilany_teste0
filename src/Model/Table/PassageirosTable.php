<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PassageirosTable extends Table{
	public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence([
            		'nome_p',
                    'data_nsc_p',
                    'cpf_p',
                    'sexo'
               	]);
        return $validator;
    }
}