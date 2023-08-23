<!DOCTYPE html>
<html>

<head>
    <title>Laravel Pagination Tutorial - Online Web Tutor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h3 style="text-align: center;">Laravel Pagination </h3>
        <div class="panel panel-primary">
            <div class="panel-heading">Laravel Pagination </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>#Name</th>
                            <th>#Email</th>
                            <th>#Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($data) && $data->count())
                            @foreach ($data as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>
                                        <button class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10">There is no data.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
<!-- Pagination here -->
                {!! $data->links() !!}
            </div>
        </div>

    </div>
</body>

</html>