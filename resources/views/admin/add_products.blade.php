<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        label{
            display: inline-block;
         margin-left: 20px;
            width: 100px;
        }
    </style>
    <!-- Required meta tags -->
    @include('admin.css-header')
</head>
<body>
<div class="container-scroller">
    @include('admin.sidebar')
    <!-- partial:partials/_sidebar.html -->
    <!-- partial -->
    @include('admin.navbar')

    <div class="container-fluid page-body-wrapper mt-0">

        <div class="container" style="margin-left:10%;" >
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
            <form action="{{url('add_products')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 style="margin-left: 20% ;margin-bottom: 2% ;">
                    Add Product
                </h1>
                <div style="padding: 15px ;margin-top: 5px">
                    <label> Name</label>
                    <input type="text" name="p_name" placeholder="Write the name  " style="color: #1a202c"
                    required>
                    <label > Price</label>
                    <input type="number" name="p_price" placeholder="Write the Price " style="color: #1a202c" required>
                </div>
                <div style="padding: 15px">
                    <label>Category</label>
                  <select name="p_category" style="color:#1a202c ; width:219px" required>
                      <option>--Select--</option>
                      @foreach($categorys as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                  </select>
                    <label>Status</label>
                    <select name="p_status" style="color:#1a202c ; width:219px" required>
                        <option>--Select--</option>
                        <option value="new">New</option>
                        <option value="used">Used</option>
                    </select>
                </div>
                <div style="padding: 15px">
                    <label > Number</label>
                    <input type="number" name="p_number" placeholder="Write the Number " style="color: #1a202c" required>
                    <label>Availability</label>
                    <select name="p_availability" style="color:#1a202c ; width:219px" required>
                        <option>--Select--</option>
                        <option value="Available now">Available now</option>
                        <option value="Available soon">Available soon</option>
                    </select>

                </div>
                <div style="padding: 15px">
                    <label>Excerpt</label>
                    <textarea  name="p_excerpt" placeholder="Write the Excerpt" style="color: #1a202c" required
                    rows="2" cols="60"></textarea>
                </div>
                <div style="padding: 15px">
                    <label>Description</label>
                    <textarea  name="p_description" placeholder="Write the Description" style="color: #1a202c" required
                               cols="60"    rows="3"></textarea>
                </div>
                <div style="padding: 15px">
                    <label>Image</label>
                    <input type="file" name="p_image" >
                </div>
                <div style="padding: 15px;margin-left: 20% ;" >
                    <input type="submit" value="Send" class="btn btn-success lg:px-8">
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
