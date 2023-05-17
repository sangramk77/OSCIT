<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\CustomClasses\ColectionPaginate;
use Illuminate\Support\ServiceProvider;
class DashboardController extends Controller
{
    public function dashboard()
    { 
        $sqls = DB::select('SELECT *  FROM `contents` WHERE `id` IN (11,12,13);');
        return view('dashboard',['sqls' => $sqls]);  
    }
    public function dashboard_header()
    {
        return view('dashboard_header');
    }
    public function dashboard_footer()
    {
        return view('dashboard_footer');
    }
    public function user_list()
    {
        $this->data['users'] = User::latest()->paginate(5);
        return view('backend.user_list', $this->data);
    }
    public function delete($id){
        $data=User::find($id);
        $data->delete();
        return redirect('user_list');
        
    }
    public function showData($id){
        $data=User::find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(Request $request){
        $data=User::find($request->id);
        $data->name = $request->name;
        $data->email= $request->email;
        $data->save();
        return redirect('user_list');
    }  
}
