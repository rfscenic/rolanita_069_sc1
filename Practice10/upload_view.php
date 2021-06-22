<!DOCTYPE html>
<html>
    <body>
        <!-- Proses upload gambar dengan method POST -->
        <form action="upload_process.php" method="post" enctype="multipart/form-data">
            Pilih Gambar:
            <input type="file" name="gambar_contoh" id="gambar_contoh">
            <input type="submit" name="submit">
        </form>
    </body>
</html>