<!-- Tautan dengan Dropdown -->

{{-- <button class="btn btn-primary"  style="background-color: #F26419; padding: 5px 5px; border-radius: 5px;" id="profile-dropdown">Profil</button> --}}

<img src="assets/img/pelamar/ii.png" alt="Profil" class="img-thumbnail rounded-circle" style="cursor: pointer; width: 72.6px; height: 72.6px;" id="profile-dropdown">

<!-- Dropdown menu -->
<div class="dropdown-menu" id="profile-dropdown-menu">
    <a href="/pelamar"><i class="bi bi-person-fill"></i>Profil</a>
    <a href="/lowonganTersimpan"><i class="bi bi-bookmark-fill"></i>Lowongan Tersimpan</a>
    <a href="/faqs"><i class="bi bi-question-circle-fill"></i>Bantuan</a>
    <button type="submit" class="btn btn-primary" style="background-color: #F26419; padding: 5px 10px; border-radius: 5px;" onclick="logout()"> Keluar</button>

    <script>
        function logout() {
            // Mengalihkan ke halaman log out (ganti "your-logout-page.php" dengan halaman log out Anda)
            window.location.href = "/";
        }
    </script>
</div>


<style>
.dropdown-menu {
    width: 210px;
    padding: 5px;
    text-align: center;

}
.dropdown-item {
    text-align: center;
}
</style>

<!-- Kode JavaScript untuk Dropdown -->
<script>
    // Function to toggle the dropdown menu
    function toggleDropdown() {
    var dropdownMenu = document.getElementById("profile-dropdown-menu");
    dropdownMenu.classList.toggle("show");
    }

    // Event listener to trigger the toggleDropdown function when the profile is clicked
    var profileDropdown = document.getElementById("profile-dropdown");
    profileDropdown.addEventListener("click", toggleDropdown);

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
    if (!event.target.matches("#profile-dropdown")) {
        var dropdownMenus = document.getElementsByClassName("dropdown-menu");
        for (var i = 0; i < dropdownMenus.length; i++) {
        var openDropdown = dropdownMenus[i];
        if (openDropdown.classList.contains("show")) {
            openDropdown.classList.remove("show");
        }
        }
    }
    };
</script>


