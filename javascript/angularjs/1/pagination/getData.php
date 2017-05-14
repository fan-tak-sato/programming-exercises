<?php
header('Content-Type: application/json');

$dsn = 'mysql:dbname=angularjs_crud;host=127.0.0.1';
$user = 'root';
$password = 'root';

try {
    $conn = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$pagenum = isset($_GET['page']) ? $_GET['page'] : 1;
$pagesize = isset($_GET['size']) ? $_GET['size'] : 10;
$offset = ($pagenum - 1) * $pagesize;
$search = isset($_GET['search']) ? $_GET['search'] : null;

if ($search != "") {
    $where = "WHERE Carrier LIKE '%" . $search . "%'";
} else {
    $where = "";
}

$sql = "SELECT COUNT(*) AS count FROM PortalActivity $where";
$result = $conn->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$count = $row['count'];

$query = "SELECT * FROM PortalActivity $where ORDER BY Carrier, CallerPhoneNum LIMIT $offset, $pagesize";

$result = $conn->query($query);

while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $PortalActivity[] = array(
        'CallerPhoneNum' => $row['CallerPhoneNum'],
        'Carrier' => $row['Carrier'],
        'TotalLookups' => $row['TotalLookups'],
        'TotalBlocks' => $row['TotalBlocks'],
        'TotalComplaints' => $row['TotalComplaints'],
        'ActivityRanking' => $row['ActivityRanking'],
        'CallerType' => $row['CallerType']
	);
}

$myData = array('PortalActivity' => $PortalActivity, 'totalCount' => $count);

echo json_encode($myData);