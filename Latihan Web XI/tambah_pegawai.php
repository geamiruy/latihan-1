<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Form Tambah Pegawai</h2>
        <form id="employeeForm">
            <div class="mb-3">
                <label for="employeeName" class="form-label">Nama Pegawai</label>
                <input type="text" class="form-control" id="employeeName" placeholder="Masukkan nama pegawai" required>
            </div>
            <div class="mb-3">
                <label for="employeeNIP" class="form-label">NIK</label>
                <input type="text" class="form-control" id="employeeNIP" placeholder="Masukkan NIK" required>
            </div>
            <div class="mb-3">
                <label for="employeePhone" class="form-label">No. Telepon</label>
                <input type="tel" class="form-control" id="employeePhone" placeholder="Masukkan no. telepon pegawai" required>
            </div>
            <div class="mb-3">
                <label for="employeePosition" class="form-label">Jabatan</label>
                <input type="text" class="form-control" id="employeePosition" placeholder="Masukkan jabatan pegawai" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pegawai</button>
        </form>

       
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="script.js"></script>
</body>
</html>
