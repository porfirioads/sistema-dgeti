<div id="{{$id}}" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&#215;</button>
                <h4 class="modal-title">{{$titulo}}</h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"
                        data-dismiss="modal" id="btnCancelar">
                    {{$textoCancel}}
                </button>
                <button type="button" class="btn btn-primary"
                        data-dismiss="modal" id="btnConfirmar">
                    {{$textoOk}}

                </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>