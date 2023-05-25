<html>

<head>
    <style>
        table,
        th,
        td {
            border: 10px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding-top: 10px;
            padding-bottom: 20px;
            padding-left: 30px;
            padding-right: 40px;
        }

        .GFG {
            background-color: white;
            border: 2px solid black;
            color: green;
            padding: 5px 10px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin: 10px 30px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fine";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    session_start();

    if (isset($_POST["submit"])) {
        $vno = $_POST["search"];
        $sql = "SELECT * FROM issuechallen WHERE vehicleno='$vno' and status = 1;";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows <= 0) {

            echo "<scrit> NO DATA AVAILABLE</script>";
        } else {
    ?>
            <center>
                <h1>OFFENCE DETAILS</h1>
            </center>

            <?php

            while ($row = mysqli_fetch_array($result)) {
            ?>




                <center>

                    <table border="4">
                        <tr>
                            <th>Name</TH>
                            <th>License Number</th>
                            <th>Vehicleno</th>
                            <th>Amount</th>
                            <th>Rule</th>
                        </tr>
                        <tr>

                            <td><?php echo $row["name"]; ?></td>
                            <td><?php echo $row["lisc_no"]; ?></td>
                            <td><?php echo $row["vehicleno"]; ?></td>
                            <td><?php echo $row["amount"]; ?></td>
                            <td><?php echo $row["rule"]; ?></td>
                            <?php $_SESSION['amount'] = $row["amount"];
                            $_SESSION['email'] = $row["name"];

                            ?>
                        </tr>
                    </table><br>
                    <button class="GFG" onclick="window.location.href = 'payments.php';">
                        Click Here To Pay
                    </button>
                </center>


    <?php
            }
        }
    }
    ?>