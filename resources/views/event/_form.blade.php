        <!-- Title Form input -->
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder' => 'Название']) !!}
        </div>
        <!-- Description type Form input -->
        <div class="form-group">
            {!! Form::label('desc', 'Description:') !!}
            {!! Form::textarea('desc', null, ['class'=>'form-control', 'placeholder' => 'Описание']) !!}
        </div>
        <!-- Reward time Form input -->
        <div class="form-group">
            {!! Form::label('reward', 'Reward:') !!}
            {!! Form::text('reward', null, ['class'=>'form-control', 'placeholder' => 'Награда']) !!}
        </div>
        <div class="image-preview-block">
        <div class="image-preview-image"></div>
            {!! Form::file('image', ['class' => 'image-preview-input']) !!}
        </div>
        <!-- submit -->
        <div class="form-group">
            {!!Form::submit('Add notes', ['class' => 'btn btn-primary form-control'])!!}
        </div>