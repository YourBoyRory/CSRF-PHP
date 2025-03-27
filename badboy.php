<script>
    window.onload = function() {
        document.getElementById('red').checked = true;
        document.getElementById('autoForm').submit();
    };
</script>

<form id="autoForm" action="results.php" method="POST">
    <input id="red" type="radio" name="color" value="Red" required> Red
    <input type="hidden" name="token" value="<?php md5(uniqid(microtime(), true)); ?>">
</form>
