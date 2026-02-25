<?php
declare(strict_types=1);
?>
<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Werbung Start</title>
  <style>
    :root {
      --bg: #f7f6f2;
      --card: #ffffff;
      --text: #1f2937;
      --muted: #4b5563;
      --ok: #0f766e;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      min-height: 100vh;
      display: grid;
      place-items: center;
      font-family: "Segoe UI", "Trebuchet MS", sans-serif;
      background: linear-gradient(160deg, #eef3f7, var(--bg));
      color: var(--text);
    }

    .card {
      width: min(92vw, 640px);
      padding: 1.6rem;
      border-radius: 14px;
      background: var(--card);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
      border: 1px solid #e5e7eb;
    }

    h1 { margin-top: 0; margin-bottom: 0.6rem; }
    p { margin: 0 0 0.5rem; color: var(--muted); }
    code {
      background: #ecfeff;
      color: #134e4a;
      padding: 0.15rem 0.35rem;
      border-radius: 6px;
    }
    .ok { color: var(--ok); font-weight: 600; }
  </style>
</head>
<body>
  <main class="card">
    <h1>Start.php geladen</h1>
    <p class="ok">Test erfolgreich: Die Datei wurde vom Server ausgefuehrt.</p>
    <p>Aufgerufener Pfad: <code><?php echo htmlspecialchars((string)($_SERVER['REQUEST_URI'] ?? ''), ENT_QUOTES, 'UTF-8'); ?></code></p>
    <p>Wenn du diese Seite via <code>/werbung/Start</code> erreichst, funktioniert dein Rewrite wie gewuenscht.</p>
  </main>
</body>
</html>
