<?php

namespace Msi\Falcon\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Msi\Falcon\Models\Ktv\Song;

class HelperController extends BaseController
{
    public function song(Request $request)
    {
        $data = [];
        // $song = Song::all();
        // foreach ($song as $k => $v) {
        //     $data['song'][$v['id']] = $v['file_path'];
        // }
        if ($request->much > 0) {
            return $request->much;
        }
    }
}
