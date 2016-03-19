@extends('common')
@section('content')
 <div class="container">
        <br>
        <div class="row">
            <!-- Sidebar Column -->
           @include('menu')
            <!-- Content Column -->
            <div class="col-md-9">
                <h2>Choose the content of mail</h2>
                <form action="add/university" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                     @if(Session::has('message'))
               <div class="control-group form-group" id="error">
           
            <p id="msg">{{Session::get('message')}}</p>
           
        </div>
         @endif
                    <div class="control-group form-group">
                        <div class="controls">

                            <label>Content</label>
                            <!-- <input type="text" name="name" required class="form-control">
                            <p class="help-block"></p>
 -->
                            <select name="name" required class="form-control">
                             
                            <option value="">select</option>
                            @foreach($data as $template)
                            <option value="{{$template->id}}">{{$template->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>


                    


                        
                             <div class="control-group form-group">
                             <div class="controls">
                            <label>About:</label>
                            <textarea  name="about" id="editor2" required class="form-control"></textarea>
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
<script>



</script>
<script type="text/javascript">
    CKEDITOR.replace( 'editor2' );
</script>
        <!-- Footer -->
        <footer>
            <div class="row">
                
            </div>
        </footer>

    </div>
    @stop