<html>

<head> 
    <title>Form Input Matakuliah</title>
</head>

<body> 
    <center>
        <form action="<?=   base_url('matakuliah/cetak');     ?>" method="post">

           <table> 
            <tr> 
                <th colspan="3"> 
                    Form Input Data Mata kuliah 
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode Mtk</th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode" placeholder="Input data">
                </td>
            </tr>
            <tr>
                <th>Nama Mtk</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">pilih SKS</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>

</html>