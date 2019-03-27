<input 
type="{{ $type }}" 
id="{{ $id ?? '' }}"
name="{{ $name }}"
class="form-control"
value="{{ $value ?? ''}}"
placeholder="{{ $placeholder ?? '' }}"
@isset($maxlength)
maxlength={{$maxlength}}
@endisset
@isset($minlength)
minlength={{$minlength}}
@endisset
@if(isset($required) && $required)
required
@endif
{{ $extra ?? ''}}>