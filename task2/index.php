<?php

/**
 * 1- get data from form
 * 2- make validation for form
 * 3- pass data to another page and display it
 */

$name = $email = $time = $class = $gender = $select = $terms = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $time = $_POST["time"];
  $class = $_POST["class"];
  $gender = $_POST["gender"];
  $select = $_POST["select"];
  $terms = $_POST["terms"];

  $errors = [];
  validtionReq($name) ? $errors[] = validtionReq($name) : null;
  validtionReq($email) ? $errors[] = validtionReq($email) : null;
  validtionTerm($terms) ? $errors[] = validtionTerm($terms) : null;

  if (count($errors) == 0) {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['time'] = $time;
    $_SESSION['class'] = $class;
    $_SESSION['gender'] = $gender;
    header('Location: /getData.php');
    exit();
  }
}

function validtionReq($data)
{
  if (!$data) {
    return "* Required field";
  }
}

function validtionTerm($data)
{
  if (!$data) {
    return "* You must agree to terms";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <style>
    .form {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      border: 1px solid #ddd;
      padding: 10px;
    }

    .form div {
      display: flex;
      margin: 10px;
      align-items: center;
    }

    .error {
      border: 1px solid #ddd;
      padding: 10px;
    }

    input,
    textarea,
    select,
    button {
      padding: 10px;
      border: 1px solid #ddd;
      margin: 5px 10px;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="error">
    <?php
    foreach ($errors as $error) {
      echo "<div style='color: red'>$error</div>";
    }
    ?>
  </div>
  <div class="form">
    <form method="POST" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <h1>Absolute Class Registration</h1>
      <div>
        <label for="name">Name:</label>
        <input id="name" name="name" type="text">
        <span style="color: red">*</span>
      </div>
      <div>
        <label for="email">E-mail:</label>
        <input id="email" name="email" type="email">
        <span style="color: red">*</span>
      </div>
      <div>
        <label for="time">Time:</label>
        <input id="time" name="time" type="time">
      </div>

      <div>
        <label for="class">Class:</label>
        <textarea id="class" name="class"></textarea>
      </div>
      <div>
        <label for="gender">Gender:</label>
        <input id="gender-female" name="gender" type="radio" value="Female">
        <span>Female</span>
        <input id="gender-male" name="gender" type="radio" value="Male">
        <span>Male</span>
        <span style="color: red">*</span>
      </div>
      <div>
        <label for="select">Select:</label>
        <select id="select" name="select">
          <option value="Android">Android</option>
          <option value="Java">Java</option>
          <option value="C#">C#</option>
          <option value="Database">Database</option>
        </select>
      </div>
      <div>
        <label for="terms">Agree</label>
        <input id="terms" name="terms" type="checkbox" value="true">
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>

</html>