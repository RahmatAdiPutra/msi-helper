<?php

namespace Msi\Falcon\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Msi\Falcon\Models\Ktv\Song;
use Illuminate\Support\Facades\File;

class HelperController extends BaseController
{
    public function song()
    {
        $data = [];
        $song = Song::all();
        foreach ($song as $k => $v) {
            $data['song'][$v['id']] = $v['file_path'];
        }

        $files = File::files('http://192.168.7.224/');
        foreach ($files as $file) {
            $data['files'][] = pathinfo($file);
        }
        return $data['files'];
    }
}
