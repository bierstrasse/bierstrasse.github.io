---
trello_board_card_id: 63933799eaf79300bc393637;64b15302c22c9d70d84716b7
trello_plugin_note_id: joM5wy2fPm-Zky3rf1BWp
---
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

> und wenn ich hier noch was dazu schreibe...

https://trello.com/c/Ks5zKyVk/28-neue-karata

### Test (nicht beachten, Danke):

Tabelle mit datatables
- Tabelle muss eine ID haben. Will man das nutzen, muss man in Obsidian die Tabelle in Source Mode anlegen, den Editor oder Advanced Tables  geht nicht.

----------------------------------------
Eingabe/Abfrage = List where author = SBN

```dataview
TABLE author, tags, typ, date
WHERE author = "SBN"
```
----------------------------------------
#### Export to HTML - kein Plugin, kein Script Github, (bisher) kein ChatGPT vorhanden
gefunden:
You can get the HTML tables, the links will work but they won't count as links on the graph just like normal Dataview tables.
If you press `CTRL+SHIFT+I` and then click the little mouse arrow icon in the top left of the window that appears, then click on your Dataview table it'll navigate to the HTML for that table.

Then you just right-click the `<table>` element and select Copy > Copy outerHTML.

Now you can just paste that HTML into a note and it should work.

----------------------------------------
#### Funktioniert mit datatables

<table id="table111">
  <thead>
    <tr>
      <th>Header 1</th>
      <th>Header 2</th>
      <th>Header 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Data 1</td>
      <td>Data 2</td>
      <td>Data 3</td>
    </tr>
    <tr>
      <td>Data 4</td>
      <td>Data 5</td>
      <td>Data 6</td>
    </tr>
  </tbody>
</table>

----------------------------------------
Unterhalb befindet sich ein Script (unsichtbar in docsify) für datatables im md file

<script>
  $(document).ready(function() {
    $('#table111').DataTable();
  });
</script>