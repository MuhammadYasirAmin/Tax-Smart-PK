<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Leads</title>
</head>

<body style="padding: 25px;">
    <p align='center'><a href="{{ route('Admin.Logout') }}" class='btn btn-primary mb-5'>Logout</a></p>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Customer Email</th>
                <th scope="col">Customer Phone</th>
                <th scope="col">Customer CNIC</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($NTN_User_Data as $info)
                @php
                    if ($info->UserRemarks == 'admin') {
                        continue;
                    }
                @endphp
                <tr>
                    <td>{{ $info->id }}</td>
                    <td>{{ $info->name }}</td>
                    <td><a href="mailto:{{ $info->email }}">{{ $info->email }}</a></td>
                    <td>{{ $info->UserPhone }}</td>
                    <td>{{ $info->UserCnic }}</td>
                    <td><a href="/NTN-Submitted-Form/{{ $info->id }}/View-PDF" target="_blank"> Detail Info </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="{{ asset('assets_auth/js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('Success!'))
        <script>
            toastr.success("{!! Session::get('Success!') !!}");
        </script>
    @endif
    @if (Session::has('Error!'))
        <script>
            toastr.error("{!! Session::get('Error!') !!}");
        </script>
    @endif

</body>

</html>
