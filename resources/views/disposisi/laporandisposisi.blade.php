<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPT Pajak Daerah - Disposisi</title>
    
     <style>
        body 
        {
            font-family: sans-serif;
            font-size: 15px;

        }

        #isi table
        {
            width: 100%;
        }




    </style>

</head>

<body>
        <table align="center" style="width: 80%">
            <tr>
                <td width="20%" align="center"><img src="images/logobjblap.png" alt="" ></td>
                <td width="60%" align="center"><h3>UPT PAJAK DAERAH WILAYAH I KOTA BANJARBARU</h3><p>Jl. Mistar Cokrokusumo Kota Banjarbaru <br> Kalimantan Selatan</p></td>
                <td width="20%" align="center"></td>
            </tr>
        </table>
        <hr>

    <h3 style="text-align: center;">Laporan Disposisi</h3>
    <div id="isi">
        <table align="center" style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >
            <thead>
                <tr>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >
                        No
                    </th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Nomor Surat</th>
                    <th style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >Instansi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 0;?>
                @foreach($disposisis as $disposisi)
                <?php $no++ ;?>
                <tr>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $no }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $disposisi->suratmasuk->nomor_surat }}</td>
                    <td style="border : 1px solid black;
                                border-collapse: collapse;
                                opacity: 0.95;
                                padding: 10px;
                                text-align: center;"
                        >{{ $disposisi->isi_disposisi }}</td>        
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <p style="margin-left: 850px">Mengetahui</p>
             <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <hr style="margin-left: 815px" width="15%">
    </div>
    
</body>
</html>
