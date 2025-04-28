@extends("layouts.layout")
@section("content")
  <link href="stylekomisi1.css" rel="stylesheet">

  <section class="container">
    <h1 class="j-header4">KOMISI II</h1>
    <div class="container6">
      <div class="slide">

        <div class="item" style="background-image: url(/img/foto-grup/Komisi-2.jpg);">
          <div class="content">
            <div class="name">KOMISI II</div>
            <div class="des">Komisi II adalah komisi yang menaungi terkait Bidang Minat, Bakat, Kaderisasi dan Kerohanian</div>
            <a href="http://127.0.0.1:8000/komisi1" target="_blank">
              <button>Selengkapnya</button>
            </a>
          </div>
        </div>
        <div class="item" style="background-image: url(/img/foto-grup/Komisi-2.jpg);">
          <div class="content">
            <div class="name">KOMISI II</div>
            <div class="des">Komisi II adalah komisi yang menaungi terkait Bidang Minat, Bakat, Kaderisasi dan Kerohanian</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="section-header6">
      <h2 class="modern-header">Tugas Pokok dan Wewenang Komisi II</h2>
    </div>
    <div class="modern-wewenang">
      <div class="modern-card">
        <div class="content">
          <h4>Melaksanakan rapat kerja dengan mitra kerja dalam bidang Minat Bakat, Kaderisasi, dan Kerohanian</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Menampung Aspirasi Dari Mitra Kerja Dalam Bidang Minat Bakat, Kaderisasi, dan Kerohanian Serta Melakukan Advokasi Kepada Pihak Terkait</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Melaksanakan Fungsi Pengawasan, dan Legislasi terhadap Mitra Kerja Dalam Bidang Minat Bakat, Kaderisasi, dan Kerohanian</h4>
        </div>
      </div>
      <div class="modern-card">
        <div class="content">
          <h4>Menjembatani Hubungan Mitra Kerja Dalam Bidang Minat Bakat dan Kaderisasi Dengan Dekanat</h4>
        </div>
      </div>
      <div class="modern-card-bawah">
        <div class="content-bawah">
          <h4>Melaksanakan Laporan Pertanggungjawaban Terbuka Dari Mitra Kerja</h4>
        </div>
      </div>
    </div>
  </section>

  <section class="container-k">
    <h2 class="header">Agenda Kerja</h2>
    @foreach ($agendas["Komisi II SM FH Undip"] as $agenda)
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
      <h2 class="modern-header1">Mitra Kerja Komisi II</h2>
    </div>
    <div class="carousel">
      <div class="list">
        <div class="item">
          <img src="img/mitra-kerja2/mikat.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">MIKAT</div>
            <div class="des">
              Bidang Minat dan Bakat BEM FH Undip mewadahi pengembangan seni, budaya, dan olahraga mahasiswa melalui lima fungsi: Menjaring, Merangkul, Memfasilitasi, Mengoptimalkan, dan Mengapresiasi, guna mendukung potensi non-akademik
              mahasiswa hukum.
            </div>
            <button class="seeMore">Selengkapnya </button>
          </div>
          <div class="detail">
            <div class="title">MIKAT</div>
            <div class="des">
              Bidang Minat dan Bakat BEM FH UNDIP adalah bidang yang mewadahi mahasiswa Fakultas Hukum UNDIP dalam lingkup Seni, Budaya, dan Olahraga. yang mana memiliki lima fungsi yaitu Menjaring, Merangkul, Memfasilitasi, Mengoptimalkan,
              serta mengapresiasi. bidang minat dan bakat merupakan sebuah wadah untuk mahasiswa untuk mengembangkan potensi mahasiswa dan ranah Non Akademik agar nantinya mahasiswa Hukum Undip bukan hanya mahir dalam ranah akademik melainkan
              mahir juga dalam ranah Non Akademik.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/basket.png">
          <div class="introduce">
            <div class="title"></div>
            <div class="topic">BASKET</div>
            <div class="des">
              Law Undip Basketball, atau yang lebih dikenal sebagai Basket Fakultas Hukum Universitas Diponegoro, merupakan wadah bagi mahasiswa FH Undip untuk mengekspresikan minat dan bakat dalam olahraga basket, sekaligus membangun
              komunitas yang positif dan solid. Mahasiswa bukan hanya sekadar bermain basket, tetapi juga belajar tentang kerja sama tim, sportivitas, dan kepemimpinan.
            </div>
            <button class="seeMore">Selengkapnya </button>
          </div>
          <div class="detail">
            <div class="title">BASKET</div>
            <div class="des">
              Law Undip Basketball, atau yang lebih dikenal sebagai Basket Fakultas Hukum Universitas Diponegoro, merupakan wadah bagi mahasiswa FH Undip untuk mengekspresikan minat dan bakat dalam olahraga basket, sekaligus membangun
              komunitas yang positif dan solid. Mahasiswa bukan hanya sekadar bermain basket, tetapi juga belajar tentang kerja sama tim, sportivitas, dan kepemimpinan.
              Law Undip Basketball memiliki visi untuk terus berkembang dan menjadi salah satu UKM-F unggulan di FH Undip. UKM-F Basket FH Undip juga bertujuan meningkatkan kualitas pelatihan, berpartisipasi dalam lebih banyak turnamen, dan
              terus memberikan kontribusi positif bagi mahasiswa dan lingkungan kampus. Dengan semangat juang dan kerja keras yang tinggi, Law Undip Basketball siap untuk mencapai tujuannya dan menjadi kebanggaan Fakultas Hukum Universitas
              Diponegoro.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/kki.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">KKI</div>
            <div class="des">
              KKI FH Undip adalah UKM-F yang berperan sebagai LDF, menaungi kegiatan keislaman untuk membangun atmosfer akademik dan spiritual di FH Undip. Melalui Kabinet Pilar Kebaikan 2025, KKI berkomitmen menjadi wadah dakwah yang
              inspiratif dan bermanfaat.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">KKI</div>
            <div class="des">
              Koordinator Kegiatan Islam (KKI) FH Undip adalah Unit Kegiatan Mahasiswa Fakultas (UKM-F) yang berperan sebagai Lembaga Dakwah Fakultas (LDF) di Fakultas Hukum Universitas Diponegoro. KKI menaungi berbagai kegiatan keislaman di
              lingkungan FH Undip dengan tujuan membangun atmosfer akademik dan spiritual yang kondusif bagi mahasiswa. Melalui program-programnya, KKI berupaya menghadirkan nilai-nilai Islam dalam kehidupan kampus, baik dalam aspek ibadah,
              keilmuan, maupun sosial. Dengan semangat kebersamaan, KKI FH Undip 2025 melalui Kabinet Pilar Kebaikan berkomitmen untuk menjadi wadah dakwah yang inspiratif dan memberikan manfaat bagi seluruh civitas akademika Fakultas Hukum
              Universitas Diponegoro.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/teater.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">THEMIS</div>
            <div class="des">
              UKM-F Teater Themis FH Undip adalah organisasi yang fokus pada pengembangan minat dan bakat seni, khususnya teater, serta mewadahi anggotanya dalam bidang seni lainnya seperti seni rupa dan musik.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">THEMIS</div>
            <div class="des">
              Unit Kegiatan Mahasiswa Fakultas (UKM-F) Teater Themis adalah Organisasi di Fakultas Hukum Universitas Diponegoro yang berfokus pada pengembangan minat dan bakat di bidang seni khususnya teater, baik dalam hal keaktoran,
              penulisan naskah, hingga manajemen produksi teater. Selain itu, Teater Themis juga mewadahi anggotanya untuk mengasah bakat seni lainnya, seperti seni rupa, musik, dan lain-lainnya.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/pmk.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">PMK</div>
            <div class="des">
              PMK FH Undip adalah komunitas mahasiswa Kristen yang mewadahi pertumbuhan iman, kebersamaan, dan penerapan nilai Kristiani dalam kehidupan kampus. Bersifat independen, PMK berlandaskan ajaran Yesus, Amanat Agung, dan Hukum
              Kasih.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">PMK</div>
            <div class="des">
              PMK FH UNDIP adalah Persekutuan Mahasiswa Kristen Fakultas Hukum Universitas Diponegoro, sebuah komunitas yang menjadi wadah bagi mahasiswa Kristen untuk bertumbuh dalam iman, mempererat kebersamaan, serta mengaplikasikan
              nilai-nilai Kristiani dalam kehidupan akademik dan sosial. Sebagai Unit Pelaksana Kegiatan yang bersifat independen, PMK FH UNDIP tidak terikat dengan gereja, organisasi, atau lembaga mana pun, tetapi tetap berlandaskan pada
              ajaran Yesus Kristus, terutama Amanat Agung yang menekankan pentingnya pemberitaan Injil, serta Hukum Kasih yang mengajarkan kasih kepada Tuhan dan sesama sebagai inti kehidupan Kristen. Lebih dari sekadar komunitas rohani, PMK
              FH UNDIP berfungsi sebagai tempat pembinaan iman, pengembangan wawasan, serta penguatan karakter bagi mahasiswa Kristen agar mereka dapat menjadi individu yang berintegritas dan memiliki dampak positif bagi lingkungan
              sekitarnya. Organisasi ini tidak hanya mendorong pertumbuhan spiritual, tetapi juga mendukung anggotanya dalam menghadapi tantangan dunia akademik serta membekali mereka dengan nilai-nilai kepemimpinan dan tanggung jawab sosial.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/psdm.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">PSDM</div>
            <div class="des">
              Bidang PSDM BEM FH Undip adalah garda terdepan kaderisasi yang fokus pada pembentukan, pembinaan, dan pengkaryaan mahasiswa guna menciptakan SDM hukum yang unggul, berkarakter, dan berkelanjutan melalui 3 divisi dan 4 program
              kerja.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">PSDM</div>
            <div class="des">
              Bidang Pengembangan Sumber Daya Mahasiswa Badan Eksekutif Mahasiswa Fakultas Hukum Universitas Diponegoro (PSDM BEM FH Undip) adalah garda terdepan kaderisasi dalam hal pembentukan, pembinaan, dan pengkaryaan mahasiswa.
              Tujuannya adalah untuk meningkatkan dan mempertahankan kualitas sumber daya
              mahasiswa di Fakultas Hukum, serta mewujudkan sumber daya manusia yang unggul dan berkarakter dengan berorientasi pada nilai-nilai karakter mahasiswa yang terstruktur dan berkelanjutan. Bidang PSDM BEM FH Undip 2025 memiliki 3
              (tiga) divisi bidang dan 4 (empat) program kerja.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/prmk.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">PRMK</div>
            <div class="des">
              PRMK FH Undip adalah UKM yang mewadahi pengembangan minat dan bakat dalam bidang kerohanian Katolik, bertujuan memperdalam iman dan mengembangkan potensi rohani mahasiswa, khususnya di FH Undip.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">PRMK</div>
            <div class="des">
              Pelayanan Rohani Mahasiswa Katolik atau yang lebih akrab disapa PRMK merupakan salah satu UKM yang berdiri di Universitas Diponegoro. PRMK FH UNDIP sendiri merupakan UKM yang mewadahi pengembangan minat dan bakat di bidang
              kerohanian katolik. Bertujuan untuk memperdalam iman Katolik dan mengembangkan potensi rohani mahasiswa khususnya mahasiswa dalam lingkup FH di UNDIP
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/bola.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">Bola</div>
            <div class="des">
              UKM-F Bola FH Undip adalah unit kegiatan yang mewadahi pengembangan minat dan bakat di bidang sepak bola dan futsal, dibentuk karena tingginya minat mahasiswa FH Undip terhadap olahraga tersebut.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">Bola</div>
            <div class="des">
              Fakultas Hukum Universitas Diponegoro memiliki berbagai organisasi mahasiswa yang bertujuan sebagai wadah untuk memfasilitasi mahasiswa Fakultas Hukum itu sendiri. Unit Kegiatan Mahasiswa Bola FH Universitas Diponegoro yang
              selanjutnya disingkat UKM – F Bola FH Undip merupakan salah satu unit pelaksana kegiatan di lingkup Fakultas Hukum Universitas Diponegoro yang mewadahi pengembangan minat dan bakat di bidang olahraga sepakbola dan futsal. Adapun
              dasar pembentukan UKM ini dilatarbelakangi oleh tingginya minat mahasiswa fakultas Hukum Universitas Diponegoro terhadap bola khususnya sepak bola dan futsal. UKM F ini didukung, diarahkan serta didorong dari pihak Dekanat
              Fakultas Hukum Undip yang juga mendukung para mahasiswa berkompetisi selain dari bidang akademik harus juga dalam bidang non – akademik. Tujuan utama dari UKM F Bola Fakultas Hukum Undip yaitu sebagai wadah bagi mahasiswa agar
              minat dan bakat nya dapat tersalurkan dengan baik dan harapannya sampi pada generasi selanjutnya. Pada tahun ini, UKM – F Bola FH Universitas Diponegoro membawa program – program kerja yang yang menarik seperti Ormawa Cup, Bola
              Berbagi, Malam Akrab, Gugus Cup, Bincang Bola dan Piala Hukum.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/ekotif.png">
          <div class="introduce">
            <div class="title">BEM FH</div>
            <div class="topic">EKOTIF</div>
            <div class="des">
              Bidang Ekonomi Kreatif BEM FH Undip 2025 mewadahi mahasiswa dengan minat di bidang ekonomi, bisnis, dan kewirausahaan, serta berperan sebagai motor penggerak kewirausahaan, meningkatkan kesadaran isu hukum-ekonomi, dan sumber
              pendanaan utama BEM FH Undip.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">EKOTIF</div>
            <div class="des">
              Bidang Ekonomi Kreatif BEM FH Undip 2025 merupakan sebuah bidang yang bertujuan sebagai wadah bagi Mahasiswa FH Undip yang memiliki Minat & Potensi di dalam dunia Ekonomi, Bisnis, dan Kewirausahaan.
              EKOTIF BEM FH Undip 2025 hadir sebagai motor penggerak untuk memanaskan iklim kewirausahaan di lingkungan FH Undip, meningkatkan sense of crisis Mahasiswa FH Undip seputar isu hukum yang bersinggungan dengan perekonomian, dan
              menjadi salah satu sumber utama pendanaan bagi BEM FH Undip, dst.
            </div>

          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/beladiri.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">Bela Diri</div>
            <div class="des">
              UKM-F Bela Diri FH Undip adalah organisasi yang fokus pada pengembangan kemampuan bela diri dan karakter mahasiswa, dengan 4 cabang olahraga: Karate, Taekwondo, Kickboxing, dan Silat.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">Bela Diri</div>
            <div class="des">
              UKM-F Bela Diri adalah satu-satunya wadah untuk mahasiswa Fakultas Hukum Universitas Diponegoro yang merupakan sebuah organisasi ini berfokus terhadap pengembangan kemampuan bela diri dan karakter mahasiswa di ruang lingkup
              Fakultas Hukum Universitas Diponegoro. UKM-F Bela Diri terdiri dari 4 Cabang Olahraga yakni : Karate, ⁠Taekwondo, ⁠KickBoxing dan Silat.
              Dalam keberjalanan UKM-F ini optimisme, konsistensi dan kerja keras para anggota UKM-F Bela Diri serta dukungan dari pihak Dekanat Fakultas Hukum Universitas Diponegoro telah membuat UKM-F Bela Diri berhasil mencetak banyak
              sekali delegasi-delegasi pertandingan di kancah tingkat Nasional sampai Internasional.
              UKM-F Bela Diri telah membanggakan nama Fakultas Hukum Universitas Diponegoro disetiap partisipasinya dalam turnament-turnament yang telah mereka ikuti.
            </div>
          </div>
        </div>

        <div class="item">
          <img src="img/mitra-kerja2/sdg.png">
          <div class="introduce">
            <div class="title">UKM-F</div>
            <div class="topic">PSM SDG</div>
            <div class="des">
              PSM Satya Dharma Gita FH Undip adalah UKM di bidang seni vokal yang berfokus pada pengembangan musikalitas anggota. Organisasi ini telah meraih berbagai prestasi internasional, seperti Juara Grand Prix di 3rd Soegijapranata
              International Choir Competition 2024, Gold Medal di 1st Thailand International Choir Competition 2024, dan Finalis Grand Champion di 12th Bali International Choir Festival 2023. PSM SDG juga aktif dalam acara resmi universitas.
            </div>
            <button class="seeMore">Selengkapnya</button>
          </div>
          <div class="detail">
            <div class="title">PSM SDG</div>
            <div class="des">
              Sejak 2001, PSM SDG telah aktif menyelenggarakan festival paduan suara bergengsi yaitu Satya Dharma Gita Choir Festival dan telah berlangsung sebanyak sembilan kali. Tahun 2025, SDGCF mengadakan edisi kesepuluh dengan skala
              internasional, yaitu The 10th Satya Dharma Gita International Choir Festival, menunjukkan komitmen PSM SDG untuk terus memperluas jangkauan dan meningkatkan kualitas acara.
              Tidak hanya berkomitmen pada kompetisi, tetapi juga pada pembangunan karakter anggota PSM SDG melalui disiplin, kreativitas dan kerja sama tim. Sebagai salah satu paduan suara terkemuka di Indonesia, PSM SDG bertekad untuk
              menjadi inspirasi bagi generasi muda dalam berkarya dan akan terus melangkah maju dengan semangat inovasi dan dedikasi tinggi.
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
    <h2 class="header">Anggota Komisi II</h2>
    <div class="anggota-4">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/ketua/Kms M Fadhlurrohman Fayyadh.jpg" />
        </div>
        <div class="content1">
          <h2>Kms. M. Fadhlurrohman Fayyadh</h2>
          <p class="deskripsi">
            Ketua Komisi II</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/senator/Dayinda Shofia Nabila.jpg" />
        </div>
        <div class="content1">
          <h2>Dayinta Shofia Nabila</h2>
          <h2>Dayinta Shofia Nabila</h2>
          <p class="deskripsi">
            Senator Anggota</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/senator/Gading Kain TImoer.jpg" />
        </div>
        <div class="content1">
          <h2>Gading Kain Timoer</h2>
          <p class="deskripsi">
            Senator Anggota</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/senator/Laksita Satyaning Kuncoro.jpg" />
        </div>
        <div class="content1">
          <h2>Laksita Satyaning Kuncoro</h2>
          <p class="deskripsi">
            Senator Anggota</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Adinda Yasmin Ariyani.jpg" />
        </div>
        <div class="content1">
          <h2>Adinda Yasmin Ariyani</h2>
          <p class="deskripsi">
            Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Irene Alfrianti.jpg" />
        </div>
        <div class="content1">
          <h2>Irene Alfrianti</h2>
          <p class="deskripsi">
          Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Mochamad Luthfi Bakri.jpg" />
        </div>
        <div class="content1">
          <h2>Mochamad Luthfi Bakri</h2>
          <p class="deskripsi">
          Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Muhammad Hisyam Aimanuddin.jpg" />
        </div>
        <div class="content1">
          <h2>Muhammad Hisyam Aimanuddin</h2>
          <p class="deskripsi">
          Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Naelah Zahra Adelia.jpg" />
        </div>
        <div class="content1">
          <h2>Naelah Zahra Adelia</h2>
          <p class="deskripsi">
          Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Octafiani Ramadhani.jpg" />
        </div>
        <div class="content1">
          <h2>Octafiani Ramadhani</h2>
          <p class="deskripsi">
          Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
    </div>
    <div class="anggota-4-1">
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Tegar Setiawan.jpg" />
        </div>
        <div class="content1">
          <h2>Tegar Setiawan</h2>
          <p class="deskripsi">
          Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
      <div class="card-coba">
        <div class="imgbox">
          <img class="img-coba" src="img/komisi-2/staff/Zulfa Afifa Aprilia.jpg" />
        </div>
        <div class="content1">
          <h2>Zulfa Afifa Aprilia</h2>
          <p class="deskripsi">
          Staff Ahli</br>SM FH UNDIP 2025
          </p>
        </div>
      </div>
    </div>
  </section>
  <script src="js-komisi.js"></script>
@endsection
