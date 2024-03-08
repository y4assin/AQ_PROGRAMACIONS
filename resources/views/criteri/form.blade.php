<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('criteri') }}
            {{ Form::text('criteri', $criteri->criteri, ['class' => 'form-control' . ($errors->has('criteri') ? ' is-invalid' : ''), 'placeholder' => 'Criteri']) }}
            {!! $errors->first('criteri', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ra_id') }}
            {{ Form::select('ra_id', $ra->pluck('name', 'id'), $criteri->ra_id, ['class' => 'form-control' . ($errors->has('ra_id') ? ' is-invalid' : ''), 'placeholder' => 'Select RA ID']) }}
            {!! $errors->first('ra_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>