@extends('flarum::frontend.content.admin')

@section('content')
    <div class="container">
        <form>
            <fieldset>
                <legend>Ghost CMS Settings</legend>
                
                <!-- Ghost CMS Address Field -->
                <div class="form-group">
                    <label for="ghost_address">Ghost CMS Address</label>
                    <input type="text" class="form-control" id="ghost_address" placeholder="Enter Ghost CMS Address">
                </div>

                <!-- Ghost API Path Field -->
                <div class="form-group">
                    <label for="api_path">Ghost API Path</label>
                    <input type="text" class="form-control" id="api_path" placeholder="Enter Ghost API Path">
                </div>

                <!-- Save Button -->
                <button type="submit" class="btn btn-primary">Save Settings</button>
            </fieldset>
        </form>
    </div>
@endsection
