<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Date\Date;
use App\Models\employe;
use PhpOffice\PhpWord\Element\TextRun;
class ConstanciasController extends Controller
{
    //
    public function PDF(Request $request, $id){
        
        $employe = employe::findOrFail($id);
        Date::setlocale('es');
        $fechaauto= Date::now()->format('j \\de F \\de Y');
        $template= new \PhpOffice\PhpWord\TemplateProcessor('word-template/CartaRecomendacion.docx');

        $template->setValue('fechaauto',$fechaauto);
        $template->setValue('nombrecompleto',$employe->name);
        $template->setValue('quienfirma',$request->name);
        $template->setValue('nombreempresa',$request->empresa);
        $template->saveAs('CartaRecomendacion.docx');

        return response()->download('CartaRecomendacion.docx')->deleteFileAfterSend(true);
    }
}
