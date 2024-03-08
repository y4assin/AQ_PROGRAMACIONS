<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('title') }}
            {{ Form::text('title', $activitat->title, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => 'Title']) }}
            {!! $errors->first('title', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcio') }}
            {{ Form::text('descripcio', $activitat->descripcio, ['class' => 'form-control' . ($errors->has('descripcio') ? ' is-invalid' : ''), 'placeholder' => 'Descripcio']) }}
            {!! $errors->first('descripcio', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('programacion_id') }}
            {{ Form::text('programacion_id', $activitat->programacion_id, ['class' => 'form-control' . ($errors->has('programacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Programacion ID']) }}
            {!! $errors->first('programacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('uf_id') }}
            {{ Form::select('uf_id', $ufs->pluck('name', 'id'), $activitat->uf_id, ['class' => 'form-control' . ($errors->has('uf_id') ? ' is-invalid' : ''), 'placeholder' => 'Select UF ID']) }}
            {!! $errors->first('uf_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('ra_ids') }}
            {{ Form::select('ra_ids', $ras->pluck('name', 'id'), $activitat->ra_ids, ['class' => 'form-control' . ($errors->has('ra_ids') ? ' is-invalid' : ''), 'placeholder' => 'Select RA IDs']) }}
            {!! $errors->first('ra_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('criteri_ids') }}
            {{ Form::select('criteri_ids', $criteris->pluck('criteri', 'id'), $activitat->criteri_ids, ['class' => 'form-control' . ($errors->has('criteri_ids') ? ' is-invalid' : ''), 'placeholder' => 'Select Criteri IDs']) }}
            {!! $errors->first('criteri_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('contingut_ids') }}
            {{ Form::select('contingut_ids', $continguts->pluck('contingut', 'id'), $activitat->contingut_ids, ['class' => 'form-control' . ($errors->has('contingut_ids') ? ' is-invalid' : ''), 'placeholder' => 'Select Contingut IDs']) }}
            {!! $errors->first('contingut_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>