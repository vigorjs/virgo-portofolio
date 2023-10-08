  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center"
      style="background-image: url('{{ asset('template/assets/img/blob-scatter-haikei.svg') }}');">

      <div class="login-register-container">
          @if (Route::has('login'))
              @auth
                  <a href="{{ url('admin/dashboard') }}"
                      class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
              @else
                  <a href="{{ route('login') }}"
                      class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}"
                          class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                  @endif
              @endauth
          @endif
      </div>

      <div class="container" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($sectionprofiles as $sectionprofile)
              <h1>{{ $sectionprofile->name }}</h1>
          @endforeach
          <p>I'm a <span class="typed"
                  data-typed-items="Junior Web Developer, Technology Enthusiast, IT Engineer, PHP Developer"></span>
          </p>
          <a href="{{ url('https://drive.google.com/file/d/1vDR71Ja2rrjonVYm9L536fPwksxXCw1U/view?usp=sharing') }}"
              target="=&quot;_blank&quot;" class="btn btn-primary mt-3">Download CV</a>
          <div class="social-links mb-5">
              @foreach ($socials as $social)
                  <a href="{{ url($social->linkedin) }}" target="=&quot;_blank&quot;" class="linkedin"><i
                          class="bx bxl-linkedin"></i></a>
                  <a href="{{ url($social->github) }}" target="=&quot;_blank&quot;" class="social-icon"><i
                          class="bx bxl-github"></i></a>
                  <a href="{{ url($social->whatsapp) }}" target="=&quot;_blank&quot;" class="social-icon"><i
                          class="bx bxl-whatsapp"></i></a>
                  <a href="{{ url($social->twitter) }}" target="=&quot;_blank&quot;" class="twitter"><i
                          class="bx bxl-twitter"></i></a>
                  <a href="{{ url($social->instagram) }}" target="=&quot;_blank&quot;" class="instagram"><i
                          class="bx bxl-instagram"></i></a>
                  <a href="{{ url($social->gmail) }}" target="=&quot;_blank&quot;" class="social-icon"><i
                          class="bx bxl-gmail"></i></a>
              @endforeach
          </div>
          <div class="scroll-down-link d-flex justify-content-center mt-8">
              <a href="#about">Scroll Down For More<i class="bx bx-down-arrow-alt"></i></a>
          </div>
      </div>
  </section><!-- End Hero -->
