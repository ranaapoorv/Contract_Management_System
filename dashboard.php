<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASHBOARD</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />

  <link rel="stylesheet" href="style2.css?v=<?php echo time(); ?>">

  
</head>
<body>
  <div class="container">
    <aside>
          <div class="top">
            <div class="logo"> 
              <img src="https://cracku.in/latest-govt-jobs/wp-content/uploads/2020/02/aai-logo.png" alt="">
              <h2>Airports Authority Of<br>
                India</h2>
            </div>
            <div class="close" id ="close-btn">
              <span class = "material-symbols-outlined">close</span>
            </div>
          </div>
          <div class="sidebar">
            <a href="#">
              <span class="material-symbols-sharp">
                grid_view
                </span>
                <h3>Dashboard</h3>
            </a>
            <a href="#" class="active">
              <span class="material-symbols-sharp">
                details
                </span>
                <h3>Details</h3>
            </a>
            <a href="#">
              <span class="material-symbols-sharp">
                grid_view
                </span>
                <h3>About Us</h3>
            </a>
            <a href="logout.php">
              <span class="material-symbols-sharp">
                logout
                </span>
                <h3>Logout</h3>
            </a>
          </div>
    </aside>

    <!----------------------------END OF ASIDE-------------------------------->
   <main>
    <?php include 'tempdb.php'; ?>
    <h1>Dashboard</h1>
    <div class="insights">
      <div class="orders">
        <span class="material-symbols-outlined">analytics</span>
        <div class="middle">
          <div class="left">
            <h3>Total Contracts</h3>
            <h1><?php echo $totalorders; ?></h1>
          </div>
        </div>
      </div>
      <!------------------------END OF TOTAL ORDERS-------------------->
      <div class="revenue" id="revenueBox">
        <span class="material-symbols-outlined">bar_chart</span>
        <div class="middle">
          <div class="left">
            <h3>Revenue Expenditure Contracts</h3>
            <h1><?php echo $totalRevenueExpenditureContracts; ?></h1>
          </div>
        </div>
      </div>
      <!-----------------------END OF REVENUE EXPENDITURE-------------->
      <div class="capital">
        <span class="material-symbols-outlined">bar_chart</span>
        <div class="middle">
          <div class="left">
            <h3>Capital Expenditure Contracts</h3>
            <h1><?php echo $totalCapitalExpenditureContracts; ?></h1>
          </div>
        </div>
      </div>
    </div>

    <div class="recent-orders">
      <h2>Recent Orders</h2>
      <table>
        <thead>
          <tr>
            <th>Contract ID</th>
            <th>Contract name</th>
            <th>Contract Status</th>
            <th>Contract Type</th>
            <th>Contract Start Date</th>
            <th id="contractEndDateButton">Contract End Date</th>
            <th>Description</th>

          </tr>
        </thead>
        <tbody>
        <tbody>
    <?php include 'dbdash.php'; ?>
</tbody>

      </table>
      <!-- <a href="#">Show All</a> -->
    </div>
   </main>
   <!----------------------------------------END OF MAIN///SIDE START------------------------->
  <div class="right">
    <div class="top">
      <button type="menu" id="menu-btn">
      <span class="material-symbols-outlined">
        menu
        </span>
      </button>
      <div class="theme-toggler">
        <span class="material-symbols-outlined active">light_mode</span>
        <span class="material-symbols-outlined">dark_mode</span>
      </div>
      <div class=""user">
        <a href="addcontract.html" class="btn">Add New Contract</a>
      </div>
      <!-- <div class=""user">
        <a href="logout.php" class="btn">Logout</a>
      </div> -->
      <div class="profile">
        <div class="info">
          <p>Hey, <b>User</b></p>
          <small class="text-muted">Admin</small>
        </div>
        <div class="profile-photo">
          <!-- <img src="user_logo.jpg" alt=""> -->
        </div>
      </div>
    </div>
    <!------------------------------------------END OF TOP----------------------------------->
  </div>
  </div>
  
  <script src="index2.js"></script>
  <script>
        // This script disables the back button after logout
        window.history.pushState(null, null, document.URL);
        window.addEventListener('popstate', function () {
            window.history.pushState(null, null, document.URL);
        });
    </script>

</body>
</html>