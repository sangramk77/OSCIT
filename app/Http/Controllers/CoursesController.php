<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;
use App\CustomClasses\ColectionPaginate;
use Illuminate\Support\Facades\DB;
use App\Models\Courses;
use App\Models\Crhdr;
class CoursesController extends Controller
{
     public function list()
     {
         $this->data['crhdr'] = Crhdr::paginate(10);
         return view('products.course_list', $this->data);
     }
     public function showData($id){
         $data=Crhdr::find($id);
         return view('update',['data'=>$data]);
     }
     public function update(Request $request){
         $data=Crhdr::find($request->id);
         $data->cr_nm= $request->cr_nm;
         $data->cr_seats= $request->cr_seats;
         $data->cr_eligible= $request->cr_eligible;
         $data->cr_certify= $request->cr_certify;
         $data->cr_dur= $request->cr_dur;
         $data->cr_price= $request->cr_price; 
         $data->save();
         return redirect('course_list');
     }
     public function course()
      {
          $this->data['crhdr'] = Crhdr::paginate(10);
          return view('backend.course', $this->data);
      }
      public function up($id){
          $datas=Courses::where("cr_id",$id)->get();
          return view('up',['datas'=>$datas]);
      }
      public function edit(Request $request){
          $data=Courses::find($request->id);
          $data->cr_id= $request->cr_id;
          $data->cr_hdr= $request->cr_hdr;
          $data->cr_description=$request->cr_description;
          $data->cr_short_notes=$request->cr_short_notes;
          $data->save();
          return redirect()->back();
      }
     public function course_dtls(){
            $os_cit = DB::select('SELECT courses.id,courses.cr_id,courses.cr_hdr,courses.cr_description,courses.cr_short_notes,crhdrs.cr_nm, crhdrs.cr_seats,crhdrs.cr_eligible,crhdrs.cr_certify,crhdrs.cr_dur,crhdrs.cr_price FROM crhdrs INNER JOIN courses ON crhdrs.id = courses.cr_id;');
            return view('course_dtls',['os_cit' => $os_cit]);
    }
    public function admission(){
        $os_cit = DB::select('SELECT courses.id,courses.cr_id,courses.cr_hdr,courses.cr_description,courses.cr_short_notes,crhdrs.cr_nm, crhdrs.cr_seats,crhdrs.cr_eligible,crhdrs.cr_certify,crhdrs.cr_dur,crhdrs.cr_price FROM crhdrs INNER JOIN courses ON crhdrs.id = courses.cr_id;');
        return view('admission',['os_cit' => $os_cit]);
    }
    // public function certificate(){
    //     $os_cit = DB::select('SELECT courses.id,courses.cr_id,courses.cr_hdr,courses.cr_description,courses.cr_short_notes,crhdrs.cr_nm, crhdrs.cr_seats,crhdrs.cr_eligible,crhdrs.cr_certify,crhdrs.cr_dur,crhdrs.cr_price FROM crhdrs INNER JOIN courses ON crhdrs.id = courses.cr_id;');
    //     return view('certificate',['os_cit' => $os_cit]);
    // }
    public function certificate(){
         return view('certificate');
     }
}