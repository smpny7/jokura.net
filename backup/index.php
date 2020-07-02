<?php
session_start();
$_SESSION['REDIRECT'] = "/backup/indexed.php";
?>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
<script src="/config.js"></script>
<script>
    firebase.auth().onAuthStateChanged((user) => {
        if (user) {
            if (user.email.match(/^[a-z0-9]{8}@{1}s.okayama-u.ac.jp$/)) {
                location.href = "<?= $_SESSION['REDIRECT'] ?>";
            } else {
                firebase.auth().onAuthStateChanged((user) => {
                    firebase.auth().signOut()
                });
                location.href = "/login/error.php";
            }
        } else {
            location.href = "/login";
        }
    });
</script>