<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notices;

class NoticesController extends Controller
{
    
    public function index()
    {
        $notices =  Notices::all();
        return $notices;
    }

    
    public function store(Request $request)
    {
        $notice = new Notices();

        $notice->description = $request->description;
        $notice->title = $request->title;

        $notice->save();
    }

   
    public function show($id)
    {
        $notice = Notices::find($id);
        return $notice;
    }

    
    public function update(Request $request, $id)
    {
        $notice = Notices::findOrFail($request->id) ;

        $notice->description = $request->description;
        $notice->title = $request->title;

        $notice->save();

        return $notice;
    }

   
    public function destroy($id)
    {
         $notice = Notices::destroy($id);
         return $notice;
    }
}
