<!DOCTYPE html>
<html>
<head>
    <title>CV Generator</title>

</head>
<body>
<script>
    var nextId = 0;

    function addInput() {
        nextId++;
        var inputDiv = document.createElement("div");
        inputDiv.setAttribute("id", "num" + nextId);
        inputDiv.innerHTML =
            "<input type='text' name='languages[]' /> " +
                '<select name="level[]" id="level">' +
                '<option value="Beginner">Beginner</option>' +
                '<option value="Programmer">Programmer</option>' +
                '<option value="Ninja">Ninja</option>' +
                '</select>' +
                '<br/>';
        document.getElementById('parent').appendChild(inputDiv);
    }
    function removeElement(id) {
        var getChild = document.getElementById("parent").lastChild;
        document.getElementById("parent").removeChild(getChild);
    }
</script>


<form action="" method="get">
    <fieldset>
        <legend>Personal Information</legend>
        <input type="text" name="fname" placeholder="First Name"><br>
        <input type="text" name="lname" placeholder="Last Name"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="phone" placeholder="Phone Number"><br>
        <label for="female">Female</label>
        <input type="radio" name="gender"><br>
        <label for="male">Male</label>
        <input type="radio" name="gender"><br>
        <div>Birth Date</div>
        <input type="date" name="b-day" >
        <div>Nationality</div>
        <select name="nation">
            <option value="Bulgarian">Bulgarian</option>
            <option value="Indian">Indian</option>
        </select>
    </fieldset>
    <fieldset>
        <legend>Last Work Possiton</legend>
        <label for="companyName">Company Name</label>
        <input type="text" name="companyName"><br>

        <label for="from">From</label>
        <input type="date" name="fromDate"><br>

        <label for="to">To</label>
        <input type="date" name="toDate">
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        <div>Programing Languages</div>


        <div id="parent">
            <!-- We shall add inputs here with JavaScript -->
        </div>
        <script>addInput();</script>
        <a href="javascript:addInput()">[Add]</a>
        <a href="javascript:removeElement()">[Remove]</a>
    </fieldset>
    <fieldset>
        <legend>Other Skills</legend>
        <div>Languages</div>
        <input type="text" name="languages">
        <select>
            <option>-Comprehension-</option>
        </select>
        <select>
            <option>-Reading-</option>
        </select>
        <select>
            <option>-Writing-</option>
        </select>
        <br>
        <input type="button" value="Remove Languages">
        <input type="button" value="Add Languages">
        <br>
        <div>Driver's License</div>
        <label for="b">B</label>
        <input type="checkbox" >
        <label for="a">A</label>
        <input type="checkbox">
        <label for="c">C</label>
        <input type="checkbox">
    </fieldset>
    <input type="submit" value="Generate CV" name="generate">
</form>
</body>
</html>
<?php
error_reporting(0);
if(isset($_GET['fname'])){ ?>
    <table border="1">
        <tr>
            <td colspan="2">Personal Information </td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $_GET['fname']; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td> <?php echo $_GET['lname']; ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <?php echo $_GET['email']; ?> </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td> <?php echo $_GET['phone']; ?> </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $_GET['gender']; ?></td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td> <?php echo $_GET['b-day']; ?> </td>
        </tr>
        <tr>
            <td>Nationality</td>
            <td> <?php echo $_GET['nation']; ?> </td>
        </tr>
    </table>
    <br>
    <table border="1">
        <tr>
            <td colspan="2">Last Work Positon</td>
        </tr>
        <tr>
            <td>Company name</td>
            <td><?php echo $_GET['companyName'] ; ?></td>
        </tr>
        <tr>
            <td>From</td>
            <td><?php echo $_GET['fromDate'] ; ?></td>
        </tr>
        <tr>
            <td>To</td>
            <td><?php echo $_GET['toDate'] ; ?></td>
        </tr>
    </table>
    <table border="1">
        <tr>
            <td colspan="2">Computer Skills</td>
        </tr>
        <tr>
            <td>Programming Languages</td>
            <td>
                <?php
                $computerSkills='<table border="1"><tr><td>Languages</td><td>Skills Level</td></tr>' ;
                for($i = 0; $i < count($_GET['level']) ;$i++) {
                    $computerSkills .= '<tr>';
                    $computerSkills .= '<td>' . $$_GET['language'][$i] . '</td>';
                    $computerSkills .= '<td>' . $_GET['level'][$i] . '</td>';
                    $computerSkills .= '</tr>';
                }
                $computerSkills .= '</table>'

                ?>
            </td>
        </tr>
    </table>
    <br>

<?php } ?>



