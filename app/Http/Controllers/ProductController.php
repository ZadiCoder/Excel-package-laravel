<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductImport;
use App\Exports\ProductExport;

use Maatwebsite\Excel\Facades\Excel;


class ProductController extends Controller
{
     public function importProduct(){
      //dd($request->file);
        // return Excel::import(new ProductImport, $request->file('file'));
          Excel::import(new ProductImport, request()->file('file'));
         return back();

    }
 public function exportProduct(){
         
         return Excel::download(new ProductExport, 'product.xlsx');   
        }
}
