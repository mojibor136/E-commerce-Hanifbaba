<div class="form-group">
    @error('division')
        <div class="alert text-danger">{{ $message }}</div>
    @enderror
    <label for="division">Division</label>
    <select name="division" id="division" class="form-control" wire:model="divisionId">
        <option value="" selected disabled>Select Division</option>
        @foreach ($divisions as $division)
            <option value="{{ $division->divison }}">{{ $division->divison }}</option>
        @endforeach
    </select>
</div>

{{-- Debugging cities array --}}

<div class="form-group">
    @error('city')
        <div class="alert text-danger">{{ $message }}</div>
    @enderror
    <label for="city">City</label>
    <select name="city" id="city" class="form-control" wire:model="cityId">
        <option value="" selected disabled>Select City</option>
        @foreach ($cities as $city)
            <option value="{{ $city->city }}">{{ $city->city }}</option>
        @endforeach
    </select>
</div>
