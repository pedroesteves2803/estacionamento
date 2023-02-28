<label for="{{$name}}">{{$label}}</label>
<input
    {{$type ? 'type='$type : ''}}

    {{$name ? 'name='$name : ''}}

    {{$min ? 'min='$min : ''}}

    {{$max ? 'max='$max : ''}}

    {{$placeholder ? 'placeholder='$placeholder : ''}}

    {{$readonly ? 'readonly' : ''}}

    {{$required ? 'required' : ''}}

    {{$disabled ? 'disabled' : ''}}

    {{$value ? 'value='{{$value}} : ''}}
>
