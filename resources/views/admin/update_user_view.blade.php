<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <style>
        label{
            display: inline-block;
            width: 150px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css-header')
</head>
<body>
{{-- Exampel =============> Company ==========> Asus   --}}
<div class="container-scroller">
    @include('admin.sidebar')
    <!-- partial:partials/_sidebar.html -->
    <!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

        <div class="container" style="margin-left:20%" >
            @if(session()->has('Message_Add'))
                <div  class="alert alert-success" id="d1" style="text-align: center">

                    {{session()->get('Message_Add')}}
                </div>
                <script>
                    function hidefiv(){
                        document.getElementById("d1").style="display:none";
                    }
                    setTimeout(hidefiv,4000);
                </script>
            @endif
            <form action="{{url('edit_users',$user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                    <h1 style="margin-left: 20% ;margin-bottom: 7%">
                        Update User
                    </h1>
                    <label> Name</label>
                    <input type="text" name="u_name" placeholder="Write the name  " style="color: #1a202c"
                         value="{{$user->name}}"  required>
                </div>
                <div style="padding: 15px">
                    <label> Phone</label>
                    <input type="number" name="u_phone" placeholder="Write the phone  " style="color: #1a202c"
                          value="{{$user->phone}}" required>
                </div>
                <div style="padding: 15px">
                    <label>Address</label>
                    <input type="text" name="u_address" placeholder="Write the Address  " style="color: #1a202c"
                         value="{{$user->address}}"  required>
                </div>
                <div style="padding: 15px">
                    <label>Email</label>
                    <input type="Email" name="u_email" placeholder="Write the Email  " style="color: #1a202c"
                         value="{{$user->email}}"  required>
                </div>
                <div style="padding: 15px">
                    <label>Password</label>
                    <input type="password" name="u_password" placeholder="Write the Password  " style="color: #1a202c"
                           required>
                </div>
                <div style="padding: 15px">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmed" placeholder="Write the Confirm Password  " style="color: #1a202c"
                           required>
                </div>
                <div style="padding: 15px;margin-left: 20% ;" >
                    <input type="submit" value="Update" class="btn btn-success lg:px-8"
                           onclick="return confirm('are you sure to Update this ')">
                </div>
            </form>
        </div>
    </div>
    <!-- partial -->
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</div>
<!-- partial:partials/_sidebar.html -->

<!-- End custom js for this page -->
</body>
</html>
