<?php
$id = $_GET['id'];

// Execute the delete query
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");

// Check if the query was successful
if ($query) {
    // If successful, show the alert and redirect
    echo '<script>
            alert("Hapus Data Berhasil");
            location.href = "index.php?page=buku";
          </script>';
} else {
    // If there was an error, show an error message
    echo '<script>
            alert("Hapus Data Gagal: ' . mysqli_error($koneksi) . '");
            location.href = "index.php?page=buku";
          </script>';
}
?>