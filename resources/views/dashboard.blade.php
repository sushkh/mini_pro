@extends('common')
@section('content')
    <link href="{{URL::asset('/css/table.css')}}" rel="stylesheet">

    <div class="container">
        <br>
        <div class="row">
            <!-- Sidebar Column -->
            @include('menu')
                    <!-- Content Column -->
            <div class="col-md-9">
                <h2>All  Mailed user</h2>
                @if(Session::has('message'))
                    <div class="control-group form-group" id="error">

                        <p id="msg">{{Session::get('message')}}</p>

                    </div>
                @endif
                <center>
                   
                        <table data-order='[[ 1, "asc" ]]' data-page-length='25' id="tbl">
                            <thead>
                            <tr>
                                <th><center>Email-Ids</center></th>
                                <th><center>Sent</center></th>
                                <th><center>Date</center></th>
                                <th><center>Time</center></th>

                            </tr>
                            </thead>
                             <tbody>
                            @foreach($data as $d)
                                <tr>
                                    <td>{!! $d->recipient!!}</td>
                                    
                                    <!-- <td><a class="btn btn-success" href="edituser/{{$d->id}}">Edit</a></td>
                                    <td><a  class="btn btn-success" href="deleteuser/{{$d->id}}">Delete</a></td> -->
                                </tr>


                            @endforeach
                            </tbody>
                           
                        </table>
                        <script type="text/javascript">

function tabledisp(){
    $('#tbl').DataTable({
        ordering : true,
        searching : true
    });
}
window.onload = tabledisp;
</script> 

                   
                </center>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; CampusPuppy 2015</p>
                </div>
            </div>
        </footer>

    </div>
@stop