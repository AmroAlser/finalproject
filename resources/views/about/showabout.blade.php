<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
</head>
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
<body>

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->

    @include('admin.navbar')
    <!-- partial -->

    <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
        <div class="container" align="center">
              <h1 class="title">Social Media</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <table>
                <tr style="background-color: gray">
                    <td style="padding:20px ;">Id</td>
                    <td style="padding:20px ;">Social Media</td>
                     <td style="padding:20px ;">Emial</td>
                    <td style="padding:20px ;">Actions</td>
                </tr>
                @foreach ($data as  $product)
                    <tr align="center" style="background-color:black;  ">
                        <td>{{$product->id}}</td>
                        <td>{{ $product->name}}</td>
                         <td>{{ $product->email }}</td>
                        <td>
                            <a class="btn btn-primary" href="/editabout/{{ $product->id }}">Update</a>
                            <form action="/deleteabout/{{ $product->id }}" method="post">
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
