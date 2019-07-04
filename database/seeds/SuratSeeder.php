<?php

use Illuminate\Database\Seeder;
use App\Surat;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        $items = [            
        ['id_surat' => 8, 'nrp' => 'G353160121', 'estimasi' => '2019-05-21', 'status' => 'Diambil', 'jenis_surat' => 'Pengesahan Proposal'],
        ['id_surat' => 3, 'nrp' => 'P062140241', 'estimasi' => '2019-06-24', 'status' => 'Proses', 'jenis_surat' => 'Lembar Hasil Studi'],
        ['id_surat' => 4, 'nrp' => 'A251180081', 'estimasi' => '2019-06-12', 'status' => 'Proses', 'jenis_surat' => 'SK Pembimbingan'],
        ['id_surat' => 12, 'nrp' => 'I161170051', 'estimasi' => '2019-06-14', 'status' => 'Diambil', 'jenis_surat' => 'Surat Undangan Ujian Kualifikasi (Prelim Lisan)'],
        ['id_surat' => 17, 'nrp' => 'H351170411', 'estimasi' => '2019-05-13', 'status' => 'Proses', 'jenis_surat' => 'Undangan Seminar'],
        ['id_surat' => 10, 'nrp' => 'A252170251', 'estimasi' => '2019-05-16', 'status' => 'Diambil', 'jenis_surat' => 'Surat Izin Cuti Akademik'],
        ['id_surat' => 16, 'nrp' => 'P062180021', 'estimasi' => '2019-05-01', 'status' => 'Diambil', 'jenis_surat' => 'Undangan Sidang Komisi'],
    ];

        foreach ($items as $item) {
            Surat::updateOrCreate(['id_surat' => $item['id_surat']], $item);
        }
    }
}
