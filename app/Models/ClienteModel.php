<?php
namespace App\Models;
use CodeIgniter\Model;



class ClienteModel extends Model{

protected $table     = 'cliente';
protected $primaryKey = 'id'; 
protected $returnType = 'array';
protected $allowedFields =['nombre', 'apellido', 'telefono', 'correo'];

protected $userTimestamps =true;
protected $createdField ='created_at';
protected $updatedField ='updated_at';

protected $validationRules =[
    'nombre'  => 'required|alpha_space|min_length(4)|max_length(75)',
    'apellido'  => 'required|alpha_space|min_length(4)|max_length(75)',
    'telefono'  => 'required|alpha_space|min_length(10)|max_length(10)',
    'correo' => 'permit_empty|valid_email|'
];

protected $validationMessages=[
    'correo' =>[
        'valid_email'=>'Tiene que ser un correo valido con un @ y .'
    ]
    ];

    protected $skipValidation = false;
}


?>