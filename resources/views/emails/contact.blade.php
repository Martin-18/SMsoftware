<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; background: #f8fafc; color: #1e293b; margin: 0; padding: 0; }
        .wrapper { max-width: 560px; margin: 40px auto; background: #fff; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden; }
        .header { background: #1e293b; padding: 28px 32px; }
        .header h1 { color: #fff; margin: 0; font-size: 20px; }
        .header span { color: #3b82f6; }
        .body { padding: 32px; }
        .field { margin-bottom: 20px; }
        .label { font-size: 11px; font-weight: 700; text-transform: uppercase; color: #94a3b8; letter-spacing: .05em; margin-bottom: 4px; }
        .value { font-size: 15px; color: #1e293b; }
        .message-box { background: #f1f5f9; border-radius: 8px; padding: 16px; font-size: 14px; line-height: 1.7; color: #475569; margin-top: 4px; }
        .badge { display: inline-block; padding: 3px 10px; border-radius: 999px; font-size: 12px; font-weight: 600;
                 background: #dbeafe; color: #1d4ed8; }
        .footer { padding: 20px 32px; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; text-align: center; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>SM<span>software</span> — Nuevo Contacto</h1>
        </div>
        <div class="body">
            <div class="field">
                <div class="label">Nombre</div>
                <div class="value">{{ $contact->name }}</div>
            </div>
            <div class="field">
                <div class="label">Correo</div>
                <div class="value">{{ $contact->email }}</div>
            </div>
            @if($contact->phone)
            <div class="field">
                <div class="label">Teléfono</div>
                <div class="value">{{ $contact->phone }}</div>
            </div>
            @endif
            <div class="field">
                <div class="label">Servicio de interés</div>
                <div class="value"><span class="badge">{{ $contact->service_label }}</span></div>
            </div>
            <div class="field">
                <div class="label">Mensaje</div>
                <div class="message-box">{{ $contact->message }}</div>
            </div>
        </div>
        <div class="footer">
            Recibido el {{ now()->format('d/m/Y \a \l\a\s H:i') }} — SMsoftware
        </div>
    </div>
</body>
</html>