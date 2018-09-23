<div class="main main-raised">
  <div class="section section-basic">
    <div class="container">
      <div class="title">
        <h2>Directorio</h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <table class="table">
            <thead>
              <tr>
                <th class="text-center">Áreas</th>
                <th class="text-center">Titulares</th>
                <th class="text-center">Correos Electronicos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">Coordinador Estatal</td>
                <td class="text-center">Francisco Elizondo Salazar</td>
                <td class="text-center">coordinador@correo.com</td>
              </tr>
              <tr>
                <td class="text-center">Responsable Operativo</td>
                <td class="text-center">Ismael García Mendez</td>
                <td class="text-center">operativo@correo.com</td>
              </tr>
              <tr>
                <td class="text-center">Responsable Financiero</td>
                <td class="text-center">Sergio Guerra López</td>
                <td class="text-center">financiero@correo.com</td>
              </tr>
              <tr>
                <td class="text-center">Responsable Contraloria Social</td>
                <td class="text-center">José Gonzalez Oropeza</td>
                <td class="text-center">contraloriasocial@correo.com</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-12">
        <div class="title">
          <h4>Quejas y Sugerencias</h4>
        </div>
        <div class="row">
          <div class='col-md-10 col-md-offset-2'>
            <?php
            $attr_Label = array('class' => 'control-Title');
            $attr_Input = array('class' => 'form-control');
            $attr_Button = array('class' => 'btn btn-primary');

            echo form_open('directorio');
            echo "<div class='col-md-12'>";
            echo form_error('nombre');
            echo "</div >";
            echo "<div class='col-md-12 form-group'>";
            echo "<div class='col-md-2'>";
            echo form_label('Nombre: ', 'nombre', $attr_Label);
            echo "</div >";
            echo "<div class='col-md-5'>";
            echo form_input('nombre', '', $attr_Input);echo '<br>';
            echo "</div >";
            echo "</div >";

            echo "<div class='col-md-12'>";
            echo form_error('correo');
            echo "</div >";
            echo "<div class='col-md-12 form-group'>";
            echo "<div class='col-md-2'>";
            echo form_label('Correo Electrónico: ', 'correo', $attr_Label);
            echo "</div >";
            echo "<div class='col-md-5'>";
            echo form_input('correo', '', $attr_Input);echo '<br>';
            echo "</div >";
            echo "</div >";

            echo "<div class='col-md-12'>";
            echo form_error('comentario');
            echo "</div >";
            echo "<div class='col-md-12 form-group'>";
            echo "<div class='col-md-2'>";
            echo form_label('Comentario: ', 'comentario', $attr_Label);
            echo "</div >";
            echo "<div class='col-md-5'>";
            echo form_input('comentario', '', $attr_Input);echo '<br>';
            echo "</div >";
            echo "</div >";

            echo "<div class='col-md-5 col-md-offset-3'>";
            echo form_submit('botonSubmit', 'Enviar', $attr_Button);
            echo "</div >";

            echo form_close();
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
