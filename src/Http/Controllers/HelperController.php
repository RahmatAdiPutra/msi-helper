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
                    $filename = Str::replaceArray('.mpg', ['.mp4'], $v['file_path']);
                    $data['test'] = Song::find($v['id']);

                    $data['song'][$v['id']] = $filename;
                    $counter++;
                }
            }
        }

        return $data;
    }
}
