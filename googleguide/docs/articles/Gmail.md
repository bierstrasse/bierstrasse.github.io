---
title: Das hier ist der Titel des Dokuments Google Mail
author: SBN
tags:
  - green
  - blue
---
## Google E-Mail einrichten

!> Voraussetzung für IMAP Einrichtung in E-Mail Clients: In Gmail Web unter Einstellungen -> POP/IMAP -> IMAP-Zugriff -> aktivieren (In machen E-Mail-Clients funktioniert es auch ohne diese Aktivierung)

### Google Konto in Outlook einrichten
- In Outlook: Datei > Konto hinzufügen > Anmeldename eingeben z.B. sbarrero@dmints.de > "Verbinden"
- Ein Gmail Fenster wird geöffnet > Passwort des Gmail-Kontos eintragen und damit genehmigen 
- Fertig

### Servereinstellungen bei manueller Einrichtung
- Eingehend: imap.gmail.com, Port 993, TLS/SSL
- Ausgehend: smtp.gmail.com, SMTP-Port	465 oder 587, TLS/SSL

!> Thunderbird Besonderheit: Oauth nutzen

### Outlook lässt das Verbinden mit GW nicht zu, weil JavaScript nicht aktiv ist. 

**Lösung:**
1. Geben Sie im Startmenü regedit.exe in das Suchfeld ein, und drücken Sie dann die EINGABETASTE.
1. Wenn Sie zur Eingabe eines Administratorkennworts oder zur Bestätigung aufgefordert werden, geben Sie das Kennwort ein, oder geben Sie eine Bestätigung ein.
1. Navigieren Sie im Registrierungs-Editor zu: HKEY_CURRENT_USER\Software\Microsoft\Internet Explorer\Main\FeatureControl\FEATURE_BROWSER_EMULATION
1. Suchen Sie die REG_DWORD OUTLOOK.EXE , und doppelklicken Sie zum Bearbeiten.
1. Wählen Sie "Dezimal" und dann "11001" aus, und wählen Sie "OK" aus.
1. Schließen Sie den Registrierungs-Editor , und starten Sie Outlook neu.

https://support.microsoft.com/de-de/topic/fehler-dieser-webbrowser-unterst%C3%BCtzt-javascript-nicht-oder-skripts-werden-blockiert-beim-hinzuf%C3%BCgen-eines-google-workspace-kontos-b7cbc25e-5b2d-459a-97b8-c8b6adc7b2d4

## E-Mails übertragen - Möglichkeiten

### Mit Hilfe von E-Mail-Client (z.B. Thunderbird)
- beide Postfächer einbinden und E-Mails in Tranchen (sonst steigt zumindest Outlook aus) rüberziehen/kopieren. 
- Nicht 50 GB auf einmal 
- Ordnerstruktur bleibt in GW erhalten. Hinweis: In GW sind Ordner = Labels 
- getestet: funktioniert mit EM-Client, Thunderbird sicherlich auch

!> Achtung: Funktioniert NICHT mit einem modernen **M356-Outlook**, da man dort nicht manuell 2 Postfächer mit der gleichen Mail-Adresse anlegen kann. Daher siehe nächste Punkte:
  
### Mit Hilfe von Google Migrationstool 
- https://tools.google.com/dlpage/gsmmo#
  - getestet: Funktioniert, ist aber langsam
  
### Mit Hilfe von PST Dateien
- Outlook PST Sicherung vom alten Postfach erstellen, neues Postfach anlegen, danach PST Sicherung einbinden

### Einzelanleitung PST Datei mit Outlook sichern
Zur PST Sicherung wird ein E-Mail-Client z.B. Outlook benötigt. Das kann auch an einem anderen als dem eigenen Rechner laufen > SBN fragen. Die folgende Anleitung stammt aus "Ausscheiden eines Mitarbeiters".
  
- Im Microsoft 365 Admin Center auf den Benutzer gehen und bei Konto „Alle Sitzungen abmelden“ 
- Unter Benutzer PW neu setzen und temporär zwischennotieren. 
- Postfach in eigenem MS Outlook als neues Postfach anlegen
  - **Wichtig**: In Outlook in den Kontoeinstellungen die Offlineeinstellungen auf „Alle E-Mails“ stellen
