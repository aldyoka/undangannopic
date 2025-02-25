<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Undangan Digital Pawiwahan Ayung & Krisna</title>
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/galery.css" />
    <link rel="stylesheet" href="css/testimonial.css" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Clicker+Script&family=Kalam:wght@300;400;700&family=Poppins:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet" />
</head>

<body>
    <!-- Loading Spinner -->
    <div id="loading">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- modal -->
    <div class="modal fade margin-modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-round bg-modal">
                <div class="modal-body">
                    <div class="col-12">
                        <div class="p-5 text-center">
                            <h5>Upacara Manusa Yadnya
                                Mepandes</h5>
                            <h1 class="clicker-script-regular pt-2">
                                Eka, Agus, Budi & Krisna
                            </h1>
                            <h5 style="padding-top: 20px">
                                Kepada Yang terhormat <br />
                                Bapak/ Ibu/ Saudara/ i:
                            </h5>
                            <h2 class="clicker-script-regular">{{ $nama }}</h2>
                            <div class="btn btn btn-outline-light">
                                <div class="mx-auto text-light" width="250px">
                                    <a id="playLink" data-dismiss="modal" aria-label="Close">Buka Undangan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <!-- button ngambang -->
    <div class="musiccontrol">
        <i class="fas fa-play" id="toggleIcon"></i>
    </div>
    <!-- end -->
    <!-- header -->
    <div class="container-fluid p-0">
        <div class="header pt-5">
            <div class="text-center">
                <h2 class="abeezee-regular">Mepandes</h2>
                <h1 class="clicker-script-regular">Eka, Agus, Budi & Krisna</h1>
                <div class="mx-auto" style="max-width: 300px">
                    <p class="abeezee-regular-italic p-0 m-0">
                        Br. Dinas Sala, Desa Abuan, Susut, Bangli
                    </p>
                </div>
                <p class="abeezee-regular-italic">26 . 02 . 2025</p>
            </div>
            <div class="container">
                <div class="containtime text-center">
                    <table class="mx-auto" style="width: 80%;">
                        <tbody style="background-color: #b6b6b694;">
                            <tr>
                                <td rowspan="2" class="table-counter">
                                    <span class="table-counter-number" id="hari"></span>
                                    <br />
                                </td>
                                <td class="table-counter-time" id="jam"></td>
                            </tr>
                            <tr>
                                <td class="table-counter-second" id="detik"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col text-center">
                <p class="text-center">
                    Kepada yang terhormat bapak/ibu, saudara/i:
                </p>
                <div class="d-flex justify-content-center">
                    <h2 class="nama clicker-script-regular">{{ $nama }}</h2>
                </div>
                <a href="#undangan"><i class="fa-solid fa-caret-down icons"></i></a>
            </div>
        </div>
    </div>
    </div>
    <!-- end header -->
    <!-- bagian isi undangan -->
    <div class="isi">
        <div class="container text-center" id="undangan">
            <div class="col-12 pt-3 mb-2">
                <img src="/images/asset01.png" width="250px" alt="" />
            </div>
            {{-- <img src="/images/swastyastu.png" width="200px" alt="" /> --}}
            <div class="mt-2">
                <h2 class="clicker-script-regular">"Om Swastyastu"</h2>
                <p class="abeezee-regular">
                    Atas Asung Kertaa Wara Nugraha Ida Shang Hyang Widhi Wasa/
                    Tuhan Yang Maha Esa, Kami bermaksud menyelenggarakan acara
                    Mepandes (Potong Gigi) Putra & Putri kami.
                    Merupakan suatu kehormatan dan kebahagiaan bagi kami
                    apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan
                    Doa kepada Putra & Putri kami pada :
                </p>
            </div>
            <table style="width: 100%;">
                <tbody style="background-color: #1b1a2e;">
                    <tr>
                        <td rowspan="2" class="table-date">
                            Februari <br />
                            <span class="table-date-number">26</span>
                            <br />2025
                        </td>
                        <td class="table-time">06:00 WITA s/d 22:00 WITA</td>
                    </tr>
                    <tr>
                        <td class="table-address">
                            Br. Dinas Sala, Desa Abuan, Susut, Bangli
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-6">
                    <a href="https://calendar.google.com/calendar/event?action=TEMPLATE&amp;tmeid=M3J1cG1obXVlZ2VocTdpN2lidTRpajVjdjUgYWxkeS5hcmRpdGFAbQ&amp;tmsrc=aldy.ardita%40gmail.com"
                        class="btn btn-elegant">Ingatkan saya</a>
                </div>
                <div class="col-6">
                    <a href="https://maps.app.goo.gl/MVPbRJJrCfqVjukV9" class="btn btn-elegant">Lihat Lokasi</a>
                </div>
            </div>
            <p class="mt-2 mb-3">
                Merupakan Suatu Kebahagiaan Bagi Kami Sekeluarga, Apabila Bapak/Ibu
                Berkenan Hadir Untuk Memberikan Doa kepada putra & putri kami. Atas
                Kehadiran Dan Doa, Kami Sekeluarga Mengucapkan Terima Kasih.
            </p>
            <div class="mt-3 mb-3">
                <strong>Kami Yang berbahagia: <br></strong>
            </div>
            <div class="mb-4">
                <div class="col-12 mb-3">
                    <h5>Bdn. Ni Putu Eka Septiantari,S.Keb</h5>
                    <img src="/images/underline.png" width="200px" alt="" />
                </div>
                <div class="col-12 mb-3">
                    <h5>I Kadek Agus Jayantara</h5>
                    <img src="/images/underline.png" width="200px" alt="" />
                </div>
                <div class="col-12 mb-3">
                    <h5>I Wayan Budi Aryawan</h5>
                    <img src="/images/underline.png" width="200px" alt="" />
                </div>
                <div class="col-12 mb-3">
                    <h5>I Komang Krisna Aditya</h5>
                    <img src="/images/underline.png" width="200px" alt="" />
                </div>

            </div>
            <div class="col-12 mb-5">
                <img src="/images/asset01.png" width="200px" style="rotate: 180deg" alt="" />
            </div>
        </div>
    </div>
    <!-- end isi undangan -->
    <!-- doa -->
    <div class="doa">
        <div class="container">
            <div class="text-center mx-auto bg-custom" style="max-width: 500px">
                <div class="m-3 text-white">
                    <p><span>“</span><br />Atharvaveda 6.121.4</p>
                    <p>
                        "Bhadraṃ karṇebhiḥ śṛṇuyāma devāḥ, Bhadraṃ paśyemākṣabhiryajatrāḥ,
                        Sthirairaṅgaiḥ tuṣṭuvāṃsas tanūbhiḥ, Vyashema devahitaṃ yadāyuḥ"
                        <br />
                        <span>”</span>
                    </p>
                    <p>Arti:</p>
                    <p>
                        "Semoga kita mendengar hal-hal baik dengan telinga kita. Semoga
                        kita melihat hal-hal baik dengan mata kita. Dengan tubuh yang
                        sehat dan jiwa yang kuat, semoga kita menjalani kehidupan yang
                        diberkati dan bahagia oleh para dewa"
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end doa -->
    <!-- form ucapan -->
    <div class="formucapan">
        <div class="container">
            <div class="text-center mb-3">
                <img src="/images/asset01.png" width="200px" alt="" />
                <h2 class="clicker-script-regular">Pesan & Kehadiran</h2>
                <p>
                    Kami mengharapkan doa dan konfirmasi kehadiran Bapak/Ibu/Saudara/i
                    pada form dibawah.
                </p>
            </div>

            <form id="dataForm" action="/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="formGroupExampleInput">Nama</label>
                    <input type="text" class="form-control col-12" @error('nama') is-invalid @enderror"
                        id="nama" aria-describedby="nama" name="nama" value="{{ old('nama') }}"
                        placeholder="Nama panggilan">
                    @error('nama')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="inputState">Kehadiran</label>
                    <select id="inputState" class="form-control col-12" name="kehadiran">
                        <option selected>Hadir</option>
                        <option>Tidak Hadir</option>
                        <option>Ragu</option>
                    </select>
                    <label class="font-weight-bold">Ucapan</label>
                    <div class="form-group mb-5">
                        <textarea id="ucapan" class="form-control col-12 @error('ucapan') is-invalid @enderror" name="ucapan"
                            rows="5" placeholder="Ucapan Atau Doa">{{ old('ucapan') }}</textarea>
                    </div>
                    @error('ucapan')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-center m-3">
                    <button id="submitButton" class="btn btn-success" type="submit">Kirim</button>
                </div>
            </form>

            <div id="alertBox" class="alert d-none mt-3 alert-dismissible fade show" role="alert">
                <span id="alertMessage"></span>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
            </div>

            {{-- <div class="text-center mb-3">
                <img src="/images/asset01.png" width="200px" alt="" />
                <h2 class="clicker-script-regular">Hadiah</h2>
                <p>
                    Doa restu anda merupakan karunia yang sangat berarti bagi kami dan
                    jika memberi adalah ungkapan tanda terima kasih anda, anda dapat
                    memberi kado secara cashless
                </p>
                <!-- modal 2 -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Kirim Hadiah
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body clicker-script-regular">
                                <h2>Nomor Rekening</h2>
                            </div>
                            <h4>Nama Bank</h4>
                            <h4>01010101010100101</h4>
                            <h5>a/n. xxxxxxxxxxxx</h5>
                            <div class="modal-footer"></div>
                        </div>
                    </div>
                </div>
                <!-- modal 2 -->
            </div> --}}
        </div>
        <div class="text-center mb-3">
            <img src="/images/asset01.png" width="200px" alt="" style="rotate: 180deg" />
        </div>
    </div>
    <!-- end form ucapan -->
    <!-- testimonial -->
    <section id="testim" class="testim isi-testi">
        <div class="container">
            <div class="text-center clicker-script-regular p-4">
                <h1>Ucapan dan Doa</h1>
            </div>
        </div>
        <div class="table-container">
            <table class="scrolling-table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Kehadiaran</th>
                        <th>Ucapan</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Tambahkan banyak data untuk melihat efek scroll -->
                    @foreach ($main as $item)
                        <tr>
                            <td>{{ Str::limit($item->nama, 10) }}</td>
                            <td>{{ $item->kehadiran }}</td>
                            <td>{{ $item->ucapan }}</td>
                        </tr>
                    @endforeach
                    <!-- Tambahkan lebih banyak baris sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </section>
    <!-- testimonial end -->
    <!-- penutup -->
    <div class="end pb-5 pt-5">
        <div class="container">
            <div class="mx-auto" style="width: 250px">
                <img src="/images/asset01.png" width="100%" alt="" />
                {{-- <img src="/images/santih.png" alt="" width="100%" /> --}}
                <div class="mt-2 text-center">
                    <h2 class="clicker-script-regular">Om <br> Santih Santih Santih <br> Om</h2>
                </div>
                <img src="/images/asset01.png" width="100%" alt="" style="rotate: 180deg" />
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- footer -->
    <audio id="myAudio" src="music/music.MP3"></audio>
    <div class="credit pt-4 pb-5 bg-dark">
        <div class="container">
            <div class="col-12 text-center">
                <p style="font-size: 12px" class="text-light">
                    Music by GUS TEJA - SILUET SENJA (EVENING SILHOUTTE)
                </p>
                <a href="https://www.instagram.com/pew_pew_dor_dor/">
                    <p style="font-size: 12px">made and design by @all</p>
                </a>
            </div>
        </div>
    </div>
    <!-- end footer -->
    <!-- scrip -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://use.fontawesome.com/1744f3f671.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/main.js"></script>
    <script src="js/timeCounter.js"></script>
    <script src="js/testimonial.js"></script>
    <script src="https://kit.fontawesome.com/08b1925417.js" crossorigin="anonymous"></script>
    <script src="js/changeicon.js"></script>
    <script src="js/notreload.js"></script>
    <script>
        $(document).ready(function() {
            $("#staticBackdrop").modal("show"); // Show modal on page load
        });
    </script>
    <script>
        // Hide loading spinner when the page is fully loaded
        window.addEventListener("load", function() {
            document.getElementById("loading").style.display = "none";
        });
    </script>
    <script src="js/galery.js"></script>
</body>

</html>
