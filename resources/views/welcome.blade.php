<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nico course registration</title>
  <link rel="stylesheet" href="{{'css/style.css'}}">
  <link rel="stylesheet" href="{{'css/sweetalert.css'}}">
  <script src="{{'script/jquery-1.12.1.min.js'}}"></script>
  <script src="{{'script/sweetalert.min.js'}}"></script>
  <script src="{{'script/register.js'}}"></script>
</head>
<body>

  <div class="page">
    <div class="page-left">
      <div class="title">
        <p>Welcome to Nico Course</p>
      </div>
      <div class="logo">
        <div class="logo-img"></div>
      </div>
    </div>

    <div class="page-right">
      <div class="panel-form">

        <form action="#">
          <div class="form-component">
            <label for="fullname">Fullname </label>
            <input type="text" id="fullname">
          </div>

          <div class="form-component">
            <label for="email">email </label>
            <input type="email" id="email">
          </div>

          <div class="form-component">
            <label for="password">Password </label>
            <input type="password" id="password">
          </div>

          <div class="form-component">
            <label for="conPassword">Confirm Password </label>
            <input type="password" id="conPassword">
          </div>

          <div class="form-component-rad">
            <label for="gender">Male </label>
            <input type="radio" id="genderM" name="gender" value="male">
            <label for="conPassword">Female </label>
            <input type="radio" id="genderF" name="gender" value="female">
          </div>

          <div class="grade-dob">
            <div class="form-component-grade">
              <input type="radio" name="radio" id="grade1" value="middle" class="radio" checked/>
              <label for="grade1">Middle school</label>
            </div>

            <div class="form-component-grade">
              <input type="radio" name="radio" id="grade2" value="high" class="radio"/>
              <label for="grade2">High school</label>
            </div>

            <div class="form-component-grade">
              <input type="radio" name="radio" id="grade3" value="college" class="radio"/>
              <label for="grade3">College</label>
            </div>

            <div class="form-component-dob">
              <label for="dob">Date of birth </label>
              <input type="date" id="dob">
            </div>
          </div>


          <div class="form-component">
            <input type="submit" name="register" id="register" value="Register">
          </div>
        </form>

      </div>
    </div>
  </div>

</body>
</html>