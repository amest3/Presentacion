<?php
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PillHour | Presentación del Proyecto</title>
  <style>
    :root{--bg:#ece9e2;--sand:#d7c6a5;--earth:#8b6b43;--forest:#2f5d50;--olive:#697a54;--char:#2c2c2c;--border:#ccb895;--white:#fffdf8}
    *{box-sizing:border-box} body{margin:0;font-family:"Segoe UI",Roboto,Arial,sans-serif;color:var(--char);line-height:1.6;background:linear-gradient(140deg,#ebe7de 0%,#d8ccb8 45%,#cad6c7 100%)}
    .hero{color:var(--white);padding:64px 18px 82px;text-align:center;background:linear-gradient(140deg,rgba(52,52,52,.9),rgba(91,70,44,.92) 45%,rgba(47,93,80,.9));border-bottom:4px solid rgba(255,255,255,.22)}
    .hero h1{margin:0 0 10px;font-size:2.15rem}.hero p{margin:0 auto;max-width:980px;opacity:.97}
    .wrap{max-width:1160px;margin:-42px auto 36px;padding:0 16px}.card{background:rgba(255,253,248,.95);border:1px solid var(--border);border-radius:18px;padding:22px;margin-bottom:16px;box-shadow:0 10px 25px rgba(58,48,34,.12)}
    h2{margin:0 0 10px;color:var(--forest);font-size:1.35rem;border-left:5px solid var(--olive);padding-left:10px} h3{margin:12px 0 6px;color:var(--earth)} p{margin:8px 0}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:14px}.img-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:12px;margin-top:12px}
    .pill{display:inline-block;margin:0 8px 8px 0;padding:5px 12px;border-radius:999px;font-size:.88rem;color:#fefcf6;background:linear-gradient(130deg,#7f6846,#436759)}
    table{width:100%;border-collapse:collapse;margin-top:10px;font-size:.95rem} th,td{border:1px solid #c9b594;padding:9px;text-align:left} th{background:#4b5f4f;color:#fefcf7}
    tbody tr:nth-child(odd){background:#f7f1e6} tbody tr:nth-child(even){background:#efe6d6}
    .image-box{padding:10px;border:1px dashed #aa9370;border-radius:12px;background:#f8f0e2}.image-box img{width:100%;height:auto;border-radius:10px;border:1px solid #b9a889;background:#fff}
    .caption{margin-top:8px;font-size:.9rem;color:#5a4d3b} footer{text-align:center;color:#4c4438;font-size:.92rem;padding:12px 10px 26px}
  </style>
</head>
<body>
<header class="hero">
  <h1>PillHour: Dispensador Inteligente para Adherencia Farmacológica</h1>
  <p>Presentación enfocada en objetivo del proyecto, desarrollo técnico, funcionamiento completo y evidencia de resultados para una exposición de 20 minutos.</p>
</header>

<main class="wrap">
  <section class="card">
    <h2>1) Resumen del proyecto y problema</h2>
    <p><strong>Resumen:</strong> La falta de adherencia a tratamientos farmacológicos en adultos mayores es un problema de salud pública. PillHour integra IoT + plataforma web + base de datos para reducir olvidos mediante dispensación automática y alertas en tiempo real.</p>
    <p>La propuesta atiende directamente el riesgo de complicaciones por dosis omitidas, con monitoreo remoto para cuidadores y trazabilidad de eventos de toma.</p>
    <span class="pill">Salud pública</span><span class="pill">Adulto mayor</span><span class="pill">Dispensación automática</span><span class="pill">Alertas</span>
    <div class="img-grid">
      <div class="image-box"><img src="assets/img/p1_contexto_1.svg" alt="Problema de adherencia farmacológica" /><p class="caption">Contexto del problema en pacientes crónicos.</p></div>
      <div class="image-box"><img src="assets/img/p1_contexto_2.svg" alt="Impacto del olvido de dosis" /><p class="caption">Impacto del olvido en la toma oportuna.</p></div>
    </div>
  </section>

  <section class="card">
    <h2>2) Objetivo general, objetivos específicos e hipótesis</h2>
    <p><strong>Objetivo general:</strong> Diseñar, desarrollar e implementar un prototipo de dispensador automático inteligente para mejorar la adherencia farmacológica en usuarios con enfermedades crónicas.</p>
    <ul>
      <li>Construir prototipo físico con ESP32, servomotores y sensores para dispensación programada.</li>
      <li>Desarrollar plataforma web para configurar horarios y notificar dosis omitidas.</li>
      <li>Integrar hardware y software con comunicación estable y segura mediante Supabase.</li>
    </ul>
    <p><strong>Hipótesis:</strong> un dispensador automatizado con alertas incrementa significativamente la adherencia en pacientes de la tercera edad.</p>
    <div class="img-grid">
      <div class="image-box"><img src="assets/img/p2_objetivos_1.svg" alt="Objetivo general" /><p class="caption">Enfoque del objetivo general del proyecto.</p></div>
      <div class="image-box"><img src="assets/img/p2_objetivos_2.svg" alt="Hipótesis del proyecto" /><p class="caption">Hipótesis y su validación experimental.</p></div>
    </div>
  </section>

  <section class="card">
    <h2>3) Desarrollo técnico: arquitectura y funcionamiento</h2>
    <div class="grid">
      <article>
        <h3>Módulo hardware (IoT)</h3>
        <p>ESP32 sincroniza hora por NTP, consulta horarios en la nube y activa servomotores para liberar dosis. El buzzer notifica la dispensación y el sistema registra eventos para seguimiento.</p>
      </article>
      <article>
        <h3>Módulo software (web + BDD)</h3>
        <p>La plataforma web permite gestionar usuarios (admin, cuidador, paciente), horarios y medicamentos. Supabase centraliza datos y habilita comunicación remota estable.</p>
      </article>
    </div>
    <div class="img-grid">
      <div class="image-box"><img src="assets/img/p3_arquitectura_1.svg" alt="Arquitectura IoT web" /><p class="caption">Arquitectura de integración ESP32-Web-Supabase.</p></div>
      <div class="image-box"><img src="assets/img/p3_arquitectura_2.svg" alt="Flujo de funcionamiento" /><p class="caption">Flujo de funcionamiento de extremo a extremo.</p></div>
    </div>
  </section>

  <section class="card">
    <h2>4) Implementación y evidencia de funcionamiento</h2>
    <p>El desarrollo siguió una metodología incremental: lógica del sistema, prototipado electrónico, construcción de maqueta, integración web y calibración progresiva de compuertas.</p>
    <p>Se verificó conectividad WiFi, consulta de horarios, activación de servos y registro de dispensos. Se confirma funcionamiento integral acorde a los objetivos.</p>
    <div class="img-grid">
      <div class="image-box"><img src="assets/img/p4_implementacion_1.svg" alt="Prototipo físico" /><p class="caption">Prototipo físico y distribución de componentes.</p></div>
      <div class="image-box"><img src="assets/img/p4_implementacion_2.svg" alt="Plataforma web funcionando" /><p class="caption">Panel web para monitoreo y configuración.</p></div>
    </div>
  </section>

  <section class="card">
    <h2>5) Resultados, precisión y análisis</h2>
    <table>
      <thead><tr><th>Configuración</th><th>Pruebas</th><th>Correctas</th><th>Precisión</th></tr></thead>
      <tbody>
        <tr><td>2 pastillas por compartimento</td><td>20</td><td>20</td><td><strong>100%</strong></td></tr>
        <tr><td>3 pastillas por compartimento</td><td>20</td><td>14</td><td>70%</td></tr>
        <tr><td>3 compartimentos con 2 pastillas c/u</td><td>15</td><td>15</td><td><strong>100%</strong></td></tr>
      </tbody>
    </table>
    <p>Se demuestra estabilidad operativa con dos pastillas por compartimento y sincronización exitosa entre hardware y plataforma web. La principal limitación aparece al agregar una tercera pastilla por interferencia mecánica.</p>
    <div class="img-grid">
      <div class="image-box"><img src="assets/img/p5_resultados_1.svg" alt="Tabla de precisión" /><p class="caption">Resultados de precisión de dispensación.</p></div>
      <div class="image-box"><img src="assets/img/p5_resultados_2.svg" alt="Integración exitosa" /><p class="caption">Evidencia de integración hardware-software.</p></div>
    </div>
  </section>

  <section class="card">
    <h2>6) Conclusiones, impacto y mejoras futuras</h2>
    <p>PillHour cumple el objetivo de integrar electrónica IoT y software web para mejorar adherencia terapéutica y brindar apoyo a pacientes, familiares y cuidadores.</p>
    <ul>
      <li>Integración funcional completa de ESP32 + web + Supabase.</li>
      <li>Precisión del 100% en configuración de dos pastillas por compartimento.</li>
      <li>Mejora propuesta: tres compuertas independientes e impresión 3D para reducir fricción.</li>
      <li>Trabajo futuro: sensores de verificación de retiro y pruebas con usuarios reales.</li>
    </ul>
    <div class="img-grid">
      <div class="image-box"><img src="assets/img/p6_conclusiones_1.svg" alt="Conclusiones" /><p class="caption">Conclusiones principales de la investigación.</p></div>
      <div class="image-box"><img src="assets/img/p6_conclusiones_2.svg" alt="Trabajo futuro" /><p class="caption">Mejoras de diseño y expansión futura.</p></div>
    </div>
  </section>

  <section class="card">
    <h2>7) Galería de evidencias del prototipo</h2>
    <p>Se integran las imágenes reales cargadas en <code>assets/img</code> para reforzar la presentación visual del hardware, su construcción y las pruebas de funcionamiento.</p>
    <div class="img-grid">
      <div class="image-box"><img src="assets/img/autommed.jpg" alt="Concepto de medicación automatizada" /><p class="caption">Referencia de automatización en administración de medicamentos.</p></div>
      <div class="image-box"><img src="assets/img/pacienteancia.jpg" alt="Paciente adulto mayor" /><p class="caption">Usuario objetivo: adulto mayor con tratamiento farmacológico.</p></div>
      <div class="image-box"><img src="assets/img/carcasaprototipodispensador.jpg" alt="Carcasa del prototipo dispensador" /><p class="caption">Carcasa del prototipo de dispensador desarrollado.</p></div>
      <div class="image-box"><img src="assets/img/protcircuito.png" alt="Circuito del prototipo" /><p class="caption">Implementación electrónica del prototipo.</p></div>
      <div class="image-box"><img src="assets/img/rampaprotdispensador.jpg" alt="Rampa del prototipo dispensador" /><p class="caption">Detalle de la rampa de salida de pastillas.</p></div>
      <div class="image-box"><img src="assets/img/bdddispensador.jpg" alt="Base de datos del dispensador" /><p class="caption">Estructura de datos y registro de eventos en la base de datos.</p></div>
      <div class="image-box"><img src="assets/img/diagflujodispensador.png" alt="Diagrama de flujo del dispensador" /><p class="caption">Flujo de funcionamiento del sistema de dispensación.</p></div>
      <div class="image-box"><img src="assets/img/diagflujpruebaservos.jpg" alt="Diagrama de pruebas de servomotores" /><p class="caption">Proceso de pruebas y calibración de servomotores.</p></div>
    </div>
  </section>

</main>

<footer>Proyecto PillHour · Exposición centrada en objetivos, desarrollo técnico y funcionamiento integral</footer>
</body>
</html>
