<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen.php">Dosen</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="staff.php">Staff</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<form action="proses.php" method="POST">
        <fieldset>
            <legend style="text-align: center;">Form Biodata Mahasiswa</legend>
            <table>
            <div class="form-group mb-4">
                <label for="nama">NIM (Nomor Induk Mahasiswa)</label>
                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan NIM" />
            </div>
            <div class="form-group mb-4">
                <label for="nama">Nama Mahasiswa</label>
                <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukan Nama" />
            </div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Pilih Jurusan</option>
                <option value="1">Teknik Informatka</option>
                <option value="2">Sistem Operasi</option>
                <option value="3">Sistem Komputer</option>
            </select>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Perempuan
                </label>
            </div>
            <div class="form-group mb-4">
                <label for="alamat">Alamat</label>
                <input name="alamat" type="text" class="form-control" id="alamat"  placeholder="Masukan alamat" />
            </div>
            <div class="form-group mb-4">
                <label for="no_hp">Nomor Handphone</label>
                <input name="no_hp" type="number" class="form-control" id="no_hp"  placeholder="Masukan Nomor Handphone" />
            </div>
            <div class="form-group mb-4">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1"  placeholder="Masukan Email" />
            </div>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan"><input type="button" value="Kembali"></td>
                </tr>
            </table>
        </fieldset>
    </form>



    <table style="margin-top: 20px;" class="table">
        <tr style="border: 1px solid black;">
            <th style="border: 1px solid black;">NO </th>
            <th style="border: 1px solid black;">Nim </th>
            <th style="border: 1px solid black;">Nama Mahasiswa</th>
            <th style="border: 1px solid black;">Jurusan</th>
            <th style="border: 1px solid black;">Jenis Kelamin</th>
            <th style="border: 1px solid black;">Alamat</th>
            <th style="border: 1px solid black;">No HP</th>
            <th style="border: 1px solid black;">Email</th>
            <th style="border: 1px solid black;">Action</th>
        </tr>
        <?php
         
        include "koneksi.php";

        
        while($data = mysqli_fetch_assoc($exec)){
        ?>
        <tr style="border: 1px solid black;">
            <td style="border: 1px solid black;"><?= $no++; ?></td>
            <td style="border: 1px solid black;"><?= $d["nim"]; ?></td>
            <td style="border: 1px solid black;"><?= $d["nama_mhs"]; ?></td>
            <td style="border: 1px solid black;"><?= $d['jurusan']; ?></td>
            <td style="border: 1px solid black;"><?= $d['gender'] = 1 ? 'Laki-Laki': 'Perempuan'; ?></td>
            <td style="border: 1px solid black;"><?= $d['alamat']; ?></td>
            <td style="border: 1px solid black;"><?= $d['no_hp']; ?></td>
            <td style="border: 1px solid black;"><?= $d['email']; ?></td>
            <td style="border: 1px solid black;">
                <a href="edit.php?nim=<?= $d["nim"]?>">Edit</a>
                <a href="delete.php?nim=<?= $d["nim"]?>" onclick="return confirm('Apakah anda yakin menghapus data ini ?');">Hapus</a>
            </td>
        </tr>
        <?php 
        }
        ?>
        
    </table>
</body>
</html>