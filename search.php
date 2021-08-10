<?php
$con = new PDO("mysql:host=localhost;dbname=tests", 'root', '');
if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `registration` WHERE  rollnumber= '$str'");

    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();
    echo "Details of the student is listed below";
    if ($row = $sth->fetch()) {
?>
        <br><br><br>
        
        <table class="table-responsive">
        <thead class="table table-bordered">
      <tr>
        <th >Name</th>
        <th scope="col">Roll Number</th>
        <th scope="col">Dob</th>
        <th scope="col">Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Email</th>
        <th scope="col">Sg1</th>
        <th scope="col">Sg2</th>
        <th scope="col">Sg3</th>
        <th scope="col">Sg4</th>
        <th scope="col">Sg5</th>
        <th scope="col">Sg6</th>
        <th scope="col">Sg7</th>
        <th scope="col">Sg8</th>
        <th scope="col">Cpga</th>
        <th scope="col">Hobbies</th>
        <th scope="col">References</th>
      </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $row->name; ?></td>
                <td><?php echo $row->rollnumber; ?></td>
                <td><?php echo $row->dob; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->pnumber; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->sg1; ?></td>
                <td><?php echo $row->sg2; ?></td>
                <td><?php echo $row->sg3; ?></td>
                <td><?php echo $row->sg4; ?></td>
                <td><?php echo $row->sg5; ?></td>
                <td><?php echo $row->sg6; ?></td>
                <td><?php echo $row->sg7; ?></td>
                <td><?php echo $row->sg8; ?></td>
                <td><?php echo $row->cgpa; ?></td>
                <td><?php echo $row->hobbies; ?></td>
                <td><?php echo $row->rf; ?></td>
            </tr>
    </tbody>
        </table>
<?php
    } else {
        echo "Name Does not exist";
    }
}
?>