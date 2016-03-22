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
use App\MailModel;


class UserController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  public function template($id=null)
  {

   $data = Template::all();
   return \View::make('template',array('data'=>$data,'id'=>$id));

 }
 public function sendmail()
 {
  return \Mail::raw('Laravel with Mailgun is easy!yo...', function($message)
  {
    $message->to('sush.94kh@gmail.com');
  }
  );
}


public function edit()
{
  $data = Input::all();
  $mail = new MailModel;
  $mail->data=$data['data'];
  $mail->save();
  $cust=MailModel::where('data',$data['data'])->first();

  Session::put('mail_id',$cust->id);

  return Redirect::to('senders');
}


public function senders($id=null)
{

      $data=Query::all();
      $resp = "";
  
        if($id!=null)
          {
                $queries = DB::select(DB::raw(Query::where('id',$id)->first()->query));
                  foreach ($queries as $query) {
                       $resp = $resp . "," . $query->recipient;
                      }
              return \View::make('senders',array('data'=>$data,'id'=>$id,'result'=>$resp));
          }
        else
          {
              return \View::make('senders',array('data'=>$data,'id'=>$id,'result'=>$resp));

          }
}
 

/* $result = "";
 if($
 }id!=null)
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
}*/

}
