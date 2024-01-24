@component('mail::message')
    # Hi ,Zac <br>
    <hr>
    New inquiry lead from {{ $maildata['name'] }}<br>
    <hr>
    <h4><strong>Subject: </strong> {{ $maildata['name'] }}</h4><br>
    <hr>
    <span><strong>Customer name: </strong> {{ $maildata['name'] }}</span><br>

    <span><strong>Customer email: </strong> {{ $maildata['email'] }}</span><br>

    <span><strong>phone: </strong> {{ $maildata['phone'] }}</span><br>
    <span><strong>msg: </strong> {{ $maildata['msg'] }}</span><br>



    <hr>

    @component('mail::button', ['url' => url('/')])
        View inquiry
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
