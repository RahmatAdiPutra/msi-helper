<?php

namespace Msi\Falcon\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Msi\Falcon\Models\Ktv\Song;
use Illuminate\Support\Str;

class HelperController extends BaseController
{
    public function song(Request $request)
    {
        $data = [];

        if ($request->much > 0) {
            $counter = 0;
            $song = Song::all();

            foreach ($song as $k => $v) {
                if ($request->much == $counter) {
                    break;
                }
                
                $allow =  Str::contains($v['file_path'], '.mpg');
                
                if ($allow) {
                    $data['song'][$v['id']] = $v['file_path'];
                    $counter++;
                }
            }
        }

        return $data;
    }
}
