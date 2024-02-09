## Step by step Anleitung vom Support
1. In your Admin Console, kindly go to Apps > Workspace > Gmail > Routing. https://admin.google.com/ac/apps/gmail/routing
2. Click on **Routing** > then click "**Configure**" next to it.
3. Enter a short description for this rule you are creating. (EX: Catch-all for domain dmints.de)
4. Under **Email messages to affect**, put a check next to **Inbound** and **Internal - Receiving**.
5. Scroll down to **Envelope recipient** and put a check next to **Change envelope recipient** then select **Replace recipient **and **enter the email address of your user that will receive the catch all emails**.
6. Scroll down to the bottom and select "**Show Options**"
7. Under "**B. Account types to affect**", uncheck "Users" then put a check next to **Unrecognized / Catch-all**.
8. Next, under **C. Envelope filter**, select "**Only affect specific envelope recipients**" then under the drop down select "**Pattern Match**"
9. On the blank field where you see "**Regexp**", kindly enter "@dmints.de"
10. Lastly, click **Save**.

You may check on the following support article for more information: https://support.google.com/a/answer/2685650

I hope I was able to address your concern. I'll be closing the case for now but if you have further questions or concern, just reply to this email within the next 30 days and I'd be happy to address them for you.

Kind regards,
Yukino
Google Workspace Support


> SBN, 05.01.2023: Exakt so eingesetzt und funktioniert. Für die Domain netgrade.de ist kein Catchall eingerichtet.


!> UPDATE, SBN, 08.05.2023: 2 Regeln (com und de) die, die unbekannten Empfänger E-Mails auf die **Gruppe catchall@datamints.com** umleiten. Vorteil: mehrere Mitglieder möglich.
admin.google.de -> Google Workspace -> Gmail -> Routing (gang unten) -> Regeln bei Routing


