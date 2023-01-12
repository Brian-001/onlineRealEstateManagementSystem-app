<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD one| Brian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel Crud 9 Example</h2>
                </div>
                <div class="pull-right mb-2">
                    <a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message}}</p>
            </div>
        @endif
        <table class="table table-boardered">
            <thead>
                <tr>
                    <th>S. No.</th>
                    <th>Company Name</th>
                    <th>Company Email</th>
                    <th>Company Address</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->id}}</td>
                    <td>{{ $company->name}}</td>
                    <td>{{ $company->email}}</td>
                    <td>{{ $company->address}}</td>
                    <td>
                        <form action="{{ route('companies.destroy', $company->id)}}" method="Post">
                            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> 
        
        {!! $companies->links() !!}
    </div>
</body>
</html>