<?php
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    http_response_code(405);
    exit("Method tidak diizinkan.");
}
?>

<h2>Cari Universitas</h2>

<form action="form.php" method="GET">
    <label for="q">Nama Universitas:</label>
    <input
        type="text"
        id="q"
        name="q"
        list="universitas"
        placeholder="Ketik nama universitas..."
    >

    <datalist id="universitas">
        <option value="Universitas Indonesia">
        <option value="Universitas Gadjah Mada">
        <option value="Universitas Airlangga">
        <option value="Universitas Brawijaya">
        <option value="Universitas Diponegoro">
    </datalist>
    <button type="submit">Cari</button>
</form>

<form action="process.php" method="post">
  <label for="name">Nama</label>
  <input 
    id="name" 
    name="name" 
    required maxlength="100"
    pattern="[a-zA-Z ]+"
   > 
   <!-- pattern untuk membatasi biar huruf saja yang bisa diinput -->
<br>

  <label for="email">Email</label>
  <input 
    id="email" 
    name="email" 
    type="email" required>
<br>

  <label for="telp">Nomor Telepon</label>
  <input id="telp" 
  name="telp" 
  required maxlength="12"
  pattern="[0-9]+"
  >
    <!-- pattern untuk membatasi supaya inputnya angka saja -->
<br>

  <label for="major">Program Studi</label>
  <select id="major" name="major" required>
    <option value="">Pilih program studi</option>
    <option value="Sistem Informasi">Sistem Informasi</option>
    <option value="Teknologi Informasi">Teknologi Informasi</option>
  </select>

  <button type="submit">Simpan</button>
</form>