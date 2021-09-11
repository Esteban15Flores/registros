<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8' />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/locales-all.js"></script>

    <script>

      document.addEventListener('DOMContentLoaded', function() {

        let formulario = document.querySelector("form");

        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:'es',

          headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,listWeek'
          },

          dateClick:function(info){

            $("#evento").modal("show");

          }

        });
        calendar.render();

        document.getElementById("btnGuardar").addEventListener("click", function(){

            const datos=new FormData(formulario);
            console.log(datos);
        });

      });

    </script>
  </head>
  <body>
   <!--  ==============================================================================================-->
      <div class="container">
    <div id='calendar'></div>
      </div>
      <!--  ==============================================================================================-->
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#evento">
        Launch
      </button>
      
      <!-- Modal -->
      <div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Modal title</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  
                    <form action="">

                    <div class="mb-3">
                      <label for="id" class="form-label">ID</label>
                      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Título</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escribe el titulo del evento">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="mb-3">
                      <label for="" class="form-label">Descripción</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>

                    <div class="mb-3">
                      <label for="start" class="form-label">start</label>
                      <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="mb-3">
                      <label for="end" class="form-label">end</label>
                      <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    </form>
                  
                  </div>
                  <div class="modal-footer">

                        <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                        <button type="button" class="btn btn-warning" id="btnModificar">Modificar</button>
                        <button type="button" class="btn btn-danger" id="btnEliminar">Eliminar</button>

                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>


                  </div>
              </div>
          </div>
      </div>
      
  </body>
</html>