<?php

namespace Msi\Falcon\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Msi\Falcon\Models\Ktv\Song;

class HelperController extends BaseController
{
    public function song()
    {
        return Song::all();
    }
}
