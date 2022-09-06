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
            @if(session()->has('Message_Update'))


                <div  class="alert alert-success w-full" id="d1" style="text-align: center;margin-left: -8%">

                    {{session()->get('Message_Update')}}
                </div>
                <script>
                    function hidefiv(){
                        document.getElementById("d1").style="display:none";
                    }
                    setTimeout(hidefiv,4000);
                </script>
            @endif
            <form action="{{url('edit_category',$category->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px">
                    <h1 style="margin-left: 20% ;margin-bottom: 7%">
                        Update Category
                    </h1>
                    <label> Name</label>
                    <input type="text" name="c_name" placeholder="Write the name  " style="color: #1a202c"
                           required value="{{$category->name}}">
                </div>
                <div style="padding: 15px">
                    <label>Excerpt</label>
                    <textarea  name="c_excerpt" placeholder="Write the Excerpt" style="color: #1a202c" required
                               rows="2"  >{{ $category->excerpt}}</textarea>

                </div>
                <div style="padding: 15px">
                    <label>Description</label>
                    <textarea  name="c_description" placeholder="Write the Description" style="color: #1a202c" required
                               data-value=" "rows="3">{{ $category->description}}</textarea>
                </div>
                <div style="padding: 15px">
                    <label>Old Image</label>
                    <img src="categoryimage/{{$category->logo}}" width="200px" height="200px" style="margin-left: 18%" alt="No Download Image">
                </div>
                <div style="padding: 15px">
                    <label>Logo</label>
                    <input type="file" name="c_logo" >
                </div>
                <div style="padding: 15px;margin-left: 20% ;" >
                    <input type="submit" value="Update" class="btn btn-success lg:px-8" onclick="return confirm('are you sure to Update this ')">
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
