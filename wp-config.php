<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Skrypt wp-config.php używa tego pliku podczas instalacji.
 * Nie musisz dokonywać konfiguracji przy pomocy przeglądarki internetowej,
 * możesz też skopiować ten plik, nazwać kopię "wp-config.php"
 * i wpisać wartości ręcznie.
 *
 * Ten plik zawiera konfigurację:
 *
 * * ustawień MySQL-a,
 * * tajnych kluczy,
 * * prefiksu nazw tabel w bazie danych,
 * * ABSPATH.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'marcin');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'marcin');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', 'aLYtGWnb7HHp2sBm');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8mb4');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '33O3Yk>5}7?]TK>MIn@;s.Jiy[<h-~Eox;/y](7Pu8C#nqwpC}TcKyFTxP}5}XQx');
define('SECURE_AUTH_KEY',  '1eVFKzmO@7O;(8q[5ad`wWJO cJ6bb4W*-Ov9[sG4F&}+QoHsU;G}d;bY?mxgI1G');
define('LOGGED_IN_KEY',    'zVG$i PxJ=Tyd2v8CGr{TZ%YK5BUj{GDa{hPK,Lp3nnx8-.rW6x*WpSn(~o)T!)3');
define('NONCE_KEY',        'eQwkciL5$P[nLJ8,8:<;Gr3t*w#E_5N$!/@B^<}_;,aNKO={l8.RCHLUZ:nf{My@');
define('AUTH_SALT',        'S=Bb=%@$42o!?fX5g*VT_w-3Ya6M3~m8xLkH&%YnJGFR.<h@1#gH%B64ADm=5rNY');
define('SECURE_AUTH_SALT', 'B+Zp.*YJau1Gs@pa4b&ngly:S!]k3:rTV TMA%46Yb&x6bQD_:j_fS8a5k^K?0;X');
define('LOGGED_IN_SALT',   '*p(0F)raY`Vg{{7$SY)fsG*w7l<^He7xGL$5^ lNB]R}NL;ZW#[CiIQz3xk39`?~');
define('NONCE_SALT',       '~[C+u.dwH!Pqm-P.P(fe-9h6IfJMu(h|pkB kL8%H~lA}]W34.@HD/J-K~bS7b$m');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'we4_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie
 * ostrzeżeń podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG podczas pracy nad nimi.
 *
 * Aby uzyskać informacje o innych stałych, które mogą zostać użyte
 * do debugowania, przejdź na stronę Kodeksu WordPressa.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
