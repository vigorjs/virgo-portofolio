  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('https://nicodwin.website/assets/common/img/cover/default.png');">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Virgo Fajar Pamungkas</h1>
      <p>I'm a <span class="typed" data-typed-items="Full Stack Web Developer, Data Analyst, Technology Enthusiast, Cloud Engineer, Digital Marketing"></span></p>
      <a href="" class="btn btn-primary mt-3">Download CV</a>
      <div class="social-links">
        @foreach ($socials as $social)
        <a href="{{url($social->linkedin)}}" target="=&quot;_blank&quot;" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        <a href="{{url($social->github)}}" target="=&quot;_blank&quot;" class="social-icon"><i class="bx bxl-github"></i></a>
        <a href="{{url($social->twitter)}}" target="=&quot;_blank&quot;" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="{{url($social->instagram)}}" target="=&quot;_blank&quot;" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="{{url($social->gmail)}}" target="=&quot;_blank&quot;" class="social-icon"><i class="bx bxl-gmail"></i></a>
        @endforeach
      </div>
    </div>
  </section><!-- End Hero -->
