<?php
    
    $id = $_GET['id'];
    $result = mysql_query("SELECT * FROM ecrm_data_s WHERE id_ecrm_data_s = ".$id." ORDER BY id_ecrm_data_s desc limit 0,1");
    mysql_query ("SET NAMES 'utf8'");
  
    $i = 0;

    while ($row = mysql_fetch_array($result)) {
    
        if ($i > 0) {
        }

        $id_seguimiento = $row['id_seguimiento'];
        $usuario = $row['usuario'];
        $software = $row['software'];
        $version = $row['version'];
        $numero_de_serie = $row['numero_de_serie'];
        $codigos_de_activacion = $row['codigos_de_activacion'];
        $precio_total = $row['precio_total'];
        $precio_sin_iva = $row['precio_sin_iva'];
        $forma_de_pago = $row['forma_de_pago'];
        $cantidad_mensual = $row['cantidad_mensual'];
        $banco_ = $row['banco_'];
        $factura_avance = $row['factura_avance'];
        $documentacion = $row['documentacion'];
        $razon_social = $row['razon_social'];
        $rfc = $row['rfc'];
        $domicilio_fiscal = $row['domicilio_fiscal'];
        $cp = $row['cp'];
        $ref_nombre1 = $row['ref_nombre1'];
        $ref_tel1 = $row['ref_tel1'];
        $ref_mail1 = $row['ref_mail1'];
        $ref_parentezco1 = $row['ref_parentezco1'];
        $ref_nombre2 = $row['ref_nombre2'];
        $ref_tel2 = $row['ref_tel2'];
        $ref_mail2 = $row['ref_mail2'];
        $ref_parentezco2 = $row['ref_parentezco2'];
        $nombre_de_usuario = $row['nombre_de_usuario'];
        $email_de_usuario = $row['email_de_usuario'];
        $tel_usuario = $row['tel_usuario'];
        $experiencia_en_software_cad = $row['experiencia_en_software_cad'];
        $software_que_utiliza = $row['software_que_utiliza'];
        $nombre_de_pagos = $row['nombre_de_pagos'];
        $tel_pagos = $row['tel_pagos'];
        $mail_pagos = $row['mail_pagos'];
        $notas = $row['notas'];
        $asesor = $row['asesor'];
        $sistema_operativo = $row['sistema_operativo'];
        $modelado_de_objetos = $row['modelado_de_objetos'];
        $fecha_entrega_objetos = $row['fecha_entrega_objetos'];
        $puntos_interimodel = $row['puntos_interimodel'];

    }

?>


