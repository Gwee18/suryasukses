<footer class="foot py-5">
  <div class="prelatife container contain_foot">
    <div class="inners_section">
      <div class="row">
        <div class="col-md-13">
          <div class="footers_logo"><a href="{{ route('home') }}"><img src="{{ asset('asset/images/lgosn_footer.png') }}" alt="Suryasukses" class="img img-fluid"></a></div>
        </div>
        <div class="col-md-34">
          <div class="row">
            <div class="col-md-20">
              <div class="texts_menus">
                <ul class="list-unstyled">
                  <li class="firsts">WE'RE HERE TO HELP</li>
                  <li><a href="{{ route('contact') }}">Contact Us</a></li>
                  <li><a href="{{ route('faq') }}">FAQ</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-20">
              <div class="texts_menus">
                <ul class="list-unstyled">
                  <li class="firsts">GET TO KNOW US</li>
                  <li><a href="{{ route('about') }}">Who We Are</a></li>
                  <li><a href="{{ route('about.values') }}">Our Values</a></li>
                  <li><a href="{{ route('about.quality') }}">Quality Statement</a></li>
                  <li><a href="{{ route('news') }}">News and Articles</a></li>
                  <li><a href="{{ route('about.career') }}">Career</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-20">
              <div class="texts_menus">
                <ul class="list-unstyled">
                  <li class="firsts">POLICIES</li>
                  <li><a href="{{ route('policies.cerf_iso') }}">ISO 9001 Certification</a></li>
                  <li><a href="{{ route('policies.cerf_fssc') }}">FSSC 22000 Certification</a></li>
                  <li><a href="{{ route('policies.quality') }}">Quality Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-13">
          <div class="text-right socials_med">
            <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
            &nbsp;&nbsp;
            <a target="_blank" href="https://www.youtube.com/channel/UClbn91UG_JbVJuMIy_6Zb-Q"><i class="fa fa-youtube"></i></a>
            &nbsp;&nbsp;
            <a target="_blank" href="https://www.instagram.com/suryasuksesgroup/"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</footer>

<section class="live-chat">
  <div class="row">
    <div class="col-md-60">
      <div class="live">
        <a target="_blank" href="http://wa.me/62816511229">
          <img src="{{ asset('asset/images/Whatsapp-Click-to-chat.png') }}" alt="Whatsapp Click to chat">
        </a>
      </div>
    </div>
  </div>
</section>

<div class="bottom-footer-home">
  <div class="inside">
    <div class="t-footerleft">
      <div class="clear height-5"></div>
      <div class="height-2"></div>
      <div class="t-copyright inline">
        <img style="width:20px;" src="{{ asset('asset/images/waaaaaa.png') }}"> &nbsp;<a target="_blank" href="http://wa.me/62816511229">Whatsapp</a>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<style type="text/css">
  section.live-chat {
    position: fixed;
    right: 0;
    top: 60%;
    z-index: 9999;
  }

  .live a:hover {
    cursor: pointer;
  }

  .live img {
    max-width: 160px;
    height: auto;
  }

  .bottom-footer-home {
    height: 37px;
    background-color: #fff;
    width: 100%;
    z-index: 20;
    position: fixed;
    bottom: 0;
  }

  .bottom-footer-home .inside {
    padding: 0 35px;
  }

  .t-copyright.inline {
    text-align: center;
  }

  .t-copyright.inline a {
    color: #000;
  }

  @media screen and (min-width: 450px) {
    .bottom-footer-home {
      display: none !important;
    }
  }
</style>