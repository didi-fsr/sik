<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pamongbtgs;

class PamongbtgsController extends Controller
{
    //
    public function store(Request $request)
    {
      $pamongbtgss = new Pamongbtgs;

        $pamongbtgss->tgl = $request->tgl;
        $pamongbtgss->tk1 = $request->tk1;
        $pamongbtgss->tk2 = $request->tk2;
        $pamongbtgss->tk3 = $request->tk3;
        $pamongbtgss->tk4 = $request->tk4;

        $pamongbtgss->save();
        //
        // // Generating URLs...
        // $url = route('pamonghome');
        //
        // // Generating Redirects...
        // return redirect()->route('pamonghome');

        return redirect('/pamonghome');
    }

}
