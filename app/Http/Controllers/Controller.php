<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
     * NEW
     * 1. controller routes groups
     * 2. anonymous migration stubs (anonymous classes)
     * 3. helper funstions str() -> generate stringable object + simple way to redirect -> to_route('home')
     * 4. refreshed ignition error page
     * 5. render a blade string
     * 6. forced scoped bindings
     *
     *
     */
}
