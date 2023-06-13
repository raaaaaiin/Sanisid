<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          crossorigin="anonymous"/>
    <style>
        html {
            overflow-y: hidden;
            overflow-x: hidden;
            height: 100vh;
            width: 100vw;
        }

        body {
            background-color: #F5F5F5;
            margin: 0;
            font-family: Arial, sans-serif;
            width: 100%;
            height: calc(100% - 50px);
        }

        .navbar {
            height: 50px;
            background-color: #1A6039;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 0 20px;
        }

        .navbar i {
            font-size: 24px;
            cursor: pointer;
            color: #FFF;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            background-color: white;
            position: fixed;
            top: 50px;
            right: -270px;
            transition: right 0.3s;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .sidebar.open {
            right: 0;
        }

        .sidebar-item {
            width: 100%;
            height: 50px;
            background-color: white;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            cursor: pointer;
            padding: 0 0;
            text-decoration: none;
            color: #333;
        }

        .sidebar-item i {
            margin-right: 20px;
            font-size: 24px;
        }

        .sidebar-item:hover {
            background-color: #E0E0E0;
        }

        .sidebar-item + .sidebar-item {
            border-top: 1px solid #E0E0E0;
        }

        iframe {
            width: calc(100vw - 5px) !important;
            height: 100vh;
            border: none;
        }
    </style>
</head>
<body>

<div class="navbar">
    <i class="fas fa-bars" onclick="toggleSidebar()"></i>
</div>
<div class="sidebar" id="sidebar" style="
    padding: 10px;
">
    <a href="dashboard.php" class="sidebar-item"  target="content">
        <i class="fas fa-home"></i>
        Events
    </a>
    <a href="..\Clients\AppointmentCreation\indexController.php" class="sidebar-item"  target="content">
        <i class="fas fa-user"></i>
        Add Appointment
    </a>
    <a href="appointments.php" class="sidebar-item"  target="content">
        <i class="fas fa-user"></i>
        Appointments
    </a>
    <a href="history.php" class="sidebar-item"  target="content">
        <i class="fas fa-cog"></i>
        Certificates
    </a>
    <a href="accountLogout.php" class="sidebar-item" >
        <i class="fas fa-sign-out-alt"></i>
        Log out
    </a>
</div>
<div>
    <iframe name="content" src="dashboard.php"></iframe>
</div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("open");
    }
</script>
</body>
</html>
