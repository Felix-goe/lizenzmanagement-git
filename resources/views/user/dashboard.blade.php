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
                                <div class="col-md-12">
                                    <div class="card mt-4 shadow">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4>Computer Registation</h4>
                                            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="bi bi-database-add"></i> ADD
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <table id="myTable" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>PCID</th>
                                                        <th>Büronummer</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="computer-form" method="post">
                                            
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <label>PC-ID</label>
                                                        <input type="text" name="PCID" id="PCID" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <label>Büronummer</label>
                                                        <input type="text" name="Büronummer" id="Büronummer" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" form="computer-form">Save</button>
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
                                            <h5 class="modal-title" id="editModalLabel">Edit Computer</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="edit-form" method="post">
                                                <input type="hidden" id="edit-id" name="id">
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <label>PC-ID</label>
                                                        <input type="text" id="edit-PCID" name="PCID" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <label>Büronummer</label>
                                                        <input type="text" id="edit-Büronummer" name="Büronummer" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" form="edit-form">Edit</button>
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
            var table = $('#myTable').DataTable({
                "ajax": {
                    "url": "{{ route('getall') }}",
                    "type": "GET",
                    "dataType": "json",
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    "dataSrc": function (response) {
                        if (response.status === 200) {
                            return response.computers;
                        } else {
                            return [];
                        }
                    }
                },
                "columns": [
                    { "data": "PCID" },
                    { "data": "Büronummer" },
                    {
                        "data": null,
                        "render": function (data, type, row) {
                            return `
                                <a href="#" class="btn btn-sm btn-success edit-btn" data-PCID="${data.PCID}">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger delete-btn" data-PCID="${data.PCID}">Delete</a>
                                <a href="/licenses/view/${data.PCID}" class="btn btn-sm btn-info">Show</a>
                            `;
                        }
                    }
                ]

            });

            //Für Edit

            $(document).on('click', '.edit-btn', function () {
                var PCID = $(this).data('pcid'); // Holen des PCID-Werts
                var Büronummer = $(this).data('büronummer'); // Holen der Büronummer

                $('#edit-PCID').val(PCID);
                $('#edit-Büronummer').val(Büronummer);
                $('#editModal').modal('show');
            });


            // Event-Listener für das Hinzufügen-Formular
            $('#computer-form').submit(function (e) {
                e.preventDefault();
                const computerdata = new FormData(this);

                $.ajax({
                    url: '{{ route('store') }}',
                    method: 'POST',
                    data: computerdata,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status == 200) {
                            alert("Saved successfully");
                            $('#computer-form')[0].reset();
                            $('#exampleModal').modal('hide');
                            table.ajax.reload(null, false); // Tabelle neu laden
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr);
                        alert('Error: ' + error);
                    }
                });
            });

            // Event-Listener für das Edit-Formular
            $('#edit-form').submit(function (e) {
                e.preventDefault();
                const computerdata = new FormData(this);

                $.ajax({
                    url: '{{ route('update') }}',
                    method: 'POST',
                    data: computerdata,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.status === 200) {
                            alert(response.message);
                            $('#edit-form')[0].reset();
                            $('#editModal').modal('hide');
                            table.ajax.reload(null, false); // Tabelle neu laden
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr);
                        alert('Error: ' + error);
                    }
                });
            });


            //Delete 

            $(document).on('click', '.delete-btn', function () {
                var PCID = $(this).data('pcid'); // Holen des PCID-Werts

                if (confirm('Are you sure you want to delete this computer?')) {
                    $.ajax({
                        url: '{{ route('delete') }}',
                        type: 'DELETE',
                        data: { PCID: PCID }, // Senden von PCID
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.status === 200) {
                                alert(response.message);
                                table.ajax.reload(null, false); // Tabelle neu laden
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error(xhr);
                            alert('Error: ' + error);
                        }
                    });
                }
            });

            $(document).on('click', '.show-btn', function (e) {
            e.preventDefault();

            const PCID = $(this).data('pcid'); // Holen der PCID aus dem Button

            // AJAX-Anfrage, um Lizenzen zu laden
            $.ajax({
                url: `/licenses/pc/${PCID}`, // API-Route, um Lizenzen abzurufen
                type: 'GET',
                success: function (response) {
                    if (response.status === 200) {
                        // Tabelle mit den gefilterten Lizenzen aktualisieren
                        $('#licenseTable').DataTable().clear().rows.add(response.licenses).draw();
                        alert(`Lizenzen für PC ${PCID} angezeigt.`);
                    } else {
                        alert('Keine Lizenzen für diesen PC gefunden.');
                    }
                },
                error: function (xhr, status, error) {
                    console.error(xhr);
                    alert('Fehler beim Abrufen der Lizenzen.');
                }
            });
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

