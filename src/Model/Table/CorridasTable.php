<?php 
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CorridasTable extends Table{
	public function initialize(array $config)
    {
        parent::initialize($config);

        $this->addAssociations([
            'hasOne' => ['Motoristas' => ['foreignKey' => 'id_motorista']],
            'belongsTo' => ['Passageiros' => ['foreignKey' => 'id_passageiro']]
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence([
                    'id_motorista',
                    'id_passageiro',
                    'valor_corrida'
               	]);
        return $validator;
    }
}