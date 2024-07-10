<!DOCTYPE html>
<html lang="en">
@php
    $logos = getLogo();
@endphp

<head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('LogoImg/' . $logos->logo) }}">
</head>

</html>
