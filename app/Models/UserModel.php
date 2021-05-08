<?php 
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{


    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
   // protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre', 'apellido', 'correo'];

    protected $useTimestamps = false;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
 

    protected $validationRules    = [
        'nombre'=>'required|alpha_numeric_space|min_length[8]',
        'apellido'=>'required|alpha_numeric_space|min_length[8]',
        'correo'=>'required|valid_email|is_unique[users.correo]'
    ];
    protected $validationMessages = [
'correo'=>[
    'is_unique'=>'Este correo ya existe'
]

    ];
    protected $skipValidation     = false;
}