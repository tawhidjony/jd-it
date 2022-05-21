<div class="mb-4 form-group">
    <label>Name <span class="text-red-500">*</span></label>
    <input type="text" class="w-full rounded {{ $errors->has('name') ? ' is-invalid' : '' }}" id="input-10" name="name"
        value="@if ($role->name) {{ $role->name }}@else{{ old('name') }} @endif"
        placeholder="Enter your role name">
    @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div class="box-body">
    <div class="form-group">
        <div class="well">

            <ul class="checkbox-tree root">
                <li>
                    <input type="checkbox" id="select-all" />
                    <label for="select-all">Select All </label>
                </li>
            </ul>

            @foreach ($route_tree as $key => $route)
                @if (is_array($route))
                    <ul class="checkbox-tree root">
                        <li class="parent-menu">
                            @php $count = 0; @endphp
                            @foreach ($route as $k => $rm)
                                @if ($role->name && $role->hasPermissionTo($key . '.' . $rm))
                                    @php $count++; @endphp
                                @endif
                            @endforeach

                            <div class="flex items-center justify-start p-3 my-4 space-x-2 border rounded">
                                <input type="checkbox" id="md_checkbox_{{ $key }}" name=""
                                    @if ($count == count($route)) checked @endif />
                                <label class="capitalize"
                                    for="md_checkbox_{{ $key }}">{{ $key }}</label>
                            </div>

                            <ul class="flex items-center justify-start ml-2 space-x-2">
                                @foreach ($route as $k => $rm)
                                    <li>
                                        <input type="checkbox" id="md_checkbox_{{ $key . '-' . $k }}"
                                            class="filled-in chk-col-info children"
                                            @if ($role->name && $role->hasPermissionTo($key . '.' . $rm)) checked @endif name="permissions[]"
                                            value="{{ $key . '.' . $rm }}" />
                                        <label for="md_checkbox_{{ $key . '-' . $k }}">{{ $rm }}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                @else
                    <ul class="flex items-center justify-start mt-4 ml-2 space-x-2">
                        <li class="single-menu">
                            <input type="checkbox" id="md_checkbox_{{ $key }}"
                                @if ($role->name && $role->hasPermissionTo($route)) checked @endif name="permissions[]"
                                value="{{ $route }}" />
                            <label for="md_checkbox_{{ $key }}">{{ $route }}</label>
                        </li>
                    </ul>
                @endif
            @endforeach
        </div>
    </div>
</div>
