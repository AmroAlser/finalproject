<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style type="text/css">
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {
            display: inline-block;
            width: 200px;
        }

    </style>
</head>

<body>

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->

    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            <h1 class="title">Add Product</h1>
            {{-- @if (session() - has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif --}}
            <form action="/uploadproduct" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="">Product title</label>
                    <input style="color:black;" type="text" name="title" placeholder="Give a product title" required>

                </div>
                <div style="padding: 15px;">
                    <label for="">Price</label>
                    <input style="color:black;" type="number" name="price" placeholder="Give a product price" required>

                </div>
                <div style="padding: 15px;">
                      <label >Product Category :</label>
                      <select style="color:black;" id="exampleFormControlSelect1" name="Category">
                        <option value="men">Men</option>
                        <option value="women">Women</option>
                        <option value="kid">kids</option>
                      </select>
                    </div>
                <div style="padding: 15px;">
                    <label for="">Description</label>
                    <input style="color:black;" type="text" name="des" placeholder="Give a description" required>

                </div>
                <div style="padding: 15px;">
                    <label for=""> Quantity</label>
                    <input style="color:black;" type="text" name="quantity" placeholder="Give a product quantity"
                        required>

                </div>
                <div style="padding: 15px;">
                      <label >Type Category :</label>
                      <select style="color:black;" id="exampleFormControlSelect1" name="Categoryy">
                        @foreach ($category as $data )
                        <option value="{{$data->id}}">{{$data->type}}</option>
                        @endforeach
                      </select>
                    </div>
                <div style="padding: 15px;">

                    <input style="color:black;" type="file" name="file" i>

                </div>
                <div style="padding: 15px;">
                    <input class="btn btn-success" type="submit" value="Add">

                </div>
            </form>
        </div>
    </div>
    <!-- partial -->
    @include('admin.script')
</body>

</html>
