# admin center
!> Wenn das backend nach einer getätigten Einstellung z.B. im Nutzer verdächtig lange läd, liegt es daran, dass man nicht mehr als admin eingeloggt ist. F5 drücken und neu einloggen -> die Änderungen darf man dann erneut eingeben.

# DNS Einträge

## Domain mit TXT verifizieren
!> **Achtung:** Google möchte die Domain direkt komplett übertragen. -> Dialogfelder genau lesen!
- hierzu einen TXT Record in dd24 eintragen und max eine Stunde warten.
- final weitere Records hinzufügen
- am Ende den MX umstellen

## SPF Record
Feldname	Einzugebender Wert
Typ	TXT Host @
Hinweis: Wenn Sie einen SPF-Eintrag für eine Subdomain hinzufügen, geben Sie die Subdomain anstelle von @ ein. Weitere Informationen

**v=spf1 include:_spf.google.com ~all**

## DKIM 
Der DNS eintrag wird in Google Admin Center erstellt. Den trägt man dann mit der entsprechenden Subdomain ein. 

---------------------------------------

# Verschiedenes

## Einrichtung UserAccounts
- Bei M365 wurde Organisation angelegt mit der Microsoft Domain datamintsgmbhonmicosoft. Darin wurden alle Settings angelegt, Accounts, Verteiler, Regeln. Später musste man nur noch die echte Domain verbinden und MX umlegen.   
- Geht das hier auch so?  
> Nicht ganz: Zuerst müssen Lizenzen gekauft werden, dann Domain verifizieren, dann kann man User mit der korrekten Domain anlegen. 

### Einrichtung E-Mail-Adressen
- mehrere Aliase anlegen ist möglich
- Verzeichnis > Nutzer > USER > Nutzerinformationen > Alternative E-Mail-Adressen hinzufügen

### Bei Benutzerkonten gibt es kein Feld für die Firma
- der User heitß nur vor- und Nachname Vorname Nachname | datamints GmbH geht somit nicht. 

#### User Import mit Hilfe von CSV
- Vorlage komplex, Felder bis AB
> User für datamints sind manuell angelegt worden.

## Ressourcen 
Es gibt Ressourcen in GW. Diese können aber nicht so gebucht werden wie in M365. 
- Betrifft: Besprechungsraum  
- (Buchungs- oder bessere) Alternative vielleicht zu MS Booking in Google vorhanden? 
> Vorerst nach hinten gestellt



