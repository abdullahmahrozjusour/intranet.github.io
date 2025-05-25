<!DOCTYPE html>
<html>
    <body>
        <h2>New Intranet Update</h2>
        <p>A new update titled "<strong>{{ $title }}</strong>" has been published.</p>
        <p><a href="{{ $link }}">Click here to view it</a></p>
        <hr>
        <p><a href="{{ route('unsubscribe',['email'=> $email]) }}">Unsubscribe</a> from these notifications.</p>
    </body>
</html>
