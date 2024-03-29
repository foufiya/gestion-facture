<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit Client</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href={{ route('clients.index') }}>CRUDClients</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href={{ route('clients.create') }}>Add Client</a>    
                </div>
            </div>
    </nav>
    <div class="container h-100 mt-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h3>Update Client</h3>
                <form action="{{ route('clients.update', $client->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nomClient">nom Client</label>
                        <input type="text" class="form-control" id="nomClient" name="nomClient"
                            value="{{ $client->nomClient }}" required>
                    </div>
                    <div class="form-group">
                        <label for="num_tel">num_tel</label>
                        <input type="tel" class="form-control" id="num_tel" name="num_tel" rows="3" value="{{$client->num_tel }}"  required>
                    </div>
                    <div class="form-group">
                        <label for="address">address</label>
                        <input type="text" class="form-control" id="address" name="address" rows="3" value="{{$client->address }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update client</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>