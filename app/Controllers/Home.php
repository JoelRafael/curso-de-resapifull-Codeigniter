<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
class Home extends BaseController
{
	public function index()
	{
		return view('estructura/header').view('estructura/body');
	}

	public function vista(){
    $userModel=new UserModel($db);

	$data=[
		'nombre'=>'Lencho Felix',
		'apellido'=>'Maria Paredes',
		'correo'=>'preuba@plazalama.com'

	];
	/*$data=[
		'id'=>'3',
		'nombre'=>'Lencho',
		'apellido'=>'Maria',
		'correo'=>'lmaria@prueba.com'

	];*/

	//$userModel->update([4,5], $data);
	//$userModel->insert($data);
  // $userModel->whereIn('id', [3,4,5])->set(['correo'=>'sophia@prueba.com'])->update();
  /*if($userModel->save($data)===false){

	 //-------Validaciones de los datos-----------
print_r($userModel->errors());

  }*/

 //$userModel->delete([1, 2 , 3]);
 //$userModel->where('id' , 4)->delete();
 //$userModel->purgeDeleted();
 



/*$user=$userModel->findAll();
//return json_encode($user);
foreach($user as $users){

	print_r($users['correo']. "</br>");
}*/

//---Creando consulta con QueryBuild------

$user=$userModel
->asArray()
->where('nombre', 'Joel Rafael')
->orderBy('id', 'asc')
->findAll();
print_r($user);
}
}
