<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
  use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
//  public function generatePdf(){     
    
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadHTML('<h1>Hello World Test</h1>');
//     return $pdf->stream();
//  }

  public function generatePdf(){       
   
    $pdf = Pdf::loadView('index');
    return $pdf->download();
 }
}