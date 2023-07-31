  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About Me</h2>
      </div>

      <div class="row">
          @foreach ($sectionprofiles as $sectionprofile)
          <div class="col-lg-4 d-flex align-items-center justify-content-center" style="height: 350px;">
            <img src="{{asset('storage/' . $sectionprofile->image)}}" class="lazy img-fluid" style="object-fit: cover; max-height: 100%;" alt="">
          </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content my-lg-auto">
          <div class="row">
            <div class="col-lg-12">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone :</strong> <span>{{$sectionprofile->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong> <span>{{$sectionprofile->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Address :</strong> <span>{{$sectionprofile->address}}</span></li>
            </ul>
        </div>
        <p>
            {{$sectionprofile->description}}
        </p>
        </div>
    </div>
@endforeach

    </div>
</section><!-- End About Section -->
