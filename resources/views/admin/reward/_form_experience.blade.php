{!! Form::open(['route' => ['admin.rewards.experience'], 'method' => 'post']) !!}

<div class="box box-solid">
    <div class="box-header">
        <i class="fa fa-certificate"></i>
        <h3 class="box-title">{{ trans('admin/reward/messages.give_experience') }}</h3>
    </div>
    <div class="box-body">

        <!-- username -->
        <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
            {!! Form::label('username', trans('admin/reward/messages.username'), ['class' => 'control-label required']) !!}
            <div class="controls">
                {!! Form::select('username', $users, null,
                ['class' => 'form-control username-input', 'placeholder' => '', 'required' => 'required']) !!}
                <span class="help-block">{{ $errors->first('username', ':message') }}</span>
            </div>
        </div>
        <!-- ./ username -->

        <!-- points -->
        <div class="form-group {{ $errors->has('points') ? 'has-error' : '' }}">
            {!! Form::label('points', trans('admin/reward/messages.points'), array('class' => 'control-label required')) !!}
            <div class="controls">
                {!! Form::select('points', [
                '5' => trans('admin/reward/messages.points_value', ['points' => '5']),
                '10' => trans('admin/reward/messages.points_value', ['points' => '10']),
                '25' => trans('admin/reward/messages.points_value', ['points' => '25']),
                ], null, ['class' => 'form-control', 'required' => 'required']) !!}
                <span class="help-block">{{ $errors->first('points', ':message') }}</span>
            </div>
        </div>
        <!-- ./ points -->

        <!-- message -->
        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
            {!! Form::label('message', trans('admin/reward/messages.why_u_reward'), ['class' => 'control-label']) !!}
            <div class="controls">
                {!! Form::textarea('message', null, ['class' => 'form-control', 'rows' => '3']) !!}
                <span class="help-block">{{ $errors->first('message', ':message') }}</span>
            </div>
        </div>
        <!-- ./ message -->
    </div>
    <div class="box-footer">
        {!! Form::button(trans('button.save'), ['type' => 'submit', 'class' => 'btn btn-success']) !!}
    </div>
</div>

{!! Form::close() !!}



