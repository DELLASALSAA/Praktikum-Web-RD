<html>
<head>
</head>
<body>
    <h2>Create</h2>
    <form method="post" action="tampil.php">
        <table padding="3">
            <tr>
                <td>nim</td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>
                    <label>prodi</label>
                    <select name="prodi">
                        <option value="Teknik Informatika">IF</option>
                        <option value="Teknik Elektro">EL</option>
                        <option value="Teknik Geologi">TL</option>
                        <option value="Teknik Geomatika">TG</option>
                        <option value="Teknik Fisika">TF</option>
                        <option value="Teknik Kimia">Tekkim</option>
                        <option value="Teknik Sipil">SI</option>
                        <option value="Teknik Telekomunikasi">Telkom</option>
                        <option value="Farmasi">FA</option>
                        <option value="Biologi">BI</option>
                        <option value="Fisika">FI</option>
                        <option value="Kimia">KI</option>
                        <option value="Matematika">MA</option>
                        <option value="Sains Data">SD</option>
                        <option value="Arsitektur">AR</option>
                        <option value="Arsitektur Lanskap">AL</option>
                        <option value="Aktuaria">AK</option>
                        <option value="Perencanaan Wilayah dan Kota">PWK</option>
                        <option value="Teknologi Pangan">TIP</option>
                        <option value="Teknik Pertambangan">TP</option>
                        <option value="Rekayasa Kehutanan">RK</option>
                        <option value="Teknik Sistem Energi">TSE</option>
                        <option value="Sains Atmosfer dan Keplanetan">SAK</option>
                        <option value="Teknik Biosistem">TB</option>
                        <option value="Teknik Lingkungan">Tekling</option>
                </select>
                </td>
            <tr>
                <td>angkatan</td>
                <td><input type="number" name="angkatan"></td>
            </tr>
        </table>

        <hr>
        <input type="submit" value="tambah">
        <a href="index.php"><input type="button" value="batal"</a>
</form>
</body>
</html>