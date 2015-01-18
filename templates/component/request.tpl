<div class="container">
	<div class="modal fade" id="modal-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"></button>
					<h3 class="modal-title" align="center">Заявка на аренду</h3>
					<h5 class="modal-title" align="center"><b style="color:#f00;">*</b>-<i>Поля, помеченные звездочкой обязательны к заполнению</i></h5>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="form-myinp">
							<form id="rentForm" method="post" accept-charset="utf-8">
								<p style="margin-left:20px;"> Ваше имя:<b style="color:#f00;">*</b></p><input class="myinp" type="text" name="contactName" placeholder="Иван Иванович Иванов" required/>
								 <p style="margin-left:20px;">Название организации:<br/></p><input class="myinp" type="text" placeholder="ООО'Иванхолдинг'" name="contactOrganization"/>
								<p style="margin-left:20px;"> Контактный телефон:<b style="color:#f00;">*</b></p>+7<input class="myinp-cell1" type="text" parse="[0-9]{,3}" placeholder="495" name="contactPhoneCode"  required/>
								 <input class="myinp-cell2" type="text" name="contactPhoneNumber" placeholder="1234567" required/>
								<p style="margin-left:20px;"> Электронная почта:<b style="color:#f00;">*</b></p><input class="myinp-mail" type="text" placeholder="iviviv@autofill.com" name="contactMail" required/>
								<p style="margin-left:20px;"> Метраж помещения:<b style="color:#f00;">*</b></p>
								 От:<input class="myinp-to" placeholder="20" type="number" name="sizeMin" required/>
								 До:<input class="myinp-to" type="number" placeholder="145" name="sizeMax" required/>M<sup>2</sup>								<p style="margin-left:20px;"> Бюджет:<br/></p><input class="myinp-mail" type="text" name="amountPayment" required/><br/>
								<p style="margin-left:20px;"> Тип помещения:<b style="color:#f00;">*</b></p>
								 <p>
								 	<select name="tenement" required>
										<option disabled>Выберите</option>
										<option value="Офис">Офис</option>
										<option selected value="Склад">Склад</option>
										<option value="Торговое помещение">Торговое помещение</option>
										<option value="Другое">Другое</option>
								 	</select>
								 </p>
								<p style="margin-left:20px;"> Комментарий:</p> <textarea rows="4" cols="50" name="comment"></textarea><br/><br/>
								<div style="margin-left:200px;"><a class="btn btn-primary" id="rentFormSubmit" data-dismiss="modal" type="submit">Отправить заявку</a></div>
							</form><br />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Ваше имя: <input type="text" name="contactName" />
							Организация: <input type="text" name="contactOrganization" />
							Телефон: <input type="tel" name="contactPhone" />
							E-mail: <input type="email" name="contactMail" />
							Метраж 
							От: <input type="number" name="sizeMin" />
							До: <input type="number" name="sizeMax" />
							Бюджет: <input type="number" name="amountPayment" />
							<p>
								<select size="3" multiple name="tenement">
									<option disabled>Выберите</option>
									<option value="Офис">Офис</option>
									<option selected value="Склад">Склад</option>
									<option value="Торговое помещение">Торговое помещение</option>
									<option value="Другое">Другое</option>
								</select>
							</p>
							Комментарий: <textarea name="comment"></textarea>-->