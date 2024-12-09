<?php
require('fpdf185/fpdf.php');
require "function/functions.php"; // Ensure this includes the database connection

// Ambil tanggal dari POST request
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

// Buat objek FPDF dan tambahkan halaman
$pdf = new FPDF('P', 'mm', array(216, 330)); // A4, ukuran 216mm x 330mm
$pdf->AddPage();

// Atur font dan judul
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'SMP NEGERI 28 SAMARINDA', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(0, 10, 'LAPORAN MONITORING ASAP ROKOK', 0, 1, 'C');
$pdf->Cell(0, 10, 'Dari ' . date('d F Y', strtotime($start_date)) . ' sampai ' . date('d F Y', strtotime($end_date)), 0, 1, 'C');

// Spasi sebelum tabel
$pdf->Ln(10);

// Set font for header with smaller size
$pdf->SetFont('Arial', 'B', 10);

// Define column widths
$widths = [
    'no' => 10,
    'asap' => 15,
    'pir' => 42,
    'lcd' => 40,
    'kondisi' => 51,
    'tanggal' => 40
];

// Output table header
$pdf->Cell($widths['no'], 10, 'No', 1, 0, 'C');
$pdf->Cell($widths['asap'], 10, 'Asap', 1, 0, 'C');
$pdf->Cell($widths['pir'], 10, 'Pir', 1, 0, 'C');
$pdf->Cell($widths['lcd'], 10, 'LCD', 1, 0, 'C');
$pdf->Cell($widths['kondisi'], 10, 'Kondisi', 1, 0, 'C');
$pdf->Cell($widths['tanggal'], 10, 'Tanggal', 1, 1, 'C');

// Garis horizontal setelah header tabel
$pdf->SetFont('Arial', '', 9); // Smaller font size for data
$pdf->SetFillColor(240, 240, 240); // Warna latar belakang untuk baris

// Ambil data dari database berdasarkan rentang tanggal
$sql = "SELECT * FROM sensor WHERE date BETWEEN '$start_date' AND DATE_ADD('$end_date', INTERVAL 1 DAY)";
$result = mysqli_query($koneksi, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        // Set cell height and width
        $cellHeight = 10; // Default cell height
        $rowColor = ($no % 2 == 0) ? [240, 240, 240] : [255, 255, 255]; // Alternating row colors
        $pdf->SetFillColor($rowColor[0], $rowColor[1], $rowColor[2]);

        $pdf->Cell($widths['no'], $cellHeight, $no++, 1, 0, 'C', true);
        $pdf->Cell($widths['asap'], $cellHeight, $row['asap'], 1, 0, 'C', true);
        $pdf->Cell($widths['pir'], $cellHeight, $row['pir'], 1, 0, 'C', true);
        $pdf->Cell($widths['lcd'], $cellHeight, $row['lcd'], 1, 0, 'C', true);

        // Kondisi column logic based on 'lcd' value
        if ($row['lcd'] == "Kondisi Normal") {
            $kondisi = "Blower dan Buzzer OFF";
        } elseif ($row['lcd'] == "Toilet Di Gunakan") {
            $kondisi = "Blower ON dan Buzzer OFF";
        } elseif ($row['lcd'] == "Ada asap di toilet") {
            $kondisi = "Blower dan Buzzer ON";
        } else {
            $kondisi = "Unknown Condition";
        }

        // Set kondisi cell height
        $kondisiHeight = $pdf->GetStringWidth($kondisi) > $widths['kondisi'] ? 15 : $cellHeight; // Adjust height if the text is too long
        $pdf->Cell($widths['kondisi'], $kondisiHeight, $kondisi, 1, 0, 'C', true);
        $pdf->Cell($widths['tanggal'], $cellHeight, date('d F Y H:i:s', strtotime($row['date'])), 1, 1, 'C', true);


        // Garis horizontal setelah setiap baris data
        $pdf->SetFillColor(240, 240, 240);
        $pdf->Cell(array_sum($widths), 0, '', 'T', 1, 'C'); // Garis horizontal
    }
} else {
    $pdf->Cell(array_sum($widths), 10, 'Tidak ada data ditemukan untuk rentang tanggal yang dipilih.', 1, 1, 'C');
}

// Output PDF ke browser
$pdf->Output('D', 'Laporan_Monitoring_Asap_Rokok.pdf'); // 'D' untuk download
?>
