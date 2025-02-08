<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFolderRequest;
use Inertia\Inertia;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class FileController extends Controller
{
    public function myFiles()
    {
        return Inertia::render('MyFiles');
    }

    public function createFolder(StoreFolderRequest $request)
    {


        $data = $request->validated();
        $parent = $request->parent;
        
        if(!$parent){
            $parent = $this->getRoot();
        }

        $file = new File();
        $file->is_folder = 1;
        $file->name = $data['name'];

        $parent->appendNode($file);
    }

    private function getRoot()
    {
        return File::query()->where('created_by', Auth::id())->whereIsRoot()->firstOrFail();
    }
}
