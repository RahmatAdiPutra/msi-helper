<?php

namespace Msi\Falcon\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Msi\Falcon\Models\Ktv\Song;

class HelperController extends BaseController
{
    public function song(Request $request)
    {
        if ($request->much > 0) {
            $data = [];
            $counter = 0;
            $song = Song::all();

            foreach ($song as $k => $v) {
                if ($request->much == $counter) {
                    break;
                }
                $data['song'][$v['id']] = $v['file_path'];
                $counter++;
            }
            return $data['song'];
        }
    }
}
