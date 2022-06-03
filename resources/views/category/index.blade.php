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
              <h1 class="title">Category</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <table>
                <tr style="background-color: gray">
                    <td style="padding:20px ;">ID</td>
                    <td style="padding:20px ;">Type</td>
                    <td style="padding:20px ;">Description</td>
                    <td style="padding:20px ;">Actions</td>
                </tr>
                @foreach ($data as $key => $category)
                    <tr align="center" style="background-color:black;  ">
                        <td>{{  ++$key }}</td>
                        <td>{{  $category->type }}</td>
                        <td>{{  $category->description }}</td>
                        <td>
                            <a class="btn btn-primary" href="/editcategory/{{ $category->id }}">Update</a>
                            <form action="/deletecategory/{{ $category->id }}" method="post">
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
