<?php

namespace App\FileManager;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PublicDirectory
{
    private $folder;
    private $newFileName;

    public function __construct($folder, $newFileName = '')
    {
        $this->folder = $folder;
        $this->newFileName = $newFileName;
    }

    public function upload($file = '')
    {   
        //Upload with the original name if no new name is given to the file
        if($this->newFileName == ''){
            $file->move($this->folder, $file->getClientOriginalName());
            return $this->folder . $file->getClientOriginalName();
        }
        //Upload with a new name if it's given to the file
        else{
            $file->move($this->folder, $this->newFileName);
            return $this->folder . $this->newFileName;
        }
    }

    public function mkdir()
    {
        $path = public_path($this->folder);
        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }
        return $path;
    }
}