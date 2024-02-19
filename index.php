<?php include 'headerp.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       body {
    background-color: #f8f9fa;
}

.carousel-container {
    position: relative;
    margin-top: 10px;
    margin-bottom:0px;
}

.carousel-heading {
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    color: blue;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    font-size: 3rem;
}

.carousel-item {
    height: 600px;
    padding: 10px;
}

.carousel-item img {
    /* object-fit: cover; */
    height:550px;
    width: 100%;
    filter: brightness(100%);
}
h4, h6 {
    color: red;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    /* background: rgba(0, 0, 0, 0.3); */
}

.carousel-item:hover .carousel-caption {
    opacity: 1;
}

/* Responsive styles */
@media (max-width: 768px) {
    .carousel-item {
        height: 400px; /* Adjust height for smaller screens */
    }

    .carousel-heading {
        font-size: 2rem; /* Adjust font size for smaller screens */
    }
    .carousel-item img {
    /* object-fit: cover; */
    height:280px;
    width: 100%;
    filter: brightness(100%);
}
}

@media (max-width: 576px) {
    .carousel-item {
        height: 300px; /* Further adjust height for even smaller screens */
    }

    .carousel-heading {
        font-size: 1.1rem; /* Further adjust font size for even smaller screens */
    }
}

   /* Another Section */
        .text-photo-section {
    display: flex;
    align-items: center;
    justify-content: center;
    
    padding: 30px;
    background-color: #f9f9f9; /* Or any color you prefer */
}

.text-photo-section .content {
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px; /* Adjust as needed */
    margin: 0 auto;
}
.text{
margin-right: 30px;
}
.text p{
  color:Brown;
  font-style:bold;
 font-size:20px;
text-align: center;
}
.text-photo-section .text, 
.text-photo-section .photo {
    flex: 1;
    padding: 15px;
}

.text-photo-section .photo img {
    width: 100%;
    height: auto;
    border-radius: 8px; /* Optional for rounded corners */
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .text-photo-section .content {
        flex-direction: column;
    }

    .text-photo-section .text, 
    .text-photo-section .photo {
        width: 100%;
    }
}
/* Animation for second section */


@keyframes backgroundFade {
    0%, 100% {
        background-position: 0% 0%;
    }
    50% {
        background-position: 0% 100%;
    }
}

.text {
    padding: 20px;
    border-radius: 5px;
    background: linear-gradient(to bottom, #f0e68c, #ffffff);
    background-size: 100% 200%;
    animation: backgroundFade 5s ease-in-out infinite;
}
/* pulse-section  */
.pulse-section1 {

    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    background-color: #ffffff;
    animation: colorPulse 8s ease-in-out infinite;
    color: #333;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.section-content1 {
    flex: 1;
    margin-left: 20px;
    
}

.section-image1 {
    flex: 1;
}

.section-image1 img {
    width: 100%;
    height: auto;
    border-end-start-radius:40%;
}

@media (max-width: 768px) {
    .pulse-section1 {
        flex-direction: column;
    }
    
    .section-image1 {
        margin-top: 20px;
    }

    .section-image1 img {
        width: 100%;
    }
}
@keyframes colorPulse {
    0%, 100% {
        background-color:lightgray;
    }
    50% {
        background-color: #add8e6; /* Light blue */
    }
}

.pulse-section1 {
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    background-color: #ffffff;
    animation: colorPulse 8s ease-in-out infinite;
    color: #333; /* Adjust text color as needed */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* subtle shadow for depth */
}

.pulse-section1 h2 {
    margin-top: 0;
}

.pulse-section1 p {
    line-height: 1.5; /* Improve readability */
}

/* Why section */
.why-school-section {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.section-content {
    position: relative;
    z-index: 2;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    margin-left: -50px; /* Adjust this value to control the overlap */
    flex: 1;
    animation: fadeIn 3s ease-in-out infinite;
}

.section-image {
    flex: 1;
    overflow: hidden;
    border-top-right-radius: 20%;
}

.section-image img {
    width: 100%;
    height: auto;
    transition: transform 0.6s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .why-school-section {
        flex-direction: column;
    }

    .section-content {
        margin-left: 0;
        margin-top: -50px; /* Adjust overlap for smaller screens */
    }

    .section-image img {
        width: 100%;
    }
}


    </style>
</head>
<body>
<div class="carousel-container">
    <h2 class="carousel-heading">Welcome to Our School</h2>
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="1.jpg" class="d-block w-100" alt="...">
            
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="3.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<!-- Another section -->
<section class="text-photo-section">
    <div class="content">
        <div class="text">
            <h2  >Determine Your Carrier With Us</h2>
            <p style="font-size:20px;">Our comprehensive curriculum, coupled with personalized guidance, ensures students explore various fields, discover their passions, and develop essential skills. By fostering an environment of encouragement and support, we empower students to make informed decisions about their career paths, shaping not just successful professionals.</p>
        
        </div>
        <div class="photo">
            <img src="https://media.istockphoto.com/id/1148232057/photo/teachers-applauding-for-student-at-awards-ceremony.jpg?s=1024x1024&w=is&k=20&c=uU4XtvSwk64E0ox9kJVwhSWedMRinTOSn15FSEtx4Dc=" alt="Descriptive Alt Text">
        </div>
    </div>
</section>
<!-- pulse-section -->
<div class="pulse-section1">
    <div class="section-image1">
        <img src="https://www.qsstechnosoft.com/wp-content/uploads/2022/08/Creating-Engaging-Learning-Experiences.jpg" alt="Engaging Learning">
    </div>
    <div class="section-content1">
        <h2>Engaging Learning Experiences</h2>
        <p>Join us for a journey of discovery and growth. We offer a variety of engaging learning experiences that cater to the diverse needs of our students.</p>
        <!-- Additional content can be added here -->
    </div>
</div>

<!-- Why Section -->
<div class="why-school-section">
    <div class="section-image">
        <img src="https://www.thewhitelibrary.com/wp-content/uploads/2020/07/Untitled-750x450.png" alt="School Environment">
    </div>
    <div class="section-content">
        <h2>Why Choose Our School?</h2>
        <p>Our school stands out with its commitment to nurturing individual talents, fostering a love for learning, and building a strong community spirit. We offer a rich curriculum, state-of-the-art facilities, and a supportive environment where every student can thrive.</p>
        <!-- Additional content can be added here -->
    </div>
</div>
<div class="last-section">

</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    var myCarousel = document.querySelector('#carouselExampleDark')
    var carousel = new bootstrap.Carousel(myCarousel, {
      interval:100,
      wrap: true
    });
</script>
</html>

<?php include 'footerp.php'?>