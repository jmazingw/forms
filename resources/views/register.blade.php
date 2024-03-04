<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form class="row g-3">
            @csrf
            <h2>Registration Form</h2>
            <div class="col-12">
                <label for="LRN" class="form-label">Learner's Reference Number</label>
                <input type="integer" class="form-control" id="LRN" placeholder="Your LRN" required>
            </div>
            <div class="col-md-6">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" placeholder="Last Name" required>
            </div>
            <div class="col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" placeholder="First Name" required>
            </div>
            <div class="col-md-6">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" placeholder="Middle Name" required>
            </div>
            <div class="col-md-6">
                <label for="suffix" class="form-label">Suffix</label>
                <select id="suffix" class="form-select">
                    <option selected></option>
                    <option value="Jr.">Jr.</option>
                    <option value="Sr.">Sr.</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="sex" class="form-label">Gender</label>
                <select id="sex" class="form-select" required>
                    <option> </option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="dob"  data-date-end-date="0d">
            </div>
            <div class="col-md-6">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="integer" class="form-control" id="contact" placeholder="09999999999" required>
            </div>
            <div class="col-12">
            <h4>Permanent Address</h4>
                <label for="address" class="form-label">Street Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="Your City" required>
            </div>
            <div class="col-md-6">
                <label for="region" class="form-label">Region</label>
                <select id="region" class="form-select" required>
                    <option selected>Choose your Region</option>
                </select>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-">Next</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-aJWaS/8CQazlpDXvMBcj/gK8p0zUqpKcIB8NeNe+yRLtTnO/F8DD+4lreJ8sT3+h" crossorigin="anonymous"></script>
</body>
</html>