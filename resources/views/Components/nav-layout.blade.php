<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Page with Sidebar</title>
    <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        /* Container */
        .container {
            display: flex;
            flex-direction: row-reverse;  /* Sidebar on the right */
            height: 100vh;
            background-color: #f5f5f5;
        }

        /* Sidebar Styles */
        .sidebar {
            background-color: #333;
            width: 250px;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            text-align: right; /* Align text to the right */
        }

        .sidebar .logo {
            font-size: 24px;
            margin-bottom: 40px;
            text-align: right; /* Align the logo to the right */
        }

        .nav-links {
            list-style-type: none;
            padding: 0;
        }

        .nav-links li {
            margin: 20px 0;
            text-align: right; /* Align the list items to the right */
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            transition: color 0.3s ease;
            display: block;
        }

        .nav-links a:hover {
            color: #f39c12;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            padding: 40px;
            background-color: #fff;
            overflow-y: auto;
        }

        /* Content Section */
        .content-section {
            display: none;
        }

        #home.content-section {
            display: block;
        }

        /* Modern Table */
        .modern-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .modern-table thead {
            background-color: #3498db;
            color: white;
        }

        .modern-table th,
        .modern-table td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .modern-table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
            }

            .main-content {
                padding: 20px;
            }
        }

    </style>
</head>
<body>
<div class="container">
    <!-- Sidebar Navigation -->
    <nav class="sidebar">
        <h2 class="logo">Logo</h2>
        <ul class="nav-links">
            <li><a href="/addmodel" >أضافة موديل</a></li>
            <li><a href="#" >عمال</a></li>
            <li><a href="/addemployee" >أضافة عامل</a></li>
            <li><a href="#" >سجلات</a></li>
        </ul>
    </nav>
    <!-- Main Content -->
    <main class="main-content">
        <!-- Home Page (default) -->

        {{$slot}}

    </main>

</div>

<script >


</script>
</body>
</html>
