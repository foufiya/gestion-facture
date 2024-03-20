<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winter Dashboard with CRUDPosts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5; /* Light gray background */
            color: #333; /* Dark gray text color */
            margin: 0;
            padding: 0;
        }

        .sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh; /* Full height of the viewport */
    width: 250px;
    background: linear-gradient(to bottom right, #ff9933, #ffcc00); /* Yellow to Orange gradient */
    padding: 20px;
    color: #fff; /* White text color */
    border-right: 2px solid #f0f0f0; /* Optional border */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional shadow */
}
        .sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    display: block;
    padding: 10px;
    border-radius: 5px;
    background-color: #fad505; /* Dark blue background */
    color: #fff; /* White text color */
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.sidebar ul li a:hover {
    background-color: #3e5b70; /* Darker blue on hover */
}


        .dashboard {
            margin-left: 250px; /* Sidebar width */
            padding: 20px;
        }

        .dashboard-header {
            background-color: #44677e; /* Dark blue header background */
            color: #fff; /* White text color */
            padding: 15px;
            margin-bottom: 20px;
        }

        .widget {
            background-color: #fff; /* White widget background */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Shadow effect */
            margin-bottom: 20px;
        }

        .widget-header {
            background-color: #3e5b70; /* Dark blue widget header background */
            color: #fff; /* White text color */
            padding: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .widget-content {
            margin-top: 10px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #3e5b70; /* Dark blue footer background */
            color: #fff; /* White text color */
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .search-bar {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Winter Dashboard</h2>
        <p>Welcome, User!</p>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Invoices</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Reports</a></li>
        </ul>
    </div>

    <!-- Dashboard Content -->
    <div class="dashboard">
        <div class="dashboard-header">
            <h1>Dashboard Overview</h1>
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn btn-primary">Search</button>
            </div>
        </div>

        <!-- CRUDPosts Content -->
        <div class="container mt-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                <div class="container-fluid">
                    <a class="navbar-brand h1" href={{ route('posts.index') }}>CRUDPosts</a>
                    <div class="justify-end ">
                        <div class="col ">
                            <a class="btn btn-sm btn-success" href={{ route('posts.create') }}>Add Post</a>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container mt-5">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">{{ $post->body }}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{ route('posts.edit', $post->id) }}"
                                                class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                        <div class="col-sm">
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                @csrf


                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="footer">
        &copy; 2024 Winter Dashboard. All rights reserved.
    </div>

</body>

</html>
