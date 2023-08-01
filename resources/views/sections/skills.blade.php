    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Skills</h2>
            {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
          </div>

          <div class="row skills-content">
            <div class="col-lg-6">
            @foreach ($column1skills as $skill)

            <div class="progress">
                <span class="skill">{{$skill->skill}} <i class="val">{{$skill->proficient}}%</i></span>
                <div class="progress-bar-wrap rounded">
                    <div class="progress-bar rounded" role="progressbar" aria-valuenow="{{$skill->proficient}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            @endforeach
            </div>

            <div class="col-lg-6">
            @foreach ($column2skills as $skill)

                <div class="progress">
                    <span class="skill">{{$skill->skill}} <i class="val">{{$skill->proficient}}%</i></span>
                    <div class="progress-bar-wrap rounded">
                        <div class="progress-bar rounded" role="progressbar" aria-valuenow="{{$skill->proficient}}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>

            @endforeach
            </div>

          </div>

        </div>
      </section><!-- End Skills Section -->
