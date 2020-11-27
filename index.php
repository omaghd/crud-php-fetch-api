<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
</head>
<body>
    <!-- Add new User Modal START -->

    <div class="modal fade" id="addNewUserModal" tabindex="-1" aria-labelledby="anuModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="anuModal">Add New User</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" id="add-user-form" class="p-2" novalidate>
                        <div class="row mb-3 gx-3">
                            <div class="col">
                                <input class="form-control" type="text" id="fname" name="fname" placeholder="Enter First Name" required>
                                <div class="invalid-feedback">First Name is required</div>
                            </div>
                            <div class="col">
                                <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter Last Name" required>
                                <div class="invalid-feedback">Last Name is required</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email" required>
                            <div class="invalid-feedback">Email is required</div>
                        </div>

                        
                        <div class="mb-3">
                            <input class="form-control" type="tel" id="phone" name="phone" placeholder="Enter Phone" required>
                            <div class="invalid-feedback">Phone is required</div>
                        </div>

                        <div class="mb-3 d-flex justify-content-center">
                            <input class="btn btn-primary" type="submit" id="add-user-btn" value="Add New User" required>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add new User Modal END -->

    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="text-primary">All users</h4>
                </div>
                <div>
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNewUserModal">Add New User</button>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-stripped table-bordered text-center text-nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>Omar</th>
                                <th>EL ATMANI</th>
                                <th>contact@omaghd.com</th>
                                <th>+212608704934</th>
                                <th>
                                    <a href="#" class="btn btn-info btn-sm rounded-pill">Modifier</a>
                                    <a href="#" class="btn btn-danger btn-sm rounded-pill">Delete</a>
                                </th>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</html>