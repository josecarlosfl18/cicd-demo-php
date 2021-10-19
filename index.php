<?php

require_once('barcode.php');
/*
Here is a list of prefixes:
000 – 019 GS1 United States
020 – 029 Restricted distribution (MO defined, usually for internal use)
030 – 039 GS1 United States
040 – 049 Restricted distribution (MO defined, usually for internal use)
050 – 059 Coupons
060 – 139 GS1 United States
200 – 299 Restricted distribution (MO defined, usually for internal use)
300 – 379 GS1 France
380 GS1 Bulgaria
383 GS1 Slovenia
385 GS1 Croatia 387 GS1 BIH (Bosnia-Herzegovina)
400 – 440 GS1 Germany
450 – 459 & 490 – 499 GS1 Japan
460 – 469 GS1 Russia
470 GS1 Kurdistan
471 GS1 Taiwan
474 GS1 Estonia
475 GS1 Latvia
476 GS1 Azerbaijan
477 GS1 Lithuania
478 GS1 Uzbekistan
479 GS1 Sri Lanka
480 GS1 Philippines
481 GS1 Belarus
482 GS1 Ukraine
484 GS1 Moldova
485 GS1 Armenia
486 GS1 Georgia
487 GS1 Kazakhstan
489 GS1 Hong Kong
500 – 509 GS1 UK
520 GS1 Greece
528 GS1 Lebanon
529 GS1 Cyprus
530 GS1 Albania
531 GS1 MAC (FYR Macedonia)
535 GS1 Malta
539 GS1 Ireland
540 – 549 GS1 Belgium & Luxembourg
560 GS1 Portugal
569 GS1 Iceland
570 – 579 GS1 Denmark
590 GS1 Poland
594 GS1 Romania
599 GS1 Hungary
600 – 601 GS1 South Africa
603 GS1 Ghana
608 GS1 Bahrain
609 GS1 Mauritius
611 GS1 Morocco
613 GS1 Algeria
616 GS1 Kenya
618 GS1 Ivory Coast
619 GS1 Tunisia
621 GS1 Syria
622 GS1 Egypt
624 GS1 Libya
625 GS1 Jordan
626 GS1 Iran
627 GS1 Kuwait
628 GS1 Saudi Arabia
629 GS1 Emirates
640 – 649 GS1 Finland
690 – 695 GS1 China
700 – 709 GS1 Norway
729 GS1 Israel
730 – 739 GS1 Sweden
740 GS1 Guatemala
741 GS1 El Salvador
742 GS1 Honduras
743 GS1 Nicaragua
744 GS1 Costa Rica
745 GS1 Panama
746 GS1 Dominican Republic
750 GS1 Mexico
754 – 755 GS1 Canada
759 GS1 Venezuela
760 – 769 GS1 Switzerland
770 GS1 Colombia
773 GS1 Uruguay
775 GS1 Peru
777 GS1 Bolivia
779 GS1 Argentina
780 GS1 Chile
784 GS1 Paraguay
786 GS1 Ecuador
789 – 790 GS1 Brazil
800 – 839 GS1 Italy
840 – 849 GS1 Spain
850 GS1 Cuba
858 GS1 Slovakia
859 GS1 Czech
860 GS1 YU (Serbia & Montenegro)
865 GS1 Mongolia
867 GS1 North Korea
868 – 869 GS1 Turkey
870 – 879 GS1 Netherlands
880 GS1 South Korea
884 GS1 Cambodia
885 GS1 Thailand
888 GS1 Singapore
890 GS1 India
893 GS1 Vietnam
899 GS1 Indonesia
900 – 919 GS1 Austria
930 – 939 GS1 Australia
940 – 949 GS1 New Zealand
950 GS1 Global Office
955 GS1 Malaysia
958 GS1 Macau
977 Serial publications (ISSN)
978 – 979 Bookland (ISBN)
980 Refund receipts
981 – 982 Common Currency Coupons
990 – 999 Coupons
*/

echo ('Saludos a este cambio 1');
const PREFIX = 786; //Ecuador

const QTY = 10;

// QTY without prefix
var_dump('<br>');
var_dump('<br>');
var_dump('--------------------------------------------------<br>');
var_dump('Barcodes without prefix<br>');
var_dump('--------------------------------------------------<br>');
var_dump('<br>');
for ($i = 0; $i < QTY; $i++) {
    var_dump('  - ' . EAN13::create() . '<br>');
}

// QTY with prefix
var_dump('<br>');
var_dump('<br>');
var_dump('--------------------------------------------------<br>');
var_dump('Barcodes with prefix: ' . QTY . '<br>');
var_dump('--------------------------------------------------<br>');
var_dump('<br>');
for ($i = 0; $i < QTY; $i++) {
    var_dump('  - ' . EAN13::create(PREFIX) . '<br>');
}
