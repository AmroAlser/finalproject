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
              <h1 class="title">Message Customer</h1>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <table>
                <tr style="background-color: gray">
                    <td style="padding:20px ;">ID</td>
                    <td style="padding:20px ;">Full Name</td>
                    <td style="padding:20px ;">Email</td>
                     <td style="padding:20px ;">Subject</td>
                    <td style="padding:20px ;">Message</td>
                    <td style="padding:20px ;">Created</td>
                    <td style="padding:20px ;">Actions</td>
                </tr>
                @foreach ($data as $key => $contact)
                    <tr align="center" style="background-color:black;  ">
                        <td>{{ ++$key }}</td>
                        <td>{{ $contact->name }}</td>
                         <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->message }}</td>
                         <td>{{ $contact->created_at }}</td>
                        <td>
                            <form action="/deletecontact/{{ $contact->id }}" method="post">
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
