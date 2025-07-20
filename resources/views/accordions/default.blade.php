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

    <div id="collapse{{$id}}" class="collapse @isset($show) show @endisset" 
    aria-labelledby="heading{{$id}}" 
    data-parent="#accordion">
        <div class="card-body box-links-for-menu">
            <form method="get" action="">
                <div class="form-group">
                    <ul class="list-item">
                        @foreach ($urls as $key => $item)
                        <li>
                            <label for="menu-link-{{$id}}-{{$key}}">
                                <input 
                                id="menu-link-{{$id}}-{{$key}}"
                                class="" type="checkbox" name="menu_id"
                                value="{{$item['url']}}" 
                                data-icon="{{$item['icon']}}"
                                data-url="{{$item['url']}}"
                                data-label="{{$item['label']}}"
                                >
                                {{$item['label']}}
                            </label>
                        </li>
                        @endforeach
                    </ul>
                    <!-- <select name="pages" class="form-control data-select" required> -->
                    {{-- <select name="pages[]" multiple class="form-control data-select" required>
                        @foreach ($urls as $item)
                            <option 
                                value="{{$item['url']}}" 
                                data-icon="{{$item['icon']}}"
                                data-url="{{$item['url']}}"
                                >{{$item['label']}}</option>
                        @endforeach
                    </select> --}}
                </div>
                @if(!empty($roles))
                <div class="form-group">
                    <label for="role">Example select</label>
                    <select class="form-control" name="role">
                        <option value="0">Select Role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->$role_pk }}">
                                {{ ucfirst($role->$role_title_field) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="form-group">
                    <button type="button" onclick="addItemMenu(this, 'custom')" 
                    class="btn btn-info btn-sm float-right mr-2 mb-2">
                        {{ __('Add to Menu') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>