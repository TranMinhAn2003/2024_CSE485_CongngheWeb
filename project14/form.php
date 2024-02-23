<?php
$countries = array(
  "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
  "Antigua & Barbuda",
  "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
  "Bahamas", "Bahrain",
  "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
  "Bermuda", "Bhutan",
  "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
Islands", "Brunei",
  "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <div class="container">
    <form action="form.php" method="post">
      <div class="form-group">
        <div class="title-info">
          <h3>Basic Info</h3>
        </div>
        <div class="main-form">
          <div class="row">
            <div class="col-25">
              <label for="id">Employee ID</label>
            </div>
            <div class="col-75">
              <label for="id">9</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
              <label for="lname">Doe</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">First Name</label>
            </div>
            <div class="col-75">
              <input type="text" id="fname" name="firstname" placeholder="Your first name..">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="gender">Gender</label>
            </div>
            <div class="col-75">
              <input type="radio" name="male" value="Male">
              <label for="male">Male</label><br>
              <input type="radio" name="female" value="female">
              <label for="female">Female</label><br>
              <input type="radio" name="xxx" value="xxx">
              <label for="xxx">XXX</label><br>
              <input type="radio" name="zzz" value="zzz">
              <label for="zzz">ZZZ</label><br>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="title">Title</label>
            </div>
            <div class="col-75">
              <input type="text" id="title" name="title" placeholder="Title">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="suffix">Suffix</label>
            </div>
            <div class="col-75">
              <input type="text" id="suffix" name="suffix" placeholder="Suffix">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="BirthDate">BirthDate</label>
            </div>
            <div class="col-75">
              <input type="text" id="BirthDate" name="BirthDate" placeholder="BirthDate">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="HireDate">HireDate</label>
            </div>
            <div class="col-75">
              <input type="text" id="HireDate" name="HireDate" placeholder="HireDate">(?)
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="SSN">SSN # (if applicable)</label>
            </div>
            <div class="col-75">
              <input type="text" id="ssn" name="ssn" placeholder="ssn">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="reports">Reports To</label>
            </div>
            <div class="col-75">
              <select id="reports" name="reports">
                <option value="reports">Buchana</option>
                <option value="reports">Canada</option>
                <option value="reports">USA</option>
              </select>
            </div>
          </div>
        </div>
        <div class="title-info">
          <h3>Contact Info</h3>
        </div>
        <div class="main-form">
          <div class="row">
            <div class="col-25">
              <label for="id">Employee ID</label>
            </div>
            <div class="col-75">
              <label for="id">9</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
              <label for="lname">Doe</label>
            </div>
          </div>
          
          <div class="row">
            <div class="col-25">
              <label for="country">Country</label>
            </div>
            <div class="col-75">
              <select id="country" name="country">
                <?php
                foreach ($countries as $country) {
                  echo "<option value='$country'>$country</option>";
                }
                ?>
              </select>
            </div>
          </div>



          <div class="row">
            <div class="col-25">
              <label for="gender">Gender</label>
            </div>
            <div class="col-75">
              <input type="radio" name="male" value="Male">
              <label for="male">Male</label><br>
              <input type="radio" name="female" value="female">
              <label for="female">Female</label><br>
              <input type="radio" name="xxx" value="xxx">
              <label for="xxx">XXX</label><br>
              <input type="radio" name="zzz" value="zzz">
              <label for="zzz">ZZZ</label><br>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="title">Title</label>
            </div>
            <div class="col-75">
              <input type="text" id="title" name="title" placeholder="Title">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="suffix">Suffix</label>
            </div>
            <div class="col-75">
              <input type="text" id="suffix" name="suffix" placeholder="Suffix">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="BirthDate">BirthDate</label>
            </div>
            <div class="col-75">
              <input type="text" id="BirthDate" name="BirthDate" placeholder="BirthDate">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="HireDate">HireDate</label>
            </div>
            <div class="col-75">
              <input type="text" id="HireDate" name="HireDate" placeholder="HireDate">(?)
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="SSN">SSN # (if applicable)</label>
            </div>
            <div class="col-75">
              <input type="text" id="ssn" name="ssn" placeholder="ssn">
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="reports">Reports To</label>
            </div>
            <div class="col-75">
              <select id="reports" name="reports">
                <option value="reports">Buchana</option>
                <option value="reports">Canada</option>
                <option value="reports">USA</option>
              </select>
            </div>
          </div>
        </div>
        <div class="title-info">
          <h3>Optional Info</h3>
        </div>
        <div class="main-form">
          <div class="row">
            <div class="col-25">
              <label for="lname">Last Name</label>
            </div>
            <div class="col-75">
              <div id="editor">Anne has a BA degree in English from St.Lawrence College.
                She iss fluent in French and German.ZZZ</div>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="preferred">Preferred Shift</label>
            </div>
            <div class="col-75">
              <input type="checkbox" id="morning" name="morning" value="morning">
              <label for="morning">Morning</label><br>
              <input type="checkbox" id="afternoon" name="afternoon" value="afternoon">
              <label for="afternoon">Afternoon</label><br>
              <input type="checkbox" id="night" name="night" value="night">
              <label for="night">Night</label>
            </div>
          </div>
          <div class="row">
            <div class="col-25">
              <label for="human">Are you human?</label>
            </div>
            <div class="col-75">
              <h1>TIDAWO</h1>
              <div style="text-align: center;" >
                <label>Click to change</label>
              </div>
              <input type="text" id="human" name="human">
            </div>
          </div>
        </div>
      
        <div class="title-footer">
        </div>
        <div class="main-form">
          <div class="row footer">
            <button class="btn-footer-left" type="button"><</button>
            <button class="btn-footer-left" type="button">></button>
            
            <input class="btn-footer-right" type="submit" value="Cancel">
            <input class="btn-footer-right" type="submit" value="Submit">
            
          </div>
          <label>* required</label>
        </div>
      </div>
  </div>


  </div>




</body>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
    .create(document.querySelector('#editor'))
    .then(editor => {
      console.log(editor);
    })
    .catch(error => {
      console.error(error);
    });
</script>

</html>