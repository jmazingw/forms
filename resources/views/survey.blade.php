<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .stepper-wrapper {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .stepper-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
    }

    .stepper-item.completed .step-counter {
      background-color: #198754; /* Bootstrap's .bg-success */
      color: white;
      border: 2px solid #198754;
    }

    .stepper-item::before, .stepper-item::after {
      position: absolute;
      top: 21px; /* Centers the line with the middle of the step counter */
      height: 2px; /* Line thickness */
      border-top: 2px solid #198754; /* Line color */
      content: '';
      z-index: -1;
    }

    .stepper-item::before {
      left: -50%;
      right: 50%;
      border-top-style: dashed; /* Make the line dashed */
    }

    .stepper-item::after {
      left: 50%;
      right: -50%;
      border-top-style: dashed;
      border-top-color: #dce0e0; /* Color for the incomplete steps */
    }

    .stepper-item:first-child::before, .stepper-item:last-child::after {
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
      display: none; /* Hide all steps initially */
    }

    .card.active {
      display: block; /* Show active step */
    }
</style>
  <title>Survey</title>
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center mb-3">Survey Form</h1>
<!-- Stepper -->
<div class="stepper-wrapper">
  <div class="stepper-item completed">
    <div class="step-counter">1</div>
    <div class="step-name">Status after ALS Graduation</div>
  </div>
  <div class="stepper-item">
    <div class="step-counter">2</div>
    <div class="step-name">Current status</div>
  </div>
  <div class="stepper-item">
    <div class="step-counter">3</div>
    <div class="step-name">Availed Post-program</div>
  </div>
  <div class="stepper-item">
    <div class="step-counter">4</div>
    <div class="step-name">Done</div>
  </div>
</div>

<!-- Form Steps -->
<div id="step1" class="card mb-2">
    <div class="card-header bg-success text-white">
      Status after ALS Graduation
    </div>
    <div class="card-body">
      <div class="mb-3">
        <label for="studying" class="form-label">Studying</label>
        <select class="form-select" id="studying">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="termOfStudy" class="form-label">If studying, specify the term of study</label>
        <select class="form-select" id="termOfStudy">
            <option value="shs">Senior High School</option>
            <option value="vocational">Vocational</option>
            <option value="technical">Technical</option>
            <option value="tesda">TESDA</option>
            <option value="course">4 or 5 year course</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="tesdaCertified" class="form-label">If TESDA Certified</label>
        <input type="text" class="form-control" id="tesdaCertified" placeholder="Please specify, example Bread & Pastry NC II, Automotive NC I National Certification">
      </div>
      <div class="mb-3">
        <label for="reasonForNotContinuing" class="form-label">Reason/s for not continuing the schooling</label>
        <input type="text" class="form-control" id="reasonForNotContinuing" placeholder="school is far from home/ financial problem/family problem/Others, please specify">
      </div>
      <div class="mb-3">
        <label for="yearsToComplete" class="form-label">How many year/s did it take for you to complete the ALS program?</label>
        <select class="form-select" id="yearsToComplete">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <!-- Add more options as needed -->
        </select>
      </div>
    </div>
  </div>

  <!-- Step 2: Current status -->
  <div id="step2" class="card mb-4">
    <div class="card-header bg-success text-white">
    Current status
    </div>
    <div class="card-body">
      <div class="mb-5">
        <label for="working" class="form-label">Working</label>
        <select class="form-select" id="working">
          <option value="yes">Yes</option>
          <option value="no">No</option>
        </select>
      </div>
      <div class="mb-5">
        <label for="work" class="form-label">If working, specify the type of work:</label>
        <select class="form-select" id="work">
            <option value="selfemployed">Self-employed</option>
            <option value="employedl">Employed</option>
            <option value="permanent">Permanent</option>
            <option value="temporary">Temporary</option>
            <option value="contructual">Contractual</option>
        </select>
    </div>
      <div class="mb-5">
        <label for="natureOfWork" class="form-label">What career decision/exit did the learner make after completing the ALS program?</label>
        <select class="form-select" id="work">
            <option value="selfemployed">Self-employed</option>
            <option value="employedl">Employed</option>
            <option value="permanent">Permanent</option>
            <option value="temporary">Temporary</option>
            <option value="contructual">Contractual</option>
        </select>
      </div>
      <div class="mb-5">
        <label for="monthlyIncome" class="form-label">Monthly Income</label>
        <input type="text" class="form-control" id="reasonForNotContinuing" placeholder="">
      </div>
      <div class="mb-5">
        <label for="support" class="form-label">Is your monthly income adequate to support your family?</label>
        <select class="form-select" id="support">
          <option value="yes">yes</option>
          <option value="no">no</option>
        </select>
     <div class="mb-5">
            <label for="reasonfOfUnemployment" class="form-label">Reason/s for unemployment (if not employed)</label>
            <input type="text" class="form-control" id="natureOfWork" placeholder="">
          </div>
      </div>
    </div>
  </div>

<!-- Step 3: Availed Post-Program -->
<div id="step3" class="card mb-6">
    <div class="card-header bg-success text-white">
    Availed Post-Program
    </div>
    <div class="card-body">
      <div class="mb-7">
        <label for="postprogram" class="form-label">Availed Post-Program Supports</label>
        <select class="form-select" id="postprogram">
          <option value="ojt">On-the-job training</option>
          <option value="placement">Job placement</option>
          <option value="capital">Seed capital for livelihood</option>
          <option value="scholarship">Scholarship</option>
        </select>
      </div>
      <div class="mb-7">
        <label for="involve" class="form-label">Are you actively involved in something else like</label>
        <select class="form-select" id="involve">
            <option value="community">Community Service</option>
            <option value="church">Church Activities</option>
            <option value="noncivic">Non-Civic Organizations</option>                
        </select>
    </div>
    <div class="mb-7">
        <label for="exit" class="form-label">What career decision/exit did the learner make after completing the ALS program?</label>
        <select class="form-select" id="exit">
            <option value="entrepreneurship">Entrepreneurship</option>
            <option value="middleSkills">Middle Skills Development</option>
            <option value="employment">Employment</option>
            <option value="shs">SHS</option>                
            <option value="higherEduc">Higher Education</option>
        </select>
    </div>
      </div>
    </div>
  </div>

  <!-- Navigation Buttons -->
  <div class="d-flex justify-content-center mt-5">
    <button type="button" class="btn btn-secondary mx-4" onclick="previousStep()">Previous</button>
    <button type="button" class="btn btn-success mx-4" onclick="nextStep()">Next</button>
  </div>
</form>
  </div>
  <!-- Bootstrap Bundle with Popper -->
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
      if (currentStep < 4) {
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
  </script>
</body>
</html>