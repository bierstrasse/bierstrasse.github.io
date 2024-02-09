## Migration Userdaten aus M365 

### Komplett: E-Mails, Kalender und Kontaktdaten für Ihre Nutzer migrieren mit GW-Tool
Exchange Online (Microsoft 365) Ab 1.001 Nutzer: Google Workspace Migrate Für 101–1.000 Nutzer: GWMME Für 1–100 Nutzer:  
Lösung: Dienst zur Datenmigration oder GWMME  
Nur Super Admins können diese Produkte verwenden. https://support.google.com/a/answer/180898?hl=de&ref\_topic=9212616#zippy=%2Cschritt-e-mail-zustellung-an-google-workspace-konfigurieren%2Cschritt-daten-aus-dem-alten-system-in-google-workspace-verschieben

#### Import der aktuellen E-Mails ins Google Workspace (PST-Dateien) durch admincenter
- Einschätzung: Nicht empfohlen
- Aber: Sicherung der eigenen PSTs auf Netzlaufwerk. Import ist dann optional. War bei M365 Umstieg auch so.  
    (Im netgrade admin Konto haben glaube ich 3 Leute Daten importiert)  
    Die E-Mails an sich liegen in der Microsoft Cloud. (Hinweis: OST Dateien sind nicht PST). Möchte man die Mails transferieren kann man das mit Hilfe eines Importtools machen: https://tools.google.com/dlpage/gsmmo https://support.google.com/a/answer/180898?hl=de&ref\_topic=9212616


## Vor dem Umzug Sicherungen erstellen (in M365)
Jeder sollte VOR Auflösung der M365 Konten seine Daten sichern. Das sind
- E-Mails
- Kalender
- Dokumente z.B. Tabellen wie Mittagsliste, 2ndLevel Support Liste 
- und was sonst noch so im Team und vor allem in MS Teams geteilt wurde sichern.   

!> Anleitung PST sichern folgt


#### Web Mailer, Weboberfläche vorhanden? 
Ja, wie Gmail gratis Oberfläche, kennt jeder.

### E-Mails übertragen
Folgend werden verschiedene Möglichkeiten E-Mails (Daten) aus M365 in Google Workspace zu übertragen aufgezeigt. 
!> Anleitung aus <https://www.ionos.de/digitalguide/e-mail/e-mail-technik/pst-datei-in-gmail-importieren/> 
#### Möglichkeit zum E-Mails übertragen: PST-Gmail-Migration mit der Google Workspace Migration für Outlook
> https://tools.google.com/dlpage/gsmmo

Mit der Google Workspace Migration für Outlook können Sie in wenigen Schritten alle benötigten Dateien einer PST in Gmail importieren und haben dabei die Auswahl zwischen allen Dateien eines Archivs oder nur bestimmten Teilen davon, beispielsweise nur E-Mails.


1. Laden Sie sich dazu als erstes die Google Workspace Migration herunter. Achten Sie beim Download darauf, welche Version von Outlook Sie zur Speicherung des PST-Archivs genutzt haben – es gibt eine 32-bit- und eine 64-bit-Version. Die Google Workspace Migration muss zur Outlook-Version passen. Doch keine Sorge: Sollten Sie die falsche Version installieren, weist Sie der Import-Assistent bei der ersten Ausführung darauf hin, sodass Sie die richtige Version im Nachgang installieren können.
1. Wenn die Workspace Migration heruntergeladen ist, öffnen Sie als nächstes die Anwendung. Dort geben Sie zuerst die E-Mail-Adresse des Google-Kontos an, in das das PST-Archiv importiert werden soll.
Wählen Sie das passende Gmail-Konto für den Import der PST-Dateien durch einen Klick auf das Konto aus.
1. Daraufhin öffnet sich ein neues Fenster im Browser mit einem Anmeldefenster der „Google Workspace Migration für Microsoft Outlook“. Dort sollte nun bereits das passende Konto aufgeführt sein. Wenn Sie im vorherigen Schritt eine falsche E-Mail-Adresse ausgesucht haben, können Sie nun die Adresse des Kontos ändern. Sie bestätigen die Nutzung des Google-Kontos durch einen Klick auf das entsprechende Konto und werden dann zum nächsten Schritt geführt.
1. Im nächsten Schritt fragt Google, ob Sie der Nutzung zustimmen und damit beispielsweise auch erlauben, dass die Google Workspace Migration für Microsoft Outlook die Berechtigung erhält, um Gmail-E-Mails zu lesen, zu schreiben, zu senden und endgültig zu löschen. Erlauben Sie dies durch einen Klick auf „Zulassen“. Sie können dann auswählen, welches Archiv importiert werden soll.
1. Sie gelangen nun aus dem Browser wieder zurück in den Import-Assistenten. Wählen Sie dort im Menü „Von PST-Datei(en)…“. Es öffnet sich ein Fenster, in dem Sie den gewünschten PST-Ordner suchen und auswählen können. Die gewählte Datei wird dann unter der Auswahl der beiden Möglichkeiten aufgelistet. Bestätigen Sie mit „Nächste“.
Die Funktion „Von PST-Datei(en)…“ lässt Sie den passenden Ordner für den Import suchen. Dann mit „Nächste“ bestätigen.
1. Nun haben Sie die Wahl, ob Sie alle Dateien oder beispielsweise nur E-Mails oder Kontakte der PST in Gmail importieren. Dies können Sie ändern, indem Sie in den Kontrollkästchen Haken setzen oder diese entfernen. Wenn Sie die passende Auswahl getroffen haben, bestätigen Sie mit „Migrieren“. Der Übertragungsprozess beginnt. Sie sehen dann in einem Prozessfenster den aktuellen Status der Migration.
Wählen Sie aus, welche Daten Sie migrieren möchten. Bestätigen Sie die Auswahl mit „Migrieren“.
Achtung: Je nach Umfang des Archivs sollten Sie diesen Vorgang über Nacht laufen lassen, sodass nicht während der Arbeit Ihr Gmail-Postfach ständig neu synchronisiert und mit zusätzlichen Daten geladen wird.
1. Wechseln Sie nach erfolgter Migration in Ihr Gmail-Konto im Browser oder in die Gmail-App. Wenn dort der vorher ausgewählte PST-Ordner aufgeführt wird, haben Sie erfolgreich eine PST-Datei in Gmail importiert.
Sie finden die importierten Ordner des PST-Archivs nun links in der Ordnerliste in alphabetischer Reihenfolge einsortiert.

