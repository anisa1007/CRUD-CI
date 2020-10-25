<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function show()
	{
		$data['nama'] = 'Anisa Raden';
		$data['jurusan'] = 'Ilmu Komputer';

		echo view('Mahasiswa/header');
		echo view('Mahasiswa/index', $data);
		echo view('Mahasiswa/footer');
	}

	//--------------------------------------------------------------------

}
