<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DB Transaction Summary — HTML UI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href='css/style.css' rel="stylesheet">
  <style>
    :root{--bg:#f6f8fb;--card:#ffffff;--accent:#0f766e;--muted:#6b7280}
    body{font-family:Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; background:var(--bg); color:#0f172a}
    .card{background:var(--card); border-radius:12px; box-shadow:0 6px 20px rgba(15,23,42,0.06); padding:20px; max-width:900px; margin:0 auto}
    h1{font-size:20px; margin:0 0 12px}
    p.lead{margin:0 0 18px; color:var(--muted); font-size:14px}
    .table-wrap{overflow:auto}
    table{width:100%; border-collapse:collapse; min-width:720px}
    th, td{padding:12px 14px; text-align:left; border-bottom:1px solid #eef2f7}
    th{background:linear-gradient(180deg,#fafafa,#f3f4f6); font-weight:600; color:#0b1220}
    tr:hover td{background:#fbfdff}
    code{background:#f3f4f6; padding:6px 8px; border-radius:6px; font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, "Roboto Mono", "Helvetica Neue", monospace; font-size:13px}
    .controls{display:flex; gap:8px; align-items:center; margin-top:14px}
    button.btn{background:var(--accent); color:#fff; border:0; padding:8px 12px; border-radius:8px; cursor:pointer; font-weight:600}
    button.btn.secondary{background:#e6eef0; color:#024; font-weight:600}
    .note{margin-top:12px; font-size:13px; color:var(--muted)}
  </style>
</head>
<body>
  <?php
    include('menu.php');
    ?>
    <div  class="bg-light text-dark inner" >
  <div class="card">
    <h1>DB Transaction Summary — Quick Reference</h1>
    <p class="lead">Copy-ready table showing how to start, commit and rollback transactions in different PHP frameworks / libraries.</p>

    <div class="table-wrap">
      <table>
        <thead>
          <tr>
            <th>Framework</th>
            <th>Start Transaction</th>
            <th>Commit</th>
            <th>Rollback</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Core PHP (mysqli)</td>
            <td><code>$conn-&gt;begin_transaction()</code></td>
            <td><code>$conn-&gt;commit()</code></td>
            <td><code>$conn-&gt;rollback()</code></td>
          </tr>
          <tr>
            <td>Core PHP (PDO)</td>
            <td><code>$pdo-&gt;beginTransaction()</code></td>
            <td><code>$pdo-&gt;commit()</code></td>
            <td><code>$pdo-&gt;rollBack()</code></td>
          </tr>
          <tr>
            <td>Laravel</td>
            <td><code>DB::beginTransaction()</code></td>
            <td><code>DB::commit()</code></td>
            <td><code>DB::rollback()</code></td>
          </tr>
          <tr>
            <td>CodeIgniter (CI3 / CI4)</td>
            <td><code>$this-&gt;db-&gt;trans_begin()</code></td>
            <td><code>$this-&gt;db-&gt;trans_commit()</code></td>
            <td><code>$this-&gt;db-&gt;trans_rollback()</code></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="controls">
      <button class="btn" id="copyBtn">Copy HTML</button>
      <button class="btn secondary" id="copyTextBtn">Copy Plain Text</button>
      <div id="msg" style="margin-left:8px;color:var(--muted)"></div>
    </div>

    <p class="note">Tip: Use the table inside your docs or admin UI. The <code>CodeIgniter</code> row works for both CI3 and CI4 with slightly different method names in CI4 if using the database instance directly.</p>
  </div>
</div>
  <script>
    function copyToClipboard(text){
      navigator.clipboard.writeText(text).then(()=>{
        const m = document.getElementById('msg'); m.textContent='Copied!'; setTimeout(()=>m.textContent='',1400);
      }).catch(()=>{alert('Copy failed — use manual select + Ctrl+C')});
    }

    document.getElementById('copyBtn').addEventListener('click', ()=>{
      const html = document.querySelector('.table-wrap').innerHTML;
      copyToClipboard(html);
    });

    document.getElementById('copyTextBtn').addEventListener('click', ()=>{
      const rows = Array.from(document.querySelectorAll('table tr')).map(tr=>
        Array.from(tr.children).map(td=>td.innerText.trim()).join('\t')
      ).join('\n');
      copyToClipboard(rows);
    });
  </script>
</body>
</html>