<!-- / Contacto -->
<form action="registrar_cliente.php" name="registrar_cliente" method="post">
  
  <div class="row">
        <div class="col-md-12">
          <div>Nombre Completo</div>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
    </div>
  </div>

  <hr>

  <div class="row">
        <div class="col-md-4">
          <div><!--Nombre de contacto #2--> Profesión</div>
      <input type="text" name="contacto2" class="form-control" placeholder="Profesión">
    </div>
    <div class="col-md-4">
      <div><!--Nombre de contacto #3--> Detalle Especialidad</div>
      <input type="text" name="contacto3" class="form-control" placeholder="Detalle Especialidad">
    </div>
    <div class="col-md-4">
      <div clas="label"><!-- Equipos con los que cuenta--> Puesto</div>
      <input type="text" name="eqclosqcuenta" class="form-control" placeholder="Puesto">
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-3">
      <div clas="label">Direccion</div>
      <input type="text" name="direccion" class="form-control" placeholder="Direccion"> 
    </div>
    <div class="col-md-3">
      <div clas="label">Ciudad</div>
      <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
    </div>
    <div class="col-md-3">
      <div clas="label">Pais</div>
      
      <select class="form-control" id="pais" name="pais" >
                <option></option>
                <option value="Mexico">Mexico</option>
                 <option value="Argentina">Argentina</option> 
                 <option value="Armenia">Armenia</option> 
                 <option value="Aruba">Aruba</option> 
                 <option value="Australia">Australia</option> 
                 <option value="Austria">Austria</option> 
                 <option value="Bahamas">Bahamas</option> 
                 <option value="Bahrain">Bahrain</option> 
                 <option value="Bangladesh">Bangladesh</option> 
                 <option value="Barbados">Barbados</option> 
                 <option value="Belarus">Belarus</option> 
                 <option value="Belgium">Belgium</option> 
                 <option value="Belize">Belize</option> 
                 <option value="Benin">Benin</option> 
                 <option value="Bermuda">Bermuda</option> 
                 <option value="Bhutan">Bhutan</option> 
                 <option value="Bolivia">Bolivia</option> 
                 <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
                 <option value="Botswana">Botswana</option> 
                 <option value="Bouvet Island">Bouvet Island</option> 
                 <option value="Brazil">Brazil</option> 
                 <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
                 <option value="Brunei Darussalam">Brunei Darussalam</option> 
                 <option value="Bulgaria">Bulgaria</option> 
                 <option value="Burkina Faso">Burkina Faso</option> 
                 <option value="Burundi">Burundi</option> 
                 <option value="Cambodia">Cambodia</option> 
                 <option value="Cameroon">Cameroon</option> 
                 <option value="Canada">Canada</option> 
                 <option value="Cape Verde">Cape Verde</option> 
                 <option value="Cayman Islands">Cayman Islands</option> 
                 <option value="Central African Republic">Central African Republic</option> 
                 <option value="Chad">Chad</option> 
                 <option value="Chile">Chile</option> 
                 <option value="China">China</option> 
                 <option value="Christmas Island">Christmas Island</option> 
                 <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
                 <option value="Colombia">Colombia</option> 
                 <option value="Comoros">Comoros</option> 
                 <option value="Congo">Congo</option> 
                 <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
                 <option value="Cook Islands">Cook Islands</option> 
                 <option value="Costa Rica">Costa Rica</option> 
                 <option value="Cote D'ivoire">Cote D'ivoire</option> 
                 <option value="Croatia">Croatia</option> 
                 <option value="Cuba">Cuba</option> 
                 <option value="Cyprus">Cyprus</option> 
                 <option value="Czech Republic">Czech Republic</option> 
                 <option value="Denmark">Denmark</option> 
                 <option value="Djibouti">Djibouti</option> 
                 <option value="Dominica">Dominica</option> 
                 <option value="Dominican Republic">Dominican Republic</option> 
                 <option value="Ecuador">Ecuador</option> 
                 <option value="Egypt">Egypt</option> 
                 <option value="El Salvador">El Salvador</option> 
                 <option value="Equatorial Guinea">Equatorial Guinea</option> 
                 <option value="Eritrea">Eritrea</option> 
                 <option value="Estonia">Estonia</option> 
                 <option value="Ethiopia">Ethiopia</option> 
                 <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
                 <option value="Faroe Islands">Faroe Islands</option> 
                 <option value="Fiji">Fiji</option> 
                 <option value="Finland">Finland</option> 
                 <option value="France">France</option> 
                 <option value="French Guiana">French Guiana</option> 
                 <option value="French Polynesia">French Polynesia</option> 
                 <option value="French Southern Territories">French Southern Territories</option> 
                 <option value="Gabon">Gabon</option> 
                 <option value="Gambia">Gambia</option> 
                 <option value="Georgia">Georgia</option> 
                 <option value="Germany">Germany</option> 
                 <option value="Ghana">Ghana</option> 
                 <option value="Gibraltar">Gibraltar</option> 
                 <option value="Greece">Greece</option> 
                 <option value="Greenland">Greenland</option> 
                 <option value="Grenada">Grenada</option> 
                 <option value="Guadeloupe">Guadeloupe</option> 
                 <option value="Guam">Guam</option> 
                 <option value="Guatemala">Guatemala</option> 
                 <option value="Guinea">Guinea</option> 
                 <option value="Guinea-bissau">Guinea-bissau</option> 
                 <option value="Guyana">Guyana</option> 
                 <option value="Haiti">Haiti</option> 
                 <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
                 <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
                 <option value="Honduras">Honduras</option> 
                 <option value="Hong Kong">Hong Kong</option> 
                 <option value="Hungary">Hungary</option> 
                 <option value="Iceland">Iceland</option> 
                 <option value="India">India</option> 
                 <option value="Indonesia">Indonesia</option> 
                 <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
                 <option value="Iraq">Iraq</option> 
                 <option value="Irlanda">Irlanda</option> 
                 <option value="Israel">Israel</option> 
                 <option value="Italy">Italy</option> 
                 <option value="Jamaica">Jamaica</option> 
                 <option value="Japan">Japan</option> 
                 <option value="Jordan">Jordan</option> 
                 <option value="Kazakhstan">Kazakhstan</option> 
                 <option value="Kenya">Kenya</option> 
                 <option value="Kiribati">Kiribati</option> 
                 <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
                 <option value="Korea, Republic of">Korea, Republic of</option> 
                 <option value="Kuwait">Kuwait</option> 
                 <option value="Kyrgyzstan">Kyrgyzstan</option> 
                 <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
                 <option value="Latvia">Latvia</option> 
                 <option value="Lebanon">Lebanon</option> 
                 <option value="Lesotho">Lesotho</option> 
                 <option value="Liberia">Liberia</option> 
                 <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
                 <option value="Liechtenstein">Liechtenstein</option> 
                 <option value="Lithuania">Lithuania</option> 
                 <option value="Luxembourg">Luxembourg</option> 
                 <option value="Macao">Macao</option> 
                 <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
                 <option value="Madagascar">Madagascar</option> 
                 <option value="Malawi">Malawi</option> 
                 <option value="Malaysia">Malaysia</option> 
                 <option value="Maldives">Maldives</option> 
                 <option value="Mali">Mali</option> 
                 <option value="Malta">Malta</option> 
                 <option value="Marshall Islands">Marshall Islands</option> 
                 <option value="Martinique">Martinique</option> 
                 <option value="Mauritania">Mauritania</option> 
                 <option value="Mauritius">Mauritius</option> 
                 <option value="Mayotte">Mayotte</option> 
                 <option value="Mexico">Mexico</option> 
                 <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
                 <option value="Moldova, Republic of">Moldova, Republic of</option> 
                 <option value="Monaco">Monaco</option> 
                 <option value="Mongolia">Mongolia</option> 
                 <option value="Montserrat">Montserrat</option> 
                 <option value="Morocco">Morocco</option> 
                 <option value="Mozambique">Mozambique</option> 
                 <option value="Myanmar">Myanmar</option> 
                 <option value="Namibia">Namibia</option> 
                 <option value="Nauru">Nauru</option> 
                 <option value="Nepal">Nepal</option> 
                 <option value="Netherlands">Netherlands</option> 
                 <option value="Netherlands Antilles">Netherlands Antilles</option> 
                 <option value="New Caledonia">New Caledonia</option> 
                 <option value="New Zealand">New Zealand</option> 
                 <option value="Nicaragua">Nicaragua</option> 
                 <option value="Niger">Niger</option> 
                 <option value="Nigeria">Nigeria</option> 
                 <option value="Niue">Niue</option> 
                 <option value="Norfolk Island">Norfolk Island</option> 
                 <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
                 <option value="Norway">Norway</option> 
                 <option value="Oman">Oman</option> 
                 <option value="Pakistan">Pakistan</option> 
                 <option value="Palau">Palau</option> 
                 <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
                 <option value="Panama">Panama</option> 
                 <option value="Papua New Guinea">Papua New Guinea</option> 
                 <option value="Paraguay">Paraguay</option> 
                 <option value="Peru">Peru</option> 
                 <option value="Philippines">Philippines</option> 
                 <option value="Pitcairn">Pitcairn</option> 
                 <option value="Poland">Poland</option> 
                 <option value="Portugal">Portugal</option> 
                 <option value="Puerto Rico">Puerto Rico</option> 
                 <option value="Qatar">Qatar</option> 
                 <option value="Reunion">Reunion</option> 
                 <option value="Romania">Romania</option> 
                 <option value="Russian Federation">Russian Federation</option> 
                 <option value="Rwanda">Rwanda</option> 
                 <option value="Saint Helena">Saint Helena</option> 
                 <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                 <option value="Saint Lucia">Saint Lucia</option> 
                 <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
                 <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
                 <option value="Samoa">Samoa</option> 
                 <option value="San Marino">San Marino</option> 
                 <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                 <option value="Saudi Arabia">Saudi Arabia</option> 
                 <option value="Senegal">Senegal</option> 
                 <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
                 <option value="Seychelles">Seychelles</option> 
                 <option value="Sierra Leone">Sierra Leone</option> 
                 <option value="Singapore">Singapore</option> 
                 <option value="Slovakia">Slovakia</option> 
                 <option value="Slovenia">Slovenia</option> 
                 <option value="Solomon Islands">Solomon Islands</option> 
                 <option value="Somalia">Somalia</option> 
                 <option value="South Africa">South Africa</option> 
                 <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
                 <option value="Spain">Spain</option> 
                 <option value="Sri Lanka">Sri Lanka</option> 
                 <option value="Sudan">Sudan</option> 
                 <option value="Suriname">Suriname</option> 
                 <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
                 <option value="Swaziland">Swaziland</option> 
                 <option value="Sweden">Sweden</option> 
                 <option value="Switzerland">Switzerland</option> 
                 <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
                 <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
                 <option value="Tajikistan">Tajikistan</option> 
                 <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
                 <option value="Thailand">Thailand</option> 
                 <option value="Timor-leste">Timor-leste</option> 
                 <option value="Togo">Togo</option> 
                 <option value="Tokelau">Tokelau</option> 
                 <option value="Tonga">Tonga</option> 
                 <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
                 <option value="Tunisia">Tunisia</option> 
                 <option value="Turkey">Turkey</option> 
                 <option value="Turkmenistan">Turkmenistan</option> 
                 <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
                 <option value="Tuvalu">Tuvalu</option> 
                 <option value="Uganda">Uganda</option> 
                 <option value="Ukraine">Ukraine</option> 
                 <option value="United Arab Emirates">United Arab Emirates</option> 
                 <option value="United Kingdom">United Kingdom</option> 
                 <option value="United States">United States</option> 
                 <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
                 <option value="Uruguay">Uruguay</option> 
                 <option value="Uzbekistan">Uzbekistan</option> 
                 <option value="Vanuatu">Vanuatu</option> 
                 <option value="Venezuela">Venezuela</option> 
                 <option value="Viet Nam">Viet Nam</option> 
                 <option value="Virgin Islands, British">Virgin Islands, British</option> 
                 <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
                 <option value="Wallis and Futuna">Wallis and Futuna</option> 
                 <option value="Western Sahara">Western Sahara</option> 
                 <option value="Yemen">Yemen</option> 
                 <option value="Zambia">Zambia</option> 
                 <option value="Zimbabwe">Zimbabwe</option>
               </select>
    </div>
    <div class="col-md-3">
      <div clas="label">Estado</div>
      <select class="form-control" id="estado" name="estado" >
      <option value=""></option>
        <option value="Aguascalientes">Aguascalientes</option>
        <option value="Baja California">Baja California</option>
        <option value="Baja California">Baja California</option>
        <option value="Campeche">Campeche</option>
        <option value="Chiapas">Chiapas</option>
        <option value="Chihuahua">Chihuahua</option>
        <option value="Coahuila">Coahuila</option>
        <option value="Colima">Colima</option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Durango">Durango</option>
        <option value="Guanajuato">Guanajuato</option>
        <option value="Guerrero">Guerrero</option>
        <option value="Hidalgo">Hidalgo</option>
        <option value="Jalisco">Jalisco</option>
        <option value="Mexico">Mexico</option>
        <option value="Michoacan">Michoacan</option>
        <option value="Morelos">Morelos</option>
        <option value="Nayarit">Nayarit</option>
        <option value="Nuevo Leon">Nuevo Leon</option>
        <option value="Oaxaca">Oaxaca</option>
        <option value="Puebla">Puebla</option>
        <option value="Queretaro">Queretaro</option>
        <option value="Quintana Roo">Quintana Roo</option>
        <option value="San Luis Potosí">San Luis Potosí</option>
        <option value="Sinaloa">Sinaloa</option>
        <option value="Sonora">Sonora</option>
        <option value="Tabasco">Tabasco</option>
        <option value="Tamaulipas">Tamaulipas</option>
        <option value="Tlaxcala">Tlaxcala</option>
        <option value="Veracruz">Veracruz</option>
        <option value="Yucatan">Yucatan</option>
        <option value="Zacatecas">Zacatecas</option>
        <option value="Otro">-- No soy de Mexico --</option>
      </select>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-3">
      <div clas="label">Celular</div>
      <input type="text" name="nombre_recomendador" class="form-control" placeholder="Celular">
    </div>
    <div class="col-md-3">
      <div clas="label">Telefono</div>
      <input type="text" name="telefono" class="form-control" placeholder="Telefono">
    </div>
    <div class="col-md-3">
      <div clas="label">Email</div>
      <input type="text" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="col-md-3">
      <div clas="label"><!-- Equipo de interes --> Software de Interes</div>
      
      <select class="form-control" id="equipodeinteres" name="equipodeinteres" >
      <option></option>

    <optgroup label="----------------------------">
                <option value="InteriCAD Lite">InteriCAD Lite</option>
                <option value="InteriCAD KD">InteriCAD KD</option>
                <option value="InteriCAD T6">InteriCAD T6</option>
                <option value="InteriCAD 7000">InteriCAD 7000</option>
                <optgroup label="----------------------------">
                <option value="Ceramic King">Ceramic King</option>
                <optgroup label="----------------------------">
                <option value="iScan">iScan</option>
            <optgroup label="----------------------------">
                <option value="ZWCAD">ZWCAD</option>
                
        </select>
    </div>

  </div>

  <hr>

  <div class="row">
    <div class="col-md-4">
      <div clas="label">Medio</div>
      


