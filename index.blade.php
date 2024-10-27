
<?php
// Database connection details
$servername = "localhost"; // or your server address
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "resume_details"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Query to select data from the users table
$sql = "SELECT 
fullname, 
address,
email,
phone,
skill1,
skill2, 
skill3,
skill4,
skill5,  
exp1,
exp2, 
exp3,
exp4 FROM details;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


$fullname = ''; 
$address = '';
$email = '';
$phone = '';
$skill1 = '';
$skill2 = ''; 
$skill3 = '';
$skill4 = '';
$skill5 = '';  
$exp1 = '';
$exp2 = ''; 
$exp3 = '';
$exp4 = '';

// Check if there are results
if ($resultCheck > 0) {
// Loop through each row and append to the output string
    while($row = mysqli_fetch_assoc($result)) {
        $fullname = $row['fullname']; 
        $address =  $row['address'];
        $email =  $row['email'];
        $phone =  $row['phone'];
        $skill1 =  $row['skill1'];
        $skill2 =  $row['skill2']; 
        $skill3 =  $row['skill3'];
        $skill4 =  $row['skill4'];
        $skill5 =  $row['skill5'];  
        $exp1 =  $row['exp1'];
        $exp2 =  $row['exp2']; 
        $exp3 =  $row['exp3'];
        $exp4 =  $row['exp4'];
    }
} else {
    $fullname = "No results found.";
}

// close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Althea Karyl Lengga - Resume</title>
  <link rel="stylesheet" href="{{url('frontend/resume.css')}}">
</head>
<body>
  <header>
    <h1><?php echo $fullname; ?></h1>
    <p><?php echo $address; ?> | <?php echo $phone; ?> | <?php echo $email; ?> | </p>
  </header>

  <section id="summary">
    <h2>Summary</h2>
    <p>I am a skilled UI/UX designer with a strong ability to create visually appealing
    and user-friendly digital interfaces. I excel in generating innovative design concepts
    that align with client requirements and objectives. </p>
  </section>

  <section id="skills">
    <h2>Skills</h2>
    <ul>
      <li><span><?php echo $skill1; ?>:</span> Creating intuitive and engaging user experiences.</li>
      <li><span><?php echo $skill2; ?>:</span> Designing various digital assets such as websites, mobile apps, and branding materials.</li>
      <li><span><?php echo $skill3; ?>:</span> Developing creative solutions based on client needs and industry trends.</li>
      <li><span><?php echo $skill4; ?>:</span> Creating visually compelling assets such as logos, branding materials, posters, flyers, and social media graphics.</li>
      <li><span><?php echo $skill5; ?>:</span>  Creating cohesive branding elements, including logos, stationery, and marketing materials.</li>
    </ul>
  </section>

  <section id="experience">
    <h2>Experience</h2>
    <div class="job">
      <h3>Freelance</h3>
      <!-- <p>Company Name | City, State | Dates</p> -->
      <ul>
        <li><?php echo $exp1; ?></li>
        <li><?php echo $exp2; ?></li>
        <li><?php echo $exp3; ?></li>
        <li><?php echo $exp4; ?></li>
      </ul>
    </div>
    </section>

  <section id="education">
    <h2>Education</h2>
    <div class="degree">
      <h3>Bachelor of System Information Technology</h3>
      <p>Baliwag Polytechnic College | Baliwag Bulacan | 2021- Present</p>
      <h3>Relevent coursework</h3>
      <ul>
        <li><span>Programming and Development:</span>  You can use your programming skills to implement designs, build interactive prototypes, or create custom web applications.</li>
        <li><span>Design and User Experience: </span> Your design skills can be applied to create visually appealing and user-friendly interfaces.</li>
        <li><span>Project Management and Business Analysis:</span> You can manage projects effectively, understand client requirements, and deliver projects on time and within budget.</li>
        <li><span>Networking and Cybersecurity:</span> Knowledge of networking and cybersecurity can be valuable for building and maintaining websites or digital products.</li>
      </ul>
    </div>
    </section>

  <section id="projects">
    <h2>Projects</h2>
    <div class="project">
      <h3>Project Name</h3>
      <p>Description of project</p>
      <ul>
        <li>POS for 5.5 cafe baliwag.</li>
        <li>LN Laboratory inventory and managment sytem.</li>
        <li>Event Reservation management for Loris Event.</li>
        <li>National University social media digital templates</li>
        <li>Felize glow business logos</li>
        <li>Digital Products</li>
        <li>Marketing collateral design</li>
      </ul>
    </div>
    </section>
</body>
</html>