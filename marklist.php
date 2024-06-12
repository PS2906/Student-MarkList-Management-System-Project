<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #E7B10A;
        }

        .form table {
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 25px;
            border: 2px solid black;
            box-shadow: 5px 5px 0 0;
        }

        .form table tr td input {
            border: 2px solid black;
            /* border-radius: 5px; */
            width: 250px;
            padding: 5px;
        }

        .form table tr td select {
            border: 2px solid black;
            /* border-radius: 5px; */
            width: 250px;
            padding: 5px;
        }

        .form table tr td {
            padding: 5px;
        }

        .form h1 {
            margin-left: 600px;
        }

        .form button {
            background-color: black;
            color: white;
            margin-left: 450px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .total {
            display: flex;
        }

        .total h4 {
            margin-left: 450px;
        }
    </style>
</head>

<body>
    <?php include("nav.html"); ?>
    <br><br>
    <div class="form">
        <h1>MARKSHEET FORM</h1>
        <form method="post" action="">
            <table>
                <tr>
                    <td> <label>Roll no.</label></td>
                    <td><input type="text" name="rollno" required></input></td>
                </tr>
                <tr>
                    <td> <label>Name</label></td>
                    <td><input type="text" name="sname" required></input></td>
                </tr>
                <tr>
                    <td><label for="dept">Choose Department:</label></td>
                    <td><select name="dept" required>
                            <option value="">Select department</option>
                            <option value="B.sc.cs">B.Sc.cs</option>
                            <option value="B.sc.maths">B.Sc.maths</option>
                            <option value="B.sc.physics">B.Sc.physics</option>
                            <option value="B.sc.chemistry">B.Sc.chemistry</option>
                            <option value="B.sc.computerscience">B.Sc.Computer Science</option>
                            <option value="BCA">BCA</option>
                        </select></td>
                </tr>
                <tr>
                    <td><label for="year">Choose Year:</label></td>
                    <td><select name="year" required>
                            <option value="">Select year</option>
                            <option value="first">First</option>
                            <option value="second">Second</option>
                            <option value="third">Third</option>
                        </select></td>

                </tr>
                <tr>
                    <td><label for="sem">Choose Semester:</label></td>
                    <td><select name="sem" required>
                            <option value="">Select sem</option>
                            <option value="First">First</option>
                            <option value="Second">Second</option>
                            <option value="Third">Third</option>
                            <option value="Fourth">Fourth</option>
                            <option value="Fifth">Fifth</option>
                            <option value="Sixth">Sixth</option>
                        </select></td>

                </tr>
                <tr>
                    <td><label>Enter how many subjects:</label></td>
                    <td><input type="number" name="sub" required></input></td>


                </tr>
                <tr>
                    <td><label>*Note:Enter upto 2 core marks and 1 allied mark or 1 elective mark*</label></td>
                </tr>
                <tr>

                    <td><label>Enter the mark in core1:</label></td>
                    <td><input type="number" name="cmark" required></input></td>
                </tr>
                <tr>
                    <td><label>Enter the mark in core2:</label></td>
                    <td><input type="number" name="cmark2" required></input></td>
                </tr>
                <tr>
                    <td><label>Enter the mark in allied:</label></td>
                    <td><input type="number" name="allied" required></input></td>
                </tr>
            </table><br><br><br>
            <button type="Submit" name="s1">Submit</button>
            <button type="reset" name="clear">Clear</button>
        </form>
    </div>

    <?php
    if (isset($_POST['s1'])) {
        $id = 0;
        $rollno = $_POST['rollno'];
        $name = $_POST['sname'];
        $dept = $_POST['dept'];
        $year = $_POST['year'];
        $sem = $_POST['sem'];
        $sub = $_POST['sub'];
        $coremark = $_POST['cmark'];
        $coremark2 = $_POST['cmark2'];
        $allied = $_POST['allied'];
        $total = $coremark + $coremark2 + $allied;
        $avg = $total / 3;

        echo $year;
        $connect = mysqli_connect("localhost", "root", "", "mark_list");
        if ($year == "first") {
            $q = "insert into first values ('$id','$rollno','$name','$dept','$year','$sem','$sub','$coremark','$coremark2','$allied','$total','$avg')";
            if ($connect->query($q)) {
                echo "<script>alert('Successfully Submitted')</script>";
            }
        } else if ($year == "second") {
            $q1 = "insert into second values ('$id','$rollno','$name','$dept','$year','$sem','$sub','$coremark','$coremark2','$allied','$total','$avg')";
            if ($connect->query($q1)) {
                echo "<script>alert('Successfully Submitted')</script>";
            }
        } else {
            $q2 = "insert into third values ('$id','$rollno','$name','$dept','$year','$sem','$sub','$coremark','$coremark2','$allied','$total','$avg')";
            if ($connect->query($q2)) {
                echo "<script>alert('Successfully Submitted')</script>";
            }
        }

    ?>
        <br><br>
        <div class="total">
            <h4>Total:<span>
                    <?php
                    echo $total;
                    ?>
                </span></h4>
            <h4>Average:<span>
                    <?php
                    echo $avg;
                    ?>
                </span></h4>
        <?php } ?>
        </div>
        <?php include("foot.html") ?>
</body>

</html>