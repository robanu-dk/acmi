@extends('layout\main')

@section('isihome')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div  style="padding-top: 100px; width:80%; margin: auto;" >
    <h1 class="border-bottom" style="text-align: center; font-family: 'Inter', sans-serif;font-weight: 600; font-size:40px; color: #313131 ; padding-bottom:10px;">About Us</h1>
    <div class="row mt-5">
      <div class="col-lg-4">
        <div class="info">
          <div class="email">
            <table>
              <tbody>
                <tr>
                  <td rowspan="2" style="padding-right: 20px; padding-bottom:10px">
                    <a href="https://mail.google.com/mail/u/0/?tab=wm#inbox?compose=CllgCKCBkBJmxqXvvsPVrBWNppfHGsNpgwnRbHXdfBGKXLMvpHfKvJMmRRGhHZfvSSwkhbnMgZg" class="badge bg-info " style="background: #6C1FB6 !important"><i data-feather="mail"></i></a>
                  </td>
                  <td>
                    <h4 style="color:#313131">Email:</h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p style="color:#313131">essaykastratukmki@gmail.com</p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="instagram">
            <table>
              <tbody>
                <tr>
                  <td rowspan="2" style="padding-right: 20px; padding-bottom:10px">
                    <a href="https://www.instagram.com/acmi.ukmkiunair/" class="badge bg-info " style="background: #6C1FB6 !important"><i data-feather="instagram"></i></a>
                  </td>
                  <td>
                    <h4 style="color:#313131">Instagram:</h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p style="color:#313131">acmi.ukmkiunair</p>
                  </td>
                </tr>
              </tbody>
          </div>
          <div class="phone">
            <table>
              <tbody>
                <tr>
                  <td rowspan="2" style="padding-right: 20px; padding-bottom:10px">
                    <a href="https://wa.me/089696915238" class="badge bg-info " style="background: #6C1FB6 !important"><i data-feather="phone"></i></a>
                  </td>
                  <td>
                    <h4 style="color:#313131">Whatsapp:</h4>
                  </td>
                </tr>
                <tr>
                  <td>
                    <p style="color:#313131">Novia (+62 896-9691-5238)</p>
                  </td>
                </tr>
              </tbody>
          </div>
        </div>
      </div>

      <!--<div class="col-lg-8 mt-5 mt-lg-0">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-center"><a href="#" class="btn" style="background: #6C1FB6 !important; color: white; margin-top:25px;">Send Message</a></div>
        </form>

      </div>-->

    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
@endsection