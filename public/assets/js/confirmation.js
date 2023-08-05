function showConfirmationForm() {
    Swal.fire({
        title: 'Banned',
        html: '<h4>Yakin ingin membekukan?</h4><br> Berikan alasan <textarea id="confirmation-text" rows="4" cols="50"></textarea>',
        icon: 'error',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Konfirmasi',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            const confirmationText = document.getElementById('confirmation-text').value;
            // Lakukan aksi berdasarkan teks yang diisi di form textarea
            // Misalnya, tampilkan pesan SweetAlert lain berdasarkan teks konfirmasi
            Swal.fire({
                title: 'Banned Berhasil',
                text: 'User ini di bekukan dengan alasan : ' + confirmationText,
                icon: 'success'
            });
        }
    });
}

function showSuccessNotification() {
    Swal.fire({
        icon: 'success',
        title: 'Your work has been saved',
        showConfirmButton: false,
        timer: 4000
    })
}

function deleteConfirmation() {
    Swal.fire({
        title: 'Yakin akan menghapus event ini?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
                'Berhasil!',
                'Event tersebut berhasil di hapus !',
                'success'
            )
        }
    })
}