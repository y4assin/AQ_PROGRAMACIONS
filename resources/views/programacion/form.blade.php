<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('any') }}
            {{ Form::text('any', $programacion->any, ['class' => 'form-control' . ($errors->has('any') ? ' is-invalid' : ''), 'placeholder' => 'Any']) }}
            {!! $errors->first('any', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modul_id') }}
            {{ Form::select('modul_id', $moduls->pluck('name', 'id'), $programacion->modul_id, ['class' => 'form-control' . ($errors->has('modul_id') ? ' is-invalid' : ''), 'placeholder' => 'Select Modul ID']) }}
            {!! $errors->first('modul_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::select('user_id', $users->pluck('name', 'id'), $programacion->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'Select User ID']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>