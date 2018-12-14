<div id ="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4" style="max-width:600px">
        <div class="w3-container w3-teal" >
            <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <h2>Update <?php echo($row["nama"]) ?></h2>
        </div>
        <?php 
            echo '<form method="post" action="detil_kepanitiaan.php?id=' . $_GET["id"]. '" class="w3-container">';
            echo '<input id="id_kepanitiaan" name="id_kepanitiaan" type="hidden" value = ' . $row["id"] . ' class="w3-input w3-border w3-light-grey" required></p>';
            ?>
            <br>
            <p>
            <label class="w3-text-teal" for="nama_kepanitiaan"><b>Nama Panitia</b></label>
            <?php 
            echo '<input id="nama_kepanitiaan" name="nama_kepanitiaan" type="text" value = ' . $row["nama"] . ' class="w3-input w3-border w3-light-grey" required></p>';
            ?>
            <p>
            <label class="w3-text-teal"><b>Organisasi yang membawahi</b></label>
            <select class="w3-select" name="organisasinya" required>
                <?php 
                    $connec = connection();
                    $query = "SELECT p.id, p.nama FROM simui.pembuat_event p, simui.organisasi o WHERE p.id = o.id_organisasi";
                    $query2 = "SELECT id_organisasi FROM kepantiaan  WHERE id_kepanitiaan = '" . $row["id"] . "'";
                    $result = pg_query($connec, $query);
                    if (!$result) {
                        echo "<script type='text/javascript'>alert('$query');</script>";
                        echo pg_last_error();
                        exit();
                    }
                    while ($row2 = pg_fetch_assoc($result)){
                        echo '<option value = "' .$row2["id"]. '" >' .$row2["nama"]. '</option>';
                    };    
                ?>
            </select></p>
            <p>
            <label class="w3-text-teal" for="email"><b>Email</b></label>
            <?php 
            echo '<input class="w3-input w3-border w3-light-grey" id="email" name="email" type="text" value = "' .$row["email"]. '" class="validate" required></p>';
            ?>
            <p>
            <label class="w3-text-teal" for="website"><b>Website</b></label>
            
            <?php 
            echo '<input class="w3-input w3-border w3-light-grey" id="website" name="website" type="text" value = "' .$row["alamat_website"]. '"></p>';
            ?>

            <p>
            <label class="w3-text-teal" for="kontak_cp"><b>Kontak CP</b></label>
            
            <?php 
            echo '<input class="w3-input w3-border w3-light-grey" id="kontak_cp" name="kontak_cp" type="text" value = "' .$row["contact_person"]. '" required></p>';
            ?>
            
            <p>
            <label class="w3-text-teal" for="kategori"><b>Kategori</b></label>
            <select class="w3-select" name="kategori" required>
                <option value="Olahraga">Olahraga</option>
                <option value="Seni">Seni</option>
                <option value="Agama">Agama</option>
                <option value="Keilmuan">Keilmuan</option>
            </select></p>
            <p>
            <label class="w3-text-teal" for="urlLogo"><b>URL Logo</b></label>
            
            <?php 
            echo '<input class="w3-input w3-border w3-light-grey" id="urlLogo" name="urlLogo" value="' .$row["logo"]. '"type="text"></p>';
            ?>
            
            <p>
            <label class="w3-text-teal" for="deskripsi"><b>Deskripsi</b></label>
            
            <?php 
            echo '<input class="w3-input w3-border w3-light-grey" id="deskripsi" name="deskripsi" type="text" value="' .$row["deskripsi"]. '" required></p>';
            ?>
            
            <button class="w3-btn w3-teal" type="submit" name="update_kepanitiaan">Update</button></p>
        </form>
    </div>
</div>

<?php 
    if (isset($_POST['update_kepanitiaan'])) {    
        $con = connection();
        
        $id = $_POST['id_kepanitiaan'];
        $nama = $_POST['nama_kepanitiaan'];
        $org = $_POST['organisasinya'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $kategori = $_POST['kategori'];
        $kontakcp = $_POST['kontak_cp'];
        $urlfile = $_POST['urlfile'];
        $deskripsi = $_POST['deskripsi'];

        $sql1 = "UPDATE simui.pembuat_event SET nama = '$nama', email = '$email',alamat_website = '$website',tingkatan= 'Fakultas', kategori = '$kategori',logo = '$urlFile',deskripsi = '$deskripsi', contact_person = '$kontakcp' WHERE id = '$id'" ;
        $sql2 = "UPDATE simui.kepanitiaan SET id_organisasi = '$org' WHERE id_kepanitiaan = '$id'";
        if(pg_query($con,$sql1)){
            if(pg_query($con,$sql2)){
                echo "<script type='text/javascript'>alert('Berhasil di update');
                window.location.href = 'detil_kepanitiaan.php?id=' + $id;</script>";
                
            } else {
                echo "<script type='text/javascript'>alert('Organisasi Salah');</script>";
            }
        } else {
            echo pg_last_error();
        }
    
    }
?>