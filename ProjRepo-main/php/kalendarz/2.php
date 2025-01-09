<?php if (isset($_GET['success'])): ?>
    <p style="color: green;">Wydarzenie zostało dodane pomyślnie!</p>
    <?php endif; ?>
    <h2>Lista wydarzeń</h2>
<?php
$qu = "SELECT * FROM wydarzenia";
$rezultat = mysqli_query($poloczenie, $qu);
if ($iwiersz = mysqli_fetch_array($rezultat)) {
    echo '<p>' . htmlspecialchars($iwiersz["opis"]) . '</p>';
    echo '<p>' . htmlspecialchars($iwiersz["wydarzenie_czas"]) . '</p>';
    echo '<p>' . htmlspecialchars($iwiersz["wydarzenie_data"]) . '</p>';
}
?>