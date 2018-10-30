@extends('layouts.general')

@section('content')
<div class="container is-fluied">
  <section class="hero is-light is-large header-image">
    <div class="hero-body">
      <div class="container has-text-centered ">
        <h1 class="title">
          Welcome to High Five Health
        </h1>
        <h2 class="subtitle">
          we provide our customers with the best services
        </h2>
        <a href="#" class="button is-white is-outlined">Rate Us</a>
      </div>
    </div>
  </section>
  <hr>
  <h1>Top Rated Hospital</h1>
  <div class="level hospital-list-setup">
    <div class="level-left hospital-list-element">
      <div class="level-item">
        <div class=" image container-text img-setting" href="">
          <img src="{{asset('/images/mater-hospital.jpg')}}" class=" frame-of-photo has-text-centered is-light" alt="photo">
          <a href="http://www.mater.org.au/Home/Hospitals/Mater-Hospital-Brisbane" class="button is-light is-outlined centered">Mater Hospital</a>
        </div>
      </div>
      <div class="level-item">
        <div class=" image container-text img-setting" href="">
          <img src="{{asset('/images/wesley-hospital.jpg')}}" class=" frame-of-photo has-text-centered is-light" alt="photo">
          <a href="http://wesley.com.au/" class="button is-light is-outlined centered">Wesley Hospital</a>
        </div>
      </div>
      <div class="level-item">
        <div class=" image container-text img-setting" href="">
          <img src="{{asset('/images/pa-hospital.jpg')}}" class="frame-of-photo has-text-centered is-light" alt="photo">
          <a href="https://metrosouth.health.qld.gov.au/princess-alexandra-hospital" class="button is-light is-outlined centered">PA Hospital</a>
        </div>
      </div>
      <div class="level-item">
        <div class=" image container-text img-setting" href="">
          <img src="{{asset('/images/Herveybay-hospital.jpg')}}" class="frame-of-photo has-text-centered is-light" alt="photo">
          <a href="https://www.health.qld.gov.au/widebay" class="button is-light is-outlined centered">Hervey Bay Hos</a>
        </div>
      </div>
    </div>
  </div>
  <h1>Top Rated Online Medical Services</h1>
    <div class="level hospital-list-setup">
      <div class="level-left hospital-list-element">
        <div class="level-item">
          <div class=" image container-text img-setting" href="">
            <img src="{{asset('/images/ruby-health.png')}}" class="frame-of-photo has-text-centered is-light" alt="photo">
            <a href="https://www.busbymed.com.au/" class="button is-dark is-outlined centered">Ruby Medical</a>
          </div>
        </div>
        <div class="level-item">
          <div class=" image container-text img-setting" href="">
            <img src="{{asset('/images/tmc-health.png')}}" class=" frame-of-photo has-text-centered is-light" alt="photo">
            <a href="https://toorminamedical.com.au/online-services/" class="button is-dark is-outlined centered">TMC Medical</a>
          </div>
        </div>
        <div class="level-item">
          <div class=" image container-text img-setting" href="">
            <img src="{{asset('/images/answer-doctor.png')}}" class="frame-of-photo has-text-centered is-light" alt="photo">
            <a href="https://www.justanswer.com/sip/health-2/General%20Medical?r=ppc|ga|7|AUS%20-%20Health%20-%20Medical%20-%20Google%20-%20Alpha%20-%20Broad|online%20medical%20advice%20-%20Alpha%20-%20Broad&JPKW=online%20medical%20advice&JPDC=S&JPST=&JPAD=242661718945&JPMT=b&JPNW=g&JPAF=txt&JPCD=20171228&JPRC=1&JPOP=AES_Health_ETA%202&mkwid=sZavdaYlB_dc&pcrid=242661718945&pkw=online%20medical%20advice&pmt=b&plc=&cmpid=389598730&agid=25075924690&fiid=&tgtid=kwd-14110042&ntw=g&dvc=c&gclid=CjwKCAjwio3dBRAqEiwAHWsNVTYEi5AUIvjTJZViLqINf_dlY0oL_6TYhMQmSU0jAxRJHFl88IKxBhoCcysQAvD_BwE" class="button is-dark is-outlined centered">Justanswer Medical</a>
          </div>
        </div>
        <div class="level-item">
          <div class=" image container-text img-setting" href="">
            <img src="{{asset('/images/health-direct.png')}}" class="frame-of-photo has-text-centered is-light" alt="photo">
            <a href="https://www.healthdirect.gov.au/" class="button is-dark is-outlined centered">Health Direct</a>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
