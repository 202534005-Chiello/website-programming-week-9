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