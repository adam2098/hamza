<form method=post action=writeguest.php
onSubmit='if ( this.nom.value.length < 2 ) { return false ;}' >
<table>
<tr><td>Nom :</td> <td><input type=text name=nom size=25 ></td>
<td rowspan=2><input type=submit value=Envoyer></td></tr>
<tr><td>Mail :</td> <td><input type=text name=mail size=25 ></td></tr>
<tr><td>Message:</td><td colspan=2>
<textarea name=message rows=4 cols=47></textarea></td></tr>
</table>
</form>
<?php include("guestbook.txt"); ?>