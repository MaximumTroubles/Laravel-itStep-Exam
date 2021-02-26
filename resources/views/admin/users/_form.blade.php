<div class="form-group">
    {!! Form::label('name', 'ФИО клиента:' ) !!}
    {!! Form::text('name', null, ['class'=>'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('email', 'E-mail Пользователя:' ) !!}
    {!! Form::tel('email', null, ['class'=>'form-control' . ($errors->has('email') ? ' is-invalid' : '')]) !!}
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('phone', 'Номер телефона:' ) !!}
    {!! Form::tel('phone', null, ['class'=>'form-control' . ($errors->has('phone') ? ' is-invalid' : '')]) !!}
    @error('phone')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

@if (!$user->hasRole('admin'))
<div class="form-group">
    {!! Form::label('ban', 'Статус заказа') !!}
    {!! Form::select('ban', $bans, null, ['class' =>'form-control'] )!!}
</div>
@endif

<button class="btn btn-success">Save</button>
