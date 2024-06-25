<select data-placeholder="{{ __('City') }}" class="form-control city_id" name="city_id" id="city_id">
    @if(!empty(request()->input('city_id')))
        <option value="{{ request()->input('city_id') }}" selected>
            {{ Location::getCityNameById(request()->input('city_id')) }}
        </option>
    @endif
</select>
