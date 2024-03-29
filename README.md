# take2new

## Aufgabenstellung
- Programmieren sie mittels PHP eine benutzerfreundliche Web-Anwendung zur Verwaltung von Artikeln.

## System-Anforderungen
- Apache 2.4
- PHP 8.1.3
- PostgreSQL 14.2
- Microsoft Windows 10

## Installation
- Laden sie das Repository herunter und entpacken sie es in einen beliebigen Ordner.
- Erstellen sie eine neue PostgreSQL Datenbank und führen sie in PgAdmin den code aus der Datei `database.sql` aus.
- Öffnen sie die Datei `config.php` und ändern sie die Werte der Variablen `HOST`, `PORT`, `DBNAME`, `USER` und `PASSWORD` auf die von ihnen festgelegten Werte ihrer Datenbank.
- Kopieren sie den Inhalt des Quellcode Ordners in den Ordner `htdocs` ihres Apache-Servers.
- Öffnen sie die Datei 'php.ini' in ihrem Php Verzeichnis und aktivieren sie die PDO extension.
- Starten sie PHP neu.
- Starten sie den Apache-Server.
- Starten sie den PostgreSQL-Server.

## Quellen
- https://www.php.net/manual/de/book.pdo.php
- https://www.php.net/manual/de/book.session.php
- https://www.php.net/manual/de/ref.password.php
- https://www.php.net/manual/de/function.header.php
- https://getbootstrap.com/docs/5.3/getting-started/introduction/
