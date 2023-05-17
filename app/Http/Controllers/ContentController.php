<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Models\Content;
class ContentController extends Controller
{
    public function content()
    {
            $this->data['contents'] = Content::all();
            return view('contentview', $this->data);
    }
    public function update(Request $request){
        $data=Content::find($request->id);
        $data->description = $request->description;
        $data->short_notes= $request->short_notes;
        $data->save();
        return redirect('contentview');
    }       
}
