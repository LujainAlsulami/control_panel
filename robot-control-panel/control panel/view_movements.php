<!DOCTYPE html>
<html>
<head>
    <title>View Latest Movement</title>
    <style>
        body {
            background-color: #F1D3DCff;
            font-family: sans-serif;
        }
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 50px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #8FDAFAff;
        }
        .center {
            text-align: center;

        }
    </style>
</head>
<body>
    <h2 class="center">Latest Movement Record</h2>
    <table>
        <tr>
            <th>Direction</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "robot");

        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "SELECT * FROM controlpanel ORDER BY ID DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                echo "<td>" . $row['direction'] . "</td>";
                echo "</tr>";
            } else {
                echo "<tr><td colspan='2' class='center'>No records found.</td></tr>";
            }
        } else {
            echo "<tr><td colspan='2' class='center'>ERROR: Could not execute $sql. " . mysqli_error($conn) . "</td></tr>";
        }
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
