<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pizzaria Admin Panel</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
    }

    header {
      background: #D32F2F;
      color: white;
      padding: 20px;
      text-align: center;
    }

    nav {
      width: 200px;
      background: #B71C1C;
      color: white;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 80px;
    }

    nav a {
      display: block;
      color: white;
      padding: 15px;
      text-decoration: none;
    }

    nav a:hover {
      background: #E53935;
    }

    .main {
      margin-left: 200px;
      padding: 20px;
    }

    .card {
      background: white;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    h2 {
      color: #D32F2F;
    }

    .stats {
      display: flex;
      gap: 20px;
    }

    .stat {
      background: #FFE0B2;
      padding: 15px;
      border-radius: 5px;
      flex: 1;
      text-align: center;
    }

  </style>
</head>
<body>

<header>
  <h1>🍕 Pizzaria Admin Panel</h1>
</header>

<nav>
  <a href="#">Dashboard</a>
  <a href="#">Orders</a>
  <a href="#">Menu Items</a>
  <a href="#">Customers</a>
  <a href="#">Reports</a>
  <a href="#">Settings</a>
  <a href="#">Logout</a>
</nav>

<div class="main">
  <div class="card">
    <h2>Welcome, Admin!</h2>
    <p>Manage your pizzaria from this dashboard.</p>
  </div>

  <div class="card">
    <h2>Quick Stats</h2>
    <div class="stats">
      <div class="stat">
        <h3>45</h3>
        <p>Orders Today</p>
      </div>
      <div class="stat">
        <h3>12</h3>
        <p>Pending Deliveries</p>
      </div>
      <div class="stat">
        <h3>38</h3>
        <p>Menu Items</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