<select class="form-control" id="medio" name="medio" >
    
  <option></option>
  
<optgroup label="Internet">
    <option value="Google">&nbsp;Google</option>
    <option value="Email de Kumasoftware">&nbsp;Email de Kumasoftware</option>
    <option value="Fabebook">&nbsp;Facebook</option>
    <option value="Twiter">&nbsp;Twiter</option>
    <option value="Youtube">&nbsp;Youtube</option>
    <option value="Correo Electronico">&nbsp;Correo Electrónico</option>
    <option value="Seccion amarilla">&nbsp;Secci&oacute;n amarilla</option>
    </optgroup>

    <optgroup label="Por personal de ventas">
    <option value="Llamada del personal de ventas">&nbsp;Llamada del personal de ventas</option>
    <option value="Visita del vendedor de campo">&nbsp;Visita del vendedor de campo</option>
    </optgroup>

    <optgroup label="Otros">
    <option value="Recomendacion">&nbsp;Recomendaci&oacute;n</option>
    
    <option value="Exposicion comercial">&nbsp;Exposición comercial</option>
    <option value="Otro">&nbsp;Otro</option>
    </optgroup>

  </select>

    </div>
    <div class="col-md-4">
      <div clas="label">Giro</div>
      <select class="form-control" id="giro" name="giro" >
      <option></option>
      <option value="Disenador de Interiores">Diseñador de Interiores</option>
    <option value="Muebleria">Mueblería</option>
    <option value="Cocinas Integrales">Cocinas Integrales</option>
    <option value="Muebles Modulares">Muebles Modulares</option>
    <option value="Textiles">Textiles</option>
    <option value="Arquitectura">Arquitectura</option>
    <option value="Ingenieria">Ingeniería</option>
    <option value="Construccion">Construcción</option>
        </select>
    </div>
    <div class="col-md-4">
      <div clas="label"><!-- ¿Compro equipo en ATP? --> Página web del cliente</div>
      <input type="text" name="comeqenatp" class="form-control" placeholder="Página web del cliente">
    </div>
  </div>
  
  <hr>

  <div class="row">
    
    <div class="col-md-12">
      <div clas="label">Comentarios</div>
      <textarea name="comentarios" class="form-control" rows="3" style="width:100%; height:70px; resize: none;"></textarea>
    </div>
    

  </div>

  <hr>

  <div>
    <div class="col-md-4">
      <div clas="label"><!-- Antiguedad actual del equipo --></div>
      <input type="hidden" name="antacteq" class="form-control" placeholder="Antacteq">
    </div>
    <div class="col-md-4">
      <div clas="label"><!-- Es cliente --></div>
      <input type="hidden" name="escliente" class="form-control" placeholder="Escliente">
    </div>
    <div class="col-md-4">
      <div clas="label"><!-- Numero de cliente --></div>
      <input type="hidden" name="numerodecliente" class="form-control" placeholder="Numerodecliente">
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-6">
      <div clas="label">Motivo de consulta</div>
      <input type="text" name="motivodeconsulta" class="form-control" placeholder="Motivo de consulta">
    </div>
    <div class="col-md-6">
      <div clas="label">Empresa</div>
      <input type="text" name="empresa" class="form-control" placeholder="Empresa">
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-4">
      
    </div>
    <div class="col-md-4">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Guardar</button>   
    </div>
    <div class="col-md-4">
      
    </div>
  </div>  




