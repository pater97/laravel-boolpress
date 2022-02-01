@component('mail::message')
    #introduction


    {{$data['message']}}

    @component('mail::panel')
        name: {{$data['name']}}

        email: {{$data['email']}}

    @endcomponent

    @component('mail::button',['url' => $url])
        button text
    @endcomponent

    thanks, <br>
    {{config('app.name')}}
@endcomponent