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

    <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
        <div class="container" align="center">
              <h1 class="title">Product</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <table>
                <tr style="background-color: gray">
                    <td style="padding:20px ;">Title</td>
                    <td style="padding:20px ;">Description</td>
                    <td style="padding:20px ;">Category</td>
                     <td style="padding:20px ;">Quantity</td>
                    <td style="padding:20px ;">Price</td>
                    <td style="padding:20px ;">Image</td>
                    <td style="padding:20px ;">Actions</td>
                </tr>
                @foreach ($data as $product)
                    <tr align="center" style="background-color:black;  ">
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                         <td>{{ $product->category }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>${{ $product->price }}</td>
                        <td><img height="100" width="100" src="/productimage/{{ $product->image }}" alt=""></td>
                        <td>
                            <a class="btn btn-primary" href="/editproduct/{{ $product->id }}">Update</a>
                            <form action="/deleteproduct/{{ $product->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- partial -->
    @include('admin.script')
</body>

</html>
