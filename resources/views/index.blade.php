@extends("layouts.layout")

@section("content")
  <link href="styleindex.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
  <link href="styleindex.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" rel="stylesheet" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css' rel='stylesheet'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" rel="stylesheet" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <style>
    /* CSS untuk mengubah warna teks dan border kalender menjadi putih */
    .fc th,
    .fc td {
      color: white;
      /* Mengubah warna teks menjadi putih */
      border-color: white;
      /* Mengubah warna border menjadi putih */
    }
  </style>
  <div class="container-bg">
    <div class="blob-bg">
    </div>
  </div>

  <section class="container9" class="latest-news">
    <div class="flex">
      <!-- Main News Section -->
      <div class="main-news">
        <div class="slider">
          <button class="nav-button left" onclick="prevSlide()"><i class="fas fa-chevron-left"></i></button>
          <div class="slides">
            @foreach (App\Models\Berita::latest()->take(5)->get() as $berita)
              <div class="slide">
                <img src="{{ asset("storage/" . $berita->picture) }}" alt="Picture">
                <div class="info">
                  <span class="tag"><a class="berita_title" href="/beritapublic/{{ $berita->id }}">{{ $berita->jabatan }}</a></span>
                  <h2>{{ $berita->title }}</h2>
                  <p><i class="fas fa-calendar-alt"></i> {{ $berita->created_at->format("d F Y") }}</p>
                </div>
              </div>
            @endforeach
          </div>
          <button class="nav-button right" onclick="nextSlide()"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>

      <!-- Popular News Section -->
      <div class="div-popular-news">
        <div class="popular-news">
          <h2>HOT NEWS</h2>

          @foreach (App\Models\Berita::latest()->take(5)->get() as $berita)
            <div class="news-item">
              <img src="{{ asset("storage/" . $berita->picture) }}" alt="Picture" style="max-width: 100px;">
              <div class="info">
                <h3><a class="berita_title" href="/beritapublic/{{ $berita->id }}" style="color:black">{{ $berita->title }}</a></h3>
                <p><i class="fas fa-calendar-alt"></i> {{ $berita->created_at->format("d F Y") }}</p>
                <p><i class="fas fa-briefcase"></i> {{ $berita->jabatan }}</p>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <header class="container">
    <div class="content">
      <span class="blur"></span>
      <span class="blur"></span>
      <h4 style="font-size: 2rem;">SENAT MAHASISWA FAKULTAS HUKUM UNIVERSITAS DIPONEGORO</h4>
      <h1 style="color:#432e6e;">GEMILANG PEMRAKARSA</h1>
      <p>
        Selamat datang di portal resmi Senat Fakultas Hukum Universitas Diponegoro! Kami bangga menjadi wadah bagi mahasiswa-mahasiswa FH Undip untuk berpartisipasi aktif dalam proses pembelajaran, pengembangan diri, serta pengabdian kepada
        mahasiswa Fakultas Hukum Universitas Diponegoro.
        Sebagai lembaga yang mewakili suara mahasiswa, Senat FH Undip berkomitmen untuk menjaga dan memajukan kualitas kinerja di lingkungan fakultas. Kami mengedepankan nilai-nilai humanis, profesional, dan berwibawa dalam setiap langkah
        yang kami ambil.
        Melalui situs web ini, Anda akan menemukan informasi terkini mengenai kegiatan, program, dan berbagai kegiatan yang kami selenggarakan. Kami juga mengundang Anda untuk terlibat secara aktif dalam berbagai kegiatan yang kami adakan,
        serta menyampaikan aspirasi dan gagasan Anda untuk kemajuan bersama.
        Terima kasih telah mengunjungi situs web Senat FH Undip. Mari bersama-sama menciptakan lingkungan belajar yang inspiratif dan berdaya saing tinggi bagi mahasiswa FH Undip.Viva Legislativa!
      </p>
      <a class="btn" href="{{ url("/selayangpandang#makna-logoparlemen") }}">Makna Logo</a>
    </div>
    <div class="logo-container">
      <img src="img/kabinetridho.png" alt="Logo Api">
    </div>
  </header>

  <section class="info-akademik">
    <h2 class="header">INFO AKADEMIK</h2>
    <div class="event-container-infoakademis">
      <div class="event-card-infoakademis">
        <!-- Left Section - Carousel -->
        <div class="carousel-section-infoakademis">
          <div class="date-badge-infoakademis">
            <div class="year-infoakademis">2026</div>
            <div class="day-infoakademis">2</div>
            <div class="month-infoakademis">Feb</div>
          </div>

          <div class="carousel-container-infoakademis">
            <!-- Carousel Slides -->
            <div class="carousel-slide-infoakademis active-infoakademis">
              <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=800&h=600&fit=crop" alt="Event audience 1" />
            </div>
            <div class="carousel-slide-infoakademis">
              <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=800&h=600&fit=crop" alt="Event audience 2" />
            </div>
            <div class="carousel-slide-infoakademis">
              <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=800&h=600&fit=crop" alt="Event audience 3" />
            </div>
            <div class="carousel-slide-infoakademis">
              <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?w=800&h=600&fit=crop" alt="Event audience 4" />
            </div>
            <div class="carousel-slide-infoakademis">
              <img src="https://images.unsplash.com/photo-1475721027785-f74eccf877e2?w=800&h=600&fit=crop" alt="Event audience 5" />
            </div>

            <!-- Previous Button -->
            <button class="carousel-nav-infoakademis carousel-prev-infoakademis" aria-label="Previous slide">
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
              </svg>
            </button>

            <!-- Next Button -->
            <button class="carousel-nav-infoakademis carousel-next-infoakademis" aria-label="Next slide">
              <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>

            <!-- Carousel Dots -->
            <div class="carousel-dots-infoakademis">
              <span class="dot-infoakademis active-infoakademis" data-slide="0"></span>
              <span class="dot-infoakademis" data-slide="1"></span>
              <span class="dot-infoakademis" data-slide="2"></span>
              <span class="dot-infoakademis" data-slide="3"></span>
              <span class="dot-infoakademis" data-slide="4"></span>
            </div>
          </div>
        </div>

        <!-- Right Section - Info -->
        <div class="info-section-infoakademis">
          <div>
            <span class="tag-infoakademis">IRS</span>
            <h1 class="event-title-infoakademis">Info IRS</h1>
            <p class="event-description-infoakademis">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus dolores non sequi nostrum rerum nihil pariatur nobis in ipsam.
            </p>

            <div class="event-details-infoakademis">
              <div class="detail-item-infoakademis">
                <svg class="detail-icon-infoakademis" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="10" />
                  <polyline points="12 6 12 12 16 14" />
                </svg>
                <div class="detail-text-infoakademis">Feb 2 | 6:00 - 9:00 pm ET</div>
              </div>

              <div class="detail-item-infoakademis">
                <svg class="detail-icon-infoakademis" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <div class="detail-text-infoakademis">Gedung FH - Fakultas FH, Universitas Diponegoro, Semarang</div>
              </div>

              <div class="detail-item-infoakademis">
                <svg class="detail-icon-infoakademis" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2" />
                  <line x1="16" y1="2" x2="16" y2="6" />
                  <line x1="8" y1="2" x2="8" y2="6" />
                  <line x1="3" y1="10" x2="21" y2="10" />
                </svg>
                <div class="detail-text-infoakademis">General Admission | Free for Members</div>
              </div>
            </div>
          </div>

          <button class="event-button-infoakademis">Event Details</button>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <h2 class="header">AKTIVITAS LEGISLATIF</h2>
    <div class="container">
      <div class="row">
        <div class="col-12 mt-3">
          <div id='calendar'></div>
        </div>
      </div>
    </div>

    <div class="modal" id="modal-action" tabindex="-1">

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/bootstrap5@6.1.7/index.global.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous"
      referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
      const modal = $('#modal-action')
      const csrfToken = $('meta[name=csrf_token]').attr('content')

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          themeSystem: 'bootstrap5',
          events: "{{ route("legislasi.list") }}",
          editable: false,
          eventDidMount: function(info) {
            // Memeriksa kategori dari event
            var category = info.event.extendedProps.category;

            // Mengatur warna event berdasarkan kategori
            var backgroundColor;
            var borderColor;

            switch (category) {
              case 'success':
                backgroundColor = '#dfcdb2';
                borderColor = '#dfcdb2';
                break;
              case 'danger':
                backgroundColor = '#fdf4e6';
                borderColor = '#fdf4e6';
                break;
              case 'warning':
                backgroundColor = '#fefefe';
                borderColor = '#fefefe';
                break;
              case 'info':
                backgroundColor = '#f7ffdf';
                borderColor = '#f7ffdf';
                break;
              case 'primary':
                backgroundColor = '#fdf4e6';
                borderColor = '#b09782';
                break;
              case 'secondary':
                backgroundColor = '#918072';
                borderColor = '#918072';
                break;
              case 'dark':
                backgroundColor = '#8e7e71';
                borderColor = '#8e7e71';
                break;
              case 'light':
                backgroundColor = '#b18c6e';
                borderColor = '#b18c6e';
                break;
              case 'link':
                backgroundColor = '#e4c89b';
                borderColor = '#e4c89b';
                break;
              default:
                backgroundColor = '#CCCCCC';
                borderColor = '#CCCCCC';
            }

            // Atur warna background dan border
            info.el.style.backgroundColor = backgroundColor;
            info.el.style.borderColor = borderColor;
            const title = info.event.title;
            info.el.setAttribute('title', title);
          },
          eventClick: function(arg) {
            var title = arg.event.title;
            const eventDetailHTML = `
                <div>
                    <h2>${title}</h2>
                </div>
            `;
            modal.html(eventDetailHTML).modal('show');
          }
        });
        calendar.render();
      });

      document.addEventListener('DOMContentLoaded', function() {
        setTimeout(() => {
          document.querySelectorAll('.fc-day-today').forEach(el => {
            el.style.backgroundColor = "#4a396e";

            el.style.color = "#4a396e";

          });
        }, 500);
      });
    </script>
    <script>
      let currentIndex = 0;
      const slides = document.querySelectorAll('.slide');

      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.toggle('active', i === index);
        });
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
      }

      // Ensure no slides have "active" class initially
      slides.forEach(slide => slide.classList.remove('active'));

      // Optionally, activate the first slide dynamically
      if (slides.length > 0) {
        showSlide(0);
      }
    </script>

  </section>

  <script src="js-aktivitas-legislasi.js"></script>
  <script src="js-aktivitas-sm-fh.js"></script>

  <script>
    // Carousel functionality
    let currentSlide = 0;
    const slidesinfo = document.querySelectorAll(".carousel-slide-infoakademis");
    const dots = document.querySelectorAll(".dot-infoakademis");
    const prevButton = document.querySelector(".carousel-prev-infoakademis");
    const nextButton = document.querySelector(".carousel-next-infoakademis");

    function showSlideInfo(index) {
      // Remove active class from all slides and dots
      slidesinfo.forEach((slide) => slide.classList.remove("active-infoakademis"));
      dots.forEach((dot) => dot.classList.remove("active-infoakademis"));

      // Add active class to current slide and dot
      slidesinfo[index].classList.add("active-infoakademis");
      dots[index].classList.add("active-infoakademis");
      currentSlide = index;
    }

    function nextSlideInfo() {
      currentSlide = (currentSlide + 1) % slidesinfo.length;
      showSlideInfo(currentSlide);
    }

    function prevSlideInfo() {
      currentSlide = (currentSlide - 1 + slidesinfo.length) % slidesinfo.length;
      showSlideInfo(currentSlide);
    }

    // Previous button click
    prevButton.addEventListener("click", prevSlideInfo);

    // Next button click
    nextButton.addEventListener("click", nextSlideInfo);

    // Dot click functionality
    dots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        showSlideInfo(index);
      });
    });

    // Auto-advance carousel every 4 seconds
    // let autoSlideInterval = setInterval(nextSlideInfo, 4000);

    // Pause auto-advance when user interacts with carousel
    const carouselContainer = document.querySelector(".carousel-container-infoakademis");

    // carouselContainer.addEventListener("mouseenter", () => {
    //   clearInterval(autoSlideInterval);
    // });

    // carouselContainer.addEventListener("mouseleave", () => {
    //   autoSlideInterval = setInterval(nextSlideInfo, 4000);
    // });

    // Optional: Keyboard navigation
    document.addEventListener("keydown", (e) => {
      if (e.key === "ArrowLeft") {
        prevSlideInfo();
        // Reset auto-advance timer
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(nextSlideInfo, 4000);
      } else if (e.key === "ArrowRight") {
        nextSlideInfo();
        // Reset auto-advance timer
        clearInterval(autoSlideInterval);
        autoSlideInterval = setInterval(nextSlideInfo, 4000);
      }
    });
  </script>
@endsection
