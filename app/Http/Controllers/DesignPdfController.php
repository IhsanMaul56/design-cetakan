<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DesignPdfController extends Controller
{
    public function printPdf()
    {
        $dataPerusahaan = [
            'name'      => 'PT PURI PANGAN UTAMA',
            'address'   => 'DENPASAR - BALI',
            'alamat_lengkap' => 'Jl. By Pass Ngurah Rai No. 555 X Pesanggaran',
            'tlp'       => '(0361) 729505 (Hunting)',
            'wa'        => '082144233754',
            'npwp'      => '01.236.629.0.-904.000'
        ];

        $dataFaktur = [
            'no'        => 'SI.2024.09.01295',
            'tgl'       => '04 Sep 2024',
            'no_ref'    => ''
        ];

        $dataCustomer = [
            'name'      => 'Arcadia Ubud',
            'address'   => 'Jl. Raya Tjampuhan Sayan',
            'npwp'      => '921365383906000'
        ];

        $dataOrder = [
            'no_order'  => '',
            'tgl_order' => '04/09/24',
            'kredit'    => '30',
            'tempo'     => '04/10/24',
            'salesman'  => 'S11',
            'ket'       => 'Arcadia(8a)'
        ];

        $dataProduct = [
            'name'      => 'Meiduck Frozen Peking Duck E 2.60-2.69',
            'satuan'    => 'Kg',
            'kts'       => '40,14',
            'harga'     => '55.000',
            'rp'        => '2.207.700',
            'discount'  => '0',
            'netto'     => '2.207.700'
        ];

        $dataPembelian = [
            'jumlah'    => '2.207.700',
            'discount'  => '0',
            'netto'     => '1.964.853',
            'ppn'       => '242.847',
            'nilai'     => '2.207.700'
        ];

        $data = compact('dataPerusahaan', 'dataFaktur', 'dataCustomer', 'dataOrder', 'dataProduct', 'dataPembelian');

        $pdf = Pdf::loadView('pdf-template', $data)->setPaper([0, 0, 419.53, 595.28], 'landscape');

        return $pdf->stream('design-cetakan.pdf');
    }
}
