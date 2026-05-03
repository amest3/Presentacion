<?php
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PillHour | Presentación del Proyecto</title>
  <style>
    :root{
      --bg:#ece9e2;
      --sand:#d7c6a5;
      --earth:#8b6b43;
      --forest:#2f5d50;
      --olive:#697a54;
      --char:#2c2c2c;
      --card:#f8f5ef;
      --border:#ccb895;
      --muted:#5f5a50;
      --white:#fffdf8;
    }
    *{box-sizing:border-box}
    body{
      margin:0;
      font-family:"Segoe UI",Roboto,Arial,sans-serif;
      color:var(--char);
      line-height:1.6;
      background:
        radial-gradient(circle at 10% 10%, #f7f4ee 0, transparent 30%),
        radial-gradient(circle at 90% 10%, #dfd2bd 0, transparent 25%),
        linear-gradient(140deg, #ebe7de 0%, #d8ccb8 45%, #cad6c7 100%);
    }
    .hero{
      color:var(--white);
      padding:64px 18px 82px;
      text-align:center;
      background:
        linear-gradient(140deg, rgba(52,52,52,.9), rgba(91,70,44,.92) 45%, rgba(47,93,80,.9));
      border-bottom:4px solid rgba(255,255,255,.22);
      position:relative;
      overflow:hidden;
    }
    .hero::after{
      content:"";
      position:absolute;
      inset:auto -40px -80px;
      height:180px;
      background:radial-gradient(circle, rgba(255,255,255,.2) 0%, rgba(255,255,255,0) 70%);
    }
    .hero h1{margin:0 0 10px;font-size:2.15rem;letter-spacing:.4px;text-shadow:0 4px 16px rgba(0,0,0,.3)}
    .hero p{margin:0 auto;max-width:980px;opacity:.97}

    .wrap{max-width:1160px;margin:-42px auto 36px;padding:0 16px}
    .card{
      background:linear-gradient(180deg, rgba(255,253,248,.96), rgba(247,242,232,.95));
      border:1px solid var(--border);
      border-radius:18px;
      padding:22px;
      margin-bottom:16px;
      box-shadow:0 10px 25px rgba(58,48,34,.12), inset 0 1px 0 rgba(255,255,255,.7);
      backdrop-filter: blur(1px);
      transition:transform .18s ease, box-shadow .18s ease;
    }
    .card:hover{transform:translateY(-2px);box-shadow:0 14px 28px rgba(58,48,34,.18)}
    h2{margin:0 0 10px;color:var(--forest);font-size:1.35rem;border-left:5px solid var(--olive);padding-left:10px}
    h3{margin:12px 0 6px;color:var(--earth)}
    p{margin:8px 0}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:14px}
    .pill{
      display:inline-block;
      margin:0 8px 8px 0;
      padding:5px 12px;
      border-radius:999px;
      font-size:.88rem;
      color:#fefcf6;
      border:1px solid rgba(255,255,255,.2);
      background:linear-gradient(130deg, #7f6846, #436759);
      box-shadow:0 5px 12px rgba(67,62,49,.25);
    }
    .kpi{font-weight:700;color:var(--forest)}
    .muted{color:var(--muted);font-style:italic}
    ul li,ol li{margin-bottom:5px}

    table{width:100%;border-collapse:collapse;margin-top:10px;font-size:.95rem;overflow:hidden;border-radius:10px}
    th,td{border:1px solid #c9b594;padding:9px;text-align:left}
    th{background:linear-gradient(120deg,#6f7c5c,#4b5f4f);color:#fefcf7;font-weight:600}
    tbody tr:nth-child(odd){background:#f7f1e6}
    tbody tr:nth-child(even){background:#efe6d6}

    .image-box{margin-top:12px;padding:12px;border:1px dashed #aa9370;border-radius:12px;background:linear-gradient(180deg,#fdfaf3,#f2e9d9)}
    .image-box img{width:100%;height:auto;border-radius:10px;border:1px solid #b9a889;background:#fff;box-shadow:0 8px 18px rgba(57,51,41,.2)}
    .caption{margin-top:8px;font-size:.9rem;color:#5a4d3b}

    .speaker-notes li{padding:6px 8px;border-left:3px solid #8f7652;background:rgba(143,118,82,.08);border-radius:6px;margin-bottom:8px}
    code{background:#ece6da;border:1px solid #d2c3a7;border-radius:6px;padding:2px 6px}
    footer{text-align:center;color:#4c4438;font-size:.92rem;padding:12px 10px 26px}
  </style>
</head>
<body>
  <header class="hero">
    <h1>PillHour: Presentación del Proyecto PillHour</h1>
    <p>Resumen visual del problema, solución, arquitectura IoT + plataforma web, base de datos (BDD), resultados de pruebas y mejoras futuras.</p>
  </header>

  <main class="wrap">
    <section class="card">
      <h2>1) Contexto del problema</h2>
      <p>El problema que abordamos es la falta de adherencia farmacológica en adultos mayores con enfermedades crónicas. PillHour propone una solución integral con dispensación automática y monitoreo remoto para reducir olvidos y riesgos clínicos.</p>
      <span class="pill">IoT con ESP32</span><span class="pill">Plataforma Web</span><span class="pill">BDD en Supabase</span><span class="pill">Alertas de dosis omitida</span>
    </section>

    <section class="card">
      <h2>2) Objetivo e hipótesis</h2>
      <p><strong>Objetivo general:</strong> Diseñar, desarrollar e implementar un prototipo inteligente de dispensador automático de medicamentos, integrando hardware y software para mejorar adherencia terapéutica.</p>
      <p><strong>Hipótesis:</strong> Un sistema automatizado con alertas en tiempo real incrementa significativamente la adherencia farmacológica en pacientes de la tercera edad.</p>
    </section>

    <section class="card">
      <h2>3) Arquitectura del sistema y BDD</h2>
      <div class="grid">
        <article>
          <h3>Arquitectura funcional</h3>
          <ul>
            <li>ESP32 consulta horarios desde la nube.</li>
            <li>Servomotores liberan dosis en horas programadas.</li>
            <li>La web administra usuarios, medicamentos y programación.</li>
            <li>Se registran eventos de dispenso y alertas.</li>
          </ul>
        </article>
        <article>
          <h3>Base de datos (Supabase)</h3>
          <ul>
            <li>Tablas para usuarios, roles, medicamentos y programación.</li>
            <li>Historial de eventos con resultado y observaciones.</li>
            <li>Configuración de correos y alertas.</li>
            <li>Relaciones entre paciente, cuidador y dosis programadas.</li>
          </ul>
        </article>
      </div>

      <div class="image-box">
        <img src="assets/img/modelo_bdd_pillhour.svg" alt="Modelo de base de datos del sistema PillHour" />
        <p class="caption"><strong>Figura:</strong> Modelo de BDD de PillHour (usuarios, programación, medicamentos, alertas, historial y relaciones).</p>
      </div>
      <p class="muted">Imagen de referencia del modelo de base de datos ubicada en <code>assets/img/modelo_bdd_pillhour.svg</code>.</p>
    </section>

    <section class="card">
      <h2>4) Desarrollo del prototipo</h2>
      <ol>
        <li>Diseño de lógica y flujo de dispensación.</li>
        <li>Prototipado electrónico: ESP32, servos, buzzer y sensores.</li>
        <li>Desarrollo web con autenticación y roles (admin, cuidador, paciente).</li>
        <li>Migración de BDD local a Supabase para acceso remoto.</li>
        <li>Integración final hardware + software y calibración.</li>
      </ol>
    </section>

    <section class="card">
      <h2>5) Resultados clave</h2>
      <table>
        <thead><tr><th>Configuración</th><th>Pruebas</th><th>Correctas</th><th>Precisión</th></tr></thead>
        <tbody>
          <tr><td>2 pastillas por compartimento</td><td>20</td><td>20</td><td class="kpi">100%</td></tr>
          <tr><td>3 pastillas por compartimento</td><td>20</td><td>14</td><td>70%</td></tr>
          <tr><td>3 compartimentos con 2 pastillas c/u</td><td>15</td><td>15</td><td class="kpi">100%</td></tr>
        </tbody>
      </table>
      <p>El sistema es estable con dos pastillas por compartimento; con tres pastillas aparecen interferencias mecánicas y eventos de doble dispensación.</p>
    </section>

    <section class="card">
      <h2>6) Conclusiones y mejora propuesta</h2>
      <ul>
        <li>Se validó la integración entre ESP32, plataforma web y BDD en la nube.</li>
        <li>Se confirmó viabilidad técnica para monitoreo remoto por cuidadores.</li>
        <li>Mejora propuesta: tres compuertas independientes (mañana/tarde/noche) e impresión 3D para reducir fricción.</li>
      </ul>
    </section>

    <section class="card">
      <h2>7) Ruta sugerida de explicación</h2>
      <ul class="speaker-notes">
        <li><strong>Paso 1:</strong> problema real y población objetivo (adultos mayores).</li>
        <li><strong>Paso 2:</strong> solución PillHour y arquitectura IoT + web + BDD.</li>
        <li><strong>Paso 3:</strong> diagrama de base de datos y flujo de datos.</li>
        <li><strong>Paso 4:</strong> resultados de precisión y limitaciones encontradas.</li>
        <li><strong>Paso 5:</strong> conclusiones, impacto y trabajo futuro.</li>
      </ul>
    </section>
  </main>

  <footer>Proyecto PillHour · Dispensador Inteligente de Medicamentos</footer>
</body>
</html>
