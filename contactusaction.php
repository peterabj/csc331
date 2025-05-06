<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
    
    // Server-side validation
    $errors = [];
    
    if (strlen($name) < 3) {
        $errors[] = "Name must be at least 3 characters.";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
    
    if (strlen($message) < 10) {
        $errors[] = "Message must be at least 10 characters.";
    }
    
    
}
else {
    // If the form wasn't submitted properly, redirect back to the contact form
    header("Location: contactus.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Thank You - Contact Form Submission</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .container {
      flex: 1;
      max-width: 600px;
      margin: 40px auto;
      padding: 20px;
      border-radius: 8px;
      background-color: #f5f5f5;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .thank-you-message {
      background-color: #e8f5e9;
      padding: 15px;
      border-radius: 4px;
      margin-bottom: 20px;
      text-align: center;
    }

    .submitted-info {
      background-color: white;
      padding: 15px;
      border-radius: 4px;
      margin-bottom: 20px;
    }

    .field {
      margin-bottom: 15px;
    }

    .field-label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .back-button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #3e4a61;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }

    .back-button:hover {
      background-color: #2f374c;
    }

    footer {
      height: 80px;
      background: #3e4a61;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .footer-content {
      text-align: center;
    }

    .footer-links {
      margin-top: 10px;
    }

    .footer-links a {
      color: white;
      margin: 0 10px;
      font-size: 1.2em;
    }
  </style>
</head>
<body>

  <header class="header">
    <div class="logo">
      <img src="Useklogo.png" alt="Logo" width="60" height="60">
    </div>
    <nav class="nav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="CVcsc331.html">CV</a></li>
        <li><a href="sched.html">Schedule</a></li>
        <li><a href="sudoku.html">Sudoku Quiz</a></li>
        <li><a href="contactus.html"  id="active">Contact Us</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <h1>Thank You!</h1>
    
    <div class="thank-you-message">
      <h2>Your message has been submitted successfully!</h2>
      <p>We appreciate your feedback and will get back to you as soon as possible.</p>
    </div>
    
    <div class="submitted-info">
      <h3>Submitted Information:</h3>
      
      <div class="field">
        <span class="field-label">Name:</span>
        <span><?php echo $name; ?></span>
      </div>
      
      <div class="field">
        <span class="field-label">Email:</span>
        <span><?php echo $email; ?></span>
      </div>
      
      <div class="field">
        <span class="field-label">Message:</span>
        <p><?php echo nl2br($message); ?></p>
      </div>
    </div>
    
    <a href="contactus.html" class="back-button">Back to Contact Form</a>
  </div>

  <footer>
    <div class="footer-content">
      <p>&copy; 2025 Peter Asaad Abou Jawdeh. All rights reserved.</p>
      <div class="footer-links">
        <a href="mailto:peterabj28@gmail.com"><i class="fa-solid fa-envelope"></i></a> 
        <a href="https://github.com/yourusername" target="_blank"><i class="fab fa-github"></i></a> 
        <a href="https://linkedin.com/in/yourusername" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
  </footer>

</body>
</html>