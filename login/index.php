<?php
session_start();
require __DIR__ . '/../assets/php/check/maintenanceCheck.php';
maintenanceCheck();
if (!isset($_SESSION['REDIRECT'])) $_SESSION['REDIRECT'] = "/";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-160052296-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-160052296-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>情クラ統合認証システム</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icon/apple-touch-icon.png">
    <link rel="icon" href="/assets/icon/icon.ico">
    <link rel="stylesheet" href="/assets/css/reset.css">
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/3.5.2/firebaseui.css" />
    <link rel="stylesheet" href="/assets/css/login.css">
</head>

<body>
    <?php require __DIR__ . '/../assets/php/component/menu.php' ?>
    <?php require __DIR__ . '/../assets/php/component/header.php' ?>
    <main>
        <img class="background" src="/assets/img/background.jpg" alt="画像" oncontextmenu="return false;" onselectstart="return false;" onmousedown="return false;">

        <div class="login_box">
            <div class="login_title"><span>※この先のページへは</span><span>所属大学を証明する</span><span>Googleアカウントが必要です</span></div>
            <div id="firebaseui-auth-container"></div>
        </div>

        <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/ui/3.5.2/firebase-ui-auth__ja.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.15.5/firebase-analytics.js"></script>

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
                }
            });
            var uiConfig = {
                signInSuccessUrl: '<?= $_SESSION['REDIRECT'] ?>',
                signInOptions: [
                    firebase.auth.GoogleAuthProvider.PROVIDER_ID
                ],
                tosUrl: 'https://policies.google.com/terms?hl=ja',
                privacyPolicyUrl: 'https://policies.google.com/privacy?hl=ja'
            };
            var ui = new firebaseui.auth.AuthUI(firebase.auth());
            ui.start('#firebaseui-auth-container', uiConfig);
        </script>
    </main>
</body>

</html>