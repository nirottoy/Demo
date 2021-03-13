<html>
    <head>
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="project.css">
    </head>
    <body>
        <div class="header-admin">
            <h1>Admin</h1>
        </div>
        <div class="admin-bar">
            <ul class="plain-bullet">
                <li><a href="AdminHome.php">Dashboard</a></li>
                <li><a href="Products.php">All Product</a></li>
                <li><a href="AddProducts.php">Add Product</a></li>
                <li><a href="Categories.php">All Category</a></li>
                <li><a href="AddCategory.php" class="active">Add Category</a></li>
                <li><a href="Login.php" class="right">Logout</a></li>
            </ul>
        </div>
        <div class="form-area">
            <form action="">
                <table>
                    <tr>
                        <td><span>Name:</span><br><input type="text" name="new_category" placeholder="Enter New Category"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>