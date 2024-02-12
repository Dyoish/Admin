<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="assets/css/dashboards.css" />
    <script src="{{ asset('assests/js/jquery.js') }}"></script>

    <title>Dashboard</title>
</head>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class="bx bxs-smile"></i>
            <span class="text">Cyber Cartel</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
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
            <li>
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
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb"></ul>
                </div>
            </div>

            <ul class="box-info">
                <li>
                    <i class="bx bxs-calendar-check"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>New Order</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-group"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Total Buyers</p>
                    </span>
                </li>
                <li>
                    <i class="bx bxs-dollar-circle"></i>
                    <span class="text">
                        <h3>Blank Data</h3>
                        <p>Total Sales</p>
                    </span>
                </li>
            </ul>

            <div class="table-data">
                <div class="statistics">
                    <h3>Sales Statistics</h3>
                    <div class="bar-container">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <div class="new-customers">
                    <div class="head">
                        <h3>New Customers</h3>
                    </div>
                    <ul class="new-customers-list" id="customerList"></ul>
                </div>
            </div>
        </main>
    </section>
</body>

</html>