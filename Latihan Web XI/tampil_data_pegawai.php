<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Data Pegawai</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIK</th>
                    <th>Email</th>
                    <th>No. Telepon</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Rika</td>
                    <td>12345678</td>
                    <td>Rika@example.com</td>
                    <td>08123456789</td>
                    <td>Developer</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editData(1)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(1)">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>ayu</td>
                    <td>87654321</td>
                    <td>ayu@example.com</td>
                    <td>08129876543</td>
                    <td>Manager</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editData(2)">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteData(2)">Delete</button>
                    </td>
                </tr>
                <!-- Tambahkan baris data pegawai lainnya di sini -->
            </tbody>
        </table>
    </div>

    <!-- Modal untuk Edit Data -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Data Pegawai</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Nama Pegawai</label>
                            <input type="text" class="form-control" id="editName">
                        </div>
                        <div class="mb-3">
                            <label for="editNIP" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="editNIP">
                        </div>
                        <div class="mb-3">
                            <label for="editNIP" class="form-label">Email</label>
                            <input type="text" class="form-control" id="editemail">
                        </div>
                        <div class="mb-3">
                            <label for="editPhone" class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control" id="editPhone">
                        </div>
                        <div class="mb-3">
                            <label for="editPosition" class="form-label">Jabatan</label>
                            <input type="text" class="form-control" id="editjabatan">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="saveChanges()">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript untuk menangani aksi Edit dan Delete -->
    <script>
        function editData(id) {
            // Fungsi ini akan menampilkan modal edit dengan data pegawai yang dipilih berdasarkan ID
            // Data bisa diambil dari server atau diisi secara langsung seperti contoh di bawah ini
            document.getElementById('editName').value = id === 1 ? 'John Doe' : 'Jane Smith';
            document.getElementById('editNIP').value = id === 1 ? '12345678' : '87654321';
            document.getElementById('editEmail').value = id === 1 ? 'john.doe@example.com' : 'jane.smith@example.com';
            document.getElementById('editPhone').value = id === 1 ? '08123456789' : '08129876543';
            document.getElementById('editjabatan').value = id === 1 ? 'Developer' : 'Manager';

            var editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        }

        function deleteData(id) {
            // Fungsi ini akan menghapus data pegawai berdasarkan ID
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                alert('Data dengan ID ' + id + ' telah dihapus.');
                // Lakukan operasi penghapusan data di sini
            }
        }

        function saveChanges() {
            // Fungsi ini akan menyimpan perubahan data setelah proses edit
            alert('Perubahan telah disimpan.');
            // Lakukan operasi penyimpanan data di sini, misalnya mengirim data ke server
        }
        let employees = [
    {
        id: 1,
        name: 'John Doe',
        nik: '12345678',
        email: 'john.doe@example.com',
        phone: '08123456789',
        jabatan: 'Developer'
    },
    {
        id: 2,
        name: 'Jane Smith',
        nik: '87654321',
        email: 'jane.smith@example.com',
        phone: '08129876543',
        jabatan: 'Manager'
    }
];

let currentEditIndex = -1;

function renderTable() {
    const tableBody = document.querySelector('tbody');
    tableBody.innerHTML = '';

    employees.forEach((employee, index) => {
        const row = `
            <tr>
                <td>${index + 1}</td>
                <td>${employee.name}</td>
                <td>${employee.nik}</td>
                <td>${employee.email}</td>
                <td>${employee.phone}</td>
                <td>${employee.jabatan}</td>
                <td>
                    <button class="btn btn-warning btn-sm" onclick="editData(${index})">Edit</button>
                    <button class="btn btn-danger btn-sm" onclick="deleteData(${index})">Delete</button>
                </td>
            </tr>
        `;
        tableBody.innerHTML += row;
    });
}

function editData(index) {
    currentEditIndex = index;

    const employee = employees[index];
    document.getElementById('editName').value = employee.name;
    document.getElementById('editNIP').value = employee.nik;
    document.getElementById('editEmail').value = employee.email;
    document.getElementById('editPhone').value = employee.phone;
    document.getElementById('editjabatan').value = employee.jabatan;
 

    var editModal = new bootstrap.Modal(document.getElementById('editModal'));
    editModal.show();
}

function saveChanges() {
    const name = document.getElementById('editName').value;
    const nik = document.getElementById('editNIP').value;
    const email = document.getElementById('editEmail').value;
    const phone = document.getElementById('editPhone').value;
    const jabatan = document.getElementById('editjabatan').value;

    employees[currentEditIndex] = { ...employees[currentEditIndex], name, nik,email, phone, jabatan };

    renderTable();
    var editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
    editModal.hide();
}

function deleteData(index) {
    if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        employees.splice(index, 1);
        renderTable();
    }
}

// Render table on page load
renderTable();

    </script>
</body>
</html>

