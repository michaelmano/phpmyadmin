<?php
/* $Id$ */

/**
 * Translated by Sven-Erik Andersen <sven-erik.andersen at pkf107.no>
 */

$charset = 'iso-8859-1';
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('S�n', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'L�r');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';
$timespanfmt = '%s dager, %s timer, %s minutter og %s sekunder';


$strAPrimaryKey = 'En prim�rn�kkel har blitt lagt til %s';
$strAbortedClients = 'Avbrutt';
$strAbsolutePathToDocSqlDir = 'Vennligst skriv inn den absolutte stien p� webtjeneren til docSQL katalogen';
$strAccessDenied = 'Ingen tilgang';
$strAccessDeniedExplanation = 'phpMyAdmin fors�kte � koble til MySQL-serveren, og serveren avviste tilkoblingen. Du m� kontrollere vert (host), brukernavn (username) og passord (password) i config.inc.php og sjekke at de tilsvarer den informasjonen du fikk fra MySQL-server administratoren.';
$strAction = 'Handling';
$strAddAutoIncrement = 'Legg til AUTO_INCREMENT verdi';
$strAddConstraints = 'Legg til begrensninger';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterierad';
$strAddDropDatabase = 'Legg til DROP DATABASE';
$strAddHeaderComment = 'Legg til egen kommentar i hodet (\\n lager linjeskift)';
$strAddIfNotExists = 'Legg til IF NOT EXISTS';
$strAddIntoComments = 'Legg til i kommentarer';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegium';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegium.';
$strAddPrivilegesOnDb = 'Legg til privilegier til f�lgende database';
$strAddPrivilegesOnTbl = 'Legg til privilegier til f�lgende tabell';
$strAddSearchConditions = 'Legg til s�kekriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks&nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAddedColumnComment = 'Lagt til kolonnekommentar';
$strAddedColumnRelation = 'Lagt til relasjon for kolonne';
$strAdministration = 'Administrasjon';
$strAffectedRows = 'Ber�rte rader:';
$strAfter = 'Etter %s';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAfterInsertSame = 'Tilbake til denne siden';
$strAll = 'Alle';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Endre tabellrekkef�lge ved';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'og';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strArabic = 'arabisk';
$strArmenian = 'armensk';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';
$strAutodetect = 'Automatisk oppdaging';
$strAutomaticLayout = 'Automatisk disposisjon';

