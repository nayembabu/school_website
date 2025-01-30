<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: #f7f8f9;
            font-family: Arial, sans-serif;
        }
        .profile-container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
        }
        .profile-card {
            background: rgb(90, 177, 188);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgb(255, 1, 179);
            padding: 20px;
        }
        .profile-sidebar {
            text-align: center;
            padding: 20px;
        }
        
        .profile-sidebar button {
            margin-top: 10px;
            width: 100%;
        }
        .form-label {
            font-weight: bold;
            color: #333;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .tabs {
            display: flex;
            justify-content: left;
            border-bottom: 2px solid #ddd;
            margin-bottom: 20px;
        }
        .tab {
            padding: 10px 20px;
            cursor: left;
            font-weight: bold;
            color: #007bff;
            border-bottom: 3px solid transparent;
        }
        .tab.active {
            border-bottom: 3px solid #007bff;
        }
        .profile-pic {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 4px solid #0532f8;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="profile-container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-4">
                <div class="profile-card text-center">
                    <img src="t.jpg" class="profile-pic" alt="Profile Photo">
                    <h4 class="mt-3">Kaisar</h4>
                    <p class="text-muted">@kaisar</p>
                    <button class="btn btn-warning">Upload New Photo</button>
                    <p class="text-muted mt-2">Max upload size: 2 MB</p>
                    <p class="text-muted mt-2">Member Since:28 january 2025</p>
                </div>
            </div>

            <!-- Main Profile Section -->
            <div class="col-md-8">
                <div class="profile-card">
                    <h3 class="mb-3">Edit Profile</h3>
                    
                    <!-- Tabs -->
                    <div class="tabs">
                        <div class="tab active">User Info</div>
                        
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-user"></i> Full Name</label>
                                <input type="text" class="form-control" value="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-birthday-cake"></i> Age</label>
                                <input type="number" class="form-control" value="25">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-envelope"></i> Email</label>
                                <input type="email" class="form-control" value="johndoe@mail.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-venus-mars"></i> Gender</label>
                                <select class="form-control">
                                    <option selected>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-book"></i> Subject</label>
                                <input type="text" class="form-control" value="Computer Science">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-phone"></i> Phone</label>
                                <input type="text" class="form-control" value="+880123456789">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-lock"></i> Password</label>
                                <input type="password" class="form-control" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><i class="fas fa-briefcase"></i> Designation</label>
                                <input type="text" class="form-control" value="Software Engineer">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label"><i class="fas fa-info-circle"></i> About</label>
                                <textarea class="form-control">Lorem ipsum dolor sit amet...</textarea>
                            </div>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="button" class="btn btn-custom"><i class="fas fa-save"></i> Update Info</button>
                            <button type="reset" class="btn btn-danger"><i class="fas fa-times"></i> Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>