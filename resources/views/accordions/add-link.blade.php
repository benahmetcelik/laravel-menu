@php
    $id = rand(100000, 999999);
@endphp
<div class="card">
    <div class="card-header" id="heading-{{$id}}">
        <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" 
            data-target="#collapse{{$id}}" 
            aria-expanded="true" aria-controls="collapse{{$id}}">
                {{$name}}
                <i class="fa fa-angle-down narrow-icon float-right"></i>
            </button>
        </h5>
    </div>

    <div id="collapse{{$id}}" class="collapse" 
    aria-labelledby="heading{{$id}}" 
    data-parent="#accordion">
        <div class="card-body">
            <form method="GET">
                <div class="form-group">
                    <label for="label">{{ __("Enter Label") }}</label>
                    <input type="text" class="form-control" name="label" placeholder="{{ __('Label Menu') }}">
                </div>
                <div class="form-group">
                    <label for="url">{{ __("Enter URL") }}</label>
                    <input type="text" class="form-control" name="url" placeholder="#">
                </div>
                <div class="form-group">
                    <label for="icon">{{ __("Enter Icon") }}</label>
                    <input type="text" class="form-control" id="iconHelp" name="icon" placeholder="{{ __('Icon') }}">
                    <small id="iconHelp" class="form-text text-muted">
                        {{ __('Ex: &lt;span class=&quot;oi oi-align-center&quot;&gt;&lt;/span&gt;') }}
                    </small>
                </div>
                @if(!empty($roles))
                <div class="form-group">
                    <label for="role">{{ __("Select Role") }}</label>
                    <select class="form-control" name="role">
                        <option value="0">{{ __("Select Role") }}</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->$role_pk }}">
                                {{ ucfirst($role->$role_title_field) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group">
                    <button type="button" onclick="addItemMenu(this, 'default')" 
                    class="btn btn-info btn-sm float-right mr-2 mb-2">
                        {{ __("Add to Menu") }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>