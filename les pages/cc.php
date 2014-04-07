 <form action='ajouter-reserv.php' method='post' name='Form' id="Form" onSubmit="return test(this.email)">
                                                     <? if($erreur){ ?>
                                                    <?}?>
                          <table width='470' border='0' align="center" cellpadding='1' cellspacing='1'>
                                                    <? if($erreur){ ?>
                                                    <?}?>
                                                    <tr>
                                                      <td colspan='2'><div align="center">
                                                          <p class="Style59">&nbsp;</p>
                                                      </div></td>
                                                    </tr>
                                                    <tr>
                                                      <td align='right' width='32%'><span class='style4 '>Nom :</span></td>
                                                      <td width="68%" align="left"><label>
                                                        <input name="f_1" type="text" class="Style18" id="f_1" size="16" />
                                                      </label></td>
                                                    </tr>
                                                    <tr>
                                                      <td align='right' width='32%'><span class='style4 '>Pr&eacute;nom :</span></td>
                                                      <td align="left"><label>
                                                        <input name="f_2" type="text" class="Style18" id="f_2" size="16" />
                                                      </label></td>
                                                    </tr>
                                                    <tr>
                                                      <td align='right' width='32%'><span class='style4'>E-mail<span class="Style23"><strong>*</strong></span> :</span></td>
                                                      <td align="left"><label>
                                                        <input name="f_3" type="text" class="Style18" id="f_3" size="16" />
                                                      </label></td>
                                                    </tr>
                                                    
                                                  
                                                    <tr>
                                                      <td align='right'><span class="Style4"> Date d'arriv&eacute;e:</span></td>
                                                      <td align="left"><input name="f_7" class="Style18" id="f_7" value="" size="16" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:mondayfirst="true" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" /></td>
                                                    </tr>
                                                    <tr>
                                                      <td align='right'><span class="Style4"> Date de d&eacute;part:</span></td>
                                                      <td align="left"><input name="f_8" class="Style18" id="f_8" value="" size="16" wdg:subtype="Calendar" wdg:mask="<?php echo $KT_screen_date_format; ?>" wdg:mondayfirst="true" wdg:type="widget" wdg:singleclick="true" wdg:restricttomask="yes" /></td>
                                                    </tr>
                                                     <tr>
                                                      <td align='right'><span class="Style4">type de chambre : </span></td>
                                                      <td align="left"><label>
                                                        <select name="f_6" class="Style18" id="f_6">
                                                           <option>-----  Sélectionnez le type  -----</option>
                                                          <option value="single">Single</option>
                                                          <option value="souble">Double</option>
                                                          <option value="tripe">Triple</option></select>
                                                        </select>
                                                      </label></td>
                                                    </tr>
                                                    <tr>
                                                      <td align='right'><span class="Style4">Adulte(s):</span></td>
                                                      <td align="left"><label>
                                                        <select name="f_11" class="Style18" id="f_11">
                                                          <option>----- Sélectionnez -----</option>
                                                             <option value="1">1</option>
                                                              <option value="2">2</option>
                                                               <option value="3">3</option>		
                                                        </select>
                                                      </label></td>
                                                    </tr><br><br>
													<tr>
                                                      <td align='right'><span class="Style4">Enfant(s):</span></td>
                                                      <td align="left"><label>
                                                        <select name="f_11" class="Style18" id="f_11">
                                                        <option>----- Sélectionnez -----</option>
  <option value="0">0</option>
<option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
   </select>
                                                        </select>
                                                      </label></td>
                                                    </tr>
                                                    <tr>
                                                      <td width='32%' align='right' valign="top"><span class='style4'>Message <span class="Style4">*</span>:</span></td>
<td align="left"><label>
                                                        <textarea name="f_5" cols="22" rows="5" class="Style18" id="f_5"></textarea>
                                                      </label></td>
                                                    </tr>
                                                   
                                                  	</table>											

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <td align='right'><span class="Style4">* champs obligatoires </span></td>  

<br><br>

                                                     
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type='submit' name='submit' value='Réserver' border='0'>
<input class="bouton" type="reset" name="Effacer" value="Effacer">

</form>	