<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;
  use Barryvdh\DomPDF\Facade\Pdf;
class PdfController extends Controller
{
    
//  public function generatePdf(){     
    
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadHTML('<h1>Hello World Test</h1>');
//     return $pdf->stream();
//  }
    
/****Generate from a Blade */

//   public function generatePdf(){       
   
//     $pdf = Pdf::loadView('index');
//     return $pdf->download();
//  }

 /*****
  * Generate from a blade  which has been passed a variable
  *First Method */
  
//   public function generatePdf(){       
//     $data ="Hiae,My name is Gibson M Developer of this Repo !";
//     $pdf = Pdf::loadView('index', compact('data'));
//     return $pdf->download();
//  }

 /*****
  * Generate from a blade  which has been passed a variable
  *Second Method */
  
//     public function generatePdf(){       
//     $data ="Hae,My name is Gibson M Developer of this Repo !";
//     $email = "gibsonmurimi4@gmail.com";
//     $pdf = Pdf::loadView('index', ['data' =>$data,'email'=>$email]);
//     return $pdf->download();
//  }

 /*****
  * Generate from a blade  which has been passed a variable
  *With a  Unique Name of Document */
  
    public function generatePdf(){       
    $data ="Hae,My name is Gibson M Developer of this Repo !";
    $email = "gibsonmurimi4@gmail.com";
    $pdf = Pdf::loadView('index', ['data' =>$data,'email'=>$email]);
    return $pdf->download('my-file' .time(). rand('9999','99999'). Str::random('10').'.pdf');
 }



  /*****
  * Generate from a blade  which has been passed a variable
  *With a  Unique Name of Document and Directory to save the doc*/
  
//     public function generatePdf(){       
//     $data ="Hae,My name is Gibson M Developer of this Repo !";
//     $email = "gibsonmurimi4@gmail.com";
//     $pdf = Pdf::loadView('index', ['data' =>$data,'email'=>$email])->save(public_path('my-file' .time(). rand('9999','99999'). Str::random('10').'.pdf'));
//     return $pdf->download();
//  }


}