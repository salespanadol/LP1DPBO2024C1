<?php


require('DPR.php');


$llist = array(
    new DPR(1, "John Doe", "Finance", "Party A"),
    new DPR(2, "Jane Doe", "Healthcare", "Party B"),
    new DPR(3, "Alice", "Education", "Party C")
);

echo "<table border='1'>";
echo "<tr>
    <th>No</th>
    <th>ID</th>
    <th>Nama</th>
    <th>Bidang</th>
    <th>Partai</th>
    </tr>";


$i = 1;
foreach ($llist as $elem) {
    echo "<tr>
            <td>" . $i++ . "</td>
            <td>" . $elem->get_id() . "</td>
            <td>" . $elem->get_nama() . "</td>
            <td>" . $elem->get_bidang() . "</td>
            <td>" . $elem->get_partai() . "</td>
          </tr>";
}

echo "</table>";

$updateId = 2; 
$newNama = "ganti";
$newBidang = "ganti";
$newPartai = "ganti";

foreach ($llist as $elem) {
    if ($elem->get_id() == $updateId) {
        $elem->set_nama($newNama);
        $elem->set_bidang($newBidang);
        $elem->set_partai($newPartai);
        break; 
    }
}


echo "<br><br>Data DPR setelah pembaruan:<br>";
echo "<table border='1'>";
echo "<tr>
    <th>No</th>
    <th>ID</th>
    <th>Nama</th>
    <th>Bidang</th>
    <th>Partai</th>
    </tr>";

$i = 1;
foreach ($llist as $elem) {
    echo "<tr>
            <td>" . $i++ . "</td>
            <td>" . $elem->get_id() . "</td>
            <td>" . $elem->get_nama() . "</td>
            <td>" . $elem->get_bidang() . "</td>
            <td>" . $elem->get_partai() . "</td>
          </tr>";
}

echo "</table>";

$deleteId = 2;

foreach ($llist as $key => $elem) {
    if ($elem->get_id() == $deleteId) {
        unset($llist[$key]);
        break; 
    }
}


echo "<br><br>Data DPR setelah penghapusan:<br>";
echo "<table border='1'>";
echo "<tr>
    <th>No</th>
    <th>ID</th>
    <th>Nama</th>
    <th>Bidang</th>
    <th>Partai</th>
    </tr>";

$i = 1;
foreach ($llist as $elem) {
    echo "<tr>
            <td>" . $i++ . "</td>
            <td>" . $elem->get_id() . "</td>
            <td>" . $elem->get_nama() . "</td>
            <td>" . $elem->get_bidang() . "</td>
            <td>" . $elem->get_partai() . "</td>
          </tr>";
}

echo "</table>";
?>
