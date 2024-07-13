<!DOCTYPE html>
<html lang="en">
@php
    $logos = getLogo();
@endphp

<head>
    @if (!empty($logos->logo))
        <link rel="shortcut icon" type="image/png" href="{{ asset('LogoImg/' . $logos->logo) }}">
    @else
        <link rel="shortcut icon" type="image/png" href="{{ asset('icon/icon.jpg') }}">
    @endif
</head>

</html>
