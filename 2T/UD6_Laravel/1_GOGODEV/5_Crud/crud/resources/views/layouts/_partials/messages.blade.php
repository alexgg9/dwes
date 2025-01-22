@if ( $message = Session::get('success') )
    <div style="padding:15px; background-color:green;color:white;">
        <strong>{{ $message }}</strong>
    </div>
@endif
@if ( $message = Session::get('danger') )
    <div style="padding:15px; background-color:red;color:white;">
        <strong>{{ $message }}</strong>
    </div>
@endif