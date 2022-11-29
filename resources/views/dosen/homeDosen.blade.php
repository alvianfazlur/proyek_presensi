<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/styleAdmin.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Dosen</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="/assets/img/school.png" width="30" height="30" class="d-inline-block align-top bx icon" alt="">
            <center class="logo_name">PresenZ</center>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="/presensi/bukaabsen/{id}">
                    <i class='bx bx-calendar-plus'></i>
                    <span class="links_name">Buka Absen</span>
                </a>
                <span class="tooltip">Buka Absen</span>
            </li>
            <li>
                <a href="/presensi/Absensi">
                    <i class='bx bx-calendar-check'></i>
                    <span class="links_name">Cek Absen</span>
                </a>
                <span class="tooltip">Cek Absen</span>
            </li>
            <li>
                <span class="tooltip">Presensi</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">&copy PresenZ</div>
                    </div>
                </div>
                <form action="/logout" method="POST">
                    @csrf
                    <button class='' id="log_out"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="white" class="bi bi-door-open" viewBox="0 0 16 16">
                            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                        </svg></button>
                </form>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <div class="table-wrap"> -->
                        <table class="table table-hover table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Mata Kuliah</th>
                                    <th>Keterangan</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            @foreach($matkul as $m)
                            <tr>
                                <td>{{ $m->nama_matkul }}</td>
                                <td>{{ $m->keterangan }}</td>
                                <td>
                                    <center>
                                        <a class="btn btn-warning" href="/presensi/bukaabsen/{{ $m->id }}">Buka Absen</a>
                                    </center>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                      <!-- </div> -->
                  </div>
              </div>
          </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>