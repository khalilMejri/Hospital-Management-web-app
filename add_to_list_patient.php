
    <?php


require "php/CnxBD.php";
$MaConnection = CnxBD::getInstance();
$req = "select * FROM `person` inner join `patient` where person.CIN=patient.Patient_CIN";
$result = $MaConnection->prepare($req);
$result->execute();
while ($row=$result->fetch()) {
    $age = date_diff(date_create($row["Birthday"]), date_create('now'))->y;
    $id = $row["CIN"] ;
    $docID=$row ["Medical_DOC_ID"] ;
    echo "
                    <tr>
                        <td > <a href='patient_profile.php?id=$id&docID=$docID' style=' display: block ;width: 100%; height: 100% ;color: inherit;'> " . $row["FirstName"] . "</a> </td>
                        <td>" . $row["LastName"] . "  </td>
                        <td>" . $row["Gender"] . "  </td>
                        <td>" . $age . " </td>
                        <td>" . $row["CIN"] . "  </td>
                        <td>" ;if($row["isHere"]==1)echo" <img src='imgs/ishere.png' style='width: 32px;height: 32px;margin: auto;    display: block;'> ";else echo"<img src='imgs/isnothere.png' style='width: 32px;height: 32px;margin: auto;    display: block;' >";  echo "  </td>
                    </tr>";
} ?>





