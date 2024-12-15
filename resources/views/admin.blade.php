<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lizenverwaltung</title>

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!--Custom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Tabelle.css">
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
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-layout"></i>
                        <span>Lizenzen</span>
                    </a>
                </li>

                <!-- Neuer Button für Userverwaltung -->
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-users"></i>
                        <span>Userverwaltung</span>
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
                                <img src="account.png" class="avatar img-fluid" alt="">
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
                        <h3 class="fw-bold fs-4 mb-3">Userverwaltung</h3>


                        <!--Tabelle-->
                        <div class="table">
                            <div class="table_header">
                                <p style="font-size:23px">Userverwaltung</p>
                                <div>
                                    <input type="text" name="" id="" placeholder="Büronummer">
                                    <button class="add_new">Suchen</button>
                                    <button class="add_new"
                                        style="padding: 10px 20px; color: #ffffff ;background-color: #0298cf;"
                                        data-bs-toggle="modal" data-bs-target="#addUserModal">
                                        + Hinzufügen
                                    </button>

                                </div>
                            </div>
                                <div class="table_section">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Büronummer</th>
                                                <th>Sekretariat-ID</th>
                                                <th>Lehrstuhl</th>
                                                <th>Email</th>
                                                <th>Telefonnummer</th>
                                                <th>Aktion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>101</td>
                                                <td>1234</td>
                                                <td>Informatik</td>
                                                <td>info@uni-goettingen.de</td>
                                                <td>+49 123 456789</td>
                                                <td>
                                                    <button id="edit1"><i
                                                            class="fa-solid fa-pen-to-square"></i></button>
                                                    <button id="delete1"><i
                                                            class="fa-solid fa-delete-left"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>102</td>
                                                <td>5678</td>
                                                <td>BWL</td>
                                                <td>bwl@uni-goettingen.de</td>
                                                <td>+49 987 654321</td>
                                                <td>
                                                    <button id="edit2"><i
                                                            class="fa-solid fa-pen-to-square"></i></button>
                                                    <button id="delete2"><i
                                                            class="fa-solid fa-delete-left"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            


                            <div class="pagination">
                                <div><i class="fa-solid fa-angles-left" style="color: #ffffff;"></i></div>
                                <div><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></div>
                                <div class="dark-blue-btn">1</div>
                                <div style="background-color: #0e2238;">1</div>
                                <!--Hier nur für Mockup den Button verfärbt damit man sieht das das grade Seite 1 ist-->
                                <div>2</div>
                                <div><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i></div>
                                <div><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></div>
                            </div>
                        </div>



                        <div class="modal" tabindex="-1" id="addLizenz" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Lizenz Hinzufügen</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            id="hinzufügenXBtn">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="align-items: center;">
                                        <div class="form-group">
                                            <label>Lizenz-ID</label>
                                            <input type="text" class="form-control" style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Software</label>
                                            <input type="text" class="form-control" required style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Lizenzbeginn</label>
                                            <input type="text" class="form-control" required style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Lizenzablauf</label>
                                            <input type="text" class="form-control" required style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Kundennummer</label>
                                            <input type="text" class="form-control" required style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Rechung</label>
                                            <fieldset class="upload_dropZone text-center mb-3 p-4"
                                                style="display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 10px; height: 300px; text-align: center;">

                                                <legend class="visually-hidden">Datei hochladen</legend>
                                                <i class="fa-solid fa-upload"
                                                    style="color: #0298cf; font-size: 200%; margin-bottom: 5px;"></i>


                                                <p class="small my-2" style="margin: 0;">Bild der Rechnung hier
                                                    hineinziehen
                                                    <br><i>oder</i>
                                                </p>

                                                <input id="upload_image_background" data-post-name="image_background"
                                                    data-post-url="https://someplace.com/image/uploads/backgrounds/"
                                                    class="position-absolute invisible" type="file" multiple
                                                    accept="image/jpeg, image/png, image/svg+xml" />

                                                <label class="btn btn-upload mb-3 blue-btn"
                                                    for="upload_image_background">Datei
                                                    auswählen</label>

                                                <div
                                                    class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0">
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="modal-footer" style="justify-content: center;">
                                        <button type="button" class="btn close blue-btn"
                                            id="hinzufügenModal">Hinzufügen</button>
                                        <button type="button" class="btn close red-btn" id="hinzufügenAbbrechenBtn"
                                            data-dismiss="modal">Abbrechen</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal" tabindex="-1" id="editLizenz" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Lizenz Editieren</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            id="editXBtn">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" style="align-items: center;">
                                        <div class="form-group">
                                            <label>Lizenz-ID</label>
                                            <input type="text" class="form-control" placeholder="0001"
                                                style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" placeholder="0001" style="margin-top: 5px;">
                                            <label>Software</label>
                                            <input type="text" class="form-control" placeholder="Microsoft Word"
                                                style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Lizenzbeginn</label>
                                            <input type="text" class="form-control" placeholder="15.11.2024" required
                                                style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Lizenzablauf</label>
                                            <input type="text" class="form-control" placeholder="16.11.2024" required
                                                style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Kundennummer</label>
                                            <input type="text" class="form-control" placeholder="123456789" required
                                                style="margin-left: auto;">
                                        </div>
                                        <div class="form-group" style="margin-top: 5px;">
                                            <label>Rechung</label>
                                            <fieldset class="upload_dropZone text-center mb-3 p-4"
                                                style="display: flex; flex-direction: column; justify-content: center; align-items: center; gap: 10px; height: 300px; text-align: center;">

                                                <legend class="visually-hidden">Datei hochladen</legend>
                                                <i class="fa-solid fa-upload"
                                                    style="color: #0298cf; font-size: 200%; margin-bottom: 5px;"></i>


                                                <p class="small my-2" style="margin: 0;">Bild der Rechnung hier
                                                    hineinziehen
                                                    <br><i>oder</i>
                                                </p>

                                                <input id="upload_image_background" data-post-name="image_background"
                                                    data-post-url="https://someplace.com/image/uploads/backgrounds/"
                                                    class="position-absolute invisible" type="file" multiple
                                                    accept="image/jpeg, image/png, image/svg+xml" />

                                                <label class="btn btn-upload mb-3 blue-btn"
                                                    for="upload_image_background">Datei
                                                    auswählen</label>

                                                <div
                                                    class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0">
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn blue-btn" id="editModal"
                                            data-dismiss="editModal">Speichern</button>
                                        <button type="button" class="btn red-btn" id="editAbbrechenBtn"
                                            id="editAbbrechenBtn">Abbrechen</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal" tabindex="-1" id="deleteLizenz" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Lizen löschen</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            id="löschenXBtn">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Sind sie sicher das sie diesen Eintrag löschen möchten?</p>
                                        <p class="text-warning"><small>Dieser Vorgang kann nicht rückgängig gemacht
                                                werden!</small></p>
                                    </div>
                                    <div class="modal-footer" style="justify-content: center;">
                                        <button type="button" class="btn blue-btn" id="löschenAbbrechenBtn"
                                            data-dismiss="modal">Abbrechen</button>
                                        <button type="button" class="btn red-btn" id="löschenModal">Löschen</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </main>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="addUserModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User hinzufügen</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="officeNumber">Büronummer</label>
                            <input type="text" class="form-control" id="officeNumber" placeholder="Büronummer">
                        </div>
                        <div class="form-group">
                            <label for="secretariatId">Sekretariat-ID</label>
                            <input type="text" class="form-control" id="secretariatId" placeholder="Sekretariat-ID">
                        </div>
                        <div class="form-group">
                            <label for="chair">Lehrstuhl</label>
                            <input type="text" class="form-control" id="chair" placeholder="Lehrstuhl">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefonnummer</label>
                            <input type="text" class="form-control" id="phone" placeholder="Telefonnummer">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn blue-btn" id="saveUserButton">Speichern</button>
                    <button type="button" class="btn red-btn" data-bs-dismiss="modal">Abbrechen</button>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
</body>

</html>