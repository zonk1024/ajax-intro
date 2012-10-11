<?php
$q=$_GET["q"];


// Adequately retarded faux-data
$sels = array();
$sels['1'] = array(
  'FirstName' => 'Anna',
  'LastName'  => 'Apple',
  'Age'       => '1',
  'Hometown'  => 'America',
  'Job'       => 'Awesome',
);
$sels['2'] = array(
  'FirstName' => 'Bonnie',
  'LastName'  => 'Bananna',
  'Age'       => '2',
  'Hometown'  => 'Bermuda',
  'Job'       => 'Baller',
);
$sels['3'] = array(
  'FirstName' => 'Cathy',
  'LastName'  => 'Cherry',
  'Age'       => '3',
  'Hometown'  => 'Cypres',
  'Job'       => 'Cool',
);
$sels['4'] = array(
  'FirstName' => 'Danielle',
  'LastName'  => 'Date',
  'Age'       => '4',
  'Hometown'  => 'Denver',
  'Job'       => 'Dubious',
);

$row = $sels[ $q ];

if($q == "undefined") {
  $row = array(
    'FirstName' => '',
    'LastName'  => '',
    'Age'       => '0',
    'Hometown'  => '',
    'Job'       => '',
  );
}

echo "<table id=\"leTabluh\" border=\"1\">
  <tr>
  <th>Firstname</th>
  <th>Lastname</th>
  <th>Age</th>
  <th>Hometown</th>
  <th>Job</th>
</tr>";
echo "<tr>";
echo "<td class=\"wide3\">" . $row['FirstName'] . "</td>";
echo "<td class=\"wide3\">" . $row['LastName'] . "</td>";
echo "<td class=\"wide1\">" . $row['Age'] . "</td>";
echo "<td class=\"wide3\">" . $row['Hometown'] . "</td>";
echo "<td class=\"wide2\">" . $row['Job'] . "</td>";
echo "</tr>";
echo "</table>";
?>
