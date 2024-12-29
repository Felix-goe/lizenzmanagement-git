<!-- FINNs Template -->

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!--google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!--Custom-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Tabelle.css">
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

                        <!--Tabelle-->
                        <div class="table">
                            <div class="table_header">
                                <p style="font-size:23px">Lizenzen</p>
                                <div>
                                    <input type="text" name="" id="" placeholder="Lizenzname">
                                    <button class="add_new"
                                        style="padding: 10px 20px; color: #ffffff ;background-color: #0298cf;">Suchen</button>
                                    <button class="add_new"
                                        style="padding: 10px 20px; color: #ffffff ;background-color: #0298cf;"
                                        id="hinzufügen">+ Hinzufügen</button>
                                </div>
                            </div>

                            <div class="table_section">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Computer-ID</th>
                                            <th>Büronummer</th>
                                            <th>Lizenen</th>
                                            <th>Aktion</th>
                                        </tr>
                                    </thead>
                                    @if($computers)
                                        @foreach($computers as $computer)
                                            <tr>
                                                <td>{{$computer->computer_id}}</td>
                                                <td>{{$computer->bueronummer}}</td>
                                                <td><a href="" target="_blank">Zu den Lizenzen</a></td>
                                                
                                                <td>
                                                    <button data-bs-toggle="modal" data-bs-target="#deleteLizenz" data-computer-id="{{$computer->id}}">
                                                        <i class="fa-solid fa-delete-left"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    <tbody>
                                        
                                            

                                    </tbody>
                                </table>
                            </div>
                            {{ $computers->links() }}
                            <div class="pagination">
                                <div><i class="fa-solid fa-angles-left" style="color: #ffffff;"></i></div>
                                <div><i class="fa-solid fa-angle-left" style="color: #ffffff;"></i></div>
                                <div>1</div>
                                <div>2</div>
                                <div><i class="fa-solid fa-angles-right" style="color: #ffffff;"></i></div>
                                <div><i class="fa-solid fa-angle-right" style="color: #ffffff;"></i></div>
                            </div>
                        </div>


                        <!----Hinzufügen Start--------->
                        <div class="modal" tabindex="-1" id="addLizenz" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Computer Hinzufügen</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                            id="hinzufügenXBtn">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="/lizenzen/speichern" method="Post">
                                        @csrf
                                        <div class="modal-body" style="align-items: center;">
                                            <div class="form-group">
                                                <label>Computer-ID</label>
                                                <input type="text" class="form-control" name="computerID"style="margin-left: auto;">
                                            </div>
                                            <div class="form-group" style="margin-top: 5px;">
                                                <label>Büronummer</label>
                                                <input type="text" class="form-control" name="bueronummer" required style="margin-left: auto;">
                                            </div>    
                                        </div>
                                        <div class="modal-footer" style="justify-content: center;">
                                            <button type="submit" class="btn close blue-btn"
                                                id="hinzufügenModal">Hinzufügen</button>
                                            <button type="button" class="btn close red-btn" id="hinzufügenAbbrechenBtn"
                                                data-dismiss="modal">Abbrechen</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        
                        <!--Editieren-->


                        <!-- Löschen Modal -->
                        <div class="modal" tabindex="-1" id="deleteLizenz" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Lizenz löschen</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Sind Sie sicher, dass Sie diesen Eintrag löschen möchten?</p>
                                        <p class="text-warning"><small>Dieser Vorgang kann nicht rückgängig gemacht werden!</small></p>
                                    </div>
                                    <div class="modal-footer" style="justify-content: center;">
                                        <!-- Abbrechen Button -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Abbrechen</button>
                                        <!-- Löschen Button -->
                                        <form id="deleteForm" action="/lizenzen/löschen" method="POST">
                                            @csrf
                                            <input type="hidden" name="computerID" id="computerIDToDelete">
                                            <button type="submit" class="btn btn-danger">Löschen</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
</body>

</html>