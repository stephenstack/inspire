<?php

namespace Rconfig\Inspire\Controllers;

use Illuminate\Http\Request;
use Rconfig\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
