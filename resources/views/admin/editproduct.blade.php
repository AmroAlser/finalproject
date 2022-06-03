<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
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
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <form action="/updateproduct/{{ $data->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div style="padding: 15px;">
                    <label for="">Product title</label>
                    <input style="color:black;" type="text" name="title" required value="{{ $data->title }}">

                </div>
                <div style="padding: 15px;">
                    <label for="">Price</label>
                    <input style="color:black;" type="number" name="price" required value="{{ $data->price }}">

                </div>
                <div style="padding: 15px;">
                    <label>Product Category :</label>
                    <select style="color:black;" id="exampleFormControlSelect1" name="Category"
                        value="{{ $data->category }}">
                        <option value="Men">Men</option>
                        <option value="Women">Women</option>
                        <option value="kids">kids</option>
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for="">Description</label>
                    <input style="color:black;" type="text" name="des" required value="{{ $data->description }}">

                </div>
                <div style="padding: 15px;">
                    <label for=""> Quantity</label>
                    <input style="color:black;" type="text" name="quantity" required value="{{ $data->quantity }}">

                </div>
                <div style="padding: 15px;">
                    <label for=""> Old Image</label>
                    <img height="100" width="100" src="/productimage/{{ $data->image }}" alt="">

                </div>
                <div style="padding: 15px;">
                    <label>Type Category :</label>
                    <select style="color:black;" id="exampleFormControlSelect1" name="Categoryy">
                        @foreach ($category as $data)
                            <option value="{{ $data->id }}">{{ $data->type }}</option>
                        @endforeach
                    </select>
                </div>
                <div style="padding: 15px;">
                    <label for=""> Change the Image</label>
                    <input style="color:black;" type="file" name="file">
                </div>
                <div style="padding: 15px;">
                    <input class="btn btn-success" type="submit" value="Add">
                </div>
            </form>
        </div>

        <!-- partial -->
        @include('admin.script')
</body>

</html>
