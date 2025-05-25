<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jusour Emailer</title>
    </head>
    <body style="background-color: #ccc;">
        <table cellpadding="0" cellspacing="0" width="100%" border="0" align="center" style="max-width: 800px; background-color: #FAFAFA; font-family: cairo; line-height: 23px;">
            <thead>
            <tr>
                <td colspan="3">
                    <img src="{{ asset("theme/media/images/mail-header.jpg") }}" alt="" style="display: block; border: none;">
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
        
                <td>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color: #fff;">
                        <tr>
                            <td width="50"></td>
        
                            <td>
        
        
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td>
                                            <h6 style="font-size: 16px; margin-top: 0; margin-bottom: 12px;"> Dear Employee,</h6>
                                            <h6 style="font-size: 16px; margin-top: 0; margin-bottom: 12px;">New Intranet Update</h6>
                                            <p>A new update titled "<strong>{{ $title }}</strong>" has been published.</p>
                                            <p><a href="{{ $link }}">Click here to view it</a></p>
                                            <hr>
                                            <p><a href="{{ route('unsubscribe',['email'=> $email]) }}">Unsubscribe</a> from these notifications.</p>
                                        </td>
                                    </tr>
                                </table>
        
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td>
                                            <hr style="border-color: #cccccc29; margin-block: 20px;">
                                        </td>
                                    </tr>
                                </table>
                            </td>
        
                            <td width="50"></td>
                        </tr>
                    </table>
        
                </td>
        
            </tr>
            <tr><td height="30"></td></tr>
            <tr>
        
                <td style="text-align: center;">
                    <a href="https://twitter.com/jusour_qa" style="margin-left: 2px; margin-right: 2px; display: inline-block;"><img src="{{asset("theme/media/images/icon-twitter.png")}}" alt="" style="border: none; outline: none; display: inline-block;"></a>
                    <a href="https://www.facebook.com/jusourQa" style="margin-left: 2px; margin-right: 2px; display: inline-block;"><img src="{{asset("theme/media/images/icon-facebook.png")}}" alt="" style="border: none; outline: none; display: inline-block;"></a>
                    <a href="https://www.instagram.com/jusour_qa/" style="margin-left: 2px; margin-right: 2px; display: inline-block;"><img src="{{asset("theme/media/images/icon-instagram.png")}}" alt="" style="border: none; outline: none; display: inline-block;"></a>
                    <p>© 2023 Jusour.qa, All rights reserved.</p>
                </td>
        
            </tr>
            <tr><td height="30"></td></tr>
            </tbody>
        </table>
    </body>
</html>
