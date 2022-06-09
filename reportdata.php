<?php
include ('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Nomor');
$sheet->setCellValue('B1', 'Id Siswa');
$sheet->setCellValue('C1', 'Jenis Pendaftaran');
$sheet->setCellValue('D1', 'Tanggal Masuk Sekolah');
$sheet->setCellValue('E1', 'NIS');
$sheet->setCellValue('F1', 'Nama Lengkap');
$sheet->setCellValue('G1', 'Jenis Kelamin');
$sheet->setCellValue('H1', 'NISN');
$sheet->setCellValue('I1', 'NIK');
$sheet->setCellValue('J1', 'Tempat Lahir');
$sheet->setCellValue('K1', 'Tanggal Lahir');
$sheet->setCellValue('L1', 'Agama');
$sheet->setCellValue('M1', 'Alamat');
$sheet->setCellValue('N1', 'Nomor Telepon');

$query = mysqli_query($conn,"select * from tb_siswabaru");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['id_siswa']);
	$sheet->setCellValue('C'.$i, $row['jns_daftar']);
	$sheet->setCellValue('D'.$i, $row['tgl_masuk']);
	$sheet->setCellValue('E'.$i, $row['NIS']);	
	$sheet->setCellValue('F'.$i, $row['Nama_lengkap']);
	$sheet->setCellValue('G'.$i, $row['jns_kelamin']);
	$sheet->setCellValue('H'.$i, $row['NISN']);
	$sheet->setCellValue('I'.$i, $row['NIK']);
	$sheet->setCellValue('J'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('K'.$i, $row['tgl_lahir']);
	$sheet->setCellValue('L'.$i, $row['agama']);
	$sheet->setCellValue('M'.$i, $row['alamat']);
	$sheet->setCellValue('N'.$i, $row['no_telp']);
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:N'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.xlsx');
?>