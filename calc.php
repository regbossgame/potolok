<table class="tcalc" border=0 width=800px cellspacing=1px cellpadding=1px>
<tr>
<td>
Вид потолка
</td>
<td>
Общая площадь (м&#178;)
</td>
<td>
Кол-во светильников
</td>
<td>
Выезд на замер
</td>
<td>
Стоимость
</td>
</tr>
<tr style="padding:0px;">
<td>
<select id="type" onchange="calc();" onblur="calc();" onkeyup='calc();'>
<option selected value="1">Матовый (стандарт)</option>
<option value="2">Матовый (премиум)</option>
<option value="3">Глянцевый (стандарт)</option>
<option value="4">Глянцевый (премиум)</option>
<option value="5">Фактурный</option>
<option value="6">Фотопечать</option>
</select>
</td>
<td>
<input type="number" maxlength="6" min="0" max="999999" value="1" id="plosh" onchange="calc();" onblur="calc();" onkeyup='calc();'/>
</td>
<td>
<input type="number" maxlength="6" min="0" max="999999" value="0" id="kols" onchange="calc();" onblur="calc();" onkeyup='calc();'/>
</td>
<td>
<span style="color:#A11111;">БЕСПЛАТНО</span>
</td>
<td>
<input type="text" id="rez"/> руб.
</td>

</tr>
</table>