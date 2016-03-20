<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Template;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Request;
use Views;
use App\User;
use App\Query;
use DB;
use Session;
use Response;
use App\Mail;


class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

 public function template($id=null)
  {
   		
   $data = Template::all();
   return \View::make('template',array('data'=>$data,'id'=>$id));

 }

 public function edit()
 {
 	$data = Input::all();
 	$mail = new Mail;
 	$mail->data=$data['data'];
 	$mail->save();
 	$cust=Mail::where('data',$data['data'])->first();

 	Session::put('mail_id',$cust->id);

 	return Redirect::to('senders');
 }

 public function senders($id=null)
  {
   		
   $data=Query::all();
   $result = "";
   if($id!=null)
   {
   $result = DB::select(Query::where('id',$id)->first()->query);
   $res = array();
   foreach($result as $r)
   {
   	$res[] = $r->data;
   }
   return \View::make('senders',array('data'=>$data,'id'=>$id,'result'=>$res));

   }
   return \View::make('senders',array('data'=>$data,'id'=>$id,'result'=>$result));
 }

}