$strBack = 'Tilbake';
$strBaltic = 'baltisk';
$strBeginCut = 'START KUTT';
$strBeginRaw = 'START UFORMATERT';
$strBinary = ' Bin�r ';
$strBinaryDoNotEdit = ' Bin�r - m� ikke redigeres ';
$strBookmarkAllUsers = 'La alle brukere ha adgang til dette bokmerket';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkOptions = 'Bokmerkeinnstillinger';
$strBookmarkQuery = 'Lagret SQL-sp�rring';
$strBookmarkThis = 'Lagre denne SQL-sp�rringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se p�';
$strBrowseForeignValues = 'Se de eksterne verdiene';
$strBulgarian = 'bulgarsk';
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpede data fordi Bz2 tillegget til denne php versjonen er �delagt. Vi anbefaler p� det sterkeste at du setter <code>$cfg[\'BZipDump\']</code> direktivet i din phpMyAdmin konfigurasjonsfil til <code>FALSE</code>. Hvis du �nsker � bruke Bz2 komprimerings funksjonene, s� b�r du oppgradere til en nyere php versjon. Se php bug rapport %s for detaljer.';
$strBzip = 'Komprimert (bz2)';

$strCSVOptions = 'CSV valg';
$strCalendar = 'Kalender';
$strCannotLogin = 'Kan ikke logge inn til MySQL tjeneren';
$strCantLoad = 'kan ikke starte %s tillegget,<br />vennligst kontroller PHP-konfigurasjonen';
$strCantLoadRecodeIconv = 'Kan ikke laste iconv- eller recode-modulen som trengs for tegnsett konvertering, konfigurer php slik at disse kan lastes eller sl� av tegnsettkonvertering i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruke hverken iconv, libiconv eller recode_string funksjonene selv om modulene sier de er lastet. Sjekk din php-konfigurasjon.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Linjeskift (Mac): \\r';
$strCaseInsensitive = 'uavhengig av bokstavst�relse';
$strCaseSensitive = 'avhengig av bokstavst�relse';
$strCentralEuropean = 'sentraleuropeisk';
$strChange = 'Endre';
$strChangeCopyMode = 'Opprett ny bruker med de samme privilegier og ...';
$strChangeCopyModeCopy = '... behold den gamle.';
$strChangeCopyModeDeleteAndReload = ' ... slett den gamle fra brukertabellene og deretter oppfrisk privilegiene.';
$strChangeCopyModeJustDelete = ' ... slett den gamle fra brukertabellene.';
$strChangeCopyModeRevoke = ' ... tilbakekall alle aktive privilegier fra den gamle og slett den etterp�.';
$strChangeCopyUser = 'Endre innloggingsinformasjon / kopiere bruker';
$strChangeDisplay = 'Velg felt for visning';
$strChangePassword = 'Endre passord';
$strCharset = 'Tegnsett';
$strCharsetOfFile = 'Filens tegnsett:';
$strCharsets = 'Tegnsett';
$strCharsetsAndCollations = 'Tegnsett og kollasjoneringer';
$strCheckAll = 'Merk alle';
$strCheckDbPriv = 'Kontroller databaseprivilegier';
$strCheckOverhead = 'Kontroller overheng';
$strCheckPrivs = 'Kontroller privilegier';
$strCheckPrivsLong = 'Kontroller privilegier for databasen &quot;%s&quot;.';
$strCheckTable = 'Kontroller tabell';
$strChoosePage = 'Vennligst velg en side for redigering';
$strColComFeat = 'Vis kolonnekommentarer';
$strCollation = 'Kollasjonering';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonnenavn';
$strColumnPrivileges = 'Kolonne-spesifikke privilegier';
$strCommand = 'Kommando';
$strComments = 'Kommentarer';
$strCommentsForTable = 'TABELLKOMMENTARER';
$strCompleteInserts = 'Komplette innlegg';
$strCompression = 'Kompresjon';
$strConfigFileError = 'phpMyAdmin kunne ikke lese din konfigurasjonsfil!<br />Dette kan skje hvis PHP finner en syntaksfeil eller ikke kan finne filen.<br />Vennligst kall opp konfigurasjonsfilen direkte via linken under og les PHP feilmeldingen(e) som du vil f�. I de fleste tilfeller s� mangler det et anf�rselstegn eller et semikolon et sted.<br />Hvis du f�r en blank side s� er alt ok.';
$strConfigureTableCoord = 'Vennligst konfigurer koordinatene for tabell %s';
$strConfirm = '�nsker du virkelig � gj�re det?';
$strConnectionError = 'Kan ikke koble til: ugyldige innstillinger.';
$strConnections = 'tilkoblinger';
$strConstraintsForDumped = 'Begrensninger for dumpede tabeller';
$strConstraintsForTable = 'Begrensninger for tabell';
$strCookiesRequired = 'Cookies m� v�re sl�tt p� forbi dette punkt.';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCopyTableSameNames = 'Kan ikke kopiere tabellen til samme navn!';
$strCouldNotKill = 'phpMyAdmin kunne ikke avslutte tr�d %s. Den er sansynligvis alt avsluttet.';
$strCreate = 'Opprett';
$strCreateIndex = 'Lag en indeks p�&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database %s';
$strCreatePage = 'Lag en ny side';
$strCreatePdfFeat = 'Lag PDF-dokumenter';
$strCreationDates = 'Opprettelse/Oppdaterings/Kontrolldateo';
$strCriteria = 'Kriterier';
$strCroatian = 'kroatisk';
$strCyrillic = 'kyrillisk';
$strCzech = 'tjekkisk';
$strCzechSlovak = 'Tjekkoslovakisk';

$strDBComment = 'Database kommentar: ';
$strDBGContext = 'Sammenheng';
$strDBGContextID = 'Sammenhengs-ID';
$strDBGHits = 'Treff';
$strDBGLine = 'Linje';
$strDBGMaxTimeMs = 'Max tid, ms';
$strDBGMinTimeMs = 'Min tid, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Tid/Treff, ms';
$strDBGTotalTimeMs = 'Total tid, ms';
$strDBRename = 'Endre databasens navn til';
$strDanish = 'dansk';
$strData = 'Data';
$strDataDict = 'Dataordbok';
$strDataOnly = 'Bare data';
$strDatabase = 'Database';
$strDatabaseEmpty = 'Databasens navn er tomt!';
$strDatabaseExportOptions = 'Databaseeksportinnstillinger';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabaseNoTable = 'Denne databasen har ingen tabeller!';
$strDatabaseWildcard = 'Database (jokertegn er tillatt):';
$strDatabases = 'databaser';
$strDatabasesDropped = '%s databasene har blitt slettet.';
$strDatabasesStats = 'Statistikk for databaser';
$strDatabasesStatsDisable = 'Sl� av statistikk';
$strDatabasesStatsEnable = 'Sl� p� statistikk';
$strDatabasesStatsHeavyTraffic = 'OBS: N�r du sl�r p� Databasestatistikk s� kan det medf�re stor traffik mellom webtjeneren og MySQL-tjeneren.';
$strDbPrivileges = 'Database-spesifikke privilegier';
$strDbSpecific = 'databasespesifikk';
$strDefault = 'Standard';
$strDefaultValueHelp = 'Sett inn en enkelt verdi for standard verdier uten skr�strek, anf�rselstegn eller annen &quot;escaping&quot; med dette formatet: a';
$strDefragment = 'Defragmenter tabell';
$strDelOld = 'Den n�v�rende siden har referanser til tabeller som ikke lenger eksisterer. Vil du slette disse referansene?';
$strDelayedInserts = 'Bruk forsinkede innsettinger';
$strDelete = 'Slett';
$strDeleteAndFlush = 'Slett brukeren og oppfrisk privilegiene etterp�.';
$strDeleteAndFlushDescr = 'Dette er den beste m�ten, men oppfrisking av privilegiene kan ta litt tid.';
$strDeleteFailed = 'Slettingen mislyktes!';
$strDeleteUserMessage = 'Du har slettet brukeren %s.';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleting = 'Sletter %s';
$strDescending = 'Synkende';
$strDescription = 'Beskrivelse';
$strDictionary = 'ordbok';
$strDisabled = 'Avsl�tt';
$strDisplay = 'Vis';
$strDisplayFeat = 'Vis egenskaper';
$strDisplayOrder = 'Visningsrekkef�lge:';
$strDisplayPDF = 'Vis PDF-skjema';
$strDoAQuery = 'Utf�r en "sp�rring ved eksempel" (jokertegn: "%")';
$strDoYouReally = 'Vil du virkelig ';
$strDocu = 'Dokumentasjon';
$strDrop = 'Slett';
$strDropDB = 'Slett databasen %s';
$strDropDatabaseStrongWarning = 'Du er i ferd med � SLETTE en komplett database!';
$strDropSelectedDatabases = 'Slett valgte databaser';
$strDropTable = 'Slett tabell';
$strDropUsersDb = 'Slett databasene som har det samme navnet som brukerne.';
$strDumpComments = 'Inkluder kolonnekommentarer som SQL-kommentarer';
$strDumpSaved = 'Dump har blitt lagret til fila %s.';
$strDumpXRows = 'Dumpe %s rader fra rad %s.';
$strDumpingData = 'Dataark for tabell';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPDFPages = 'Rediger PDF-sider';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'T�m';
$strEmptyResultSet = 'MySQL returnerte ett tomt resultat (m.a.o. ingen rader).';
$strEnabled = 'P�sl�tt';
$strEncloseInTransaction = 'Inneslutt eksport i en transaksjon';
$strEnd = 'Slutt';
$strEndCut = 'STOPP KUTT';
$strEndRaw = 'STOPP UFORMATERT';
$strEnglish = 'engelsk';
$strEnglishPrivileges = 'OBS: MySQL privilegiumnavn er p� engelsk';
$strError = 'Feil';
$strEstonian = 'estisk';
$strExcelEdition = 'Excel-versjon';
$strExcelOptions = 'Excel-innstillinger';
$strExecuteBookmarked = 'Utf�r lagret sp�rring';
$strExplain = 'Forklar SQL';
$strExport = 'Eksporter';
$strExportToXML = 'Eksporter til XML format';
$strExtendedInserts = 'Utvidete innlegg';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Feilede fors�k';
$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Antall felter er tommt! ';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter "escaped" med';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFileAlreadyExists = 'Fila %s eksisterer alt p� serveren, endre navnet eller merk av for overskriving av fil.';
$strFileCouldNotBeRead = 'Fila kunne ikke leses';
$strFileNameTemplate = 'Filnavnsmal';
$strFileNameTemplateHelp = 'Bruk __DB__ for databasenavn, __TABLE__ for tabellnavn og %svalgfrie strftime%s valg for tidsspesifikasjon, tilleggene vil bli \'automagisk\' lagt til.. All annen tekst vil bli bevart.';
$strFileNameTemplateRemember = 'husk malen';
$strFixed = 'statisk';
$strFlushPrivilegesNote = 'Merk: phpMyAdmin f�r brukerprivilegiene direkte fra MySQL privilegietabeller. Innholdet i disse tabellene kan v�re forskjellig fra de privilegiene tjeneren bruker hvis det er utf�rt manuelle endringer p� den. I s� fall b�r du %soppfriske privilegiene%s f�r du fortsetter.';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFormat = 'Format';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';

$strGenBy = 'Generert av';
$strGenTime = 'Generert den';
$strGeneralRelationFeat = 'Generelle relasjonsegenskaper';
$strGeorgian = 'Georgisk';
$strGerman = 'tysk';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global verdi';
$strGo = 'Utf�r';
$strGrantOption = 'Rettighet';
$strGrants = 'Rettigheter';
$strGreek = 'gresk';
$strGzip = 'Komprimert (gz)';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHaveToShow = 'Du m� velge minst en kolonne for visning';
$strHebrew = 'hebraisk';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin-hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin-nedlastingsside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';
$strHungarian = 'ungarsk';

$strId = 'ID';
$strIdxFulltext = 'Fulltekst';
$strIfYouWish = 'Hvis du kun �nsker � lese inn enkelte av tabellens kolonner, angi en kommaseparert feltliste.';
$strIgnore = 'Ignorer';
$strIgnoreInserts = 'Bruk ignore inserts';
$strIgnoringFile = 'Ignorerer fil %s';
$strImportDocSQL = 'Importer docSQL-filer';
$strImportFiles = 'Importer filer';
$strImportFinished = 'Importen er ferdig';
$strInUse = 'i bruk';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndexName = 'Indeksnavn&nbsp;:';
$strIndexType = 'Indekstype&nbsp;:';
$strIndexes = 'Indekser';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Din konfigurasjonsfil inneholder innstillinger (root uten passord) som korrensponderer med MySQLs standard priviligerte brukerkonto. Din MySQL-tjener kj�rer med denne standardinnstillingen, er �pen for misbruk, og du burde fikse dette sikkerhetshullet snarest.';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertNewRow = 'Sett inn ny rad';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInsertedRowId = 'Satt inn rad id:';
$strInsertedRows = 'Innsatte rader:';
$strInstructions = 'Instruksjoner';
$strInternalNotNecessary = '* En intern relasjon er ikke n�dvendig n�r den ogs� eksisterer i InnoDB.';
$strInternalRelations = 'Interne relasjoner';
$strInvalidName = '"%s" er ett reservert ord, du kan ikke bruke det som et database-, tabell- eller feltnavn.';

$strJapanese = 'japansk';
$strJumpToDB = 'Hopp til databasen &quot;%s&quot;.';
$strJustDelete = 'Bare slett brukerne fra privilegium tabellene.';
$strJustDeleteDescr = 'Den &quot;slettede&quot; brukeren vil fortsatt kunne bruke tjeneren som normalt inntill privilegiene er oppfrisket.';

$strKeepPass = 'Ikke endre passordet';
$strKeyname = 'N�kkel';
$strKill = 'Avslutt';
$strKorean = 'koreansk';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX innstillinger';
$strLandscape = 'Landskapsformat';
$strLatexCaption = 'Tabelloverskrift';
$strLatexContent = 'Innhold i tabell __TABLE__';
$strLatexContinued = '(fortsettet)';
$strLatexContinuedCaption = 'Fortsettet tabelloverskrift';
$strLatexIncludeCaption = 'Inkluder tabelloverskrift';
$strLatexLabel = 'Merkelappn�kkel';
$strLatexStructure = 'Struktur i tabell __TABLE__';
$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLinkNotFound = 'Link ikke funnet';
$strLinksTo = 'Linker til';
$strLithuanian = 'lithauisk';
$strLoadExplanation = 'Den beste m�ten er automatiskt valgt, men du kan endre hvis det ikke fungerer.';
$strLoadMethod = 'LOAD metode';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Plassering av filen';
$strLogPassword = 'Passord:';
$strLogServer = 'Tjener';
$strLogUsername = 'Brukernavn:';
$strLogin = 'Logg inn';
$strLoginInformation = 'Innlogingsinformasjon';
$strLogout = 'Logg ut';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'Tilgjengelige MIME-typer';
$strMIME_available_transform = 'Tilgjengelige transformationer';
$strMIME_description = 'Beskrivelse';
$strMIME_file = 'Filenavn';
$strMIME_nodescription = 'Ingen beskrivelse er tilgjengelig for denne transformasjonen.<br />Sp�r forfatteren hva %s gj�r.';
$strMIME_transformation = 'Nettvisertransformasjon';
$strMIME_transformation_note = 'For en liste over tilgjengelige transformasjonsvalg, klikk p� %stransformasjonsbeskrivelser%s';
$strMIME_transformation_options = 'Transformasjonsvalg';
$strMIME_transformation_options_note = 'Skriv inn verdiene for transformasjon med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du trenger � bruke en skr�strek ("\") eller en enkel apostrof ("\'") blant disse verdiene s� sett en skr�strek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_without = 'MIME-typer skrevet i kursiv har ikke en separat transformasjonsfunksjon';
$strMIMETypesForTable = 'MIME TYPER FOR TABELLEN';
$strMaximumSize = 'Maksimum st�relse: %s%s';
$strMissingBracket = 'Manglende parantes';
$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoreStatusVars = 'Flere status variabler';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMoveTableSameNames = 'Kan ikke flytte tabellen til samme navn!';
$strMultilingual = 'flerspr�kelig';
$strMustSelectFile = 'Du m� velge fila du �nsker � sette inn.';
$strMySQLCharset = 'MySQL-tegnsett';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% som kj�rer p� %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL driftsstatus';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNeedPrimaryKey = 'Du burde definere en prim�rn�kkel for denne tabellen.';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoDatabases = 'Ingen databaser';
$strNoDatabasesSelected = 'Ingen databaser er valgt.';
$strNoDescription = 'ingen beskrivelse';
$strNoDropDatabases = '"DROP DATABASE"-uttrykk er avsl�tt.';
$strNoExplain = 'Ikke forklar SQL';
$strNoFrames = 'phpMyAdmin er mer brukervennlig med en <b>rammekapabel</b> nettleser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeksdeler definert!';
$strNoModification = 'Ingen endring';
$strNoOptions = 'Dette formatet har ingen valg';
$strNoPassword = 'Intet passord';
$strNoPermission = 'Webserveren har ikke tillatelse til � lagre fila %s.';
$strNoPhp = 'uten PHP kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL sp�rring!';
$strNoRights = 'Du har ikke nok rettigheter til � v�re her n�!';
$strNoRowsSelected = 'Ingen rader valgt';
$strNoSpace = 'Ikke nok plass til � lagre fila %s.';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNoUsersSelected = 'Ingen brukere valgt.';
$strNoValidateSQL = 'Ikke teste SQL';
$strNone = 'Ingen';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotOK = 'ikke OK';
$strNotSet = '<b>%s</b> tabellen ble ikke funnet eller ikke konfigurert i %s';
$strNotValidNumber = ' er ikke et gyldig radnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s treff i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> treff';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOftenQuotation = 'Ofte anf�rselstegn. Valgfritt inneb�rer at kun tekstfelter ("char" og "varchar"-felter) er omfattet av tegnet.';
$strOperations = 'Operasjoner';
$strOperator = 'Operator';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOptions = 'Innstillinger';
$strOr = 'Eller';
$strOverhead = 'Overheng';
$strOverwriteExisting = 'Overskriv eksisterende fil(-er)';

$strPHP40203 = 'Du bruker PHP 4.2.3, som har en alvorlig feil med flerbyte-strenger (mbstring). Se PHP-feilrapport 19404. Denne versjonen av PHP er ikke anbefalt for bruk med phpMyAdmin.';
$strPHPVersion = 'PHP-Versjon';
$strPageNumber = 'Sidenummer:';
$strPaperSize = 'Papirst�relse';
$strPartialText = 'Delvis tekst';
$strPassword = 'Passord';
$strPasswordChanged = 'Passordet til %s er endret.';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPdfDbSchema = 'Skjema for "%s"-databasen - Side %s';
$strPdfInvalidPageNum = 'Undefinert PDF-sidenummer!';
$strPdfInvalidTblName = 'Tabellen "%s" eksisterer ikke!';
$strPdfNoTables = 'Ingen tabeller';
$strPerHour = 'per time';
$strPerMinute = 'per minutt';
$strPerSecond = 'per sekund';
$strPhoneBook = 'telefonkatalog';
$strPhp = 'Lag PHP kode';
$strPmaDocumentation = 'phpMyAdmin-Dokumentasjon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> variabelen M� v�re innstilt i din konfigurasjonsfil!';
$strPortrait = 'Portrettformat';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Prim�r';
$strPrimaryKey = 'Prim�rn�kkel';
$strPrimaryKeyHasBeenDropped = 'Prim�rn�kkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  prim�rn�kkelen m� v�re... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>m�</b> v�re navnet til og <b>bare til</b> en prim�rn�kkel!)';
$strPrint = 'Skriv ut';
$strPrintView = 'Utskriftsvennlig forh�ndsvisning';
$strPrintViewFull = 'Forh�ndsvisning (med all tekst)';
$strPrivDescAllPrivileges = 'Inkluder alle privilegier unntatt GRANT.';
$strPrivDescAlter = 'Tillater endring av struktur p� eksisterende tabeller.';
$strPrivDescCreateDb = 'Tillater oppretting av nye databaser og tabeller.';
$strPrivDescCreateTbl = 'Tillater oppretting av nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillater oppretting av midlertidige tabeller.';
$strPrivDescDelete = 'Tillater sletting av data.';
$strPrivDescDropDb = 'Tillater sletting av databaser og tabeller.';
$strPrivDescDropTbl = 'Tillater sletting av tabeller.';
$strPrivDescExecute = 'Tillater kj�ring av lagrede prosedyrer; har ingen effekt p� denne versjonen av MySQL.';
$strPrivDescFile = 'Tillater import og eksport av data til og fra filer.';
$strPrivDescGrant = 'Tillater � legge til brukere og privilegier uten � oppfriske privilegietabellene.';
$strPrivDescIndex = 'Tillater oppretting og sletting av indekser.';
$strPrivDescInsert = 'Tillater � legge til og erstatte data.';
$strPrivDescLockTables = 'Tillater l�sing av tabeller for den kj�rende tr�den.';
$strPrivDescMaxConnections = 'Begrenser antall nye tilkoblinger brukeren kan �pne per time.';
$strPrivDescMaxQuestions = 'Begrenser antall sp�rringer brukeren kan sende til tjeneren per time.';
$strPrivDescMaxUpdates = 'Begrenser antall kommandoer som kan endre tabeller eller databaser brukeren kan utf�re per time.';
$strPrivDescProcess3 = 'Tillater avslutting av prosesser som tilh�rer andre brukere.';
$strPrivDescProcess4 = 'Tillater visning av komplette sp�rringer i prosesslisten.';
$strPrivDescReferences = 'har ingen effekt i denne versjonen av MySQL.';
$strPrivDescReload = 'Tillater oppfrisking av tjenerinnstillinger og oppfrisking av mellomlager.';
$strPrivDescReplClient = 'Gir tillatelse til brukeren til � sp�rre hvor replikasjonsslaver eller -tjenere er.';
$strPrivDescReplSlave = 'Trenges av replikasjonsslavene.';
$strPrivDescSelect = 'Tillater lesing av data.';
$strPrivDescShowDb = 'Gir adgang til komplett liste over databaser.';
$strPrivDescShutdown = 'Tillater avslutting av tjener.';
$strPrivDescSuper = 'Tillater tilkobling, selv om maksimum tilkoblinger er n�dd. Beh�ves for de fleste administrative operasjoner som � sette globale variabler eller avslutting av andre brukeres tr�der.';
$strPrivDescUpdate = 'Tillater endring av data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Oppfriskingen av privilegiene lyktes.';
$strProcesslist = 'Prosess liste';
$strProperties = 'Egenskaper';
$strPutColNames = 'Sett inn feltnavn i f�rste rad';

$strQBE = 'Sp�rring ved eksempel (Query by Example)';
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryFrame = 'Sp�rringsvindu';
$strQueryFrameDebug = 'Feils�kingsinformasjon';
$strQueryFrameDebugBox = 'Aktive variabler for sp�rringsskjemaet:\nDB: %s\nTabell: %s\nServer: %s\n\nN�v�rende variabler for sp�rringsskjemaet:\nDB: %s\nTabell: %s\nServer: %s\n\n�pningssted: %s\nRammesettsted: %s.';
$strQueryOnDb = 'SQL-sp�rring i database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-historie';
$strQueryStatistics = '<b>Sp�rrings statistikk</b>: Siden oppstart, har %s sp�rringer blitt sendt til tjeneren.';
$strQueryTime = 'Sp�rring tok %01.4f sek';
$strQueryType = 'Sp�rringstype';
$strQueryWindowLock = 'Ikke overskriv denne sp�rringen fra andre vinduer';

$strReType = 'Gjenta';
$strReceived = 'Mottatt';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Sjekk referanseintegritet:';
$strRefresh = 'Oppdater';
$strRelationNotWorking = 'Tilleggsfunksjonene for � kunne jobbe med koblede tabeller er deaktivert. For � finne ut hvorfor, klikk %sher%s.';
$strRelationView = 'Relasjonsvisning';
$strRelationalSchema = 'Relasjonsskjema';
$strRelations = 'Relasjoner';
$strRelationsForTable = 'RELASJONER FOR TABELLEN';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadMySQL = 'Omstart av MySQL';
$strReloadingThePrivileges = 'Oppfrisker privilegiene';
$strRememberReload = 'Husk � restarte tjeneren.';
$strRemoveSelectedUsers = 'Fjern valgte brukere';
$strRenameDatabaseOK = 'Databasen %s har endret navn til %s';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har f�tt nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceNULLBy = 'Erstatt NULL med';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'T�m skjema';
$strResourceLimits = 'Ressursbegrensninger';
$strRevoke = 'Tilbakekall';
$strRevokeAndDelete = 'Tilbakekall alle aktive privilegier fra brukerne og slett dem etterp�.';
$strRevokeAndDeleteDescr = 'Inntill privilegiene er oppfrisket vil brukerne fortsatt ha USAGE privilegiet.';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant-privilegiet til %s';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRevokePriv = 'Tibakekall privilegier';
$strRowLength = 'Radlengde';
$strRowSize = ' Radst�relse ';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowsModeFlippedHorizontal = 'horisontal (roterte overskrifter)';
$strRowsModeHorizontal = 'vannrett';
$strRowsModeOptions = 'i %s modus og gjenta headers etter %s celler';
$strRowsModeVertical = 'loddrett';
$strRowsStatistic = 'Radstatistikk';
$strRunQuery = 'Kj�r sp�rring';
$strRunSQLQuery = 'Kj�r SQL sp�rring/sp�rringer mot databasen %s';
$strRunning = 'som kj�rer p� %s';
$strRussian = 'russisk';

$strSQL = 'SQL';
$strSQLExportType = 'Eksporttype';
$strSQLOptions = 'SQL valg';
$strSQLParserBugMessage = 'Det er en mulighet for at du har funnet en feil i SQL-parseren. Vennligst kontroller din sp�rring n�ye og kontroller at anf�rselstegn er korrekte og matsjer hverandre. En annen mulig feil�rsak kan v�re at du overf�rer en fil med bin�rkode som ikke ligger innenfor anf�rselstegn. Du kan ogs� teste din sp�rring i MYSQLs kommandolinjegrensesnitt. Feilmeldingen fra MySQL-tjeneren nedenfor, hvis det var en, kan ogs� hjelpe deg med � analysere problemet. Hvis du fortsatt har problemer eller parseren feiler hvor kommandolinjegrensesnittet lyktes, vennligst reduser din SQL-sp�rring til den sp�rringen som for�rsaker problemet og send en feilrapport med datastykket i CUT-seksjonen nedenfor:';
$strSQLParserUserError = 'Det ser ut til � v�re en feil i din SQL-sp�rring. En eventuell feilmelding fra MySQL-tjeneren er skrevet ut nedenfor, kan kanskje hjelpe deg med � finne feilen.';
$strSQLQuery = 'SQL-sp�rring';
$strSQLResult = 'SQL-resultat';
$strSQPBugInvalidIdentifer = 'Ugyldig identifikator';
$strSQPBugSyntaxError = 'Syntaksfeil';
$strSQPBugUnclosedQuote = 'Anf�rselstegnet er ikke lukket';
$strSQPBugUnknownPunctuation = 'Ukjent tegnsettingsstreng';
$strSave = 'Lagre';
$strSaveOnServer = 'Lagre p� server i %s katalogen';
$strScaleFactorSmall = 'Skaleringsfaktoren er for liten til � romme alt p� en side';
$strSearch = 'S�k';
$strSearchFormTitle = 'S�k i database';
$strSearchInTables = 'I tabell(ene):';
$strSearchNeedle = 'Ord eller verdi(er) � s�ke etter (jokertegn: "%"):';
$strSearchOption1 = 'minst ett av ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'med den n�yaktige setningen';
$strSearchOption4 = 'som "regular expression"';
$strSearchResultsFor = 'S�keresultat for "<i>%s</i>" %s:';
$strSearchType = 'Finn:';
$strSecretRequired = 'Konfigurasjonsfila trenger n� et hemmelig passordfrase (blowfish_secret).';
$strSelect = 'Sp�rring';
$strSelectADb = 'Vennligst velg en database';
$strSelectAll = 'Velg alle';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i sp�rring';
$strSelectTables = 'Velg tabeller';
$strSend = 'Last ned som fil';
$strSent = 'Sendt';
$strServer = 'Tjener';
$strServerChoice = 'Tjenervalg';
$strServerStatus = 'Kj�ringsinformasjon';
$strServerStatusUptime = 'Denne MySQL tjeneren har kj�rt i %s. Den startet opp den %s.';
$strServerTabProcesslist = 'Prosesser';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Tjenertraffikk</b>: Disse tabellene viser statistikk over nettverkstrafikken for denne MySQL-tjeneren siden dens oppstart.';
$strServerVars = 'Tjenervariabler og -innstillinger';
$strServerVersion = 'Tjenerversjon';
$strSessionValue = '�kts verdi';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge � ha en skr�strek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skr�strek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farger';
$strShowCols = 'Vis kolonner';
$strShowDatadictAs = 'Data Ordbok Format';
$strShowFullQueries = 'Vis hele sp�rringen';
$strShowGrid = 'Vis rutenett';
$strShowPHPInfo = 'Vis PHP-informasjon';
$strShowTableDimension = 'Vis tabelldimensjoner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne sp�rring her igjen ';
$strShowingRecords = 'Viser rader ';
$strSimplifiedChinese = 'forenklet kinesisk';
$strSingly = '(enkeltvis)';
$strSize = 'St�rrelse';
$strSort = 'Sorter';
$strSortByKey = 'Sorter etter n�kkel';
$strSpaceUsage = 'Plassbruk';
$strSplitWordsWithSpace = 'Ord er separert med et mellomrom (" ").';
$strStatCheckTime = 'Sist kontrollert';
$strStatCreateTime = 'Opprettet';
$strStatUpdateTime = 'Sist oppdatert';
$strStatement = 'Oversikt';
$strStatus = 'Status';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun struktur';
$strStructPropose = 'Foresl� tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/sp�rringen er utf�rt';
$strSum = 'Sum';
$strSwedish = 'svensk';
$strSwitchToTable = 'Bytt til kopiert tabell';

$strTable = 'Tabell';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt t�mt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableMaintenance = 'Tabellvedlikehold';
$strTableOfContents = 'Innholdsfortegnelse';
$strTableOptions = 'Tabellinnstillinger';
$strTableStructure = 'Tabellstruktur for tabell';
$strTableType = 'Tabelltype';
$strTables = '%s tabell(er)';
$strTblPrivileges = 'Tabell-spesifikke privilegier';
$strTextAreaLength = ' P� grunn av sin lengde,<br /> s� vil muligens dette feltet ikke v�re redigerbart ';
$strThai = 'thai';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt p� felt.';
$strThisHost = 'Denne vert';
$strThisNotDirectory = 'Dette var ikke en katalog';
$strThreadSuccessfullyKilled = 'Tr�d %s ble avsluttet med suksess.';
$strTime = 'Tid';
$strToggleScratchboard = 'sl� av/p� kladdevindu';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraditionalChinese = 'tradisjonell kinesisk';
$strTraffic = 'Trafikk';
$strTransformation_application_octetstream__download = 'Vis en link for � kunne laste ned de bin�re dataene til et felt. Den f�rste opsjonen er filnavnet til den bin�re fila. Den andre opsjonen er et potensielt feltnavn i en tabell som inneholder filnavnet. Hvis du velger den andre opsjonen s� m� den f�rste v�re satt til en tom strengverdi';
$strTransformation_image_jpeg__inline = 'Viser et klikkbart tommelfingerbilde; valg: bredde, h�yde i piksler (bevarer originale forhold)';
$strTransformation_image_jpeg__link = 'Viser en link til dette bildet (m.a.o. direkte blob-nedlasting).';
$strTransformation_image_png__inline = 'Se image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Tar et TIME, TIMESTAMP eller DATETIME felt og formaterer det med din lokale dato-/tidsformat. F�rste valg er avviket (i timer) som vil bli lagt til tidsformatet (Standard: 0). Andre valget er et annet dato-/tidsformat basert p� parameterene til PHPs strftime().';
$strTransformation_text_plain__external = 'BARE LINUX: Starter et eksternt program og gir den feltdataene via standard input. Returnerer standart output fra programmet. Standard er Tidy, for � skrive ut pen HTML kode. Av sikkerhetsgrunner s� m� du redigere fila libraries/transformations/text_plain__external.inc.php og skrive inn de verkt�yene du tillater � kj�res. Den f�rste verdien er antall programmer du �nsker � bruke og den andre verdien er parameterene for programmet. Den tredje verdien, hvis den er satt til 1 vil konvertere utskriften med htmlspecialchars() (Standard er 1). En fjerde verdi vil, viss satt til 1 sette en NOWRAP i innholdscellen slik at hele resultatet blir vist uten reformatering (Standard er 1)';
$strTransformation_text_plain__formatted = 'Bevarer original formatering av feltet. Ingen \'escaping\' blir utf�rt.';
$strTransformation_text_plain__imagelink = 'Viser et bilde og en link, feltet inneholder filnavnet; f�rste verdi er et prefiks slik som "http://domain.com/", andre verdien er bredden i piksler, tredje er h�yden.';
$strTransformation_text_plain__link = 'Viser en link, feltet inneholder filnavnet, ; f�rste verdi er et prefiks slik som "http://domain.com/", andre verdien er en tittel for linken.';
$strTransformation_text_plain__substr = 'Viser bare en delstreng. F�rste verdien er antall tegn fra starten hvor din tekst begynner (Standard: 0). Andre verdien er hvor mange tegn som skal returneres. Hvis den er tom s� returneres resten av teksten. Den tredje verdien definerer hvilke tegn som vil bli lagt til resultatet n�r en delstreng blir returnert (Standard: ...).';
$strTransformation_text_plain__unformatted = 'Vis HTML kode som HTML enheter. Ingen HTML formatering blir vist.';
$strTruncateQueries = 'Forkort vist sp�rring';
$strTurkish = 'tyrkisk';
$strType = 'Type';

$strUkrainian = 'ukrainsk';
$strUncheckAll = 'Fjern merking';
$strUnicode = 'Unicode';
$strUnique = 'Unik';
$strUnknown = 'ukjent';
$strUnselectAll = 'Fjern alle valgte';
$strUpdComTab = 'Les i dokumentasjonen hvordan du oppdaterer din Column_comments tabell';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfile = 'Oppdater profil:';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateQuery = 'Oppdater sp�rring';
$strUpgrade = 'Du burde oppgradere til %s %s eller nyere.';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anf�rselstegn med tabell og feltnavn';
$strUseHostTable = 'Vis vert tabell';
$strUseTables = 'Bruk tabeller';
$strUseTextField = 'Bruk tekstfelt';
$strUseThisValue = 'Bruk denne verdien';
$strUser = 'Bruker';
$strUserAlreadyExists = 'Brukeren %s finnes fra f�r!';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUserNotFound = 'Den valgte brukeren ble ikke funnet i privilegietabellen.';
$strUserOverview = 'Brukeroversikt';
$strUsers = 'Brukere';
$strUsersDeleted = 'De valgte brukerne har blitt slettet.';
$strUsersHavingAccessToDb = 'Brukere som har adgang til &quot;%s&quot;';

$strValidateSQL = 'Test SQL';
$strValidatorError = 'SQL-kontrolleren kunne ikke startes. Vennligst sjekk at du har installert de n�dvendige php-tilleggene som beskrevet i %sdokumentasjonen%s.';
$strValue = 'Verdi';
$strVar = 'Variabler';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDB = 'Vis dump (skjema) av database';
$strViewDumpDatabases = 'Vis dumpet skjema av databaser';

$strWebServerUploadDirectory = 'webtjener opplastingskatalog';
$strWebServerUploadDirectoryError = 'Katalogen du anga for opplasting kan ikke n�es';
$strWelcome = 'Velkommen til %s';
$strWestEuropean = 'vesteuropeisk';
$strWildcard = 'jokertegn';
$strWindowNotFound = 'M�lvinduet kunne ikke oppdateres. Muligens du har lukket modervinduet eller din nettleser blokkerer vindu-til-vindu oppdateringer av sikkerhets�rsaker.';
$strWithChecked = 'Med avkrysset:';
$strWritingCommentNotPossible = 'Skriving av kommentar er ikke mulig';
$strWritingRelationNotPossible = 'Skriving av relasjon er ikke mulig';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Merk: Ved � sette disse til 0 (null) fjernes begrensningen.';
$strZip = 'Komprimert (zip)';

// To translate:

$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strSelectTheme = 'please select...';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
?>
