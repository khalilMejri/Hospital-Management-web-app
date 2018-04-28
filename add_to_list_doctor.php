<?php
require "php/CnxBD.php";
$MaConnection = CnxBD::getInstance();
$req = "select * FROM `person` inner join `doctor` where person.CIN=doctor.Doctor_CIN";
$result = $MaConnection->prepare($req);
$result->execute();
while ($row = $result->fetch()) {
    $age = date_diff(date_create($row["Birthday"]), date_create('now'))->y;
    echo "
                    <tr>
                        <td > <a href='doctor_profile.php?var=" . $row["CIN"] . " ' style=' display: block ;width: 100%; height: 100% ;color: inherit;'> " . $row["FirstName"] . "</a> </td>
                        <td>" . $row["LastName"] . "  </td>
                        <td>" . $row["Gender"] . "  </td>
                        <td>" . $age . " </td>
                        <td>" . $row["CIN"] . "  </td>
                        <td>" . $row["Speciality"] . " </td>
                    </a></tr>";
} ?>