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

        $data['number_of_updates'] = $request->much;

        if ($data['number_of_updates'] > 0) {
            $counter = 0;
            $song = Song::all();
            $data['number_of_songs'] = $song->count();

            if ($data['number_of_songs'] >= $data['number_of_updates']) {
                foreach ($song as $k => $v) {
                    if ($request->much == $counter) {
                        break;
                    }
    
                    $allow =  Str::contains($v['file_path'], '.mpg');
                    
                    if ($allow) {
                        $filename = Str::replaceArray('.mpg', ['.mp4'], $v['file_path']);
                        $update = Song::find($v['id']);
                        $update->file_path = $filename;
                        $update->save();
                        $data['song'][] = $update;
                        $counter++;
                    }
                }
            }
        }

        return $data;
    }
}
