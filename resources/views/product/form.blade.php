
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('marca_id') }}</label>
    <div>
        {{ Form::text('marca_id', $product->marca_id, ['class' => 'form-control' .
        ($errors->has('marca_id') ? ' is-invalid' : ''), 'placeholder' => 'Marca Id']) }}
        {!! $errors->first('marca_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>marca_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('condicion_venta_id') }}</label>
    <div>
        {{ Form::text('condicion_venta_id', $product->condicion_venta_id, ['class' => 'form-control' .
        ($errors->has('condicion_venta_id') ? ' is-invalid' : ''), 'placeholder' => 'Condicion Venta Id']) }}
        {!! $errors->first('condicion_venta_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>condicion_venta_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('nombre') }}</label>
    <div>
        {{ Form::text('nombre', $product->nombre, ['class' => 'form-control' .
        ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $product->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>descripcion</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
