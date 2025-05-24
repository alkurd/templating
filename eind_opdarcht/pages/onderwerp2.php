<?php
$gekozenIndex = 2;
include 'images/fotos.php';
?>
<h1>Wat is PDO? – 4 Belangrijke Onderwerpen</h1>

<h2>1. Wat is PDO?</h2>
<p>PDO (PHP Data Objects) is een PHP-extensie die een uniforme interface biedt om met verschillende databases te communiceren. Hiermee kun je op een veilige en efficiënte manier SQL-query's uitvoeren, ongeacht het type database.</p>

<h2>2. Verbinding maken met een database</h2>
<p>Met PDO maak je eenvoudig verbinding met een database door een nieuwe PDO-object aan te maken, bijvoorbeeld:</p>
<pre><code>$pdo = new PDO('mysql:host=localhost;dbname=testdb', 'gebruikersnaam', 'wachtwoord');</code></pre>

<h2>3. Prepared statements voor veiligheid</h2>
<p>PDO ondersteunt prepared statements, waarmee je SQL-injecties voorkomt door gebruikersinput gescheiden te houden van SQL-code:</p>
<pre><code>
$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
$stmt->execute(['email' => $email]);
$result = $stmt->fetchAll();
</code></pre>

<h2>4. Foutafhandeling en flexibiliteit</h2>
<p>PDO kan fouten afhandelen met exceptions, wat het debuggen vergemakkelijkt. Bovendien werkt PDO met verschillende databases (MySQL, PostgreSQL, SQLite, etc.) zonder dat je je code hoeft aan te passen.</p>


