<div class="form-group{{ isset($classBlock) ? $classBlock : '' }}">
    <div class="input-group input-group-alternative">
        {{ isset($preprend) ?  $preprend : '' }}
        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}{{ isset($classInput) ? ' ' . $classBlock : '' }}" name="{{ $name }}"  value="{{ old($name) }}" placeholder="{{ isset($placeholder) ? $placeholder : '' }}" type="{{ isset($type) ? $type : 'email' }}" {{ isset($required) && $required === true ? 'required' : '' }}>
        @if ($errors->has($name))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
        {{ $slot }}
    </div>
</div>