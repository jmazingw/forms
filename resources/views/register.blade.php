<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .stepper-wrapper {
            display: flex;
            justify-content: space-evenly;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .stepper-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .stepper-item.completed .step-counter {
            background-color: #198754;
            /* Bootstrap's .bg-success */
            color: white;
            border: 2px solid #198754;
        }

        .stepper-item::before,
        .stepper-item::after {
            position: absolute;
            top: 21px;
            /* Centers the line with the middle of the step counter */
            height: 2px;
            /* Line thickness */
            border-top: 2px solid #198754;
            /* Line color */
            content: '';
            z-index: -1;
        }

        .stepper-item::before {
            left: -50%;
            right: 50%;
            border-top-style: dashed;
            /* Make the line dashed */
        }

        .stepper-item::after {
            left: 50%;
            right: -50%;
            border-top-style: dashed;
            border-top-color: #dce0e0;
            /* Color for the incomplete steps */
        }

        .stepper-item:first-child::before,
        .stepper-item:last-child::after {
            content: none;
        }

        .step-counter {
            width: 32px;
            height: 32px;
            border: 2px solid #198754;
            border-radius: 50%;
            text-align: center;
            font-size: 14px;
            line-height: 28px;
            background-color: #fff;
            margin-bottom: 6px;
        }

        .card {
            display: none;
            /* Hide all steps initially */
        }

        .card.active {
            display: block;
            /* Show active step */
        }
    </style>
</head>

<body>
    <div class="container mb-2">
        <div class="stepper-wrapper">
            <div class="stepper-item completed">
                <div class="step-counter">1</div>
                <div class="step-name">Personal Information</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">2</div>
                <div class="step-name">Education Background</div>
            </div>
        </div>
        <div class="container">
            <form>
                @csrf
                <div id="step1" class="card bg-success text-white rounded row g-3">
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
                        <input type="date" class="form-control" id="dob" data-date-end-date="0d">
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
                    <div class="col-md-6 mb-5">
                        <label for="province" class="form-label">Province</label>
                        <select id="province" class="form-select" required>
                            <option selected> </option>
                            @foreach ($provinces as $province)
                            <option value="{{ $province['name'] }}">{{ $province['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div id="step2" class="card row g-3 bg-success text-white rounded">
                    <h2>Education Background</h2>
                    <div class="form-group mb-3">
                        <label for="alsProgramCompleted">ALS Program Completed:</label>
                        <select class="form-select" id="alsProgramCompleted">
                            <option value="">-- Select --</option>
                            <option value="basicLiteracy">Basic Literacy</option>
                            <option value="accreditationEquivalency">Accreditation and Equivalency</option>
                            <option value="elementary">Elementary</option>
                            <option value="juniorHighSchool">Junior High School</option>
                            <option value="felp">Functional Education and Literacy Program</option>
                            <option value="ipep">Indigenous People's Education Program</option>
                            <option value="afbp">Academic-Focus Bridging Program</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="communityLearningCenter">Community Learning Center</label>
                        <input type="text" class="form-control" id="communityLearningCenter" placeholder="Enter the name of community learning center">
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="region" class="col-sm-2 col-form-label">Region</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="region" placeholder="Enter region">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="division" class="col-sm-2 col-form-label">Division</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="division" placeholder="Enter division">
                        </div>
                    </div>
                    <div class="form-group mb-3 row">
                        <label for="year_graduated" class="col-sm-2 col-form-label">Year Graduated:</label>
                        <div class="col-sm-10">
                            <input type="year" class="form-control" id="year_graduated">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="d-flex justify-content-around mt-3">
            <button type="button" class="btn btn-secondary" onclick="previousStep()">Previous</button>
            <button id="Register_Button" type="button" class="btn btn-primary" disabled>Register</button>
            <button type="button" class="btn btn-success" onclick="nextStep()">Next</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentStep = 1;

        function updateStepper(stepNumber) {
            // Update the stepper status
            const stepperItems = document.querySelectorAll('.stepper-item');
            stepperItems.forEach((item, index) => {
                if (index < stepNumber) {
                    item.classList.add('completed');
                } else {
                    item.classList.remove('completed');
                }
            });
        }

        function showStep(stepNumber) {
            // Hide all steps
            const allSteps = document.querySelectorAll('.card');
            allSteps.forEach(step => step.classList.remove('active'));

            // Show the current step
            const currentStepEl = document.getElementById(`step${stepNumber}`);
            if (currentStepEl) {
                currentStepEl.classList.add('active');
            }

            // Update stepper items
            updateStepper(stepNumber);
        }

        function nextStep() {
            if (currentStep < 2) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function previousStep() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        }

        // Initialize the first step
        showStep(currentStep);
        currentStep.addEventListener('change', function() {
            if (currentStep.value == 2) {
                document.getElementById('Register_Button').disabled = false;
            } else {
                document.getElementById('Register_Button').disabled = true;
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-aJWaS/8CQazlpDXvMBcj/gK8p0zUqpKcIB8NeNe+yRLtTnO/F8DD+4lreJ8sT3+h" crossorigin="anonymous"></script>
</body>

</html>