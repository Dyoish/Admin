<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" />
  <link rel="stylesheet" href="{{ asset ('assests/css/bootstrap.css') }}">
  <link rel="stylesheet" href="assets/css/analytics.css" />
  <script src="{{ asset('assests/js/jquery.js') }}"></script>

  <title>Analytics</title>
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
      <li class="active">
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
          <h1>Analytics</h1>
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
        <div class="order">
          <h3>Sales Statistics</h3>
          <div class="bar-container">
            <canvas id="barChart"></canvas>
          </div>
        </div>

        <div class="todo">
          <div class="head">
            <!-- MAIN -->
            <main>
              <div class="head-title">
                <div class="left">
                  <h1>Analytics</h1>
                  <ul class="breadcrumb"></ul>
                </div>
              </div>

              <ul class="box-info">
                <!-- Existing code for box-info -->

                <!-- Add a new item for the pie chart -->
                <li>
                  <canvas id="pieChart"></canvas>
                </li>
              </ul>

              <div class="table-data">
                <!-- Existing code for table-data -->

                <!-- The "To Do" container -->
                <div class="todo">
                  <div class="head"></div>
                  <!-- Your to-do list items go here -->
                  <ul class="todo-list"></ul>
                </div>
              </div>
            </main>
            <!-- MAIN -->
          </div>
          <!-- Remove the stray <ul> tag -->
        </div>
      </div>
    </main>
    <!-- MAIN -->
  </section>

  <script src="script.js"></script>

  <!-- <script>
    // Sample data for the bar charts
    const dailyData = {
      labels: ["Day 1", "Day 2", "Day 3", "Day 4", "Day 5"],
      datasets: [{
        label: "Daily Sales",
        backgroundColor: "rgba(255, 99, 132, 0.2)",
        borderColor: "rgba(255, 99, 132, 1)",
        borderWidth: 1,
        data: [5, 10, 8, 12, 15],
      },],
    };

    const monthlyData = {
      labels: ["January", "February", "March", "April", "May"],
      datasets: [{
        label: "Monthly Sales",
        backgroundColor: "rgba(54, 162, 235, 0.2)",
        borderColor: "rgba(54, 162, 235, 1)",
        borderWidth: 1,
        data: [10, 20, 15, 25, 30],
      },],
    };

    // Get the bar chart canvas element
    const barChartCanvas = document.getElementById("barChart");

    // Create the bar chart with daily data by default
    const barChart = new Chart(barChartCanvas, {
      type: "bar",
      data: dailyData,
      options: {
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
    });

    // Function to switch between daily and monthly data
    function switchChartData(isMonthly) {
      const newData = isMonthly ? monthlyData : dailyData;
      barChart.data = newData;
      barChart.update();
    }

    // Sample data for the pie chart
    const pieData = {
      labels: ["Blank", "Blank", "Blank", "Blank", "Blank"],
      datasets: [{
        data: [20, 15, 10, 30, 25],
        backgroundColor: [
          "#3c91e6",
          "#db504a",
          "#ffce26",
          "#fd7238",
          "#342e37",
        ],
      },],
    };

    // Get the pie chart canvas element
    const pieChartCanvas = document.getElementById("pieChart");

    // Create the pie chart
    const pieChart = new Chart(pieChartCanvas, {
      type: "pie",
      data: pieData,
    });
  </script> -->

</body>

</html>