- Outlook neu starten, anschließend sehr lange Ladezeit der E-Mails abwarten. 
- Postfach als "Export in Datei (PST)" sichern. Der Exportvorgang kann je nach Mailanzahl schnell 15 Minuten und auch viel länger dauern.
  - **Wichtig**: Möglichst Outlook dabei nicht anfassen, sonst bricht der Export ab. 
- Kontrolle der PST mit Outlook Viewer
  - Unterverzeichnisse stichpunktartig auf Vollständigkeit gegenchecken. Gesendete Ordner ist in der Regel der Wichtigste. Die Mails in M365 sollten November 2019 beginnen, falls der User die vorherigen nicht importiert hat.
- Ggf. erneuten Export anschmeißen und vergleichen, wenn man sich unsicher ist. 
- Vollständige Export-PST-Datei in user_work ablegen, anschließend DM Bescheid geben, dass in user_home verschoben wird

### PST Datei prüfen ohne Outlook
- [OutlookViewer ](https://www.coolutils.com/OutlookViewer )

## Google Labels - E-Mails verwalten und ordnen
In Google wird mit Labels geordnet. Ordner gibt es nicht (mehr). Tags auch nicht. Ordner aus Outlook werden in der Gmail Online App Labels umgewandelt. 
Siehe: [https://support.google.com/mail/answer/118708?hl=de&ref_topic=3394219 ](https://support.google.com/mail/answer/118708?hl=de&ref_topic=3394219 )

## Als wichtig markierte E-Mails verringern
- funktioniert nur Online Desktop 
- Klicken Sie auf das Zahnradeinstellungen-Symbol in der oberen rechten Ecke
- Klicken Sie auf Einstellungen Registerkarte Posteingang
- Wählen “Gmail soll nicht anhand meiner bisherigen Aktionen einschätzen, welche Nachrichten mir wichtig sind“.

?> Das verringert die Anzahl der Markierungen. Komplett ausschalten kann man das nicht. Der Google Support hat dies bestätigt. 

"Google Workspace Support, Stanislav: Google Mail verwendet mehrere Signale, um E-Mails automatisch als wichtig oder unwichtig zu kennzeichnen. Dieses Verhalten basiert auf künstlicher Intelligenz und kann nicht gesteuert werden. Wenn Sie die Einstellungen für "Wichtigkeitskennzeichnungen" auf "Nicht anhand meiner früheren Aktionen vorhersagen, welche Nachrichten wichtig sind" gesetzt haben, verringert sich die Genauigkeit der Wichtigkeitsprognosen."

### Filter erstellen
Mit Hilfe eines Filters kann man weiter reduzieren. Den hier beschriebenen müsste man sich für Verteiler wie z.B. service@datamints.com ebenfalls einrichten. 
- Einstellungen und klicken auf die Registerkarte Filter und blockierte Adressen
- nach unten, um einen neuen Filter zu erstellen
- E-Mail-Adresse in den Abschnitt “An:” - und Filter erstellen
- Dann im nächsten Dialogfeld: Nie als wichtig markieren und anschließend Filter erstellen

### Kategorien in Outlook nicht mehr vorhanden
In Outlook kann man im Google Konto keine Kategorien benutzen. Ist so, fertig. Es gibt zudem nur einfache Kennzeichnung. 
Im Goolge gibt es nur Labels (im EMClient auch Etiketten genannt)


### Aliase mit +
Hi @alle mit dem Umstieg auf Google funktionieren nun auch die von Google bekannten Aliase. d.h. c.pschorr+ALIAS@datamints.com wird korrekt aufgelöst. Sehr praktisch solltet etwas testen müssen.
(Danke Christian)

### Outlook Nutzung - Was geht nicht? 
- Kalender werden nicht synchronisiert - nur mit Tool
- neues Outlook synct eigenen Kalender - Abonnieren von Kollegen klappt nicht richtig
- Zur Nachverfolgung: In der Liste werden Aufgaben mehrfach angezeigt, weil die markierte Mail in "Alle Nachrichten", "Posteingang", "Wichtig" und sonst so auftaucht
- "Kategorisieren" in Outlook gibt es nicht mit einem Gmail Konto 

