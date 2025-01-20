
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color:rgb(3, 172, 251);
    }

    .about-header {
      background: linear-gradient(rgb(3, 20, 252), rgb(3, 172, 251)), url('school-banner.jpg');
      background-size: cover;
      background-position: center;
      height: 20vh;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .about-header h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .card:hover {
      transform: scale(1.05);
      transition: all 0.3s ease-in-out;
    }

    .highlight {
      color: #007bff;
      font-weight: bold;
    }
.t{
  width: 190vh;
  height: 98vh;
}
  
.cse{
  width: 100px;
  height: 100px;
  border-radius: 50%
}
.s{
  width: 190vh;
  height: 100vh;
}




 
  </style>
</head>
<body>

<!-- Header Section -->
<section class="about-header">
  <div>
    <h1>About Our School</h1>
    <p class="lead">Excellence in Education Since 1990</p>
  </div>
</section>

<!-- Overview Section -->
<section class="container my-5">
<div class="text-center mb-4">
  <h2>Who We Are</h2>
  <div class="slider-container">
    <div >
      <img src="campus.jpg" alt="photo" class="s">
     
     
    </div>
  </div>
  <p>We strive to build a bright future for every student with a focus on excellence.</p>
</div>



<div class="row g-4">
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h3 class="highlight">Our Mission</h3>
          <img src="national.jpg" alt="photo" class="team img">
          <p>To provide a well-rounded education to empower students for global challenges.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h3 class="highlight">Our Vision</h3>
          <img src="national.jpg" alt="photo" class="team img">
          <p>To create leaders who bring positive change to the community and the world.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h3 class="highlight">Our Values</h3>
          <img src="national.jpg" alt="photo" class="team img">
          <p>Integrity, Excellence, Respect, and Innovation in every step.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Achievements Section -->
<section class="bg-light py-5">
  <div class="container text-center">
    <h2>Achievements & Recognition</h2>
    <p>We take pride in our milestones and accomplishments.</p>
    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">National Award</h5>
            <img src="national.jpg" alt="photo" class="team">
            <p class="card-text">Awarded as the best educational institution in 2022.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Sports Excellence</h5>
            <img src="national.jpg" alt="photo" class="m">
            <p class="card-text">Winners of inter-school tournaments for 5 consecutive years.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Academic Success</h5>
            <img src="national.jpg" alt="photo" class="team">
            <p class="card-text">98% of our students achieve A+ in board exams.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





 
<!-- Team Section with Carousel -->
<section class="container my-5">
  <div class="text-center mb-4">
    <h2>Meet Our Faculty</h2>
    <p>Our dedicated team of educators ensures the best learning experience.</p>
  </div>
  
  <div id="teacherCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row g-4">
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 1" class="cse" data-bs-toggle="modal" data-bs-target="#teacher1Modal">
            <h5 class="mt-3">Mr. John Smith</h5>
            <p>Principal</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 2" class="cse" data-bs-toggle="modal" data-bs-target="#teacher2Modal">
            <h5 class="mt-3">Ms. Jane Doe</h5>
            <p>Senior Teacher</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 3" class="cse" data-bs-toggle="modal" data-bs-target="#teacher3Modal">
            <h5 class="mt-3">Mr. Mark Lee</h5>
            <p>Science Teacher</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 4" class="cse" data-bs-toggle="modal" data-bs-target="#teacher4Modal">
            <h5 class="mt-3">Ms. Sarah Khan</h5>
            <p>Math Teacher</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="row g-4">
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 5" class="cse" data-bs-toggle="modal" data-bs-target="#teacher5Modal">
            <h5 class="mt-3">Ms. Olivia Brown</h5>
            <p>English Teacher</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 6" class="cse" data-bs-toggle="modal" data-bs-target="#teacher6Modal">
            <h5 class="mt-3">Mr. Ethan Clark</h5>
            <p>History Teacher</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 7" class="cse" data-bs-toggle="modal" data-bs-target="#teacher7Modal">
            <h5 class="mt-3">Ms. Emma Green</h5>
            <p>Art Teacher</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
          <div class="col-md-3 text-center">
            <img src="t.jpg" alt="Teacher 8" class="cse" data-bs-toggle="modal" data-bs-target="#teacher8Modal">
            <h5 class="mt-3">Mr. Liam White</h5>
            <p>Physical Education</p>
            <button class="btn btn-primary">View Profile</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#teacherCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#teacherCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<!-- Modal Template -->
<div class="modal fade" id="teacher1Modal" tabindex="-1" aria-labelledby="teacher1ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="teacher1ModalLabel">Mr. John Smith</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="t.jpg" alt="Teacher 1" class="img-fluid mb-3">
        <p>Principal with over 20 years of experience in education.</p>
      </div>
    </div>
  </div>
</div>

<!-- Repeat similar modals for teacher2, teacher3, etc. -->




<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Dynamic Effect with jQuery -->
<script>
  $(document).ready(function () {
    $(".card").hover(function () {
      $(this).addClass("shadow-lg");
    }, function () {
      $(this).removeClass("shadow-lg");
    });
  });
</script>

</body>
</html>