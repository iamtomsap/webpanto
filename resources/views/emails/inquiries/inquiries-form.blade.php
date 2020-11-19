@component('mail::message')

<strong>Name            : </strong> {{ $data['name'] }} <br/>
<strong>Phone Number    : </strong> {{ $data['phone_number'] }} <br/>
<strong>E-Mail          : </strong> {{ $data['email'] }} <br/>
<strong>Inquiry Type    : </strong> {{ $data['inquiry_type'] }} <br/>

<strong>Subject    : </strong>  <br/>

{{ $data['subject'] }}

@endcomponent
