<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class DonateBonus extends Model
{
    protected $table = 'donate_bonus';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['id_donate', 'itemcode', 'itemname'];
    protected $useTimestamps = false;
    protected $createdFields = 'created_at';
    protected $updatedFields = 'updated_at';
    protected $deletedFields = 'deleted_at';

    protected $validationRules = [
        'id_donate' => 'required|is_natural_no_zero',
        'itemcode' => 'required|regex_match[/^[0-9\ ]+$/]',
        'itemname' => 'required|max_length[50]'
    ];

    protected $validationMessages = [
        'id_donate' => [
            'required' => 'Referência de donate obrigatório!',
            'is_natural_no_zero' => 'Apenas números inteiros acima de zero!'
        ],
        'itemcode' => [
            'required' => 'Não foi possível encerrar o ticket!',
            'regex_match' => 'Código do item está inválido!'
        ],
        'itemname' => [
            'required' => 'Nome do item é obrigatório!',
            'max_length' => 'Apenas 50 caracteres para o nome do item'
        ]
    ];

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $beforeDelete = ['beforeDelete'];

    protected $skipValidation = false;

    protected function beforeInsert(array $data)
    {
        $data['data']['created_at'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function beforeUpdate(array $data)
    {
        $data['data']['updated_at'] = date('Y-m-d H:i:s');
        return $data;
    }

    protected function beforeDelete(array $data)
    {
        $data['data']['deleted_at'] = date('Y-m-d H:i:s');
        return $data;
    }
}
