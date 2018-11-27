<!-- Nickname Form input -->
<div class="form-group">
            {!! Form::label('P_Nickname', 'Nickname:') !!}
            {!! Form::text('P_Nickname', null, ['class'=>'form-control', 'placeholder' => 'Ник нарушителя']) !!}
        </div>
        <!--ID Form input -->
        <div class="form-group">
            {!! Form::label('P_ID', 'ID:') !!}
            {!! Form::text('P_ID', null, ['class'=>'form-control', 'placeholder' => 'ID нарушителя']) !!}
        </div>
        <!-- Rule Form input -->
        <div class="form-group">
            {!! Form::label('rule', 'Rule:') !!}
            {!! Form::text('rule', null, ['class'=>'form-control', 'placeholder' => 'Пункт правил(число)']) !!}
        </div>
        <!-- Ban type Form input -->
        <div class="form-group">
            {!! Form::label('BanType', 'Ban type:') !!}
            {!! Form::select('BanType', ['Бан Чата' => 'Бан Чата', 'Бан Аккаунта' => 'Бан Аккаунта', 'Бан Персонажа' => 'Бан Персонажа' ], null, ['class'=>'form-control']); !!}
        </div>
        <!-- Ban time Form input -->
        <div class="form-group">
            {!! Form::label('BanTime', 'Ban time:') !!}
            {!! Form::text('BanTime', null, ['class'=>'form-control', 'placeholder' => 'Время бана в секундах']) !!}
        </div>
        
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Add notes', ['class' => 'btn btn-primary form-control'])!!}
        </div>