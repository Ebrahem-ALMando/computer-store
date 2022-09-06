<x-app-layout>

</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    @include('admin.css-header')
</head>
<body>
<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial:partials/_sidebar.html -->

    <!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

        <div class="container-fluid">
            @if(session()->has('Delete'))


                <div  class="alert alert-success" id="d1" style="text-align: center">

                    {{session()->get('Delete')}}
                </div>
                <script>
                    function hidefiv(){
                        document.getElementById("d1").style="display:none";
                    }
                    setTimeout(hidefiv,4000);
                </script>
            @endif

            <table class="table table-light  w-80 align-content-center mt-5  " align="center" style="margin-left: -12%" >
                <tr style="text-align: center">
                    <th width="180px" >Name</th>
                    <th width="150px"> Phone</th>
                    <th width="150px"> Address</th>
                    <th width="150px"> Email</th>
{{--                    <th width="150px"> Password</th>--}}
                    <th width="100px"> Delete </th>
                    <th width="50px">Update </th>
                </tr>
                @foreach($datas as $data)
                    @if($data->email!='ebrahemalmando2001@gmail.com'&$data->usertype=1)
                    <tr style="text-align: center" class="text-dark">
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->email}}</td>
{{--                        <td>{{bcrypt( $data->password)}}</td>--}}

                        <td><a href="{{url('delete_user',$data->id)}}" class="btn btn-danger"
                               onclick="return confirm('are you sure to delete this ')"> Delete</a ></td>
                        <td><a href="{{url('update_user',$data->id)}}" class="btn btn-success"
                            > Update</a ></td>
                    </tr>
                    @endif
                @endforeach
            </table>
        </div>

    </div>

    <!-- partial -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</div>

<!-- End custom js for this page -->
</body>
</html>

