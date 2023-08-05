document.addEventListener("DOMContentLoaded", function() {
    const datepicker = document.getElementById("datepicker");
    flatpickr(datepicker, {
        dateFormat: "d-m-Y", // Format tanggal yang ingin ditampilkan
        locale: "id", // Lokalisasi bahasa, dalam contoh ini menggunakan bahasa Indonesia
    });
});