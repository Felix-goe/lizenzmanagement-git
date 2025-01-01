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

                        <!-- Lizenz-Tabelle -->
                        <div class="table2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mt-4 shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4>Lizenz Management</h4>
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addLicenseModal">
                                                <i class="bi bi-database-add"></i> ADD
                                            </button>
                                        </div>
                                        <div class="card-body">
                                        <table id="licenseTable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>LizenzID</th>
                                                    <th>Lizenzbeginn</th>
                                                    <th>Lizenzende</th>
                                                    <th>Software</th>
                                                    <th>Lizenzstatus</th>
                                                    <th>Verbleibende Zeit</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Data wird dynamisch durch DataTables geladen -->
                                            </tbody>
                                        </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal: Lizenz hinzufügen -->
                        <div class="modal fade" id="addLicenseModal" tabindex="-1" role="dialog" aria-labelledby="addLicenseLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addLicenseLabel">Lizenz hinzufügen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="add-license-form" method="post">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <label>LizenzID</label>
                                                    <input type="text" name="LizenzID" id="LizenzID" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <label>Lizenzbeginn</label>
                                                    <input type="date" name="Lizenzbeginn" id="Lizenzbeginn" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <label>Lizenzende</label>
                                                    <input type="date" name="Lizenzende" id="Lizenzende" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <label>Software</label>
                                                    <input type="text" name="Software" id="Software" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <label>Lizenzstatus</label>
                                                    <select name="Lizenzstatus" id="Lizenzstatus" class="form-control" required>
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                        <option value="expired">Expired</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <label>PCID</label>
                                                    <input type="text" name="PCID" id="PCID" class="form-control" required>
                                                </div>
                                            </div>                                           
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" form="add-license-form">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal: Lizenz bearbeiten -->
                        <div class="modal fade" id="editLicenseModal" tabindex="-1" role="dialog" aria-labelledby="editLicenseLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLicenseLabel">Lizenz bearbeiten</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form id="edit-license-form">
                                        <input type="hidden" id="edit-license-id" name="LizenzID">
                                        <div class="form-group">
                                            <label for="edit-Lizenzbeginn">Lizenzbeginn</label>
                                            <input type="date" id="edit-Lizenzbeginn" name="Lizenzbeginn" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="edit-Lizenzende">Lizenzende</label>
                                            <input type="date" id="edit-Lizenzende" name="Lizenzende" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="edit-Software">Software</label>
                                            <input type="text" id="edit-Software" name="Software" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="edit-Lizenzstatus">Lizenzstatus</label>
                                            <select id="edit-Lizenzstatus" name="Lizenzstatus" class="form-control" required>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                                <option value="expired">Expired</option>
                                            </select>
                                        </div>
                                        <input type="hidden" id="edit-PCID" name="PCID">
                                    </form>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" form="edit-license-form">Edit</button>
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
            $('#licenseTable').DataTable({
                "ajax": {
                    "url": `/licenses/pc/{{ $PCID }}`, // Der korrekte Endpunkt
                    "type": "GET",
                    "dataType": "json",
                    "dataSrc": function (response) {
                        console.log(response); // Debug: Zeigt die Daten in der Konsole
                        if (response.status === 200) {
                            return response.licenses; // Liefert das Array der Lizenzen
                        } else {
                            alert(response.message || "Keine Lizenzen gefunden.");
                            return [];
                        }
                    }
                },
                "columns": [
                    { "data": "LizenzID" },       // LizenzID anzeigen
                    { "data": "Lizenzbeginn" },  // Lizenzbeginn anzeigen
                    { "data": "Lizenzende" },    // Lizenzende anzeigen
                    { "data": "Software" },      // Software anzeigen
                    { "data": "Lizenzstatus" },  // Lizenzstatus anzeigen
                    { 
                        "data": "Lizenzende",
                        "render": function (data) { // Verbleibende Zeit berechnen
                            let today = new Date();
                            let endDate = new Date(data);
                            let diffTime = endDate - today;
                            if (diffTime > 0) {
                                let daysLeft = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
                                return `${daysLeft} Tage verbleiben`;
                            } else {
                                return "Abgelaufen";
                            }
                        }
                    },
                    {
                        "data": null,
                        "render": function (data) { // Aktionen (Edit / Delete)
                            return `
                                <a href="#" class="btn btn-sm btn-success edit-btn" data-id="${data.LizenzID}" data-pcid="${data.PCID}">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger delete-btn" data-id="${data.LizenzID}">Delete</a>
                            `;
                        }
                    }
                ]
            });


            // Lizenz hinzufügen
            $('#add-license-form').submit(function (e) {
                e.preventDefault(); // Standard-Formularaktion verhindern

                const formData = {
                    LizenzID: $('#LizenzID').val(),
                    Lizenzbeginn: $('#Lizenzbeginn').val(),
                    Lizenzende: $('#Lizenzende').val(),
                    Software: $('#Software').val(),
                    Lizenzstatus: $('#Lizenzstatus').val(),
                    PCID: $('#PCID').val()
                };

                $.ajax({
                    url: '/licenses/store',
                    method: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (response) {
                        alert(response.message); // Erfolgsmeldung anzeigen
                        $('#addLicenseModal').modal('hide'); // Modal schließen

                        // DataTable neu laden
                        $('#licenseTable').DataTable().ajax.reload(null, false); 
                    },
                    error: function (xhr) {
                        console.error(xhr.responseText);
                        alert('Fehler beim Hinzufügen der Lizenz.');
                    }
                });
            });


            // Lizenz bearbeiten
            $(document).on('click', '.edit-btn', function () {
                var id = $(this).data('id');
                var pcid = $(this).data('pcid');

                $.ajax({
                    url: `/licenses/${id}/edit`,
                    method: 'GET',
                    success: function (response) {
                        $('#edit-license-id').val(response.lizenz.LizenzID);
                        $('#edit-Lizenzbeginn').val(response.lizenz.Lizenzbeginn);
                        $('#edit-Lizenzende').val(response.lizenz.Lizenzende);
                        $('#edit-Software').val(response.lizenz.Software);
                        $('#edit-Lizenzstatus').val(response.lizenz.Lizenzstatus);
                        $('#edit-PCID').val(response.lizenz.PCID);
                        $('#editLicenseModal').modal('show');
                    },
                    error: function (xhr) {
                        console.error(xhr.responseText);
                        alert('Fehler beim Laden der Lizenzdaten.');
                    }
                });
            });

            // Lizenz aktualisieren
            $('#edit-license-form').submit(function (e) {
                e.preventDefault(); // Standard-Formularaktion verhindern

                const formData = {
                    LizenzID: $('#edit-license-id').val(),
                    Lizenzbeginn: $('#edit-Lizenzbeginn').val(),
                    Lizenzende: $('#edit-Lizenzende').val(),
                    Software: $('#edit-Software').val(),
                    Lizenzstatus: $('#edit-Lizenzstatus').val(),
                    PCID: $('#edit-PCID').val(),
                };

                $.ajax({
                    url: `/licenses/${formData.LizenzID}/update`,
                    method: 'PUT',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    success: function (response) {
                        alert(response.message); // Zeigt Erfolgsmeldung an
                        $('#editLicenseModal').modal('hide'); // Schließt das Modal
                        $('#licenseTable').DataTable().ajax.reload(null, false); // DataTable neu laden
                    },
                    error: function (xhr) {
                        console.error(xhr.responseText);
                        alert('Fehler beim Aktualisieren der Lizenz.');
                    },
                });
            });


            // Lizenz löschen
            $(document).on('click', '.delete-btn', function () {
                var id = $(this).data('id');
                if (confirm('Are you sure you want to delete this license?')) {
                    $.ajax({
                        url: `/licenses/${id}/delete`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            alert(response.message);
                            table.ajax.reload(null, false);
                        },
                        error: function (xhr) {
                            console.error(xhr.responseText);
                            alert('Fehler beim Löschen der Lizenz.');
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

