@extends("layouts.layout")
@section("content")
  <link href="stylekomisi1.css" rel="stylesheet">

  <section class="container">
    <h1 class="j-header4">KOMISI III</h1>
    <div class="container6">
      <div class="slide">

        <div class="item" style="background-image: url(/img/foto-grup/Komisi-3.jpg);">
          <div class="content">
            <div class="name">KOMISI III</div>
            <div class="des">Komisi III adalah komisi yang menangui terkait Bidang Hukum dan Hubungan Publik</div>
            <a href="http://127.0.0.1:8000/komisi1" target="_blank">
              <button>Selengkapnya</button>
            </a>
          </div>
        </div>
        <div class="item" style="background-image: url(/img/foto-grup/Komisi-3.jpg);">
          <div class="content">
            <div class="name">KOMISI III</div>
            <div class="des">Komisi III adalah komisi yang menangui terkait Bidang Hukum dan Hubungan Publik</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="section-header6">
      <h2 class="modern-header">Tugas Pokok dan Wewenang Komisi III</h2>
    </div>
    <div class="modern-wewenang">
      <div class="modern-card">
        <div class="content">
          <h4>Melaksanakan rapat koordinasi dengan mitra kerja dalam bidang hukum dan hubungan publik</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Menampung aspirasi dari mitra kerja dalam bidang hukum dan hubungan publik serta melakukan advokasi kepada pihak terkait</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Melaksanakan fungsi pengawasan dan fungsi legislasi terhadap mitra kerja dalam bidang hukum dan hubungan publik</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Menjembatani hubungan mitra kerja dalam bidang hukum dan hubungan publik dengan Dekanat</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Melaksanakan Laporan Pertanggungjawaban Terbuka dari mitra kerja</h4>
        </div>
      </div>
    </div>
  </section>

  <section class="container-k">
    <h2 class="header">Agenda Kerja</h2>
    @foreach ($agendas["Komisi III SM FH Undip"] as $agenda)
      <div class="tag-divide">
        <button class="accordion-k">{{ $agenda->nama }}</button>
        <div class="panel-k">
          <div class="agenda">
            <h2 class="title-k">Agenda</h2>
            <p>{{ $agenda->deskripsi }}</p>
          </div>
          <div class="check">
            <div class="title-k">
              <h2>Status Pelaksanaan</h2>
            </div>
            <label class="container-check">
              <input class="check-box" type="checkbox" {{ $agenda->status ? "checked disabled" : "disabled" }}>
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="file">
            <h2 class="title-k">File</h2>
            <div class="container-img">
              <svg class="bi bi-file-pdf" xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" viewBox="0 0 16 16">
                <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1" />
                <path
                  d="M4.603 12.087a.8.8 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.7 7.7 0 0 1 1.482-.645 20 20 0 0 0 1.062-2.227 7.3 7.3 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a11 11 0 0 0 .98 1.686 5.8 5.8 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.86.86 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.7 5.7 0 0 1-.911-.95 11.6 11.6 0 0 0-1.997.406 11.3 11.3 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.8.8 0 0 1-.58.029m1.379-1.901q-.25.115-.459.238c-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361q.016.032.026.044l.035-.012c.137-.056.355-.235.635-.572a8 8 0 0 0 .45-.606m1.64-1.33a13 13 0 0 1 1.01-.193 12 12 0 0 1-.51-.858 21 21 0 0 1-.5 1.05zm2.446.45q.226.244.435.41c.24.19.407.253.498.256a.1.1 0 0 0 .07-.015.3.3 0 0 0 .094-.125.44.44 0 0 0 .059-.2.1.1 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a4 4 0 0 0-.612-.053zM8.078 5.8a7 7 0 0 0 .2-.828q.046-.282.038-.465a.6.6 0 0 0-.032-.198.5.5 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822q.036.167.09.346z" />
              </svg>
              @if ($agenda->file)
                <a class="d-btn" href="{{ Storage::url($agenda->file) }}" target="_blank">
                  <button class="d-btn">Dokumen</button>
                </a>
              @else
                -
              @endif
              @if ($agenda->link)
                <a class="d-btn" href="{{ $agenda->link }}" target="_blank">
                  <button class="d-btn">Link</button>
                </a>
              @else
                -
              @endif
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </section>
  <section>
    <div class="section-header6">
      <h2 class="modern-header1">Mitra Kerja Komisi III</h2>
    </div>
    <div class="carousel">
      <div class="list">
        <div class="item">
          <img src="img/mitra-kerja3/gema keadilan.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">Gema Keadilan</div>
            <div class="des">
              Lembaga Pers Mahasiswa (LPM) Gema Keadilan yang merupakan salah satu unit kegiatan mahasiswa (UKM) tingkat fakultas dan merupakan UKM-F tertua yang ada di lingkup Fakultas Hukum Universitas Diponegoro. Lembaga pers mahasiswa berfungsi sebagai media informasi dalam lingkungan kampus, tempat untuk menyampaikan aspirasi, dan juga dapat sebagai sarana mengembangkan skill mahasiswa. Memiliki slogan aktif, dinamis, kritis, LPM Gema Keadilan memiliki tujuan sebagai wadah bagi mahasiswa/i untuk menyalurkan ide kreatif dalam bentuk tulisan dan melahirkan pikiran segar guna mengaktualisasikan diri dalam merespon permasalahan di masyarakat terutama di lingkungan Fakultas dan Universitas.
            </div>
            <button class="seeMore">Selengkapnya </button>
          </div>
          <div class="detail">
            <div class="title">Gema Keadilan</div>
            <div class="des">
              Lembaga Pers Mahasiswa (LPM) Gema Keadilan yang merupakan salah satu unit kegiatan mahasiswa (UKM) tingkat fakultas dan merupakan UKM-F tertua yang ada di lingkup Fakultas Hukum Universitas Diponegoro. Lembaga pers mahasiswa berfungsi sebagai media informasi dalam lingkungan kampus, tempat untuk menyampaikan aspirasi, dan juga dapat sebagai sarana mengembangkan skill mahasiswa. Memiliki slogan aktif, dinamis, kritis, LPM Gema Keadilan memiliki tujuan sebagai wadah bagi mahasiswa/i untuk menyalurkan ide kreatif dalam bentuk tulisan dan melahirkan pikiran segar guna mengaktualisasikan diri dalam merespon permasalahan di masyarakat terutama di lingkungan Fakultas dan Universitas. Kontribusi LPM Gema Keadilan dalam melakukan kajian terhadap isu - isu yang terjadi di lingkup fakultas maupun universitas telah diakui oleh banyak pihak terutama dari kalangan mahasiswa.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja3/kdks.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">KDKS</div>
            <div class="des">
              Kelompok Diskusi Kelas Sosial Fakultas Hukum Universitas Diponegoro (KDKS FH Undip) merupakan Unit Kegiatan Mahasiswa Fakultas Hukum yang secara resmi didirikan oleh Prof. Satjipto Rahardjo pada 21 Desember 2001. KDKS FH Undip awalnya ditujukan sebagai wadah untuk mengulas beragam permasalahan di tengah masyarakat yang disebabkan oleh perbedaan kelas sosial. Namun seiring berkembangnya waktu, arah gerak UKM-F ini menjadi melebar ke segala aspek kehidupan, sesuai dengan kebutuhan mahasiswa dan masyarakat. KDKS FH Undip melalui bidang-bidangnya, setidaknya memberikan wadah kepada mahasiswa agar bisa melakukan pengabdian, penelitian, pengembangan sumber daya, pengajaran, dan banyak hal lainnya. Dengan kata lain, walau dari segi penamaan UKM-F ini berkaitan erat dengan 'diskusi' dan 'sosial', beragam hal bisa dikembangkan melalui KDKS FH Undip.
            </div>
            <button class="seeMore">Selengkapnya </button>
          </div>
          <div class="detail">
            <div class="title">KDKS</div>
            <div class="des">
              Kelompok Diskusi Kelas Sosial Fakultas Hukum Universitas Diponegoro (KDKS FH Undip) merupakan Unit Kegiatan Mahasiswa Fakultas Hukum yang secara resmi didirikan oleh Prof. Satjipto Rahardjo pada 21 Desember 2001. KDKS FH Undip awalnya ditujukan sebagai wadah untuk mengulas beragam permasalahan di tengah masyarakat yang disebabkan oleh perbedaan kelas sosial. Namun seiring berkembangnya waktu, arah gerak UKM-F ini menjadi melebar ke segala aspek kehidupan, sesuai dengan kebutuhan mahasiswa dan masyarakat. KDKS FH Undip melalui bidang-bidangnya, setidaknya memberikan wadah kepada mahasiswa agar bisa melakukan pengabdian, penelitian, pengembangan sumber daya, pengajaran, dan banyak hal lainnya. Dengan kata lain, walau dari segi penamaan UKM-F ini berkaitan erat dengan 'diskusi' dan 'sosial', beragam hal bisa dikembangkan melalui KDKS FH Undip.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja3/kmi.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">KMI</div>
            <div class="des">
              Kantor Media Informasi BEM FH Undip adalah supporting system BEM FH Undip yang bertugas menjalankan fungsi sebagai pusat dan jembatan informasi, meningkatkan citra positif BEM FH Undip, dan melakukan dokumentasi serta publikasi kegiatan dari BEM FH Undip.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">KMI</div>
            <div class="des">
              Kantor Media Informasi BEM FH Undip adalah supporting system BEM FH Undip yang bertugas menjalankan fungsi sebagai pusat dan jembatan informasi, meningkatkan citra positif BEM FH Undip, dan melakukan dokumentasi serta publikasi kegiatan dari BEM FH Undip.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja3/2">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">Pemberdaya Perempuan</div>
            <div class="des">
              bentar yah blom dikasih kasih :(
              </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">Pemberdaya Perempuan</div>
            <div class="des">
              bentar yah blom dikasih kasih :(
              </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja3/dimas.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">DIMAS</div>
            <div class="des">
              Pengabdian Masyarakat, Sebuah Makna dan Tujuan
              Pengabdian sejatinya merupakan sebuah tindakan yang berlandaskan ketulusan hati. Pengabdian adalah proses, cara, dan perbuatan untuk mencurahkan waktu, pikiran, dan tenaga demi kebermanfaatan bagi masyarakat, tanpa mengharapkan imbalan apapun, serta didasari oleh keikhlasan sejati.
              Hadirnya Bidang Pengabdian Masyarakat adalah sebagai respon atas berbagai permasalahan sosial yang dihadapi oleh masyarakat dan sebagai wadah untuk mewujudkan cita-cita bangsa akan kesejahteraan masyarakat melalui aksi nyata dan sinergi mahasiswa.
              Dalam perjalanannya, Bidang Pengabdian Masyarakat mengedepankan analisis dan diskusi mendalam sebab segala permasalahan yang ada di dalam masyarakat tidak muncul begitu saja. Bidang Pengabdian Masyarakat merupakan bidang yang berfokus pada pengkaderan serta menciptakan perjuangan demi tercapainya kesejahteraan pada masyarakat miskin kota dan masyarakat desa.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">DIMAS</div>
            <div class="des">
              Pengabdian Masyarakat, Sebuah Makna dan Tujuan
              Pengabdian sejatinya merupakan sebuah tindakan yang berlandaskan ketulusan hati. Pengabdian adalah proses, cara, dan perbuatan untuk mencurahkan waktu, pikiran, dan tenaga demi kebermanfaatan bagi masyarakat, tanpa mengharapkan imbalan apapun, serta didasari oleh keikhlasan sejati.
              Hadirnya Bidang Pengabdian Masyarakat adalah sebagai respon atas berbagai permasalahan sosial yang dihadapi oleh masyarakat dan sebagai wadah untuk mewujudkan cita-cita bangsa akan kesejahteraan masyarakat melalui aksi nyata dan sinergi mahasiswa.
              Dalam perjalanannya, Bidang Pengabdian Masyarakat mengedepankan analisis dan diskusi mendalam sebab segala permasalahan yang ada di dalam masyarakat tidak muncul begitu saja. Bidang Pengabdian Masyarakat merupakan bidang yang berfokus pada pengkaderan serta menciptakan perjuangan demi tercapainya kesejahteraan pada masyarakat miskin kota dan masyarakat desa.            </div>

          </div>
        </div>
        <div class="item">
          <img src="img/mitra-kerja3/halmas.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">HALMAS</div>
            <div class="des">
              Sebagai perwajahan BEM FH, baik dalam lingkup internal maupun eksternal, keberadaan HALMAS di internal kampus dirancang untuk membina hubungan yang erat baik dengan organisasi mahasiswa maupun UKM-F di Fakultas Hukum. Hal ini bertujuan untuk menghasilkan keharmonisan dan keselarasan yang optimal. HALMAS juga berperan sebagai pengawal aktif terhadap isu-isu serta permasalahan internal mahasiswa Undip, terutama yang berasal dari Fakultas Hukum Undip dan FH Jepara, dalam hal ini sebagai perpanjangan tangan kepada stakeholder yang terkait.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">HALMAS</div>
            <div class="des">
              Sebagai perwajahan BEM FH, baik dalam lingkup internal maupun eksternal, keberadaan HALMAS di internal kampus dirancang untuk membina hubungan yang erat baik dengan organisasi mahasiswa maupun UKM-F di Fakultas Hukum. Hal ini bertujuan untuk menghasilkan keharmonisan dan keselarasan yang optimal. HALMAS juga berperan sebagai pengawal aktif terhadap isu-isu serta permasalahan internal mahasiswa Undip, terutama yang berasal dari Fakultas Hukum Undip dan FH Jepara, dalam hal ini sebagai perpanjangan tangan kepada stakeholder yang terkait.
              Dengan menjadi perpanjangan tangan, diharapkan HALMAS dapat menjalin kerjasama dengan mitra di luar lingkup Fakultas Hukum, seperti organisasi mahasiswa di luar fakultas, alumni, dan berbagai pihak terkait, guna membangun hubungan yang baik, harmonis, dan memberikan makna yang signifikan dalam upaya memperkuat silaturahmi.
            </div>

          </div>
        </div>
        <div class="item">
          <img src="img/mitra-kerja3/hsp.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">HSP</div>
            <div class="des">
              Bidang Hukum, Sosial dan Politik Badan Eksekutif Mahasiswa merupakan salah satu bidang yang merujuk pada esensi pergerakan mahasiswa. Bidang Hukum, Sosial, Politik menjadi patron pembumian serta pengawalan isu hukum, sosial maupun politik baik sektor regional maupun nasional di Fakultas Hukum Universitas Diponegoro maupun secara luas di ranah Universitas Diponegoro. Lebih lanjut bidang Hukum, Sosial dan Politik berupaya memberikan pencerdasan pula melalui hasil karya tulis maupun media melalui disiplin ilmu, yakni secara yuridis, filosofis, maupun empiris guna menunjang validitas tulisan yang dihadirkan oleh Bidang Hukum, Sosial dan Politik.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">HSP</div>
            <div class="des">
              Bidang Hukum, Sosial dan Politik Badan Eksekutif Mahasiswa merupakan salah satu bidang yang merujuk pada esensi pergerakan mahasiswa. Bidang Hukum, Sosial, Politik menjadi patron pembumian serta pengawalan isu hukum, sosial maupun politik baik sektor regional maupun nasional di Fakultas Hukum Universitas Diponegoro maupun secara luas di ranah Universitas Diponegoro. Lebih lanjut bidang Hukum, Sosial dan Politik berupaya memberikan pencerdasan pula melalui hasil karya tulis maupun media melalui disiplin ilmu, yakni secara yuridis, filosofis, maupun empiris guna menunjang validitas tulisan yang dihadirkan oleh Bidang Hukum, Sosial dan Politik.
            </div>

          </div>
        </div>
        <div class="item">
          <img src="img/mitra-kerja3/ipm.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">IPM</div>
            <div class="des">
              Inspektorat Penjamin Mutu (IPM) merupakan tubuh dari BEM FH Undip Kabinet Juang Asa yang bertanggungjawab dalam memanifestasikan BEM FH Undip yang ideal sesuai dengan nilai dan budaya yang ada di dalam Grand Design Organization Juang Asa.
              dst.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">IPM</div>
            <div class="des">
              Inspektorat Penjamin Mutu (IPM) merupakan tubuh dari BEM FH Undip Kabinet Juang Asa yang bertanggungjawab dalam memanifestasikan BEM FH Undip yang ideal sesuai dengan nilai dan budaya yang ada di dalam Grand Design Organization Juang Asa.
              dst.
            </div>

          </div>
        </div>

        
      </div>
      <div class="arrows">
        <button id="prev">
          < </button>
            <button id="next">></button>
            <button id="back">Lihat Semua &#8599</button>
      </div>
    </div>
  </section>

  <section class="container">
    <h2 class="header">Anggota Komisi III</h2>
    <div class="anggota-4">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/ketua/Alisha Fathiya.jpg" />
        </div>
        <div class="content1">
          <h2>Alisha Fathiya</h2>
          <p class="deskripsi">
            Ketua Komisi III</br>FH UNDIP 2022
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/senator/Amanda  Nadhiyatus Shalikhah.jpg" />
        </div>
        <div class="content1">
          <h2>Amanda Nadhiyatus Shalikhah</h2>
          <p class="deskripsi">
            Senator Anggota</br>FH UNDIP 2022
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/senator/Andi Siradjuddin.jpg" />
        </div>
        <div class="content1">
          <h2>Andi Siradjuddin</h2>
          <p class="deskripsi">
            Senator Anggota</br>FH UNDIP 2023
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/senator/Gola Arpanji Cahyono.jpg" />
        </div>
        <div class="content1">
          <h2>Gola Arpanji Cahyono</h2>
          <p class="deskripsi">
            Senator Anggota</br>FH UNDIP 2023
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Alexa Putri Rullyanta Tarigan.jpg" />
        </div>
        <div class="content1">
          <h2>Alexa Putri Rullyanta Tarigan</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Dina Safira Khairina.jpg" />
        </div>
        <div class="content1">
          <h2>Dina Safira Khairina</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Faqih Nuris Shiba.jpg" />
        </div>
        <div class="content1">
          <h2>Faqih Nuris Shiba</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Naila Rahma Putri Kurniawan.jpg" />
        </div>
        <div class="content1">
          <h2>Naila Rahma Putri Kurniawan</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Naura Kamila Dewi.jpg" />
        </div>
        <div class="content1">
          <h2>Naura Kamila Dewi</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Nina Khairina Kuswanda.jpg" />
        </div>
        <div class="content1">
          <h2>Nina Khairina Kuswanda</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Syahda Rachma Aulia.jpg" />
        </div>
        <div class="content1">
          <h2>Syahda Rachma Aulia</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-3/staff/Yova Phedra Ambarita.jpg" />
        </div>
        <div class="content1">
          <h2>Yova Phedra Ambarita</h2>
          <p class="deskripsi">
            Staff Ahli</br>FH UNDIP 2023
          </p>
        </div>
      </div>
    </div>
  </section>

  <script src="js-komisi.js"></script>
@endsection
