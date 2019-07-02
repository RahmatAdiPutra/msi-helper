<?php

namespace Msi\Falcon\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Msi\Falcon\Models\Ktv\Song;

class HelperController extends BaseController
{
    public function song()
    {
        $data = [];
        $song = Song::all();
        foreach ($song as $k => $v) {
            $data['song']['id'][] = $v['id'];
            $data['song']['file_path'][] = $v['file_path'];
        } 
        return $data['song'];
    }
}
