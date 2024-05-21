<?php

$input =
[
  
  ['date_id' => '2020-12-8', 'make_name' => 'toyota', 'lead_id' => 0, 'partner_id' => 1],
  ['date_id' => '2020-12-8', 'make_name' => 'toyota', 'lead_id' => 1, 'partner_id' => 0],
  ['date_id' => '2020-12-8', 'make_name' => 'toyota', 'lead_id' => 1, 'partner_id' => 2],
  ['date_id' => '2020-12-7', 'make_name' => 'toyota', 'lead_id' => 0, 'partner_id' => 2],
  ['date_id' => '2020-12-7', 'make_name' => 'toyota', 'lead_id' => 0, 'partner_id' => 1],
  ['date_id' => '2020-12-8', 'make_name' => 'honda', 'lead_id' => 1, 'partner_id' => 2],
  ['date_id' => '2020-12-8', 'make_name' => 'honda', 'lead_id' => 2, 'partner_id' => 1],
  ['date_id' => '2020-12-7', 'make_name' => 'honda', 'lead_id' => 0, 'partner_id' => 1],
  ['date_id' => '2020-12-7', 'make_name' => 'honda', 'lead_id' => 1, 'partner_id' => 2],
  ['date_id' => '2020-12-7', 'make_name' => 'honda', 'lead_id' => 2, 'partner_id' => 1]

];


$result = [];

foreach ($input as $row)
{
  $result[$row['date_id']][$row['make_name']]['unique_leads'][$row['lead_id']] = $row['lead_id'];
  $result[$row['date_id']][$row['make_name']]['unique_partners'][$row['partner_id']] = $row['partner_id'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <style>

table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-size: 18px;
  text-align: left;
}

th, td {
  padding: 12px 15px;
  border: 1px solid #ddd;
}

thead th {
  background-color: #009879;
  color: #ffffff;
  text-transform: uppercase;
}


tbody tr:hover {
  background-color: #f1f1f1;
}

@media (max-width: 600px) {
  table {
    width: 100%;
  }

  thead {
    display: none;
  }

  tbody tr {
    display: block;
    margin-bottom: 10px;
  }

  tbody tr td {
    display: block;
    text-align: right;
    padding-left: 50%;
    position: relative;
  }

  tbody tr td::before {
    content: attr(data-label);
    position: absolute;
    left: 0;
    width: 50%;
    padding-left: 15px;
    font-weight: bold;
    text-align: left;
  }
}

    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>date_id</th>
                <th>make_name</th>
                <th>unique_leads</th>
                <th>unique_partners</th>
            </tr>
        </thead>
        <tbody align="center">
            <?php foreach ($result as $date_id=>$data): ?>
            <tr>
                <?php foreach ($data as $make_name=>$data): ?>
                  <td><?php echo $date_id; ?></td>
                  <td><?php echo $make_name; ?></td>
                  <td><?php echo $data['unique_leads'] = count($data['unique_leads']); ?></td>
                  <td><?php echo $data['unique_partners'] = count($data['unique_partners']); ?></td>
              </tr>
              <?php endforeach; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