<!-- SOPORTE -->
<style>
    
    .formSoporte {
        width: 100%;
    }

    .formSoporte th, .formSoporte td  {
        text-align: left;
    }

    .formSoporte th {
        width: 30%;
    }

    .formSoporte td {
        width: 70%;
    }

    .formSoporte .subT {
        color:gray;
        height: 50px;
    }

</style>
    <table class="formSoporte">
        <tr><th colspan="2" class="subT">Info de Compra</th></tr>
        <tr><th>Software:</th><td><input type="text" name="Ssoftware" class="form-control" placeholder="Software" value="<?= $software ?>"></td></tr>
        <tr><th>Version:</th><td><input type="text" name="Sversion" class="form-control" placeholder="Version" value="<?= $version ?>"></td></tr>
        <tr><th>Numero de serie:</th><td><input type="text" name="Snumero_de_serie" class="form-control" placeholder="Numero de serie" value="<?= $numero_de_serie ?>"></td></tr>
        <tr><th>Codigos de activacion:</th><td><input type="text" name="Scodigos_de_activacion" class="form-control" placeholder="Codigos de activacion" value="<?= $codigos_de_activacion ?>"></td></tr>
        <tr><th>Precio Total:</th><td><input type="text" name="Sprecio_total" class="form-control" placeholder="Precio Total" value="<?= $precio_total ?>"></td></tr>
        <tr><th>Precio sin IVA:</th><td><input type="text" name="Sprecio_sin_iva" class="form-control" placeholder="Precio sin IVA" value="<?= $precio_sin_iva ?>"></td></tr>
        <tr><th>Forma de pago:</th><td><input type="text" name="Sforma_de_pago" class="form-control" placeholder="Forma de pago" value="<?= $forma_de_pago ?>"></td></tr>
        <tr><th>Cantidad mensual:</th><td><input type="text" name="Scantidad_mensual" class="form-control" placeholder="Cantidad mensual" value="<?= $cantidad_mensual ?>"></td></tr>
        <tr><th>Banco:</th><td><input type="text" name="Sbanco_" class="form-control" placeholder="Banco" value="<?= $banco_ ?>"></td></tr>
        <tr><th>Factura Avance:</th><td><input type="text" name="Sfactura_avance" class="form-control" placeholder="Factura Avance" value="<?= $factura_avance ?>"></td></tr>
        <tr><th>Documentacion:</th><td><input type="text" name="Sdocumentacion" class="form-control" placeholder="Documentacion" value="<?= $documentacion ?>"></td></tr>

        <tr><th colspan="2" class="subT">Datos de Facturación</th></tr>
        <tr><th>Razon Social:</th><td><input type="text" name="Srazon_social" class="form-control" placeholder="Razon Social" value="<?= $razon_social ?>"></td></tr>
        <tr><th>RFC:</th><td><input type="text" name="Srfc" class="form-control" placeholder="RFC" value="<?= $rfc ?>"></td></tr>
        <tr><th>Domicilio Fiscal:</th><td><input type="text" name="Sdomicilio_fiscal" class="form-control" placeholder="Domicilio Fiscal" value="<?= $domicilio_fiscal ?>"></td></tr>
        <tr><th>CP:</th><td><input type="text" name="Scp" class="form-control" placeholder="CP" value="<?= $cp ?>"></td></tr>

        <tr><th colspan="2" class="subT">Referencias</th></tr>
        <tr><th>Nombre 1:</th><td><input type="text" name="Sref_nombre1" class="form-control" placeholder="Nombre 1" value="<?= $ref_nombre1 ?>"></td></tr>
        <tr><th>Tel 1:</th><td><input type="text" name="Sref_tel1" class="form-control" placeholder="Tel 1" value="<?= $ref_tel1 ?>"></td></tr>
        <tr><th>Mail 1:</th><td><input type="text" name="Sref_mail1" class="form-control" placeholder="Mail 1" value="<?= $ref_mail1 ?>"></td></tr>
        <tr><th>Parentezco 1:</th><td><input type="text" name="Sref_parentezco1" class="form-control" placeholder="Parentezco 1" value="<?= $ref_parentezco1 ?>"></td></tr>
        <tr><th>Nombre 2:</th><td><input type="text" name="Sref_nombre2" class="form-control" placeholder="Nombre 2" value="<?= $ref_nombre2 ?>"></td></tr>
        <tr><th>Tel 2:</th><td><input type="text" name="Sref_tel2" class="form-control" placeholder="Tel 2" value="<?= $ref_tel2 ?>"></td></tr>
        <tr><th>Mail 2:</th><td><input type="text" name="Sref_mail2" class="form-control" placeholder="Mail 2" value="<?= $ref_mail2 ?>"></td></tr>
        <tr><th>Parentezco 2:</th><td><input type="text" name="Sref_parentezco2" class="form-control" placeholder="Parentezco 2" value="<?= $ref_parentezco2 ?>"></td></tr>

        <tr><th colspan="2" class="subT">Usuario del Programa</th></tr>
        <tr><th>Nombre de Usuario:</th><td><input type="text" name="Snombre_de_usuario" class="form-control" placeholder="Nombre de Usuario" value="<?= $nombre_de_usuario ?>"></td></tr>
        <tr><th>Email de Usuario:</th><td><input type="text" name="Semail_de_usuario" class="form-control" placeholder="Email de Usuario" value="<?= $email_de_usuario ?>"></td></tr>
        <tr><th>Tel Usuario:</th><td><input type="text" name="Stel_usuario" class="form-control" placeholder="Tel Usuario" value="<?= $tel_usuario ?>"></td></tr>
        <tr><th>Experiencia En Software CAD:</th><td><input type="text" name="Sexperiencia_en_software_cad" class="form-control" placeholder="Experiencia En Software CAD" value="<?= $experiencia_en_software_cad ?>"></td></tr>
        <tr><th>Software que Utiliza:</th><td><input type="text" name="Ssoftware_que_utiliza" class="form-control" placeholder="Software que Utiliza" value="<?= $software_que_utiliza ?>"></td></tr>

        <tr><th colspan="2" class="subT">Persona encargada de pago</th></tr>
        <tr><th>Nombre de pagos:</th><td><input type="text" name="Snombre_de_pagos" class="form-control" placeholder="Nombre de pagos" value="<?= $nombre_de_pagos ?>"></td></tr>
        <tr><th>Tel pagos:</th><td><input type="text" name="Stel_pagos" class="form-control" placeholder="Tel pagos" value="<?= $tel_pagos ?>"></td></tr>
        <tr><th>Mail pagos:</th><td><input type="text" name="Smail_pagos" class="form-control" placeholder="Mail pagos" value="<?= $mail_pagos ?>"></td></tr>

        <tr><th colspan="2" class="subT">Notas</th></tr>
        <tr><th>Notas:</th><td><input type="text" name="Snotas" class="form-control" placeholder="Notas" value="<?= $notas ?>"></td></tr>

        <tr><th colspan="2" class="subT">Soporte Técnico</th></tr>
        <tr><th>Asesor:</th><td><input type="text" name="Sasesor" class="form-control" placeholder="Asesor" value="<?= $asesor ?>"></td></tr>
        <tr><th>Sistema Operativo:</th><td><input type="text" name="Ssistema_operativo" class="form-control" placeholder="Sistema Operativo" value="<?= $sistema_operativo ?>"></td></tr>
        <tr><th>Modelado de Objetos:</th><td><input type="text" name="Smodelado_de_objetos" class="form-control" placeholder="Modelado de Objetos" value="<?= $modelado_de_objetos ?>"></td></tr>
        <tr><th>Fecha entrega Objetos:</th><td><input type="text" name="Sfecha_entrega_objetos" class="form-control" placeholder="Fecha entrega Objetos" value="<?= $fecha_entrega_objetos ?>"></td></tr>
        <tr><th>Puntos interimodel:</th><td><input type="text" name="Spuntos_interimodel" class="form-control" placeholder="Puntos interimodel" value="<?= $puntos_interimodel ?>"></td></tr>
</table>  
<!-- SOPORTE -->




usuario<br />
<?php
$usuario = $_SESSION["usuario"];
?>
<input type="text" name="usuario" readonly="readonly" value="<?php echo ''.$usuario.'' ?>" class="form-control" placeholder="Usuario">

</form>
<!-- Contacto / -->