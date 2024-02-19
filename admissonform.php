<?php include"headerp.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
  <style>
   /* body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
  
} */

.container {
    position: middle;
    max-width:600px;
    margin-top:90px;
    padding: 20px;
    background-color:lightyellow;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position:relative;
    margin-bottom:30px;

}

h2 {
    text-align: center;
    color: #333;
}

.form-group {
    margin-bottom: 15px;
  
}
.form-group:hover{
    background-color: lightcyan;
}
.form-group label {
    display:flex    ;
    margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="date"],
.form-group  {
    width: 80%;
    padding:10px;
    margin-left:50px;
    border: 1px solid #ddd;
    border-radius: 5px;
    overflow: hidden;
    color:Blue;
    font-size: 20px bold;
   text-align: 20px;
}

.form-group input[type="submit"] {
    background-color: #0056b3;
    color: #fff;
    padding: 10px 20px;
    padding-left: 0px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.form-group input[type="submit"]:hover {
    background-color: #004494;
}

@media (max-width: 600px) {
    .container {
        width: 100%;
        padding: 15px;
    }
}


  </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js">
 $(document).ready(function() {
    $('#admissionForm').submit(function(e) {
        e.preventDefault();

        var isValid = true;

        // Validate student name
        var studentName = $('#studentName').val().trim();
        if (studentName === '') {
            alert('Please enter the student name');
            isValid = false;
        }

        // Validate email
        var email = $('#email').val().trim();
        if (email === '' || !validateEmail(email)) {
            alert('Please enter a valid email address');
            isValid = false;
        }

        // Validate previous school
        var prevSchool = $('#prevSchool').val().trim();
        if (prevSchool === '') {
            alert('Please enter the previous school');
            isValid = false;
        }

        // Validate grade
        var grade = $('#grade').val().trim();
        if (grade === '' || !/^[0-9A-Za-z]+$/.test(grade)) {
            alert('Please enter a valid grade');
            isValid = false;
        }

        // Validate contact
        var contact = $('#contact').val().trim();
        if (contact === '' || !/^\+?\d{10,15}$/.test(contact)) {
            alert('Please enter a valid contact number');
            isValid = false;
        }

        // Validate gender
        var gender = $('#gender').val();
        if (gender === '') {
            alert('Please select a gender');
            isValid = false;
        }

        // Validate father's name
        var fatherName = $('#fatherName').val().trim();
        if (fatherName === '') {
            alert('Please enter the father\'s name');
            isValid = false;
        }

        // Validate mother's name
        var motherName = $('#motherName').val().trim();
        if (motherName === '') {
            alert('Please enter the mother\'s name');
            isValid = false;
        }

        // Validate guardian's name
        var guardianName = $('#guardianName').val().trim();
        if (guardianName === '') {
            alert('Please enter the guardian\'s name');
            isValid = false;
        }

        // Submit the form if all validations are passed
        if (isValid) {
            this.submit();
        }
    });

    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email.toLowerCase());
    }
});

    </script>
</head>
<body>
    <center>
    <marquee behavior="" direction="left"><h5>"Where Dreams Take Flight: Your Journey Begins with Admission!"</h5></marquee>
    <h3 style="color:green;">Admission Enquiry</h3>
    <div class="container">
        
        <center><h2>Admission Form</h2></center>
    <form id="admissionForm" action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="studentName">Student Name:</label>
            <input type="text" id="studentName" name="studentName" required placeholder="Enter the student Name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Enter the Email">
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required placeholder="Enter the Date of birth">
            
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text"id="address" name="address" required placeholder="Enter the Address">
        </div>
        <div class="form-group">
            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>
           Gender:
             <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
             </select>
        </div>
        <!-- ... [previous code] ... -->

<div class="form-group">
    <label for="prevSchool">Previous School:</label>
    <input type="text" id="prevSchool" name="prevSchool" required placeholder="Enter previous school name">
</div>
<div class="form-group">
    <label for="grade">Previous Class:</label>
    <input type="text" id="grade" name="grade" required placeholder="Previous class">
</div>
<div class="form-group">
    <label for="grade">Applying Grade:</label>
    <input type="text" id="grade" name="grade" required placeholder="Admission class">
</div>
<div class="form-group">
    <label for="contact">Contact:</label>
    <input type="text" id="contact" name="contact" required  placeholder="Mobile Number">
</div>
<div class="form-group">
    <label for="fatherName">Father's Name:</label>
    <input type="text" id="fatherName" name="fatherName" required  placeholder="Father's Name">
</div>
<div class="form-group">
    <label for="motherName">Mother's Name:</label>
    <input type="text" id="motherName" name="motherName" required placeholder="Mother's Name">
</div>
<div class="form-group">
    <label for="guardianName">Guardian Name:</label>
    <input type="text" id="guardianName" name="guardianName" required placeholder="GuardianName's Name">
</div>

<!-- ... [remaining code] ... -->

       <center> <button type="submit">Apply</button>  <button type="reset" style="margin-left:10px;">Reset</button></center>
    </form>
    </div>
    </center>

    <script src="script.js"></script>
  
</body>
</html>
<?php include"footerp.php"?>
<!-- 
    CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    address TEXT NOT NULL,
    prev_school VARCHAR(255) NOT NULL,
    grade VARCHAR(50) NOT NULL,
    contact VARCHAR(50) NOT NULL,
    gender ENUM('male', 'female', 'other') NOT NULL,
    father_name VARCHAR(255) NOT NULL,
    mother_name VARCHAR(255) NOT NULL,
    guardian_name VARCHAR(255) NOT NULL,
    photo_path VARCHAR(255) NOT NULL
); -->
<!-- <?php
$host = 'localhost'; // or your host
$db   = 'your_database';
$user = 'your_username';
$pass = 'your_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $studentName = filter_var($_POST['studentName'], FILTER_SANITIZE_STRING);
    // ... [sanitize and validate other fields] ...

    // Handle file upload
  // File upload handling
  if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
    $allowed = ['jpg' => 'image/jpeg', 'jpeg' => 'image/jpeg', 'png' => 'image/png', 'gif' => 'image/gif'];
    $filename = $_FILES['photo']['name'];
    $filetype = $_FILES['photo']['type'];
    $filesize = $_FILES['photo']['size'];

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!array_key_exists($ext, $allowed)) {
        die("Error: Please select a valid file format.");
    }

    // Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if ($filesize > $maxsize) {
        die("Error: File size is larger than the allowed limit.");
    }

    // Verify MYME type of the file
    if (in_array($filetype, $allowed)) {
        // Check whether file exists before uploading it
        if (file_exists("upload/" . $filename)) {
            echo $filename . " is already exists.";
        } else {
            move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
            echo "Your file was uploaded successfully.";
        } 
    } else {
        echo "Error: There was a problem uploading your file. Please try again."; 
    }
} else {
    echo "Error: " . $_FILES["photo"]["error"];
}

    // Insert data into database
    $stmt = $pdo->prepare("INSERT INTO students (student_name, email, dob, address, prev_school, grade, contact, gender, father_name, mother_name, guardian_name, photo_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$studentName, $email, $dob, $address, $prevSchool, $grade, $contact, $gender, $fatherName, $motherName, $guardianName, $photoPath]);

    echo "Form submitted successfully!";
}
?> -->
