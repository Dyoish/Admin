<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="assets/css/productmanagement.css" />
    <script src="{{ asset('assests/js/jquery.js') }}"></script>

    <title>Product Management</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class="bx bxs-smile"></i>
            <span class="text">Cyber Cartel</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="{{ url('/dashboards') }}">
                    <i class="bx bxs-dashboard"></i>
                    <span class="text">Dashboards</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/analytics') }}">
                    <i class="bx bxs-doughnut-chart"></i>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/customers') }}">
                    <i class="bx bxs-group"></i>
                    <span class="text">Customers</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/agegroups') }}">
                    <i class="bx bxs-group"></i>
                    <span class="text">Age Group</span>
                </a>
            </li>
            <li class="active">
                <a href="{{ url('/productmanagements') }}">
                    <i class="bx bxs-group"></i>
                    <span class="text">Product Management</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">

        <!-- MAIN -->
    <main>
            <div class="content">
                <div class="head-title">
                    <div class="left">
                    <h1>Product Management</h1>
                    <ul class="breadcrumb"></ul>
                    </div>
                </div>
            <div>
                <a class="btn btn-success" a href="{{url('productmanagements/create')}}"class="btn"> Add product</a>
            </div>
        </div>
        
                    <ul class="box-info">
                        <li>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Photo</th>
                                    <th>Price</th>
                                    <th>Detail</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                <tr>
                                    <td>{{$item -> id }}</td>
                                    <td>{{$item -> name}}</td>
                                    <td>
                                    <img src="{{ asset($item->photo) }}" style="width: 70px; height:70px;" alt="Img" />
                                    </td>
                                    <td>₱ {{$item -> price}}</td>
                                    <td>{{$item -> details}}</td>
                                    <td>{{$item -> category}}</td>
                                    <td>
                                        <a href="{{url('productmanagements/'.$item -> id.'/edit')}}" class="edit-button">Edit</a>
                                    <a 
                                        href="{{url('productmanagements/'.$item -> id.'/delete')}}" 
                                        class ="delete-button"
                                        onclick ="return confirm('Are you sure?')"
                                    >
                                        Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        </li>                        
                    </ul>
    </main>

    </section>
</body>

</html>