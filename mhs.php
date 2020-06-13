<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<h3>BIODATA ANDA</h3>
<table>
  <tr>
    <th>Nama</th>
    <td>
    <?php
    echo $_POST["NAMA"]."<br />";
    ?>
    </td>
  </tr>
  <tr>
    <th>NIM</th>
    <td>
    <?php
    echo $_POST["NIM"]."<br />";
    ?>
    </td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>
    <?php
    echo $_POST["KELAMIN"]."<br />";
    ?>
    </td>
  </tr>
  <tr>
    <th>Alamat</th>
    <td>
    <?php
    echo $_POST["ALAMAT"]."<br />";
    ?>
    </td>
  </tr>
  <tr>
    <th>Prodi</th>
    <td>
    <?php
    echo $_POST["PRODI"]."<br />";
    ?>
    </td>
  </tr>
  <tr>
    <th>Bahasa yang dikuasai</th>
    <td>
    <?php
    echo $_POST["BAHASA"]."<br />";
    ?>
    </td>
  </tr>
</table>
</html>