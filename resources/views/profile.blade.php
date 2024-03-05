<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>ALS CONNECT Profile</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <style>
  body {
   margin-top: 20px;
   background-color: #f2f6fc;
   color: #69707a;
  }

  .img-account-profile {
   height: 10rem;
  }

  .rounded-circle {
   border-radius: 50% !important;
  }

  .card {
   box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
  }

  .card .card-header {
   font-weight: 500;
  }

  .card-header:first-child {
   border-radius: 0.35rem 0.35rem 0 0;
  }

  .card-header {
   padding: 1rem 1.35rem;
   margin-bottom: 0;
   background-color: rgba(33, 40, 50, 0.03);
   border-bottom: 1px solid rgba(33, 40, 50, 0.125);
  }

  .form-control,
  .dataTable-input {
   display: block;
   width: 100%;
   padding: 0.875rem 1.125rem;
   font-size: 0.875rem;
   font-weight: 400;
   line-height: 1;
   color: #69707a;
   background-color: #fff;
   background-clip: padding-box;
   border: 1px solid #c5ccd6;
   -webkit-appearance: none;
   -moz-appearance: none;
   appearance: none;
   border-radius: 0.35rem;
   transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  }

  .nav-borders .nav-link.active {
   color: #0061f2;
   border-bottom-color: #0061f2;
  }

  .nav-borders .nav-link {
   color: #69707a;
   border-bottom-width: 0.125rem;
   border-bottom-style: solid;
   border-bottom-color: transparent;
   padding-top: 0.5rem;
   padding-bottom: 0.5rem;
   padding-left: 0;
   padding-right: 0;
   margin-left: 1rem;
   margin-right: 1rem;
  }
 </style>
</head>

<body>
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <a class="navbar-brand" href="#">ALSCONNECT</a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     <li class="nav-item">
      <a class="nav-link" aria-current="page" href="#">Home</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="#">Survey</a>
     </li>
     <li class="nav-item">
      <a class="nav-link active" href="#">Profile</a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="#">ALS Official Website</a>
     </li>
    </ul>
    <div class="d-flex">
     <img src="user-profile-picture.jpg" alt="User profile picture" class="rounded-circle me-2" style="width: 40px; height: 40px;">
     <div class="dropdown">
      <a class="btn btn-sm btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
       Joe Gene
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
       <li><a class="dropdown-item" href="#">Edit Profile</a></li>
       <li><a class="dropdown-item" href="#">Logout</a></li>
      </ul>
     </div>
    </div>
   </div>
  </div>
 </nav>

 <div class="container-xl px-4 mt-4">
  <!-- Account page navigation-->
  <hr class="mt-0 mb-4">
  <div class="row">
   <div class="col-xl-4">
    <!-- Profile picture card-->
    <div class="card mb-4 mb-xl-0">
     <div class="card-header">Profile Picture</div>
     <div class="card-body text-center">
      <!-- Profile picture image-->
      <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
      <!-- Profile picture help block-->
      <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
      <!-- Profile picture upload button-->
      <button class="btn btn-primary" type="button">Upload new image</button>
     </div>
    </div>
   </div>
   <div class="col-xl-8">
    <!-- Account details card-->
    <div class="card mb-4">
     <div class="card-header">Account Details</div>
     <div class="card-body">
      <form>
       <!-- Form Group (username)-->
       <div class="mb-3">
        <label class="small mb-1" for="lrn">Learner's Reference Number</label>
        <input class="form-control" id="lrn" type="integer" placeholder="1365******44" value="1365******44" readonly>
       </div>
       <!-- Form Row-->
       <div class="row gx-3 mb-3">
        <!-- Form Group (first name)-->
        <div class="col-md-6">
         <label class="small mb-1" for="inputFirstName">First name</label>
         <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
        </div>
        <!-- Form Group (last name)-->
        <div class="col-md-6">
         <label class="small mb-1" for="inputLastName">Last name</label>
         <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
        </div>
       </div>
       <!-- Form Row        -->
       <div class="row gx-3 mb-3">
        <!-- Form Group (organization name)-->
        <div class="col-md-6">
         <label class="small mb-1" for="inputOrgName">Address: House No./Street/Brgy.</label>
         <input class="form-control" id="address" type="text" placeholder="Enter your new address" value="143 Macopa St., Fort Bonifacio">
        </div>
        <!-- Form Group (location)-->
        <div class="col-md-6">
         <label class="small mb-1" for="inputLocation">City</label>
         <input class="form-control" id="city" type="text" placeholder="Enter your new city" value="Taguig">
        </div>
       </div>
       <!-- Form Group (email address)-->
       <div class="mb-3">
        <label class="small mb-1" for="inputEmailAddress">Email address</label>
        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
       </div>
       <!-- Form Row-->
       <div class="row gx-3 mb-3">
        <!-- Form Group (phone number)-->
        <div class="col-md-6">
         <label class="small mb-1" for="inputPhone">Phone number</label>
         <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
        </div>
        <div class="mb-3">
         <label class="small mb-1" for="About">About</label>
         <input class="form-control" id="about" type="text-area" name="about" placeholder="I am...">
        </div>
        <div class="mb-3">
         <label class="small mb-1" for="skills">Skills</label>
         <input class="form-control" id="skills" type="text-area" name="skills" placeholder="I can...">
        </div>
        <div class="mb-1">
         <label class="small mb-1" for="education">Education</label>
         <input class="form-control" id="education" type="text-area" name="education" placeholder="I...">
        </div>
       </div>
       <!-- Save changes button-->
       <button class="btn btn-primary" type="button">Save changes</button>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>

</html>