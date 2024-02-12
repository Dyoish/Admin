<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    
    <title>Products</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .dashboard {
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 190px;
            background-color: #000000;
            color: #fff;
            padding: 20px;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-radius: 9px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ffffff;
            padding: 10px;
        }

        th {
            background-color: #f2f2f200;
            text-align: center;
        }

        .menu-item {
            padding: 10px;
            margin-bottom: 7px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
        }

        .menu-item a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .menu-item:hover {
            background-color: #555;
        }

        .main-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 1500px;
            margin: 0 auto;
        }

        .box {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .edit-button {
            background-color: #a2d823;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            color: inherit;
            text-decoration: none
        }

        .delete-button {
            background-color: #ff6347;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            color: inherit;
            text-decoration: none
        }
    </style>
</head>
<body>
<div class="dashboard">
    <div class="sidebar">
        <div class="header">Cyber Cartel</div>
        <div class="menu-item">
            <a href="{{ url('/dashboards') }}">Dashboard</a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/customers') }}">Customers</a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/agegroups') }}">Age Group  </a>
        </div>
        <div class="menu-item">
            <a href="{{ url('/productmanagements') }}">Product Management</a>
        </div>
    </div>
    <div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
        </div>
    </div>
<!-- boostrap product model -->
<x-app-layout>
<div class="content">
        <div class="container">
            <div class="box">
            <div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" a href="{{url('productmanagements/create')}}"class="btn btn-primary float-end"> Add product</a>
            </div>
        </div>
    </div>
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
                    </div>
        </div>
    </div>
    <x-slot name="scripts">
    </x-slot>

</x-app-layout>
<!-- end bootstrap model -->

</body>
</html>
