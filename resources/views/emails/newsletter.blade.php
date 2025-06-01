<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jusour Emailer</title>
    </head>
    <body style="background-color: #ccc;">
        <table cellpadding="0" cellspacing="0" width="100%" border="0" align="center" style="max-width: 800px; background-color: #FAFAFA; line-height: 23px;font-family: 'Roboto', sans-serif;letter-spacing: .4px;">
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
                                            <h1 style="margin-top: 12px; margin-bottom: 12px; color:#20385d"> Dear Employee,</h1>
                                            <p style="font-size: 16px; margin: 0; color:#2f4263">New Intranet Update</p>
                                            <p style=" color:#2f4263; margin-top: 0px;">A new update titled "<strong>{{ $title }}</strong>" has been published.</p>
                                            <p style=" color:#2f4263">
                                                <a href="{{ $link }}" style="background-color:#8A1538; padding:8px 24px; color:#fff; text-decoration: none; border-radius: 6px;">
                                                   &nbsp; &nbsp; &nbsp;Click here to view it &nbsp; &nbsp; &nbsp;
                                                </a>
                                            </p>
                                        </td>
                                    </tr>
                                </table>
        
                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                    <tr>
                                        <td>
                                            <hr style="border-color: #596b84; margin-block: 20px;">
                                        </td>
                                    </tr>
                                </table>
                            </td>
        
                            <td width="50"></td>
                        </tr>
                    </table>
        
                </td>
            </tr>
            <tr>
                
                <td height="30">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td width="50"></td>
                        <td>
                            <p style="color:#2f4263; margin-top: 0px; margin-bottom: 3rem;">
                                <a href="{{ route('unsubscribe',['email'=> $email]) }}"  style="background-color:#8A1538; padding:8px 24px; color:#fff; text-decoration: none; border-radius: 6px;">
                                    &nbsp; &nbsp; &nbsp; Unsubscribe &nbsp; &nbsp; &nbsp;
                                </a> 
                                &nbsp; &nbsp; from these notifications.
                            </p>

                        </td>
                        <td width="50"></td>
                    </tr>
                </table>

                </td>
            </tr>

            <tr><td></td></tr>
            <tr><td></td></tr>

            <tr>
        
                <td style="text-align: center;">
                    <a href="https://twitter.com/jusour_qa" style="margin-left: 2px; margin-right: 2px; display: inline-block;"><img src="{{asset("theme/media/images/icon-twitter.png")}}" alt="" style="border: none; outline: none; display: inline-block;"></a>
                    <a href="https://www.facebook.com/jusourQa" style="margin-left: 2px; margin-right: 2px; display: inline-block;"><img src="{{asset("theme/media/images/icon-facebook.png")}}" alt="" style="border: none; outline: none; display: inline-block;"></a>
                    <a href="https://www.instagram.com/jusour_qa/" style="margin-left: 2px; margin-right: 2px; display: inline-block;"><img src="{{asset("theme/media/images/icon-instagram.png")}}" alt="" style="border: none; outline: none; display: inline-block;"></a>
                    <p style=" color:#2f4263">© 2023 Jusour.qa, All rights reserved.</p>
                </td>
        
            </tr>
            <tr><td height="30"></td></tr>
            </tbody>
        </table>
    </body>
</html>
