<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        h1 {
            margin-left: 600px;
        }

        .detail {
            margin-left: 580px;
        }

        .detail label{
            margin-left: 30px;
            margin-right: 30px;
        }

        .detail select {
            border: 2px solid black;
            padding: 7px;
        }

        .detail button {
            background-color: black;
            color: white;
            padding: 10px;
            border: 2px solid black;
            margin-left: 120px;
        }

        table tr th,
        td {
            margin-left: auto;
            margin-right: auto;
            text-align: left;
            padding: 20px;
        }
    </style>
</head>

<body>
    <?php include("nav.html"); ?>
    <form method="post">
        <h1>Which year To View</h1>
        <div class="detail">
            <label>Select Year </label>
            <select name="year">
                <option value="select">Select Year</option>
                <option value="first">First</option>
                <option value="second">Second</option>
                <option value="third">Third</option>
            </select><br><br>
            <button type="submit" name="select">select</button>
        </div>
    </form>
    <table>
        <tr>
            <th>ROLLNO</th>
            <th>NAME</th>
            <th>DEPARTMENT</th>
            <th>YEAR</th>
            <th>SEMESTER</th>
            <th>SUBJECT</th>
            <th>CORE 1</th>
            <th>CORE 2</th>
            <th>ALLIED</th>
            <th>TOTAL</th>
            <th>AVERAGE</th>
        </tr>
        <?php
        if (isset($_POST['select'])) {
            $year = $_POST['year'];
            $connect = mysqli_connect("Localhost", "root", "", "mark_list");
            if($year=="first"){
            $q = "select * from first";
            $sel = $connect->query($q);
            foreach ($sel as $value) {
        ?>
                <tr>
                    <td><?php echo $value['rollno']; ?></td>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo $value['dept']; ?></td>
                    <td><?php echo $value['year']; ?></td>
                    <td><?php echo $value['sem']; ?></td>
                    <td><?php echo $value['subjects']; ?></td>
                    <td><?php echo $value['coremark1']; ?></td>
                    <td><?php echo $value['coremark2']; ?></td>
                    <td><?php echo $value['alliedmark']; ?></td>
                    <td><?php echo $value['total']; ?></td>
                    <td><?php echo $value['avg']; ?></td>
                </tr>
                <?php } }?>

                <?php 
                if($year=="second"){
            $q1 = "select * from second";
            $sel1 = $connect->query($q1);
            foreach ($sel1 as $value1) {
        ?>
                <tr>
                    <td><?php echo $value1['rollno']; ?></td>
                    <td><?php echo $value1['name']; ?></td>
                    <td><?php echo $value1['dept']; ?></td>
                    <td><?php echo $value1['year']; ?></td>
                    <td><?php echo $value1['sem']; ?></td>
                    <td><?php echo $value1['subjects']; ?></td>
                    <td><?php echo $value1['coremark1']; ?></td>
                    <td><?php echo $value1['coremark2']; ?></td>
                    <td><?php echo $value1['alliedmark']; ?></td>
                    <td><?php echo $value1['total']; ?></td>
                    <td><?php echo $value1['avg']; ?></td>
                </tr>
                <?php } }?>

                <?php 
                if($year=="third"){
            $q2 = "select * from third";
            $sel2 = $connect->query($q2);
            foreach ($sel2 as $value2) {
        ?>
                <tr>
                    <td><?php echo $value2['rollno']; ?></td>
                    <td><?php echo $value2['name']; ?></td>
                    <td><?php echo $value2['dept']; ?></td>
                    <td><?php echo $value2['year']; ?></td>
                    <td><?php echo $value2['sem']; ?></td>
                    <td><?php echo $value2['subjects']; ?></td>
                    <td><?php echo $value2['coremark1']; ?></td>
                    <td><?php echo $value2['coremark2']; ?></td>
                    <td><?php echo $value2['alliedmark']; ?></td>
                    <td><?php echo $value2['total']; ?></td>
                    <td><?php echo $value2['avg']; ?></td>
                </tr>
                <?php } }?>
    </table>


<?php } ?>
<?php include("foot.html"); ?>
</body>

</html>