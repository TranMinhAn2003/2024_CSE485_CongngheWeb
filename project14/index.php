<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form</title>

    <style>
        html,
        body {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            width: 70%;
            padding: 10px;
            border: 10px solid silver;
        }

        .form-section {
            display: flex;
            flex-direction: column;
            margin: 0 20px;
        }


        .input-container {
            display: flex;
            align-items: center;
        }

        label {
            min-width: 140px;
            font-weight: 300;
            font-weight: 300;
        }

        h3 {
            border-bottom: 2px solid silver;
        }

        button {
            color: slategray;
            margin: 10px;
        }

        select {
            height: 35px;
            width: fit-content;
        }

        .input-container .input-field {
            flex: 1;
            height: 25px;

        }

        .footer-section {
            display: flex;
            justify-content: space-between;
            border-top: 5px solid silver;
            margin-top: 20px;
        }


        .input-field {
            flex: fit-content;
        }


        .form-container {
            width: 100%;
        }


        .cancel-button {
            background-color: gray;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
            margin-left: 450px;
        }

        .reset-button {
            background-color: gray;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 50px;
        }

        @media only screen and (min-width: 46.25em) and (max-width: 63.9375em) {}
    </style>
</head>

<body>
<?php
$countries = array(
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
$genders = array(
    "Male", "Female", "XXX", "ZZZ"
);
$preferredshift = array(
    'Regular', 'Gravy Yard'
);
?>
<form class="form-container">
    <h3>Basic Info</h3>
    <div class="form-section">
        <div class="input-container">
            <label>Employee ID</label>
            <label>9</label>
        </div>
        <div class="input-container">
            <label>Last Name</label>
            <label>Dodsworth</label>
        </div>
        <div class="input-container">
            <label>First Name</label>
            <input class="input-field" type="text" value="Anne">
        </div>
        <div class="input-container">
            <label>Gender</label>
            <div>
                <?php
                foreach ($genders as $item) {
                    echo '<input type="radio" name="gender">' . $item . '<br>';
                }
                ?>
            </div>
        </div>
        <div class="input-container">
            <label>Title</label>
            <input class="input-field" type="text" value="Sales Representative">
        </div>
        <div class="input-container">
            <label>Suffix</label>
            <input class="input-field" type="text" value="Ms.">
        </div>
        <div class="input-container">
            <label>Birth Date</label>
            <input class="input-field" type="text" value="1969-07-02 00:00:00">
        </div>
        <div class="input-container">
            <label>Hire Date</label>
            <input class="input-field" type="text" value="1994-11-15 00:00:00">
        </div>
        <div class="input-container">
            <label>SSN #(if applicable)</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Country</label>
            <select class="input-field">
                <?php
                foreach ($countries as $country) {
                    echo '<option value="' . $country . '">' . $country . '</option>';
                }
                ?>
            </select>
        </div>
    </div>
    <h3>Contact Info</h3>
    <div class="form-section">
        <div class="input-container">
            <label>Email</label>
            <input class="input-field" type="email" placeholder="name@example.com">
        </div>

        <div class="input-container">
            <label>Address</label>
            <input class="input-field" type="text" value="7 Houndstooth Rd.">
        </div>
        <div class="input-container">
            <label>City</label>
            <input class="input-field" type="text" value="London">
        </div>
        <div class="input-container">
            <label>Region</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Postal Code</label>
            <input class="input-field" type="text" value="WG2 7LT">
        </div>
        <div class="input-container">
            <label>Country</label>
            <?php
            echo '<select>';
            foreach ($countries as $country) {
                echo '<option value="' . $country . '">' . $country . '</option>';
            }
            echo '</select>';
            ?>
        </div>
        <div class="input-container">
            <label>US Home Phone</label>
            <input class="input-field" type="text">
        </div>
        <div class="input-container">
            <label>Photo</label>
            <input class="input-field" type="text" value="EmpID9.bmp">
        </div>
    </div>
    <h3>Optinal Info</h3>
    <div class="form-section">
        <div class="input-container">
            <label>Notes</label>
            <textarea class="input-field"></textarea>
        </div>
        <div class="input-container">
            <label>Preferred Shift</label>
            <div>
                <?php
                foreach ($preferredshift as $value) {
                    echo '<input type="checkbox" value="' . $value . '">' . $value . '<br>';
                }
                ?>
            </div>
        </div>
        <div class="input-container">
            <label>Active?</label>
            <input type="checkbox" name="Active">
        </div>
        <div class="input-container">
            <label>Are you human?</label>
            <input type="text" name="Captcha">
        </div>
        <div class="footer-section">
            <button type="reset" class="cancel-button">Cancel</button>
            <button type="reset" class="reset-button">Reset</button>
        </div>
    </div>
</form>
</body>

</html>