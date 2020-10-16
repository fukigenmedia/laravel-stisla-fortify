<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class Fukigen
{
    /**
     * Membuat upload file menjadi lebih mudah
     * @param string $type
     * @param string $pathFileLocation 
     * @param \Illuminate\Http\Request  $requestFile
     * @return string path/ke/folder/namafile.extensi
     */
    public static function uploadFile($pathFileLocation, $requestFile)
    {
        (config('app.env') == 'local') ? $storage = '' : $storage = 'public/';
        $temporaryFileName = Str::uuid() . '.' . $requestFile->getClientOriginalExtension();
        $requestFile->move($storage . $pathFileLocation, $temporaryFileName);
        return $pathFileLocation . $temporaryFileName;
    }
}
