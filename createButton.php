<div id ="buatPanitia" class="w3-modal">
    <div class="w3-modal-content w3-card-4" style="max-width:600px">
        <div class="w3-container w3-teal" >
            <span onclick="document.getElementById('buatPanitia').style.display='none'" class="w3-button w3-large w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            <h2>Tambah Kepanitiaan</h2>					
        </div>
        <form method="post" action="buatKepanitiaan.php" class="w3-container">
            <br>
            <p>
            <label class="w3-text-teal" for="nama_kepanitiaan"><b>Nama Panitia</b></label>
            <input id="nama_kepanitiaan" name="nama_kepanitiaan" type="text" class="w3-input w3-border w3-light-grey" required></p>
            <p>
            <label class="w3-text-teal"><b>Organisasi yang membawahi</b></label>
            <select class="w3-select" name="organisasinya" required>
                <option value="" disabled selected>Pilih Topik</option>
                <option value="BEM">BEM</option>
                <option value="DPM">DPM</option>
                <option value="Ristek">Ristek</option>
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
                <option value="" disabled selected>Pilih Topik</option>
                <option value="Olahraga">Olahraga</option>
                <option value="Seni">Seni</option>
                <option value="StandUpComedy">Stand Up Comedy</option>
            </select></p>
            <p>
            <label class="w3-text-teal" for="logo"><b>Logo</b></label>
            <input class="w3-input w3-border w3-light-grey" id="logo" name="logo" type="file" class="validate"></p>
            <p>
            <label class="w3-text-teal" for="deskripsi"><b>Deskripsi</b></label>
            <input class="w3-input w3-border w3-light-grey" id="deskripsi" name="deskripsi" type="text" class="validate" required></p>
            <button class="w3-btn w3-teal" type="submit" name="buat_kepanitiaan">Submit</button></p>
        </form>
    </div>
</div>