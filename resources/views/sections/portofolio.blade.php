    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-profesional">Profesional</li>
                        <li data-filter=".filter-personal">Personal</li>
                        {{-- <li data-filter=".filter-web">Dll</li> --}}
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                {{-- card filter-profesional
            <div class="col-lg-4 col-md-6 portfolio-item filter-profesional">
              <div class="portfolio-wrap">
                <img src="{{asset('template/assets/img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>App 1</h4>
                  <p>App</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-detail"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div> --}}

                {{-- card filter-personal
            <div class="col-lg-4 col-md-6 portfolio-item filter-personal">
              <div class="portfolio-wrap">
                <img src="{{asset('template/assets/img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Card 2</h4>
                  <p>Card</p>
                  <div class="portfolio-links">
                    <a href="{{asset('template/assets/img/portfolio/portfolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-detail"></i></a>
                    <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div> --}}
                @foreach ($portofolio as $portofolio)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $portofolio->category }}">
                        <div class="portfolio-wrap">
                            <img src="{{ $portofolio->image ? asset('storage/assets/' . $portofolio->image) : asset('template/assets/img/portfolio/portfolio-1.jpg') }}"
                                class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $portofolio->title }}</h4>
                                <div class="portfolio-links">
                                    <a href="{{ $portofolio->detail ? asset('storage/assets/' . $portofolio->detail) : asset('template/assets/img/portfolio/portfolio-2.jpg') }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="{{ $portofolio->description }}"><i class="bx bx-detail"></i></a>
                                    <a href="{{ $portofolio->url }}" target="_blank"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->
