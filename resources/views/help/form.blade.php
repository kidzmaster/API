
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('Name', 'Name', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('Ruler_id', 'Ruler_id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('ruler_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('ruler_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('min', 'min', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('min', null, ['class' => 'form-control']) !!}
        {!! $errors->first('min', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('max', 'max', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('max', null, ['class' => 'form-control']) !!}
        {!! $errors->first('max', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('content', 'content', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('images', 'images', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('images', null, ['class' => 'form-control']) !!}
        {!! $errors->first('images', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('created_at', 'created_at', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('created_at', null, ['class' => 'form-control']) !!}
        {!! $errors->first('created_at', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>