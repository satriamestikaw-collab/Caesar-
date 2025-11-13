<html>
<head>
    <title> ©satria </title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" placeholder="TEXT > CAESAR">
        <input type="number" name="shift" placeholder="Shift">
        <input type="submit" value="Enkripsi">
    </form>

    <?php
    if (isset($_POST['text']) && isset($_POST['shift'])) {
        $text = $_POST['text'];
        $shift = $_POST['shift'];

        function caesarEncrypt($text, $shift) {
            $result = "";
            for ($i = 0; $i < strlen($text); $i++) {
                $char = $text[$i];
                if (ctype_alpha($char)) {
                    $ascii = ord($char);
                    if ($char >= 'a' && $char <= 'z') {
                        $result .= chr((($ascii - 97 + $shift) % 26) + 97);
                    } elseif ($char >= 'A' && $char <= 'Z') {
                        $result .= chr((($ascii - 65 + $shift) % 26) + 65);
                    }
                } else {
                    $result .= $char;
                }
            }
            return $result;
        }

        echo "Teks terenkripsi: " . caesarEncrypt($text, $shift);
    }
    ?>
</body>
</html>
