<?php
// Data uji
$data1_lumba = array(96, 108, 89);
$data1_koala = array(88, 91, 110);

$data_bonus1_lumba = array(97, 112, 101);
$data_bonus1_koala = array(109, 95, 123);

$data_bonus2_lumba = array(97, 112, 101);
$data_bonus2_koala = array(109, 95, 106);

// Fungsi untuk menghitung skor rata-rata
function hitungRataRata($scores) {
    $total = array_sum($scores);
    return $total / count($scores);
}

// Fungsi untuk menentukan pemenang berdasarkan skor rata-rata
function tentukanPemenang($team1_scores, $team2_scores) {
    $team1_avg = hitungRataRata($team1_scores);
    $team2_avg = hitungRataRata($team2_scores);

    // Menentukan pemenang
    if ($team1_avg > $team2_avg && $team1_avg >= 100) {
        return "Tim Lumba-lumba";
    } elseif ($team2_avg > $team1_avg && $team2_avg >= 100) {
        return "Tim Koala";
    } elseif ($team1_avg == $team2_avg && $team1_avg >= 100 && $team2_avg >= 100) {
        return "Seri";
    } else {
        return "Tidak ada pemenang";
    }
}

// Data uji
$data = array(
    "Data 1" => array($data1_lumba, $data1_koala),
    "Data Bonus 1" => array($data_bonus1_lumba, $data_bonus1_koala),
    "Data Bonus 2" => array($data_bonus2_lumba, $data_bonus2_koala)
);

// Menampilkan hasil
foreach ($data as $key => $value) {
    $team1_scores = $value[0];
    $team2_scores = $value[1];
    
    echo "=== $key ===\n";
    echo "Skor rata-rata Tim Lumba-lumba: " . hitungRataRata($team1_scores) . "\n";
    echo "Skor rata-rata Tim Koala: " . hitungRataRata($team2_scores) . "\n";
    
    $winner = tentukanPemenang($team1_scores, $team2_scores);
    echo "Pemenang: $winner\n\n";
}
?>
