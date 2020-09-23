<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class DataPJUExport implements FromArray, WithHeadings, ShouldAutoSize, WithStyles
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function headings(): array
    {
        return [
            'No',
            'Tgl Masuk',
            'No Surat',
            'Kecamatan',
            'Desa',
            'Alamat/Lokasi',
            'No ID Pel',
            'No Kontak',
            'Ket. Kerusakan',
            'SDH/BLM',
            'Tgl Pemeliharaan',
            'Pelaksana'
        ];
    }

    public function array(): array
    {
        return $this->data;
    }

    public function styles(Worksheet $sheet)
    {
        $rows = $this->data;
        $countRow = count($rows) + 1;

        $styleArray = [
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
            'font' => ['name' => 'Times New Roman', 'size' => 12]
        ];

        for ($i = 1; $i <= $countRow; $i++) {
            $sheet->getStyle('A' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('B' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('C' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('D' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('E' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('F' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('G' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('H' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('I' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('J' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('K' . $i)->applyFromArray($styleArray);
            $sheet->getStyle('L' . $i)->applyFromArray($styleArray);
        }

        return [
            1 => ['font' => ['bold' => true, 'name' => 'Times New Roman', 'size' => 14]],
        ];
    }
}
