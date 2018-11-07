<a id="close-email" style="float:right;">X</a>
<form id="form1" name="form1" method="post" action="formulario2.php">
  <table width="600" border="0" cellspacing="0" cellpadding="20">
    <tr>
      <td width="161" class="texto">Nome</td>
      <td width="359"><label>
        <input name="nome" type="text" class="texto" id="nome" size="40" />
      </label></td>
    </tr>
    <tr>
      <td class="texto">Email</td>
      <td><input name="email" type="text" class="texto" id="email" size="40" /></td>
    </tr>
    <tr>
      <td class="texto">Assunto</td>
      <td><input name="assunto" type="text" class="texto" id="assunto" size="40" /></td>
    </tr>
    <tr>
      <td valign="top" class="texto">Mensagem</td>
      <td><label>
        <textarea name="mensagem" cols="39" rows="5" class="texto" id="mensagem" style="resize:none;"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input name="enviar" type="submit" class="texto" id="enviar" value="Enviar" />
      </label></td>
    </tr>
  </table>
</form>
