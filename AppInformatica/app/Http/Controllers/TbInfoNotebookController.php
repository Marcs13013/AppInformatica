<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\tbInfoNotebook;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validate;

class TbInfoNotebookController extends Controller
{
      // PARA MOSTRAR TELA ADMINISTRATIVA
      public function MostrarHome()
      {
          return view('homeadm');
      }
  
      //Mostrar tela cadastro
      public function MostrarCadastroNotebook()
      {
          return view('cadastronotebook');
      }

      public function CadastrarNotebook(Request $request)
      {

        $registros=$request->validate([
            'marca' => 'string|required',
            'sistemaOperacional' => 'string|required',
            'memoriaRam' => 'string|required',
            'armazenamento' => 'string|required'
        ]);
        tbInfoNotebook::create($registros);
        return Redirect::route('home-adm');
      }
    }