<div class="container text-center" id='registros'>
  <div class="row">
    <div class="card">
      <div class="card-body col-md-12">
          <form id="form_registro" method="post">
            <input type="hidden" value="registrar" id="action" name="action">
            <div class="row">
              <div class="col-md-4">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control " id="nombre"  placeholder="Nombre">
              </div>
              <div class="col-md-4">
                <label for="ap">Apellido Paterno</label>
                <input type="text" class="form-control " id="ap" placeholder="Apellido Paterno">
              </div>
              <div class="col-md-4">
                <label for="am">Apellido Materno</label>
                <input type="text" class="form-control " id="am" placeholder="Apellido Materno">
              </div>
            </div>
            <div class="row">
              <div class=" col-md-4">
                <label for="no_cuenta">No. Cuenta</label>
                <input id="no_cuenta" type="text" class="form-control" placeholder="No.Cuenta ">
              </div>
              <div class="col-md-4">
                <label for="correo">Correo Institucional</label>
                <input id="correo" type="text" class="form-control" placeholder="Correo Institucional">
              </div>
              <div class="col-md-4">
                <label for="nom_usuario">Nombre de Usuario</label>
                <input id="nom_usuario" type="text" class="form-control" placeholder="Usuario">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="contra">Contraseña</label>
                <input id="contra" type="password" class="form-control" placeholder="Contraseña">
              </div>
              <div class="col-md-6">
                <label for="veri_contra">Verificar Contraseña</label>
                <input id="veri_contra" type="password" class="form-control" placeholder="Verificar Contraseña">
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <label for="">Tipo de Dispositivo</label>
                <select id="tipo_disp" class="form-control" name="">
                  <option value="" selected>Seleccione una opcion</option>
                  <option value="1">Ordenador</option>
                  <option value="2">Movil</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="mac_address">MAC</label>
                <input id="mac_address" type="text" class="form-control" placeholder="Direccion MAC">
              </div>
              <div class="col-md-4">
                <label for="ip_address">IP</label>
                <input id="ip_address" type="text" class="form-control" placeholder="Direccion IP">
              </div>
            </div>
            <br>
            <div class="row">
              <div id="aceptar_reg" class="col-md-6 btn btn-primary">
                Aceptar
              </div>
              <div id="cancelar_reg" class="col-md-6 btn btn-danger">
                Cancelar
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>
