<?php
require_once('../config.php');

if (session('access_token')) {
    $user = apiRequest($apiURLBase);
} else {
    header("location: ../auth.php");
    exit;
}

if (!in_array($user->id, $admin_discordids)) {
    header("location: ../index.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM features");
$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | MrFoxy</title>
    <meta name="description" content="Admin Panel">
    <meta name="keywords" content="keywords, goes, here">
    <meta name="theme-color" content="#0284CE">
    <meta name="author" content="polite#1745">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <div class="user-profile text-center">
                    <img src="https://cdn.discordapp.com/avatars/<?= $user->id ?>/<?= $user->avatar ?>.webp?size=128" id="profile-pic">
                    <h3 id="display-name"><?= $user->username ?></h3>
                    <p class="subtitle"><?= $user->id ?></p>
                </div>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">Features</a>
                </li>

                <li>
                    <a href="reviews.php">Reviews</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="sign-out">Sign Out</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn sign-out">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Back to Site</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="card border-0">
                <div class="card-header">
                    Features
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">text</th>
                                    <th scope="col">Button Text</th>
                                    <th scope="col" class="text-center">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($row = $stmt->fetch()) { ?>
                                    <tr>
                                        <th scope="row"><?= $row['title'] ?></th>
                                        <td><?= $row['img'] ?></td>
                                        <td><?= $row['text'] ?></td>
                                        <td><?= $row['btn-text'] ?></td>
                                        <td class="text-center"><a href="/admin/forms/dts.php?id=<?= $row['id'] ?>" class="btn-sm btn-primary">Delete</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card border-0 mt-5">
                <div class="card-header">
                    Add a Feature
                </div>
                <div class="card-body">
                    <form action="/admin/forms/ats.php" method="POST">
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="logo">Title</label>
                                    <input type="text" class="form-control" id="logo" name="title" placeholder="Welcome newcomers to your server!" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="img">Image</label>
                                    <input type="text" class="form-control" id="img" name="img" placeholder="https://link.to/site.png" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="text">Text</label>
                                    <input type="text" class="form-control" id="link" name="text" placeholder="Brief explanation on what the feature does" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="sort">Button Text</label>
                                    <input type="text" class="form-control" id="sort" name="btn-text" placeholder="Get Started" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>