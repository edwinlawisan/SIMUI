<div id ="id03" class="w3-modal">
    <div class="w3-modal-content w3-card-4" style="max-width:600px">
        <div class="w3-container w3-teal" >
            <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <h2>Update Compfest</h2>
        </div>
        <form method="post" action="buatKepanitiaan.php" class="w3-container">
            <br>
            <p>
            <label class="w3-text-teal" for="nama_kepanitiaan"><b>Nama Panitia</b></label>
            <input id="nama_kepanitiaan" name="nama_kepanitiaan" type="text" value = "Compfest" class="w3-input w3-border w3-light-grey" required></p>
            <p>
            <label class="w3-text-teal"><b>Organisasi yang membawahi</b></label>
            <select class="w3-select" name="organisasinya" required>
                <option value="BEM" selected>BEM</option>
                <option value="DPM">DPM</option>
                <option value="Ristek">Ristek</option>
            </select></p>
            <p>
            <label class="w3-text-teal" for="email"><b>Email</b></label>
            <input class="w3-input w3-border w3-light-grey" id="email" name="email" type="text" value = "compfest@cs.ui.ac.id" class="validate" required></p>
            <p>
            <label class="w3-text-teal" for="website"><b>Website</b></label>
            <input class="w3-input w3-border w3-light-grey" id="website" name="website" type="text" value = "compfest.web.id"></p>
            <p>
            <label class="w3-text-teal" for="kontak_cp"><b>Kontak CP</b></label>
            <input class="w3-input w3-border w3-light-grey" id="kontak_cp" name="kontak_cp" type="text" value = "081231231231" required></p>
            <p>
            <label class="w3-text-teal" for="kategori"><b>Kategori</b></label>
            <select class="w3-select" name="kategori" required>
                <option value="Teknologi" selected>Teknologi</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Seni">Seni</option>
                <option value="StandUpComedy">Stand Up Comedy</option>
            </select></p>
            <p>
            <label class="w3-text-teal" for="logo"><b>Logo</b></label>
            <input class="w3-input w3-border w3-light-grey" id="logo" name="logo" type="file"></p>
            <p>
            <label class="w3-text-teal" for="deskripsi"><b>Deskripsi</b></label>
            <input class="w3-input w3-border w3-light-grey" id="deskripsi" name="deskripsi" type="text" value="Event IT Terbesar di Indonesia" required></p>
            <button class="w3-btn w3-teal" type="submit" name="buat_kepanitiaan">Update</button></p>
        </form>
    </div>
</div>
<?php 
    require "connect.php";
    if (isset($_POST['buat_kepanitiaan'])) {    
        $conn = connection();
        $id = (rand(1, 100000))
        $nama = $_POST['nama_kepanitiaan'];
        $organisasi = $_POST['organisasinya'];
        $email = $_POST['email'];
        $website = $_POST['website'];
        $kategori = $_POST['kategori'];
        $kontakcp = $_POST['kontak_cp'];
        $logo = $_POST['logo'];
        $deskripsi = $_POST['deskripsi'];
        echo ("<h4>" .$logo. "</h4>")
        // $url_berita = $_POST['url_berita'];
        // $judul = $_POST['judul'];
        // $topik = $_POST['topik'];
        // $tags = $_POST['tags'];
        // $jumlah_kata = $_POST['jumlah_kata'];
        // $id_universitas = $_POST['id_universitas'];
        // $sql = "INSERT INTO bmnc.berita VALUES('$url_berita','$judul','$topik','now','now',$jumlah_kata,0,$id_universitas)";
        // if (pg_query($db,$sql)) {
        //     echo "Data entered successfully. ";
        // }else {
        //     echo "Failed";
        //     echo "errornya ".pg_last_error(); 
        // }
    
    }
?>