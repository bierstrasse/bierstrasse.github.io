
**todo:  
https://workspace.google.com/marketplace/app/microsoft\_teams\_meeting/961264221134**  


**Fragen zu Richtlinien an Management netgrade / datamints.**  
Wir kümmern uns zuerst um den Bestandsschutz, dass die bekannten Prozesse funktionieren.  
Das ist dann die Basis für organisatorische Änderungen. Wenn das durcheinander geht, werden hier alle verrückt

*   Wie soll gdrive / Online Speicher genutzt werden?
*   Gibt es Regeln die man bei E-Mail-Nutzung zukünftig beachten muss/soll?
*   Gibt es Regel, die man bei Meet Nutzung beachten muss?

\-> aus all den Antworten Schulung oder besser eine Doku für die Kollegen ableiten.  
Ja, in Q2/23  
\> Ok. Die Punkte oben sind ab MX-Umstellung aktiv, daher sollte man meiner Meinung nach bei Umstellung erläutern, was man wie nutzen darf.

**QM datamints - Anpassungen prüfen:**

*   Vertrag zu Auftragsverarbeitung
*   Verarbeitungsverzeichnis
*   ...was sonst noch?
 

**UMZUG zu Google Workspace (netgrade)** läuft folgendermaßen. **LÖSUNGSVORSCHLAG auch Chat mit Google Workspace Support, Cristian:**

**1\. Google Admin Konsole - Domain als Sekundäre Domain hinzufügen**  
steht schon fest, wie die Accounts von Netgrade und datamints verbunden sind (als eine Organisation, als Tochter, irgendwie anders...)?  
\-> siehe Punkt 1 -> Als sekundäre Domain innerhalb den netgrade Accounts. Geklärt mit Dominik

*   Konto > Domains > Domains verwalten (https://admin.google.com/ac/domains/manage?hl=de)

**2\. Domainanbieter - Domain mit TXT verifizieren**

*   DNS bei dd24
*   SPF und DKIM einrichten

**3\. Google Admin Konsole - Nutzer erstellen** 

*   Benutzer einrichten  
    \> man kann nur Nutzer erstellen, wenn man vorher die Lizenzen erwirbt. 
*   Lizenzen vergeben/zuteilen/entziehen wie im M365 ist nicht möglich. 
*   Einrichten von Gruppen: alle (ok), extern, alleplusextern

\> Ab hier betreffen die Anmerkungen die "todos für Kollegen/Was jeder selber tun muss nach Umstellung"

**4\. Jeder importiert seine Mails  
\-> siehe unten**

**5\. Jeder importiert seine Termine**

**6\. Testen, ob alles angekommen ist**

**7\. Testbetrieb mit Testdomain (dmints.de oder sowas)**  
\-> kompletten Testlauf könnten wir direkt beginnen. Wenn Erfahrung bei netgrade vorhanden wäre, könnte man sich das ersparen.  
**\> dmints.de ist eingerichtet.** 

... (bestimmt noch einige Punkte, bitte in Einzelschritten

**8\. Domainanbieter - MX Einträge hinzufügen**

*   das ist der letzte finale Schritt


**eigener Account erforderlich wenn...**
Eigene RE, dann ist die Einrichtung anders, vermutlich mit eigenem Account -> aktuell keine Anforderung

**Alte FRAGEN aus dem M365 Umzug (kann man im Vorfeld dann abhaken)**


**Signieren**  
Ist signieren von Mails jetzt einfacher? Gibt es evtl. direkt günstige Zertifikate von MS?  
S-MIME Verschlüsselung jetzt einfacher / günstiger?

Sind die Client Zugriffe von Linux und Apple komfortable oder Einschränkungen?  
unbekannt

#### Outlook Client
Kann ein Nutzer weiterhin Outlook oder einen anderen E-Mail-Client verwenden?  
Ja. Wenn Sie Google Workspace Sync for Microsoft Outlook (GWSMO) installieren, können Nutzer über Outlook auf Google Workspace-E-Mails, -Kalender und -Kontaktdaten zugreifen. Alle Daten von Google Workspace und von Outlook werden dann miteinander synchronisiert. Weitere Informationen finden Sie in der GWSMO-Einrichtungsanleitung für Administratoren.


#### LDAP-Verzeichnisse
Im GW gibt es einen Bereich LDAP.  Evtl. kann man zukünftig Verzeichnisse synchronisieren. 

Wäre das eine Option für datamints?   
\-> Bernhard fragen



## Testing nach Umstellung
1. Mail von extern an service@datamints.com schicken - höchste Prio .com, dann .de
2. Mail an DM schicken von extern 
3. Mail von extern an eigene Adresse schicken
4. Mail von intern an intern 
5. Meet Videokonferenzen testen
6. 


-