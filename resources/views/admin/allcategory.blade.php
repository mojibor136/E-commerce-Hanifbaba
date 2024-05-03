<h1>
    @if (session()->has('massage'))
        <li>{{session()->get('massage')}}</li>
    @endif
</h1>