<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\View\View;
use PDF;
// use Barryvdh\DomPDF\Facade\PDF;

class ProyectoController extends Controller
{
   public function index(): View
   {
      $entries = Proyecto::all();

      return view('index', ['entries' => $entries]);
   }

   public function create()
   {
   }

   public function create1()
   {
      return view('create1');
   }

   public function addEntry(Request $request)
   {
      $form = new Proyecto;

      $form->nombreProyecto = $request->input('nombreProyecto');
      $form->fuenteFondos = $request->input('fuenteFondos');
      $form->montoPlanificado = $request->input('montoPlanificado');
      $form->montoPatrocinado = $request->input('montoPatrocinado');
      $form->montoFondosPropios = $request->input('montoFondosPropios');
      $form->save();

      return view('enviado', ['form' => $form]);
   }

   public function delete1($id)
   {
      $entry = Proyecto::find($id);

      return view('borrando', ['entry' => $entry]);
   }

   public function deleting($id)
   {
      $entry = Proyecto::find($id);
      $entry->delete();

      return redirect()->route("home");
   }

   public function edit($id)
   {
      $entry = Proyecto::find($id);

      return view('editar', ['entry' => $entry]);
   }

   public function confirmEdit(Request $request, $id)
   {
      $form = Proyecto::find($id);
      $form->nombreProyecto = $request->input('nombreProyecto');
      $form->fuenteFondos = $request->input('fuenteFondos');
      $form->montoPlanificado = $request->input('montoPlanificado');
      $form->montoPatrocinado = $request->input('montoPatrocinado');
      $form->montoFondosPropios = $request->input('montoFondosPropios');

      $form->save();
      return redirect()->route("home");
   }

   public function report()
   {
      $entries = Proyecto::all();

      $pdf = PDF::loadView('index', ['entries' => $entries]);

      return $pdf->stream('reporte.pdf');
   }
}
