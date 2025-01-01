<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lizenzenverwaltung</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!--Custom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Tabelle.css') }}">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Menü</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="{{ url('/lizenzen') }}" class="sidebar-link">
                    <i class="lni lni-layout"></i>
                    <span>Lizenzen</span>
                    </a>
                </li>

            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <div class="main">

            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                            <img src="{{ asset('images/account.png') }}" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="content px-3 py-4">

                <div class="container-fluid">
                    <div class="mb-3">

                        <!--Erste Tabelle-->

                         <div class="table1">
                            <div class="row">
                                <div class="container mt-5">
                                    <div class="card shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4>Sekretariatverwaltung</h4>
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addModal">
                                                <i class="bi bi-database-add"></i> ADD
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <table id="sekretariatTable" class="display table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>SekretariatID</th>
                                                        <th>Lehrstuhl</th>
                                                        <th>Büronummer</th>
                                                        <th>Email</th>
                                                        <th>Fakultät</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <!-- Modal -->
                            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addModalLabel">Sekretariat hinzufügen</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="sekretariat-form" method="post">
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <label>SekretariatID</label>
                                                            <input type="text" name="SekretariatID" id="SekretariatID" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <label>Lehrstuhl</label>
                                                            <input type="text" name="Lehrstuhl" id="Lehrstuhl" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <label>Büronummer</label>
                                                            <input type="text" name="Büronummer" id="Büronummer" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <label>Email</label>
                                                            <input type="email" name="Email" id="Email" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg">
                                                            <label>Fakultät</label>
                                                            <input type="fakultät" name="Fakultät" id="Fakultät" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary" form="sekretariat-form">Save</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Sekretariat bearbeiten</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="edit-sekretariat-form" method="post">
                                        <input type="hidden" id="edit-SekretariatID" name="SekretariatID">
                                        <div class="row">
                                            <div class="col-lg">
                                                <label>Lehrstuhl</label>
                                                <input type="text" id="edit-Lehrstuhl" name="Lehrstuhl" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg">
                                                <label>Büronummer</label>
                                                <input type="text" id="edit-Büronummer" name="Büronummer" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg">
                                                <label>Email</label>
                                                <input type="email" id="edit-Email" name="Email" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg">
                                                <label>Fakultät</label>
                                                <input type="fakultät" id="edit-Fakultät" name="Fakultät" class="form-control" required>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" form="edit-sekretariat-form">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>

        $(document).ready(function () {
            // DataTables initialisieren
            var table = $('#sekretariatTable').DataTable({
                "ajax": {
                    "url": "{{ route('getAllSekretariate') }}",
                    "type": "GET",
                    "dataType": "json",
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    "dataSrc": function (response) {
                        if (response.status === 200) {
                            return response.sekretariate;
                        } else {
                            return [];
                        }
                    }
                },
                "columns": [
                    { "data": "SekretariatID" },
                    { "data": "Lehrstuhl" },
                    { "data": "Büronummer" },
                    { "data": "Email" },
                    { "data": "Fakultät" },
                    {
                        "data": null,
                        "render": function (data, type, row) {
                            return `
                                <a href="#" class="btn btn-sm btn-success edit-btn" data-sekretariatid="${data.SekretariatID}" data-lehrstuhl="${data.Lehrstuhl}" data-büronummer="${data.Büronummer}" data-email="${data.Email}" data-fakultät="${data.Fakultät}">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger delete-btn" data-sekretariatid="${data.SekretariatID}">Delete</a>
                            `;
                        }
                    }
                ]
            });

            // Edit-Button
            $(document).on('click', '.edit-btn', function () {
                var SekretariatID = $(this).data('sekretariatid');
                var Lehrstuhl = $(this).data('lehrstuhl');
                var Büronummer = $(this).data('büronummer');
                var Email = $(this).data('email');
                var Fakultät = $(this).data('fakultät');

                $('#edit-SekretariatID').val(SekretariatID);
                $('#edit-Lehrstuhl').val(Lehrstuhl);
                $('#edit-Büronummer').val(Büronummer);
                $('#edit-Email').val(Email);
                $('#edit-Fakultät').val(Fakultät);

                $('#editModal').modal('show');
            });

            // Hinzufügen-Formular
            $('#sekretariat-form').submit(function (e) {
                e.preventDefault();
                const formData = new FormData(this);

                $.ajax({
                    url: '{{ route('storeSekretariat') }}',
                    method: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status === 200) {
                            alert("Sekretariat erfolgreich hinzugefügt.");
                            $('#sekretariat-form')[0].reset();
                            $('#addModal').modal('hide');
                            table.ajax.reload(null, false);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr);
                        alert('Fehler: ' + error);
                    }
                });
            });

            // Bearbeiten-Formular
            $('#edit-sekretariat-form').submit(function (e) {
                e.preventDefault();
                const formData = new FormData(this);

                $.ajax({
                    url: '{{ route('updateSekretariat') }}',
                    method: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status === 200) {
                            alert("Sekretariat erfolgreich aktualisiert.");
                            $('#edit-sekretariat-form')[0].reset();
                            $('#editModal').modal('hide');
                            table.ajax.reload(null, false);
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr);
                        alert('Fehler: ' + error);
                    }
                });
            });

            // Löschen-Button
            $(document).on('click', '.delete-btn', function () {
                var SekretariatID = $(this).data('sekretariatid');

                if (confirm('Sind Sie sicher, dass Sie dieses Sekretariat löschen möchten?')) {
                    $.ajax({
                        url: '{{ route('deleteSekretariat') }}',
                        type: 'DELETE',
                        data: { SekretariatID: SekretariatID },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.status === 200) {
                                alert("Sekretariat erfolgreich gelöscht.");
                                table.ajax.reload(null, false);
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr);
                            alert('Fehler: ' + error);
                        }
                    });
                }
            });
        });

    </script>


<script src="{{ asset('js/script.js') }}"></script>

</body>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit
        ();">Logout</a>
    </form>

</html>

