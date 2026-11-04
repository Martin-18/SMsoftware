{{-- Aviso de privacidad y autorización de tratamiento de datos (Ley 1581 de 2012) --}}
<div class="rounded-xl border border-slate-700 bg-slate-800/60 p-4 space-y-3">
    <p class="text-xs leading-relaxed text-slate-400">
        <span class="font-semibold text-slate-300">Aviso de privacidad:</span>
        este formulario recoge tus datos personales (nombre, correo, teléfono y mensaje).
        SMsoftware los usa solo para responder tu solicitud y enviarte la cotización; no los vende ni los comparte con terceros.
        Puedes consultarlos, corregirlos o pedir que los eliminemos escribiendo a
        <a href="mailto:{{ config('mail.from.address') }}" class="text-blue-400 hover:underline">{{ config('mail.from.address') }}</a>.
    </p>

    <label for="privacy" class="flex items-start gap-3 text-sm text-slate-300">
        <input type="checkbox" id="privacy" name="privacy" value="1" @checked(old('privacy')) required
               class="mt-0.5 h-4 w-4 shrink-0 rounded border-slate-600 bg-slate-900 accent-blue-500">
        <span>
            Autorizo a SMsoftware el tratamiento de mis datos personales según la
            <a href="{{ route('privacy') }}" target="_blank" class="font-semibold text-blue-400 hover:underline">política de tratamiento de datos</a>.
            <span class="text-red-400">*</span>
        </span>
    </label>

    @error('privacy')
        <p class="text-red-500 text-xs">{{ $message }}</p>
    @enderror
</div>
