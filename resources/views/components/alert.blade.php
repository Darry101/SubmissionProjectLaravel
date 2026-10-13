@props(['tipe' => 'info'])

@php
    $kelas = match($tipe) {
        'sukses' => 'alert-sukses',
        'bahaya' => 'alert-bahaya',
        default  => 'alert-info',
    };
@endphp

<div {{ $attributes->merge(['class' => "alert $kelas"]) }}>
    {{ $slot }}
</div>