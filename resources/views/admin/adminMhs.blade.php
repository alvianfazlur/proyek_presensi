<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="/css/styleAdmin.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin</title>
    </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <img src="/assets/img/school.png" width="30" height="30" class="d-inline-block align-top bx icon" alt="">
        <div class="logo_name">PresenZ</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
          <i class='bx bx-search' ></i>
         <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="/index/admin/dosen">
          <i class='bx bx-user'></i>
          <span class="links_name">Dosen</span>
        </a>
         <span class="tooltip">Dosen</span>
      </li>
      <li>
       <a href="/index/admin/mahasiswa">
         <i class='bx bx-user' ></i>
         <span class="links_name">Mahasiswa</span>
       </a>
       <span class="tooltip">Mahasiswa</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Presensi</span>
       </a>
       <span class="tooltip">Presensi</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
             <div class="name">&copy PresenZ</div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section">
  <div class="container">
            <div class="row">
                <div class="col-md-12">
    <table class="table table-hover table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th  class="table-info">Nama</th>
            <th  class="table-info">NRP</th>
            <th  class="table-info">Alamat</th>
            <th  class="table-info">Jurusan</th>
            <th  class="table-info">Angkatan</th>
            <th  class="table-info">Kelas</th>
            <th  class="table-info">Nomor Telepon</th>
            <th  class="table-info">Aksi</th>
        </tr>
    </thead>
        @foreach($mahasiswa as $m)
        <tr>
            <td>{{ $m->nama_mahasiswa }}</td>
            <td>{{ $m->nrp }}</td>
            <td>{{ $m->alamat }}</td>
            <td>{{ $m->jurusan }}</td>
            <td>{{ $m->angkatan }}</td>
            <td>{{ $m->kelas }}</td>
            <td>{{ $m->no_tlp }}</td>
            <td>
              <a class="btn btn-warning" href="/index/editMhs/{{ $m->id }}">Edit</a>
              <a class="btn btn-danger" href="/index/hapusMhs/{{ $m->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
</table>
                </div>
                </div>
                </div>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
