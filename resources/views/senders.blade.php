@extends('common')
@section('content')
 <div class="container">
        <br>
        <div class="row">
            <!-- Sidebar Column -->
           @include('menu')
            <!-- Content Column -->
            <div class="col-md-9">
                <h2>Get all Recipients</h2>
                <form action={{url('add_mail')}} method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                     @if(Session::has('message'))
               <div class="control-group form-group" id="error">
           
            <p id="msg">{{Session::get('message')}}</p>
           
        </div>
         @endif
                    <div class="control-group form-group">
                        <div class="controls">

                            <label></label>
                            <!-- <input type="text" name="name" required class="form-control">
                            <p class="help-block"></p>
 -->
                            <select id="dropdown" name="name" onChange="load()" required class="form-control">
                            <option value="">select</option>

                            @foreach($data as $query)
                            @if($query->id==$id)
                            
                             
                           
                            <option value="{{$query->id}}" selected >{{$query->query}}</option>
                            @else
                            <option value="{{$query->id}}" >{{$query->query}}</option>
                          @endif

                            @endforeach
                             
                            </select>
                        </div>
                    </div>


                    


                        
                             <div class="control-group form-group">
                             <div class="controls">
                            
                                
                                  <label>Senders Mail_id:</label>
                             <textarea  name="about"  rows="10" required class="form-control">{{$result}}</textarea>
                        
                                <p class="help-block"></p>


                        </div>
                    </div>
                          
        
                    </div>
                    <div>
                    <center>
                    <button type="submit" class="btn btn-success">Next</button>
                </center>
            </div>
                </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                
            </div>
        </footer>

        <script type="text/javascript">

        function load()
{
  var e = document.getElementById("dropdown");
var strUser = e.options[e.selectedIndex].value;
if(strUser=='')
window.location.href = "{{url('senders')}}";
else
window.location.href = "{{url('senders')}}/"+strUser;

}
</script>
        
    </div>
    @stop