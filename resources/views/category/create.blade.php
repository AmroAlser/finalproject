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
            <h1 class="title">Add Category</h1>
            {{-- @if (session() - has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
            @endif --}}
            <form action="{{ url('/categorystore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="">Type</label>
                    <input style="color:black;" type="text" name="name" placeholder="name" required>

                </div>
                <div style="padding: 15px;">
                    <label for="">Description</label>
                    <input style="color:black;" type="text" name="description" placeholder="Description" required>

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
