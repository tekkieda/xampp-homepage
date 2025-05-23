<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XAMPP Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="bg-light">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">🐘 XAMPP ENV</a>
            <div id="navcol-2" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">PhpMyAdmin</a></li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4"><i class="fas fa-folder"></i> Project Listing</h2>
        <div class="list-group">
            <?php
            $currentDir = __DIR__;
            $excludedDirs = ['dashboard', 'img', 'webalizer','xampp']; // Specify directories to exclude
            
            $directories = array_filter(glob("$currentDir/*"), function ($dir) use ($excludedDirs) {
                return is_dir($dir) && !in_array(basename($dir), $excludedDirs);
            });

            if (!empty($directories)) {
                foreach ($directories as $dir) {
                    $dirname = basename($dir);
                    echo "<a href='$dirname' class='list-group-item list-group-item-action'>
                            <i class='fas fa-folder-open'></i> $dirname
                          </a>";
                }
            } else {
                echo "<div class='alert alert-warning text-center'>No directories found.</div>";
            }
            ?>
        </div>
    </div>

</body>
</html>
