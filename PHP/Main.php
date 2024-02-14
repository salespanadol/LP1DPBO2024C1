<?php


require('DPR.php');


$llist = array(
    new DPR(1, "Yuuji", "Finance", "Party A", "images\images1.jpeg"),
    new DPR(2, "Megumi", "Healthcare", "Party B", "images\images2.jpeg"),
    new DPR(3, "Yuuta", "Education", "Party C", "images\images3.jpeg"),
    new DPR(4, "Nobara", "Biology", "Party D", "images\images4.jpeg")
);

echo "<table border='1'>";
echo "<tr>
    <th>No</th>
    <th>ID</th>
    <th>Nama</th>
    <th>Bidang</th>
    <th>Partai</th>
    <th>Foto</th>
    </tr>";


$i = 1;
foreach ($llist as $elem) {
    echo "<tr>
            <td>" . $i++ . "</td>
            <td>" . $elem->get_id() . "</td>
            <td>" . $elem->get_nama() . "</td>
            <td>" . $elem->get_bidang() . "</td>
            <td>" . $elem->get_partai() . "</td>
            echo "<img src='" . $arraydpr[$i]->getFoto(). "'style='width: 200px'>";
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
        $elem->set_foto($newFoto);
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
    <th>Foto</th>
    </tr>";

$i = 1;
foreach ($llist as $elem) {
    echo "<tr>
            <td>" . $i++ . "</td>
            <td>" . $elem->get_id() . "</td>
            <td>" . $elem->get_nama() . "</td>
            <td>" . $elem->get_bidang() . "</td>
            <td>" . $elem->get_partai() . "</td>
            <td>" . $elem->get_foto() . "</td>
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
    <th>Foto</th>
    </tr>";

$i = 1;
foreach ($llist as $elem) {
    echo "<tr>
            <td>" . $i++ . "</td>
            <td>" . $elem->get_id() . "</td>
            <td>" . $elem->get_nama() . "</td>
            <td>" . $elem->get_bidang() . "</td>
            <td>" . $elem->get_partai() . "</td>
            <td>" . $elem->get_foto() . "</td>
          </tr>";
}

echo "</table>";
?>
