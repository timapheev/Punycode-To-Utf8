<?php
/**
 * Преобразует домен из Punycode в читаемый формат
 * Если домен не в Punycode, возвращает его без изменений
 * 
 * @param string $domain Входной домен
 * @return string Читаемый домен
 */
function convertDomain($domain) {
    return (strpos($domain, 'xn--') !== false) 
        ? idn_to_utf8($domain, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46) 
        : $domain;
}

// Пример использования
$domain = "xn--58-jlc8bi.xn--p1ai";
echo convertDomain($domain);
?>