#### Manuell PST-Datei in Gmail importieren
Der manuelle Import PST to Gmail ermöglicht es, genauer festzulegen, welche Art von Daten in Form von E-Mails, Kontakten oder Notizen an Gmail übertragen werden sollen. So können Sie im Verlauf genau bestimmen, welche Unterordner beim Import berücksichtigt werden. Dafür ist dieser Prozess kleinschrittiger und dauert damit auch länger.
Vorweg: Für den manuellen Import benötigen Sie zeitgleich zu einem bestehenden Gmail-Konto auch Outlook, da ein Import von einer PST-Datei in Gmail auf manuellem Wege nur durch eine Verbindung der beiden E-Mail-Clients möglich ist.

Während des Vorgangs stellen Sie eine Verknüpfung der beiden E-Mail-Programme her, sodass diese jeweils aufeinander zugreifen können. Indem Sie eine Outlook-PST-Datei speichern, können Sie diese erst in Outlook als komplettes Archiv hinzufügen und dann in den Bereich, der innerhalb Outlook auf Gmail zugreift, verschieben. Dabei können Sie sich den Vorgang so vorstellen, als würden Sie einen Unterordner namens Gmail im Verzeichnis namens Outlook erstellen, in den Sie dann nach Belieben Daten per Drag-and-Drop ziehen. So wird die gewünschte PST in Gmail eingefügt. Wie das genau funktioniert, erklären wir im Folgenden Schritt für Schritt.
1. Öffnen Sie Ihren Gmail-Client und klicken Sie rechts in der Symbolleiste auf das kleine Zahnrad. Daraufhin öffnen sich die Schnelleinstellungen, in denen Sie mit ein paar Funktionen bereits kleinere Änderungen an Ihrem Client durchführen können. Wählen Sie dann den Punkt „Alle Einstellungen aufrufen“, der direkt als erster Menüpunkt angegeben ist.
Mit der Funktion „Alle Einstellungen aufrufen“, die über das Zahnrad in der Menüleiste erscheint, kommen Sie in die Weiterleitungs-Einstellungen.
1. Durch den Klick öffnen sich die erweiterten Einstellungen, in denen Sie Gmail individuell anpassen und viele unterschiedliche Einstellungen vornehmen können. Da Outlook auf Ihr Gmail-Profil zugreifen soll, müssen Sie dies erst erlauben. Hierzu wählen den Oberpunkt „Weiterleitung & POP/IMAP“.
Um die Verbindung von Gmail zu Outlook herzustellen, klicken Sie auf „Weiterleitung & POP/IMAP“, und die Verbindungseinstellungen öffnen sich.
1. Im untersten Abschnitt „IMAP-Zugriff“ tippen Sie „IMAP aktivieren“ an und gehen danach auf „Einstellungen speichern“. Wenn Sie die Weiterleitungs-Einstellungen erneut aufrufen, steht unter IMAP nun wie im Screenshot zu sehen „Status: IMAP ist aktiviert“.
Mit der Funktion „IMAP aktivieren“ erlauben Sie den Zugriff von Outlook auf Gmail.
1. Nachdem Sie das Gmail-Konto für die Weiterleitung zu Outlook vorbereitet haben, müssen Sie nun im Gegenzug die Verbindung von Outlook zu Google herstellen. Wechseln Sie also zu Outlook und wählen Sie dort in der Statusleiste den ersten Punkt„Datei“. Dort gehen Sie auf den Button „Konto hinzufügen“.
Mit der Funktion „Konto hinzufügen“ erhalten Sie direkt in Outlook Zugriff auf Ihr Gmail-Konto.
1. Nach einem Klick erscheint ein Fenster, in dem Sie die zum Konto gehörende E-Mail-Adresse eingeben und auf „Verbinden“ klicken. Tippen Sie das Gmail-Passwort ein und klicken Sie erneut „Verbinden“ an. Im letzten Dialogfenster bestätigen Sie den Vorgang. Damit ist die Einrichtung abgeschlossen und fortan sind Outlook und Gmail miteinander verbunden.
Das bedeutet, dass nun E-Mails, die bei Gmail eingehen auch automatisch in Outlook angezeigt werden. Gleichzeitig können Sie nun schon Daten aus Outlook in den Gmail-Bereich verschieben. Wenn Sie die Gmail-App dann beispielsweise auf dem Smartphone öffnen, sehen Sie, dass die verschobenen E-Mails oder Ordner in der Gmail-App an der Stelle auftauchen, in der Sie sie in Outlook verschoben haben. Genau diesen Effekt machen wir uns für die PST-Gmail-Migration zunutze.
1. Damit die Spiegelung der Daten erfolgen kann, müssen Sie zuerst festlegen, was von Outlook alles als Archiv gespeichert werden soll. Dazu legen Sie ein PST-Archiv an. Gehen Sie dazu über „Datei“ > „Öffnen und Exportieren“ > „Importieren/Exportieren“, um den Wizard zu starten.
Um ein PST-Archiv anzulegen, nutzen Sie die Funktion „Importieren/Exportieren“.
1. Im Assistenten wählen Sie zunächst „In Datei exportieren“und dann „Outlook-Datendatei (.pst)“. Bestätigen Sie die Aktionen jeweils mit „Weiter >“.
Mit der Funktion „In Datei exportieren“ wählen Sie „Outlook-Datendatei (.pst)“ und wählen den Speicherort des PST-Archivs.
1. Outlook wird nun abfragen, welche E-Mails, Ordner und weitere Informationen Teil des PST-Archivs werden und wo diese gespeichert werden sollen. Wenn Sie alle Auswählen getätigt haben und einen passenden Speicherort gewählt haben, schließen Sie den Export ab.
1. Um die Daten zu Google zu transferieren, holen wir den eben gespeicherten Ordner als Archiv in Outlook per Daten-Import. Gehen Sie dazu erneut in den Wizard wie eben beschrieben, sodass Sie im Import/Export-Assistenten sind. Dort wählen Sie nun den obersten Punkt „Aus anderen Programmen oder Dateien importieren“ aus. Lesen Sie im weiterführenden Artikel, auf welche Arten Sie eine PST-Datei importieren können.
Mit der Funktion „Aus anderen Programmen oder Dateien importieren“ holen Sie den vorher gespeicherten PST-Ordner nun zurück in Outlook.
1. Im nächsten Dialogfeld wird erneut gefragt, welche Art Datei importiert werden soll. Hier wählen Sie nun wieder „Outlook-Datendatei (.pst)“ sowie den Ordner, den Sie gespeichert haben.
1. Nun folgt der entscheidende Schritt: In einem weiteren Dialogfeld haben Sie die Möglichkeit, per Drop-down-Pfeil das E-Mail-Konto auszuwählen, in das die PST-Datei importiert werden soll. Hier entscheiden Sie sich für das Gmail-Konto und bestätigen den Import mit „Fertig stellen“.
Über die Funktion „Elemente in denselben Ordner importieren in:“ und die Auswahl des verknüpften Gmail-Kontos fügen Sie das PST-Archiv direkt Gmail hinzu.
Geschafft! Im Gmail-Bereich von Outlook erscheinen nun die Daten, die Sie zuvor im PST-Archiv gespeichert haben.
Das PST-Archiv erscheint mit Fertigstellung im Unterordner „Gmail“, den sie zuvor durch die Verknüpfung der beiden E-Mail-Clients angelegt haben.
Durch die Verknüpfung zwischen Gmail und Outlook wird der eben importierte PST-Ordner automatisch auch in Ihrer Gmail-App bzw. im Browser als neuer Ordner synchronisiert und Sie haben direkten Zugriff auf alle eben importierten Inhalte.
Das PST-Archiv erscheint beim nächsten Öffnen auch direkt als Ordner in Gmail.
