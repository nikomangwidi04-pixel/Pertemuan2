<?php
function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    return $nilaiAkhir;
}

$nilai = hitungNilaiAkhir(80, 80, 87.5);

echo "Nilai Akhir: " . $nilai . "<br>";

if ($nilai >= 70) {
    echo "Status: Lulus";
} else {
    echo "Status: Tidak Lulus";
}
?>