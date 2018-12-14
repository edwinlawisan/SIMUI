<div id ="buatPanitia" class="w3-modal">
    <div class="w3-modal-content w3-card-4" style="max-width:600px">
        <div class="w3-container w3-teal" >
            <span onclick="document.getElementById('buatPanitia').style.display='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <h2>Tambah Kepanitiaan</h2>					
        </div>
        <form method="post" action="tampilkanKepanitiaan.php" class="w3-container">
            <br>
            <p>
            <label class="w3-text-teal" for="nama_kepanitiaan"><b>Nama Panitia</b></label>
            <input id="nama_kepanitiaan" name="nama_kepanitiaan" type="text" class="w3-input w3-border w3-light-grey" required></p>
            <p>
            <label class="w3-text-teal"><b>Organisasi yang membawahi</b></label>
            <select class="w3-select" name="organisasinya" required>
                <option value="" disabled selected>Pilih Topik</option>
                <?php 
                    $conn = connection();
                    $query = "SELECT p.id, p.nama FROM simui.pembuat_event p, simui.organisasi o WHERE p.id = o.id_organisasi";
                    $result = pg_query($conn, $query);
                    if (!$result) {
                        echo "Problem with query " . $querry . "<br/>";
                        echo pg_last_error();
                        exit();
                    }
                    
                    while ($row = pg_fetch_assoc($result)){
                        echo '<option value = "' .$row["id"]. '" >' .$row["nama"]. '</option>';
                    };    
                ?>
            </select></p>
            <p>
            <label class="w3-text-teal" for="email"><b>Email</b></label>
            <input class="w3-input w3-border w3-light-grey" id="email" name="email" type="text" class="validate" required></p>
            <p>
            <label class="w3-text-teal" for="website"><b>Website</b></label>
            <input class="w3-input w3-border w3-light-grey" id="website" name="website" type="text" class="validate"></p>
            <p>
            <label class="w3-text-teal" for="kontak_cp"><b>Kontak CP</b></label>
            <input class="w3-input w3-border w3-light-grey" id="kontak_cp" name="kontak_cp" type="text" class="validate" required></p>
            <p>
            <label class="w3-text-teal" for="kategori"><b>Kategori</b></label>
            <select class="w3-select" name="kategori" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Seni">Seni</option>
                <option value="Agama">Agama</option>
                <option value="Keilmuan">Keilmuan</option>
            </select></p>
            <p>
            <label class="w3-text-teal" for="urlLogo"><b>URL Logo</b></label>
            <input class="w3-input w3-border w3-light-grey" id="urlLogo" name="urlLogo" type="text" class="validate"></p>
            <p>
            <label class="w3-text-teal" for="deskripsi"><b>Deskripsi</b></label>
            <input class="w3-input w3-border w3-light-grey" id="deskripsi" name="deskripsi" type="text" class="validate" required></p>
            <button class="w3-btn w3-teal" type="submit" name="buat_kepanitiaan">Submit</button></p>
        </form>
    </div>
</div>

<?php 
    if (isset($_POST['buat_kepanitiaan'])) {    
        $con = connection();
        
        $id = (rand(1, 100000));
        $queryid = 'SELECT id FROM simui.pembuat_event WHERE id = "' .$id. '"';
        $checkid = pg_query($con, $queryid);
        

        if(!$checkid){
            $id = (rand(1, 100000));
            $checkid = pg_query($con, $queryid);
        }
        
        $nama = $_POST['nama_kepanitiaan'];
        $org = $_POST['organisasinya'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $kategori = $_POST['kategori'];
        $kontakcp = $_POST['kontak_cp'];
        $urlfile = $_POST['urlfile'];
        $deskripsi = $_POST['deskripsi'];

        $sql1 = "INSERT INTO simui.pembuat_event VALUES('$id','$nama','$email','$website','Fakultas','$kategori','$urlFile', '$deskripsi','$kontakcp')";
        $sql2 = "INSERT INTO simui.kepanitiaan VALUES('$id', '$org')";
        if(pg_query($con,$sql1)){
            if(pg_query($con,$sql2)){
                echo "<script type='text/javascript'>alert('Berhasil Ditambahkan');</script>";
            } else {
                echo "<script type='text/javascript'>alert('Organisasi Salah');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Querry Salah');</script>";
        }
    
    }
?>