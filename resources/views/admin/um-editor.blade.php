<div class="form-group {!! !$errors->has($label) ?: 'has-error' !!}">

    <label for="{{$id}}" class="col-sm-2 control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <script id="container" name="content" type="text/plain" style="width: 100%; height: 100%;">
            {!! old($column, $value) !!}
        </script>


        <input type="hidden" name="{{$name}}" value="{{ old($column, $value) }}" />

    </div>
</div>