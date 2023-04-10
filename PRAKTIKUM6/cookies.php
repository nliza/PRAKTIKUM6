<?php
if (isset ($variabel_cookies)) {
    echo 'Variabel cookiesnya "$variabel_cookies"_nilainya adalah '.$_COOKIES['variabel_cookies'];
} else {
    echo "variabel cookies belum  diterapkan";
}
?>