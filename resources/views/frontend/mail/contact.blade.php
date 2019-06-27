
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" style="background: #f6f6f6; color: #2c3e50; margin: 0; padding: 0;">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@lang('strings.emails.contact.email_body_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  <body style="background: #f6f6f6; color: #2c3e50; margin: 0; padding: 0;">
    <table class="wrapper" style="background: #f6f6f6; border-spacing: 0; font-family: 'Source Sans Pro', Arial, Helvetica, sans-serif; width: 100%;">
      <tr class="header" style="background: #00bbaa;">
        <td colspan="3">
          <table class="header__wrap" style="border-spacing: 0; margin: 0 auto; max-width: 600px; width: 600px;">
            <tr>
              <td>
                <p class="header__slogan" style="color: #fff; font-size: 13px; font-style: italic;">“ Pacific North. Find apartments,<br>single-family homes and everything in between ”</p>
              </td>
              <td>
                <p class="header__title" style="color: #ffffff; font-size: 15px; text-align: right;">Connect With Us</p>
              </td>
              <td class="header__social" style="text-align: right;"><a href="https://facebook.com" class="header__link" style="color: #2c3e50; display: inline-block; margin: 5px 0 0 10px;"><img src="{{asset('img/frontend/icons/icon-facebook.png')}}" alt="" style="max-width: 100%;"></a><a href="https://twitter.com" class="header__link" style="color: #2c3e50; display: inline-block; margin: 5px 0 0 10px;"><img src="{{asset('img/frontend/icons/icon-twitter.png')}}" alt="" style="max-width: 100%;"></a><a href="https://google.com" class="header__link" style="color: #2c3e50; display: inline-block; margin: 5px 0 0 10px;"><img src="{{asset('img/frontend/icons/icon-google.png')}}" alt="" style="max-width: 100%;"></a></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr class="main">
        <td colspan="3"><a href="/" class="logo" style="background: url({{asset('img/frontend/placeholders/logo2.png')}}); color: #2c3e50; display: block; height: 55px; margin: 50px auto 20px; width: 214px;"><img src="{{asset('img/frontend/placeholders/logo2.png')}}" alt="" style="max-width: 100%;"></a>
          <table class="body" style="background: #fff; border-spacing: 0; margin: 0 auto; max-width: 600px;">
            <tr>
              <td colspan="3"><img src="{{asset('img/frontend/placeholders/email-img.jpg')}}" alt="" style="max-width: 100%;"></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <table class="content" style="border-spacing: 0; margin: 0 auto; max-width: 500px;">
                  <tr>
                    <td>
                      <h1 style="color: #2c3e50; font-size: 46px;">Expert Advice on Home Ownership</h1>
                      <p style="color: #2c3e50; font-size: 15px;"><strong>@lang('validation.attributes.frontend.name'):</strong> {{ $request->name }}</p>
                      <p style="color: #2c3e50; font-size: 15px;"><strong>@lang('validation.attributes.frontend.email'):</strong> {{ $request->email }}</p>
                      <p style="color: #2c3e50; font-size: 15px;"><strong>@lang('validation.attributes.frontend.phone'):</strong> {{ $request->phone ?? 'N/A' }}</p>
                      <p style="color: #2c3e50; font-size: 15px;"><strong>@lang('validation.attributes.frontend.message'):</strong> {{ $request->message }}</p>
                      <p style="color: #2c3e50; font-size: 15px; text-align: center;"><a href="{{route('frontend.index')}}" class="btn-link" style="background: #f3bc65; background-image: none; border: none; border-bottom: 4px solid #d99221; color: #222222; cursor: pointer; display: inline-block; font-weight: bold; line-height: 35px; margin-bottom: 0; padding-left: 10px; padding-right: 10px; text-align: center; text-decoration: none; text-transform: uppercase; vertical-align: middle; white-space: nowrap; width: 210px;">See more details</a></p>
                      <p style="color: #2c3e50; font-size: 15px;">Thanks,<br>                                    The Pacific North Team</p>
                    </td>
                  </tr>
                </table>
              </td>
              <td></td>
            </tr>
          </table>
        </td>
      </tr>
      <tr class="footer" style="color: #2c3e50; font-size: 15px; text-align: center;">
        <td colspan="3">
          <p>Please do not reply directly to this email. You can reach us by sending message to<br><a href="#" style="color: #2c3e50;">support@pacificnorthlistings.com</a></p>
        </td>
      </tr>
    </table>
  </body>
</html>