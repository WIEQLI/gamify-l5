{!! Form::open(['route' => ['admin.rewards.badge'], 'method' => 'post']) !!}

<div class="box box-solid">
    <div class="box-header">
        <i class="fa fa-gift"></i>
        <h3 class="box-title">{{ trans('admin/reward/messages.give_badge') }}</h3>
    </div>
    <div class="box-body">
        <!-- username -->
        <div class="form-group {{ $errors->has('badge_username') ? 'has-error' : '' }}">
            {!! Form::label('badge_username', trans('admin/reward/messages.username'), ['class' => 'control-label required']) !!}
            <div class="controls">
                {!! Form::select('badge_username', $users, null,
                ['class' => 'form-control username-input', 'placeholder' => '', 'required' => 'required']) !!}
                <span class="help-block">{{ $errors->first('badge_username', ':message') }}</span>
            </div>
        </div>
        <!-- ./ username -->

        <!-- badges -->
        <div class="form-group {{ $errors->has('badge') ? 'has-error' : '' }}">
            {!! Form::label('badge', trans('admin/reward/messages.badge'),['class' => 'control-label required']) !!}
            <div class="controls">
                {!! Form::select('badge', $badges,
                null, ['class' => 'form-control badge-input', 'placeholder' => '', 'required' => 'required']) !!}
                <span class="help-block">{{ $errors->first('badge', ':message') }}</span>
            </div>
        </div>
        <!-- ./ badges -->
    </div>
    <div class="box-footer">
        {!! Form::button(trans('button.save'), ['type' => 'submit', 'class' => 'btn btn-success']) !!}
    </div>
</div>

{!! Form::close() !!}
