<div class="social-links">
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
