<?php

namespace App\FileManager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoragePublic
{
    private $folder;
    private $newFileName;

    public function __construct($folder, $newFileName = '')
    {
        $this->folder = $folder;
        $this->newFileName = $newFileName;
    }

    public function fileUpload($file = '')
    {
        //If no new name is provided by the user
        if($this->newFileName == '')
            return '/storage/' . Storage::disk('public')->putFileAs($this->folder, $file);
        //If a new name is provided by the user
        else
            return '/storage/' . Storage::disk('public')->putFileAs($this->folder, $file, $this->newFileName);
    }
}