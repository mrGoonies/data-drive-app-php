<?php
$titlePage = "Index";
require_once("includes/header.php");
?>

<main>
  <h1>Registration for IT Conference</h1>

  <form method="get" action="success.php">
    <div class="mb-3">
      <label for="firstname" class="form-label">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
      <label for="lastname" class="form-label">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
      <label for="dob" class="form-label">Date Of Birth</label>
      <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="mb-3">
      <label for="specialty" class="form-label">Area of expertise</label>
      <select class="form-select" aria-label="Default select example" name="specialty">
        <option selected>Open this select your expertise</option>
        <option value="dba">DBA</option>
        <option value="software developer">Software Developer</option>
        <option value="web administrator">Web Administrator</option>
        <option value="student">Student</option>
        <option value="other">Others</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Phone Number</label>
      <input type="number" class="form-control" id="phone" name="phone">
      <div id="phoneHelp" class="form-text">We'll never share your phone with anyone else.</div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</main>

<?php require_once("includes/footer.php") ?>