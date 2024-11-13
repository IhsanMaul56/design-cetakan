<!DOCTYPE html>
<html>

<head>
    <title>Faktur Penjualan</title>
    <style>
        /* Font dan ukuran dasar */
        body {
            font-family: Arial, sans-serif;
            font-size: 8.5pt;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            padding: 7pt;
            padding-right: 30pt;
        }

        .header,
        .footer {
            width: 100%;
            text-align: center;
        }

        /* Kompres padding tabel */
        .header-table,
        .content-table,
        .footer-table {
            width: 100%;
            border-collapse: collapse;
        }

        .header-table td,
        .content-table td,
        .content-table th,
        .footer-table td {
            border: 1pt solid black;
        }

        /* Hilangkan page break otomatis */
        @page {
            margin: 3.9pt;
            /* Atur margin halaman secara umum */
            margin-right: 19.4pt;
            /* Margin kanan khusus */
        }

        /* Tabel Pertama */
        .header-table {
            margin-bottom: 2.5pt;
        }

        .header-title {
            text-align: center;
            font-size: 14pt;
            font-weight: bold;
        }

        .header-destination {
            text-align: center;
            font-size: 10pt;
            font-weight: bold;
        }

        .header-right {
            text-align: center;
            font-size: 10pt;
            font-weight: bold;
        }

        .header-right-destination {
            text-align: center;
            font-size: 8.5pt;
            font-weight: bold;
        }

        .header-text {
            text-align: center;
            font-size: 8pt;
            font-weight: bold;
        }

        .faktur-content {
            text-align: center;
            font-size: 7.9pt;
            font-weight: bold;
        }

        .header-content-table {
            font-size: 11pt;
            font-weight: bold;
        }

        .header-header-table {
            font-size: 9.4pt;
            font-weight: bolder;
        }

        .content-content-table {
            font-size: 9pt;
            font-weight: bold;
        }

        .text-anouncement {
            text-align: left;
            font-size: 7pt;
            font-weight: bold;
        }

        .content-table th {
            font-weight: bold;
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .footer-text {
            position: absolute;
            bottom: 0;
            left: 0;
            padding-bottom: 26pt;
            padding-left: 9pt;
            font-size: 8pt;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- Table 1 -->
        <table class="header-table">
            <tr>
                <td colspan="7" style="border-bottom: none;">
                    <strong class="header-title">{{ $dataPerusahaan['name'] }}</strong><br>
                </td>
                <td rowspan="2" colspan="3" style="border-bottom: none; width: 152pt; padding-left: 3pt;">
                    <strong class="header-right">
                        Kepada Yth: <br>
                    </strong>
                    <strong class="header-right-destination">
                        {{ $dataCustomer['name'] }} <br>
                        {{ $dataCustomer['address'] }} <br>
                    </strong>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="border-top: none; border-right: none; border-bottom: none;">
                    <strong class="header-destination">
                        {{ $dataPerusahaan['address'] }}
                    </strong>
                </td>
                <td colspan="3" style="border-top: none; border-left: none; border-bottom: none; padding-left: 17pt">
                    <strong class="header-title">Faktur Penjualan</strong>
                </td>
            </tr>
            <tr>
                <td colspan="5"
                    style="border-top: none; border-right: none; border-bottom: none; padding-bottom: 3pt;">
                    <strong class="faktur-content">
                        {{ $dataPerusahaan['alamat_lengkap'] }}
                    </strong>
                </td>
                <td colspan="2" style="border-top: none; border-left: none; border-bottom: none;">
                    <strong class="faktur-content">
                        8A
                    </strong>
                </td>
                <td colspan="3" style="border-top: none; border-bottom: none"></td>
            </tr>
            <tr>
                <td style="border-top: none; border-right: none; border-bottom: none; width: 20pt; padding-bottom: 3pt">
                    <strong class="faktur-content">
                        Telp.
                    </strong>
                </td>
                <td colspan="3" style="border: none; padding-left: 17pt; padding-bottom: 3pt">
                    <strong class="faktur-content">
                        : {{ $dataPerusahaan['tlp'] }}
                    </strong>
                </td>
                <td rowspan="4" style="border-top: none; border-left: none; border-right: none; padding-left: 17pt">
                    <strong class="faktur-content" style="font-size: 9pt;">
                        Nomor<br>
                        Tanggal<br>
                        No. Ref
                    </strong>
                </td>
                <td colspan="2" rowspan="4" style="border-top: none; border-left: none;">
                    <strong class="faktur-content" style="font-size: 9pt">
                        : {{ $dataFaktur['no'] }}<br>
                        : {{ $dataFaktur['tgl'] }}<br>
                        :
                    </strong>
                </td>
                <td colspan="3" rowspan="3" style="border-top: none; border-bottom: none; padding-left: 3pt;">
                    <strong class="header-destination">
                        NPWP: <br>
                        {{ $dataCustomer['npwp'] }}
                    </strong>
                </td>
            </tr>
            <tr>
                <td style="border-top: none; border-right: none; border-bottom: none;">
                    <strong class="faktur-content">
                        HP/WA
                    </strong>
                </td>
                <td colspan="3" style="border: none; padding-left: 17pt">
                    <strong class="faktur-content">
                        : {{ $dataPerusahaan['wa'] }}
                    </strong>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="border-top: none; border-right: none; border-bottom: none">
                    <strong class="faktur-content">
                        Denpasar 80222 - Bali
                    </strong>
                </td>
            </tr>
            <tr>
                <td style="border-top: none; border-right: none; border-bottom: none; padding-bottom: 7.7pt;">
                    <strong class="faktur-content">
                        NPWP
                    </strong>
                </td>
                <td colspan="3"
                    style="border-top: none; border-right: none; border-left: none; padding-bottom: 7.7pt; padding-left: 17pt">
                    <strong class="faktur-content">
                        : {{ $dataPerusahaan['npwp'] }}
                    </strong>
                </td>
                <td colspan="3" style="border-top: none; text-align: right; padding-right: 40pt; padding-bottom: 7.7pt;">
                    <strong class="faktur-content text-right">Hal : 1</strong>
                </td>
            </tr>
            <tr class="header-header-table">
                <td class="text-center" colspan="2" style="padding: 2pt;">No Order</td>
                <td class="text-center" style="width: 49pt;">Tgl Order</td>
                <td class="text-center" style="width: 50pt">Kredit Ter</td>
                <td class="text-center" style="width: 65pt">Jatuh Tempo</td>
                <td class="text-center" style="width: 57pt">Salesman</td>
                <td colspan="4" class="text-center">Keterangan</td>
            </tr>
            <tr class="faktur-content">
                <td colspan="2" style="padding: 7pt; width: 30pt">{{ $dataOrder['no_order'] }}</td>
                <td>{{ $dataOrder['tgl_order'] }}</td>
                <td>{{ $dataOrder['kredit'] }}</td>
                <td>{{ $dataOrder['tempo'] }}</td>
                <td>{{ $dataOrder['salesman'] }}</td>
                <td colspan="4" style="text-align: left">{{ $dataOrder['ket'] }}</td>
            </tr>
        </table>

        <!-- Table 2 -->
        <table class="content-table">
            <tr class="header-text">
                <th style="width: 15pt; height: 11pt;">No.</th>
                <th style="width: 184pt">Nama Barang</th>
                <th style="width: 43pt">Satuan</th>
                <th style="width: 42pt">Kts.</th>
                <th style="width: 66pt">Harga Satuan</th>
                <th style="width: 67pt">Rupiah</th>
                <th style="width: 60pt">Discount</th>
                <th>Netto Rp.</th>
            </tr>
            @for ($i = 0; $i < 1; $i++)
                <tr class="content-content-table">
                    <td class="text-center" style="height: 11pt">1</td>
                    <td>{{ $dataProduct['name'] }}</td>
                    <td class="text-center">{{ $dataProduct['satuan'] }}</td>
                    <td class="text-center">{{ $dataProduct['kts'] }}</td>
                    <td class="text-right">{{ $dataProduct['harga'] }}</td>
                    <td class="text-right">{{ $dataProduct['rp'] }}</td>
                    <td class="text-right">{{ $dataProduct['discount'] }}</td>
                    <td class="text-right">{{ $dataProduct['netto'] }}</td>
                </tr>
            @endfor
        </table>

        <!-- Table 3 -->
        <table class="footer-table" style="margin-top: 2pt;">
            <tr class="content-content-table">
                <td class="text-center" style="width: 90pt; border-bottom: none;" rowspan="5">
                    <strong>Penerima</strong><br><br><br><br>
                </td>
                <td class="text-anouncement" style="width: 225pt; padding-left: 5pt; border-bottom: none;"
                    rowspan="5">
                    <strong>Perhatian :</strong><br>
                    1. Semua Cheque/Bilyet Giro atas nama {{ $dataPerusahaan['name'] }}<br>
                    2. Pembayaran dianggap lunas jika Giro/Cheque telah dicairkan.<br>
                    3. Mintalah Nota Asli bila sudah lunas.<br>
                    4. Mohon Barang di Cek sebelum Faktur ditanda tangani.
                </td>
                <td class="text-center" style="width: 105pt; border-bottom: none;" rowspan="5">
                    Denpasar, {{ $dataOrder['tgl_order'] }} <br>
                    Hormat Kami, <br><br><br>
                </td>
                <td style="border-right: none; border-bottom: none; padding-left: 4pt;">
                    Jumlah
                </td>
                <td style="border-left: none; border-right: none; border-bottom: none">
                    :
                </td>
                <td style="border-left: none; border-bottom: none; width: 70pt" class="text-right">
                    {{ $dataPembelian['jumlah'] }}
                </td>
            </tr>
            <tr class="content-content-table">
                <td style="border-right: none; border-bottom: none; border-top: none; padding-left: 4pt;">
                    Disc. Faktur
                </td>
                <td style="border-left: none; border-right: none; border-bottom: none; border-top: none;">
                    :
                </td>
                <td style="border-left: none; border-bottom: none; border-top: none; width: 70pt" class="text-right">
                    {{ $dataPembelian['discount'] }}
                </td>
            </tr>
            <tr class="content-content-table">
                <td style="border-right: none; border-bottom: none; border-top: none; padding-left: 4pt;">
                    Nilai Netto
                </td>
                <td style="border-left: none; border-right: none; border-bottom: none; border-top: none;">
                    :
                </td>
                <td style="border-left: none; border-bottom: none; border-top: none; width: 70pt" class="text-right">
                    {{ $dataPembelian['netto'] }}
                </td>
            </tr>
            <tr class="content-content-table">
                <td style="border-right: none; border-bottom: none; border-top: none; padding-left: 4pt;">
                    PPN
                </td>
                <td style="border-left: none; border-right: none; border-bottom: none; border-top: none;">
                    :
                </td>
                <td style="border-left: none; border-bottom: none; border-top: none; width: 70pt" class="text-right">
                    {{ $dataPembelian['ppn'] }}
                </td>
            </tr>
            <tr class="content-content-table">
                <td style="border-right: none; border-bottom: none; border-top: none; padding-left: 4pt;">
                    Nilai
                </td>
                <td style="border-left: none; border-right: none; border-bottom: none; border-top: none;">
                    :
                </td>
                <td style="border-left: none; border-bottom: none; border-top: none; width: 70pt" class="text-right">
                    {{ $dataPembelian['nilai'] }}
                </td>
            </tr>
            <tr>
                <td style="border-top: none; height: 14pt;">
                    <strong>
                        (.................................)
                    </strong>
                </td>
                <td style="border-top: none;"></td>
                <td class="text-center" style="border-top: none;">
                    <strong>Juni</strong>
                </td>
                <td colspan="3" style="border-top: none;"></td>
            </tr>
        </table>
    </div>

    <div class="footer-text">
        <strong>
            Putih : Customer (Saat Lunas). Merah : ACCT. Kuning : Customer Hijau : Arsip
        </strong>
    </div>

</body>

</html>
