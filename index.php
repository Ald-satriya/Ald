<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ald Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap-callout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--
    Images are from https://unsplash.com/
    -->


</head>
<body>
    <nav id="scrolling_navbar" class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Ald</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-bold">
              <li class="nav-item">
                <a class="nav-link" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#table">Tabel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div data-bs-spy="scroll" data-bs-target="#scrolling_navbar" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-light p-3 rounded-2" tabindex="0">

        <section class="min-vh-100 d-flex flex-wrap align-content-center" id="home" style="background-image: url('image/download.jfif'); background-size: cover;">
          <div class="container d-flex align-items-center py-5">
              <div class="col text-center bg-light m-4 p-4 text-dark bg-opacity-50 rounded-5 border border-2 border-white">
                <img src="image/Png.png" class="img-fluid col-lg-2 col-sm-6 col-xs-6 mb-4"> 
                <p class="display-2 text-secondary mb-3">Personal Portfolio</p>
                <p class="text-secondary fs-5 mb-6">Saya suka tantangan dan selalu terbuka untuk belajar hal-hal baru. Menurut saya, setiap tantangan adalah kesempatan untuk meningkatkan diri.</p>
                <a class="btn btn-success btn-lg active rounded-pill mb-3" href="#about">About</a>
                <a class="btn btn-light btn-lg rounded-pill mb-3" href="#contact">Contact</a>
            </div>
          </div>
        </section>

        <section data-bs-spy="scroll" data-bs-target="#scrolling_navbar" class="container py-5" id="about">
            <div class="text-center py-5">
                <h2 class="fw-bolder">About</h2>
                <p class="fs-5">Saya siap untuk membantu mewujudkan proyek Anda dengan kualitas terbaik dan keahlian yang mendalam.</p>
            </div>
            <div class="row">
                <div class="col-lg-4" >
                    <img class="img-fluid rounded-5" src="image/ald.jpg">
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <p class="lh-lg mb-6">Saya adalah seorang pengembang web yang berpengalaman dengan keahlian dalam teknologi front-end. Saya memiliki kemampuan yang kuat dalam menciptakan situs web yang interaktif, responsif, dan modern, serta sangat memperhatikan setiap detail. Bagi saya, teknologi adalah alat untuk menciptakan pengalaman yang dapat memudahkan dan memberi nilai lebih bagi pengguna.

                      Saya selalu berkomitmen untuk terus belajar dan meningkatkan keterampilan, baik dalam bahasa pemrograman maupun tren desain terkini. Dalam bekerja, saya percaya pada kesederhanaan, efisiensi, dan kinerja optimal untuk menghadirkan pengalaman pengguna yang mulus.</p>
                    <h3 class="fw-bold fs-4">Skills</h3>
                    
                    <p class="mb-0" >HTML:</p>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-greenyellow" style="width: 99%;">99%</div>
                    </div>
                    <p class="mb-0" >CSS:</p>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-info" style="width: 99%;">99%</div>
                    </div>
                    <p class="mb-0" >JS:</p>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-warning" style="width: 99%;">99%</div>
                    </div>
                    <p class="mb-0" >BOOTSTRAP 5:</p>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-danger" style="width: 99%;">99%</div>
                    </div>
                    <p class="mb-0" >REACT:</p>
                    <div class="progress mb-3">
                        <div class="progress-bar progress-bar-striped bg-green" style="width: 99%;">99%</div>
                    </div>
                </div>

            </div>

        </section>

        <section data-bs-spy="scroll" data-bs-target="#scrolling_navbar" class="bg-dark py-5" id="Portfolio">
            <div class="container">
                <div class="text-white text-center py-5">
                    <h2 class="fw-bolder">Portfolio</h2>
                    <p class="fs-5">Sebagai seorang yang berdedikasi dan disiplin, saya selalu berusaha memberikan yang terbaik dalam setiap kesempatan. Saya percaya bahwa kemajuan kecil setiap hari dapat membawa hasil besar di masa depan.</p>
                </div>

                <div class="row pb-4" id="gallery" data-toggle="modal" data-target="#exampleModal">
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                      <img class="w-100 img-thumbnail" src="image/5.jpeg" data-target="#carouselExample" data-slide-to="0">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                      <img class="w-100 img-thumbnail" src="image/2.jpeg" data-target="#carouselExample" data-slide-to="1">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                      <img class="w-100 img-thumbnail" src="image/3.jpeg" data-target="#carouselExample" data-slide-to="2">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                      <img class="w-100 img-thumbnail" src="image/4.jpeg" data-target="#carouselExample" data-slide-to="3">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/1.jpeg" data-target="#carouselExample" data-slide-to="4">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/6.jpeg" data-target="#carouselExample" data-slide-to="5">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/7.jpeg" data-target="#carouselExample" data-slide-to="6">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/8.jpeg" data-target="#carouselExample" data-slide-to="7">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/9.jpeg" data-target="#carouselExample" data-slide-to="7">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/10.jpeg" data-target="#carouselExample" data-slide-to="7">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/11.jpeg" data-target="#carouselExample" data-slide-to="7">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 mb-4">
                        <img class="w-100 img-thumbnail" src="image/12.jpeg" data-target="#carouselExample" data-slide-to="7">
                    </div>
                  </div>
                  
                  <!-- Modal -->
                  <!-- 
                  This part is straight out of Bootstrap docs. Just a carousel inside a modal.
                  -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="7" aria-label="Slide 8"></button>
                              </div>
                            <div class="carousel-inner">
                              <div class="carousel-item active" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/1.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/2.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/3.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/4.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/5.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/6.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/7.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/8.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/9.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/10.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/11.jpeg">
                              </div>
                              <div class="carousel-item" data-bs-interval="3000">
                                <img class="d-block w-100" src="image/12.jpeg">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" type="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" type="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
            </div>
            
        </section>

        <section data-bs-spy="scroll" data-bs-target="#scrolling_navbar" class="py-5 jumbotron text-center" id="table">
          
            <h2>Daftar Crazy Rich Indonesia</h2>
            <table id="example" class="display" style="width:100%">
              <thead>
                  <tr>
                      <th>Nama</th>
                      <th>Umur</th>
                      <th>Kekayaan</th>
                      <th>Bisnis</th>
                      <th>Omset</th>
                      <th>Jumlah Perusahaan</th>
                  </tr>
              </thead>
              <tbody>
                  <tr><td>Aldi Satriya</td><td>82</td><td>$infinity</td><td>Ald, White Project</td><td>$1555 Miliar</td><td>1500</td></tr>
                  <tr><td>Robert Budi Hartono</td><td>82</td><td>$24,6 Miliar</td><td>Djarum, BCA</td><td>$15 Miliar</td><td>15</td></tr>
                  <tr><td>Michael Bambang Hartono</td><td>83</td><td>$23,5 Miliar</td><td>Djarum, BCA</td><td>$15 Miliar</td><td>15</td></tr>
                  <tr><td>Prajogo Pangestu</td><td>78</td><td>$6,1 Miliar</td><td>Barito Pacific</td><td>$5 Miliar</td><td>10</td></tr>
                  <tr><td>Chairul Tanjung</td><td>61</td><td>$5,5 Miliar</td><td>CT Corp</td><td>$4 Miliar</td><td>20</td></tr>
                  <tr><td>Sri Prakash Lohia</td><td>70</td><td>$5,3 Miliar</td><td>Indorama Corp</td><td>$3,5 Miliar</td><td>12</td></tr>
                  <tr><td>Tahir</td><td>71</td><td>$4,5 Miliar</td><td>Mayapada Group</td><td>$3 Miliar</td><td>18</td></tr>
                  <tr><td>Bachtiar Karim</td><td>63</td><td>$3,3 Miliar</td><td>Musim Mas</td><td>$3 Miliar</td><td>5</td></tr>
                  <tr><td>Eddy Kusnadi Sariaatmadja</td><td>69</td><td>$2,8 Miliar</td><td>Emtek Group</td><td>$2,5 Miliar</td><td>15</td></tr>
                  <tr><td>Djoko Susanto</td><td>72</td><td>$2,7 Miliar</td><td>Alfamart</td><td>$2 Miliar</td><td>3</td></tr>
                  <tr><td>Martua Sitorus</td><td>62</td><td>$2,6 Miliar</td><td>Wilmar Intl</td><td>$5 Miliar</td><td>8</td></tr>
                  <tr><td>Peter Sondakh</td><td>69</td><td>$2,5 Miliar</td><td>Rajawali Corp</td><td>$2 Miliar</td><td>7</td></tr>
                  <tr><td>Susilo Wonowidjojo</td><td>66</td><td>$2,4 Miliar</td><td>Gudang Garam</td><td>$6 Miliar</td><td>4</td></tr>
                  <tr><td>Mochtar Riady</td><td>94</td><td>$2,1 Miliar</td><td>Lippo Group</td><td>$3 Miliar</td><td>25</td></tr>
                  <tr><td>Arini Subianto</td><td>53</td><td>$1,8 Miliar</td><td>Persada Capital</td><td>$1,5 Miliar</td><td>7</td></tr>
                  <tr><td>Boenjamin Setiawan</td><td>90</td><td>$1,6 Miliar</td><td>Kalbe Farma</td><td>$2,5 Miliar</td><td>10</td></tr>
                  <tr><td>Murdaya Poo</td><td>75</td><td>$1,5 Miliar</td><td>Central Cipta Murdaya</td><td>$2 Miliar</td><td>6</td></tr>
                  <tr><td>Hary Tanoesoedibjo</td><td>58</td><td>$1,4 Miliar</td><td>MNC Group</td><td>$1,8 Miliar</td><td>11</td></tr>
                  <tr><td>Theodore Rachmat</td><td>80</td><td>$1,3 Miliar</td><td>Triputra Group</td><td>$2,1 Miliar</td><td>15</td></tr>
                  <tr><td>Edwin Soeryadjaya</td><td>74</td><td>$1,2 Miliar</td><td>Saratoga Investama</td><td>$1,5 Miliar</td><td>8</td></tr>
                  <tr><td>Benny Subianto</td><td>85</td><td>$1,1 Miliar</td><td>Adaro Energy</td><td>$3 Miliar</td><td>3</td></tr>
                  <tr><td>Garibaldi Thohir</td><td>57</td><td>$1,0 Miliar</td><td>Adaro Energy</td><td>$3 Miliar</td><td>5</td></tr>
                  <tr><td>Kartini Muljadi</td><td>93</td><td>$980 Juta</td><td>Tempo Group</td><td>$1 Miliar</td><td>7</td></tr>
                  <tr><td>Hashim Djojohadikusumo</td><td>69</td><td>$900 Juta</td><td>Arsari Group</td><td>$1 Miliar</td><td>8</td></tr>
                  <tr><td>Irwan Hidayat</td><td>68</td><td>$850 Juta</td><td>Sido Muncul</td><td>$500 Juta</td><td>1</td></tr>
                  <tr><td>Sjamsul Nursalim</td><td>78</td><td>$800 Juta</td><td>Gajah Tunggal</td><td>$600 Juta</td><td>6</td></tr>
                  <tr><td>Sandiaga Uno</td><td>54</td><td>$750 Juta</td><td>Saratoga Investama</td><td>$1,5 Miliar</td><td>3</td></tr>
                  <tr><td>Mochtar Widjaja</td><td>82</td><td>$700 Juta</td><td>Sinar Mas</td><td>$10 Miliar</td><td>25</td></tr>
                  <tr><td>Anthony Salim</td><td>74</td><td>$680 Juta</td><td>Indofood, Salim</td><td>$12 Miliar</td><td>15</td></tr>
                  <tr><td>Erick Thohir</td><td>54</td><td>$650 Juta</td><td>Mahaka Group</td><td>$1 Miliar</td><td>5</td></tr>
                  <tr><td>Ciputra (alm.)</td><td>-</td><td>$600 Juta</td><td>Ciputra Group</td><td>$2 Miliar</td><td>10</td></tr>
              </tbody>
          </table>
          
        
          </body>
          </html>
       
        </section>

        <section data-bs-spy="scroll" data-bs-target="#scrolling_navbar" class="bg-dark py-5" id="contact">
            <div class="container">
                <div class="text-white text-center py-5">
                    <h2 class="fw-bolder">Contact</h2>
                    <p class="fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, necessitatibus.</p>
                </div>

                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10 col-11 mx-auto">
                    <form action="" class="text-white fs-6">
                        <div class="mb-3">
                            <label class="form-label text-white">Name Surname</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Subject</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label text-white">Message</label>
                            <textarea type="text" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="d-grid gap-2 col-lg-4 col-md-4 mx-auto">
                            <button class="btn btn-success btn-lg rounded-pill">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <footer class="bg-light">
            <div class="container">
                <p class="copyright-text text-center fs-8 py-4 mb-0">Copyright © 2024 <a class="text-dark" href="https://github.com/Ald-satriya" target="_blank">@Ald</a></p>
                </div>
            </div>

        </footer>

    </div>

    <script>
        function switchStyle() {
        if (document.getElementById('styleSwitch').checked) {
            document.getElementById('gallery').classList.add("custom");
            document.getElementById('exampleModal').classList.add("custom");
        } else {
            document.getElementById('gallery').classList.remove("custom");
            document.getElementById('exampleModal').classList.remove("custom");
        }
        };
        
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
  
    <script>
      $(document).ready(function () {
        $("#example").DataTable({
          paging: true,
          searching: true,
          ordering: true,
          pageLength: 10,
          lengthMenu: [5, 10, 20],
          columnDefs: [{
            targets: 2,
            render: function (data, type, row) {
              if (type === 'sort') return parseInt(data.replace('M+', '')) * 1000000;
              return data;
            }
          }],
          dom: 'Bfrtip',
          buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
      });
    </script>
  
   
</body>
</html>