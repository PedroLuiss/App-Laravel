<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


        public function index()
    {
        
        return view('file.file_pdf');
    }

    public function store(Request  $request){
        
        $max_size = (int)ini_get('upload_max_filesize') *10240;

        $files = $request->file('files');
        
        if (!$request->hasFile('files')) {
           return back()->with('error', 'Error, Campo vacio');
        }

        foreach ($files as $file) {
            if (strtolower($file->getClientOriginalExtension()) == 'pdf') {
                if(Storage::putFileAs('/File/pdf/',$file, $file->getClientOriginalName())){
                    File::create([
                    'name_file' => $file->getClientOriginalName()
                    ]);
                }
            }else{
                return back()->with('error', 'Error, Solos archivos PDF');
            }
 
       }

        return back()->with('mensaje', 'Achivos Agregado correctamente');
    }    



}
