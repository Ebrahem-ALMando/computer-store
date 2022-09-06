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
                    <th width="170px" >Price</th>
                    <th width="150px" >Category</th>
                    <th width="180px" >Status</th>
                    <th width="150px"> Number</th>
                    <th>Availability</th>
                    <th width="150px"> Excerpt</th>
                    <th width="150px"> Description</th>
                    <th width="100px"> Delete </th>
                    <th width="50px">Update </th>

                </tr>
                @foreach($datas as $data)
                    <tr style="text-align: center" class="text-dark">
                        <td>{{$data->name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->category->name}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->number}}</td>
                        <td style="text-align: center">{{$data->availability}}</td>
                        <td>{{$data->excerpt}}</td>
                        <td>{{$data->description}}</td>
                        <td><a href="{{url('delete_product',$data->id)}}" class="btn btn-danger"
                               onclick="return confirm('are you sure to delete this ')"> Delete</a ></td>
                        <td><a href="{{url('update_product',$data->id)}}" class="btn btn-success"
                             > Update</a ></td>
                    </tr>
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

