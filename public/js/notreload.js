document.getElementById("dataForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Mencegah reload halaman

    let formData = new FormData(this);
    let alertBox = document.getElementById("alertBox");
    let alertMessage = document.getElementById("alertMessage");
    let submitButton = document.getElementById("submitButton");

    // Nonaktifkan tombol submit
    submitButton.disabled = true;
    submitButton.textContent = "Memproses..."; // Ubah teks tombol

    fetch(this.action, {
        method: this.method,
        headers: {
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]')
                .value,
        },
        body: formData,
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                // Tampilkan alert sukses
                alertBox.className =
                    "alert alert-success mt-3 alert-dismissible fade show";
                alertMessage.textContent = data.message;
                alertBox.classList.remove("d-none");

                // Kosongkan form setelah sukses
                document.getElementById("dataForm").reset();
            } else {
                // Tampilkan alert gagal
                alertBox.className =
                    "alert alert-danger mt-3 alert-dismissible fade show";
                alertMessage.textContent =
                    "Terjadi kesalahan. Silakan coba lagi.";
                alertBox.classList.remove("d-none");
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            // Tampilkan alert error
            alertBox.className =
                "alert alert-danger mt-3 alert-dismissible fade show";
            alertMessage.textContent = "Terjadi kesalahan pada server.";
            alertBox.classList.remove("d-none");
        })
        .finally(() => {
            // Aktifkan kembali tombol setelah selesai
            submitButton.disabled = false;
            submitButton.textContent = "Kirim"; // Kembalikan teks tombol
        });
});
