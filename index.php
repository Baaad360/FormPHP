<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
<center>
<h3>Form Tugas 2</h3>
</center>
<div>
  <form method=POST action="FormOut.php">
    <label>Nama</label>
    <input type="text" id="nama" name="nama" placeholder="Nama anda...">
<br>
<label>Jenis Kelamin</label>
    <select id="kelamin" name="kelamin">
      <option value="Lain">Other</option>
      <option value="Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
<br>
    <labelat">Alamat</label>
    <input type="text" id="alamat" name="alamat" placeholder="Alamat rumah...">

    <label>Agama</label>
    <select id="agama" name="agama">
      <option value="islam">Islam</option>
      <option value="katolik">Katolik</option>
      <option value="kristen">Kristen</option>
      <option value="hindu">Hindu</option>
      <option value="budha">Budha</option>
    </select>
    <br>
    <label>Tempat Tanggal Lahir</label>
    <input type="text" name="TTL" id="TTL" style="max-width: none;">
    <br>
    <label>Hobi</label>
    <input type="text" id="hobi" name="hobi">
    <br>
    <label>Cita-Cita</label>
    <input type="text" id="cita" name="cita">
    <br>
    <label>Usia</label>
    <input type="text" id="umur" name="umur">
    <br>
    <label>Asal Sekolah</label>
    <input type="text" id="sekolah" name="sekolah">
  
    <input type="submit" value="Submit">
  </form>
</div>