<?php
/**********************************************************
* @File:				pl.php - spolszczenie dla rozszerzenia i18n search
* @plugin version:		2.8
* @Translation Version:	1.1
* @Traductor:           Wojciech Jodła - www.WuJitsu.pl
**********************************************************/
$i18n = array(
    'GO' => "Szukaj"
  , 'HEADER' => "Wyniki wyszukiwania"
  , 'NOT_FOUND' => "Nic nie znaleziono"
  , 'DATE_LOCALE' => "pl_PL.utf8,pl_PL,pl"
  , 'DATE_FORMAT' => "%d.%m.%Y"
  , 'FIRST_TEXT' => "<<"
  , 'FIRST_TITLE' => "Pierwsza strona"
  , 'PREV_TEXT' => "<"
  , 'PREV_TITLE' => "Poprzednia strona"
  , 'NEXT_TEXT' => ">"
  , 'NEXT_TITLE' => "Następna strona"
  , 'LAST_TEXT' => ">>"
  , 'LAST_TITLE' => "Ostatnia strona"
  , 'CONFIGURE' => "Konfiguracja i18n search"
  , 'CONFIGURATION' => "I18N Search"
  , 'VIEW_USAGE' => "Instrukcja"
  , 'VIEW_SETTINGS' => "Ustawienia"
  , 'INDEX_SETTINGS' => "Ustawienia indeksowania"
  , 'INDEX_DESCRIPTION' => "Poniższe ustawienia określają jak ważna jest waga danego słowa. Np. waga treści strony równa 1 oraz waga tytułu strony równa 5 oznacza tyle, że znalezienie danego słowa w tytule ma wyższy priorytet niż jego 4-krotne wystąpienie w treści."
  , 'CONTENT_WEIGHT' => "Relatywna waga treści"
  , 'TITLE_WEIGHT' => "Relatywna waga tytułu strony"
  , 'TAG_WEIGHT' => "Relatywna waga tagu (słowa kluczowego)"
  , 'SEARCHFORM_SETTINGS' => "Ustawienia wyszukiwania"
  , 'SEARCHFORM_DESCRIPTION' => "Czy chcesz wyświetlać tzw. chmurę tagów w formularzu wyszukiwania ? Jeśli nie wpisywałeś słów kluczowych (tagów) na swoich stronach, nie używaj tej opcji."
  , 'SHOW_TAGS' => "Pokaż chmurę tagów"
  , 'MIN_TAG_SIZE' => "Minimalna, procentowa wielkość czcionki tagów (w % nie w px/pt)"
  , 'MAX_TAG_SIZE' => "Maksymalna, procentowa wielkość czcionki tagów (w % nie w px/pt)"
  , 'SEARCHRESULT_SETTINGS' => "Ustawienia wyników wyszukiwania"
  , 'SEARCHRESULT_DESCRIPTION' => "Poniższe ustawienia dotyczą wyświetlania wyników wyszukiwania."
  , 'MAX' => "Maksymalna ilość wyników pokazywanych na jednej stronie."
  , 'NUM_WORDS' => "Ilość słów wprowadzenia (0 = brak, -1 = cała treść)"
  , 'SHOW_LANGUAGE' => "Pokaż kod języka znalezionej strony(przydatne tylko na wielojęzycznych stronach)"
  , 'SHOW_DATE' => "Pokaż datę publikacji znalezionej strony"
  , 'SHOW_PAGING' => "Pokaż nawigację jeśli wyników jest więcej niż określona max ilość"
  , 'SAVE_CONFIGURATION' => "Zapisz konfigurację wyszukiwania"
  , 'RESET_CONFIGURATION' => "Zresetuj konfigurację wyszukiwania"
  , 'SAVE_FAILURE' => "Zmiany wprowadzone w konfiguracji wyszukiwania nie mogły zostać zapisane ."
  , 'SAVE_SUCCESS' => "Zmiany wprowadzone w konfiguracji wyszukiwania zostały zapisane."
  , 'RESET_FAILURE' => "Konfiguracja wyszukiwania nie mogła zostać zresetowana."
  , 'RESET_SUCCESS' => "Konfiguracja wyszukiwania została zresetowana do ustawień domyślnych."
  , 'UNDO_FAILURE' => "Konfiguracja wyszukiwania nie mogła zostać przywrócona."
  , 'UNDO_SUCCESS' => "Konfiguracja wyszukiwania została przywrócona."
  , 'USAGE_IN_PAGE' => "Aby używać rozszerzenia I18N search, dodaj nową stronę z przykładowym tytułem i URL-em strony głównej<br> o nazwie \"<b><i>search</i></b>\", a wtreści wklej poniższe dane:"
  , 'USAGE_IN_TEMPLATE' => "Aby osadzić formularz wyszukiwania w panelu bocznym (sidebar) lub w szablonie (np. w nagłówku strony), użyj poniższego kodu ('<i>search</i>' to nazwa strony pokazującej wyniki wyszukiwania):"
  , 'CUSTOMIZE_1' => "Aby dostosować wyszukiwanie wejdź w"
  , 'CUSTOMIZE_2' => "i zdefiniuj dodatkowe parametry przy wywoływaniu wyszukiwania np."
  , 'CUSTOMIZE_3' => "<br>Możesz wykorzystać następujące parametry:"
  , 'PARAMETER_NAME' => "Nazwa"
  , 'PARAMETER_DESCRIPTION' => "Opis"
  , 'SLUG_DESCR' => "Nazwa strony/URL na której zostaną wyświetlone wyniki wyszukiwania, np. search"
  , 'GO_DESCR' => "Tekst na przycisku wyszukiwania"
  , 'TAGS_DESCR' => "Tagi (słowa kluczowe) których należy szukać- zamiast wpisanych tagów w polu wyszukiwania"
  , 'WORDS_DESCR' => "Słowa których należy szukać - zamiast wpisanych w polu wyszukiwania"
  , 'ORDER_DESCR' => "Kolejność rezultatów: <i>url</i> = po nazwie strony/URL rosnąco, <i>reverseurl</i> = po nazwie strony/URL malejąco, <i>date</i> = po dacie publikacji, malejąco, <i>created</i> = po dacie utworzenia, malejąco(jeśli dostępna), domyślna kolejność oparta jest na wagach słów, malejąco."
  , 'HEADER_DESCR' => "Nagłówek strony z wynikami wyszukiwania."
  , 'NOT_FOUND_DESCR' => "Treść wiadomości pokazywana w przypadku braku jakichkolwiek wyników wyszukiwania"
  , 'DATE_LOCALE_DESCR' => "Ustawienia wyświetlania lokalnej daty - mogą to być wielokrotne wartości \"Locale\" rozdzielone przecinkami, np. \"de_DE.utf8,de_DE,de\""
  , 'DATE_FORMAT_DESCR' => "Format daty, określony w specyfikacji funkcji PHP strftime np. \"%A, %d.%m.%Y - %H:%M\""
  , 'PAGING_DESCR' => "Paginacja, np."
  , 'LANGUAGE_FILE_COMMENT' => "Wszystkie parametry pisane wielkimi literami są z reguły pobierane z pliku językowego wtyczki. Dlatego zalecana jest modyfikacja pliku językowego (w katalogu /plugins/i18n_search/lang/) zamiast używania tych parametrów bezpośrednio.<br /><br /> Polskie tłumaczenie: Wojciech Jodła - <a href=\"http://www.wujitsu.pl\">www.wujitsu.pl</a>"
  , 'LANG_DESCR' => "Jeśli podany, wyświetlane będą wyłącznie wyniki w danym języku.W przeciwnym wypadku będą pokazywane strony utworzone we wszystkich językach, w tym również domyślnym np. \"en\""
  , 'ADDTAGS_DESCR' => "Dodatkowe tagi które mają zostać dodane podczas wywołania funkcji wyszukiwania"
  , 'ADDWORDS_DESCR' => "Dodatkowe słowa które mają zostać dodane podczas wywołania funkcji wyszukiwania"
  , 'COMPONENT_DESCR' => "Komponent który ma zostać wywołany dla każdego rezultatu wyszukiwania"
  , 'TRANSLITERATION' => "Transliteracja"
  , 'TRANSLITERATION_DESCRIPTION' => "Tutaj możesz wskazać tłumaczenie znaków używanych podczas wyszukiwania. Każda linia zawiera jedną konwersję w postaci <em>znak źródłowy \"=\" znak docelowy</em>, np. <em>ż=z</em>."
  , 'TRANSLITERATION_SETTINGS' => "Ustawienia transliteracji"
  , 'AJAX_DESCR' => "Wartość zerowa wyłączy AJAXową funkcjonalność formularza wyszukiwania oraz chmury tagów."
  , 'PLACEHOLDER_DESCR' => "Miejsce (placeholder) na pole wyszukiwania"
  , 'LIVE_DESCR' => "Wartość 1 włączy natychmiastowe wyszukiwanie, wyświetlające wyniki podczas wpisywania tekstu lub tagów w polu wyszukiwania. Aby włączyć, musisz ustawić atrybut live=1 zarówno dla formularza wyszukiwania oraz wyników wyszukiwania."
  , 'IDPREFIX_DESCR' => "Jeśli ustawisz ten parametr, każdy wynik wyszukiwania otrzyma ID z ustawionym prefiksem oraz zwiększającym się numerem."
  , 'TAGCLASSPREFIX_DESCR' => "Jeśli ustawisz ten parametr, wszystkie tagi zostaną dodane jako klasy CSS - poprzedzone wartością parametru - do wyników wyszukiwania. Możesz użyć tego parametru aby ostylować wyniki bazujące na tagach."
  , 'TAG_MODE' => "Jakich tagów (znaczników) używać ?"
  , 'TAGS_LANG_OR_DEFLANG' => "Tagi domyślnego języka, jeśli nie występują tagi dla określonego języka."
  , 'TAGS_ALWAYS_DEFLANG' => "Tagi domyślnego języka. Always use tags of default language"
  , 'TAGS_ALWAYS_LANG' => "Specyficzne tagi językowe. Always use language specific tags"  
);