@extends('layouts.app')

@section('title', 'Política de tratamiento de datos | SMsoftware')

@section('content')
{{-- Texto base de la política (Ley 1581 de 2012 y Decreto 1377 de 2013). Completar con NIT y nombre legal cuando exista. --}}
<div class="container mx-auto px-6 py-16 max-w-3xl">
    <p class="text-xs font-semibold tracking-widest uppercase text-blue-400">Ley 1581 de 2012</p>
    <h1 class="text-4xl font-bold text-white mt-3 mb-10">Política de tratamiento de datos personales</h1>

    <div class="space-y-10 text-slate-300 leading-relaxed">
        <section class="space-y-3">
            <h2 class="text-xl font-semibold text-white">1. Responsable del tratamiento</h2>
            <p><strong class="text-white">SMsoftware</strong>, con domicilio en Armenia, Quindío, Colombia.</p>
            <p>Correo: <a href="mailto:{{ config('mail.from.address') }}" class="text-blue-400 hover:underline">{{ config('mail.from.address') }}</a> · WhatsApp: +57 310 534 1232</p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-semibold text-white">2. Datos que recogemos</h2>
            <p>A través del formulario de contacto recogemos tu nombre, correo electrónico, teléfono (opcional), el servicio que te interesa y el mensaje que nos escribes, junto con la fecha en que autorizaste su tratamiento. No pedimos datos sensibles ni datos de menores de edad.</p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-semibold text-white">3. Para qué los usamos</h2>
            <ul class="list-disc pl-5 space-y-1">
                <li>Responder tu mensaje y preparar la cotización que solicitas.</li>
                <li>Contactarte sobre esa solicitud por correo, teléfono o WhatsApp.</li>
                <li>Cumplir las obligaciones del contrato si decides contratar un servicio.</li>
            </ul>
            <p>No vendemos ni compartimos tus datos con terceros. Nuestros proveedores de hosting y correo los almacenan por cuenta nuestra y solo para estas finalidades.</p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-semibold text-white">4. Tus derechos</h2>
            <p>Como titular de los datos puedes:</p>
            <ul class="list-disc pl-5 space-y-1">
                <li>Conocer, actualizar y rectificar tus datos personales.</li>
                <li>Pedir prueba de la autorización que nos diste.</li>
                <li>Saber cómo hemos usado tus datos.</li>
                <li>Revocar la autorización o pedir que eliminemos tus datos.</li>
                <li>Presentar quejas ante la Superintendencia de Industria y Comercio.</li>
                <li>Acceder a tus datos de forma gratuita.</li>
            </ul>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-semibold text-white">5. Cómo ejercerlos</h2>
            <p>Escríbenos a <a href="mailto:{{ config('mail.from.address') }}" class="text-blue-400 hover:underline">{{ config('mail.from.address') }}</a> indicando tu nombre y lo que solicitas. Respondemos las consultas en un máximo de 10 días hábiles y los reclamos en un máximo de 15 días hábiles, como establece la ley.</p>
        </section>

        <section class="space-y-3">
            <h2 class="text-xl font-semibold text-white">6. Conservación y cookies</h2>
            <p>Guardamos tus datos mientras sean necesarios para atender tu solicitud o la relación comercial; después los eliminamos. Este sitio solo usa las cookies técnicas necesarias para que el formulario funcione de forma segura.</p>
        </section>

        <p class="text-sm text-slate-500">Vigente desde el 4 de noviembre de 2026.</p>
    </div>
</div>
@endsection
