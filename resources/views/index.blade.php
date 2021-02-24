@extends('templates.main')

@section('content')
    <h1>Bracket for @if(Auth::check()) {{ Auth::user()->name }} @endif</h1>

    <div class="container-fluid px-xxl-5">
        <h2 class="card-title">Round 1</h2>

        <div class="row">
            <div class="col-xxl-6 mb-4">
                <div class="card shadow">
                    <h5 class="card-title">West <span class="fs-6">(week 1)</span></h5>

                    <form method="POST" action="{{ route('week1', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Alaska vs Hawaii</h6>
                                    <select class="form-select form-select-sm" name="west1">
                                        <option value="">Select</option>
                                        <option
                                            value="Alaska" {{ (Auth::user()->west1 ==='Alaska') ? 'selected' : '' }}>
                                            Alaska
                                        </option>
                                        <option
                                            value="Hawaii" {{ (Auth::user()->west1 ==='Hawaii') ? 'selected' : '' }}>
                                            Hawaii
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">California vs Oregon</h6>
                                    <select class="form-select form-select-sm" name="west2">
                                        <option value="">Select</option>
                                        <option
                                            value="California" {{ (Auth::user()->west2 ==='California') ? 'selected' : '' }}>
                                            California
                                        </option>
                                        <option
                                            value="Oregon" {{ (Auth::user()->west2 ==='Oregon') ? 'selected' : '' }}>
                                            Oregon
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-xxl-6 mb-4">
                <div class="card shadow">
                    <h5 class="card-title">South <span class="fs-6">(week 2)</span></h5>

                    <form method="POST" action="{{ route('week2', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Florida vs Georgia</h6>

                                    <select class="form-select form-select-sm" name="south1">
                                        <option value="">Select</option>
                                        <option
                                            value="Florida" {{ (Auth::user()->south1 ==='Florida') ? 'selected' : '' }}>
                                            Florida
                                        </option>
                                        <option
                                            value="Georgia" {{ (Auth::user()->south1 ==='Georgia') ? 'selected' : '' }}>
                                            Georgia
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Alabama vs Louisiana</h6>

                                    <select class="form-select form-select-sm" name="south2">
                                        <option value="">Select</option>
                                        <option
                                            value="Alabama" {{ (Auth::user()->south2 ==='Alabama') ? 'selected' : '' }}>
                                            Alabama
                                        </option>
                                        <option
                                            value="Louisiana" {{ (Auth::user()->south2 ==='Louisiana') ? 'selected' : '' }}>
                                            Louisiana
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-6 mb-4">
                <div class="card shadow">
                    <h5 class="card-title">Midwest <span class="fs-6">(week 3)</span></h5>

                    <form method="POST" action="{{ route('week3', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Iowa vs Nebraska</h6>

                                    <select class="form-select form-select-sm" name="midwest1">
                                        <option value="">Select</option>
                                        <option value="Iowa" {{ (Auth::user()->midwest1 ==='Iowa') ? 'selected' : '' }}>
                                            Iowa
                                        </option>
                                        <option
                                            value="Nebraska" {{ (Auth::user()->midwest1 ==='Nebraska') ? 'selected' : '' }}>
                                            Nebraska
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Illinois vs Indiana</h6>

                                    <select class="form-select form-select-sm" name="midwest2">
                                        <option value="">Select</option>
                                        <option
                                            value="Illinois" {{ (Auth::user()->midwest2 ==='Illinois') ? 'selected' : '' }}>
                                            Illinois
                                        </option>
                                        <option
                                            value="Indiana" {{ (Auth::user()->midwest2 ==='Indiana') ? 'selected' : '' }}>
                                            Indiana
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-xxl-6 mb-4">
                <div class="card shadow">
                    <h5 class="card-title">East <span class="fs-6">(week 4)</span></h5>

                    <form method="POST" action="{{ route('week4', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">New York vs Vermont</h6>

                                    <select class="form-select form-select-sm" name="east1">
                                        <option value="">Select</option>
                                        <option
                                            value="New York" {{ (Auth::user()->east1 ==='New York') ? 'selected' : '' }}>
                                            New York
                                        </option>
                                        <option
                                            value="Vermont" {{ (Auth::user()->east1 ==='Vermont') ? 'selected' : '' }}>
                                            Vermont
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Delaware vs Virgina</h6>

                                    <select class="form-select form-select-sm" name="east2">
                                        <option value="">Select</option>
                                        <option
                                            value="Delaware" {{ (Auth::user()->east2 ==='Delaware') ? 'selected' : '' }}>
                                            Delaware
                                        </option>
                                        <option
                                            value="Virginia" {{ (Auth::user()->east2 ==='Virginia') ? 'selected' : '' }}>
                                            Virginia
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h2 class="card-title">Round 2</h2>

            <div class="row">
                <div class="col-xxl-6 mb-4">
                    <div class="card shadow">
                        <h5 class="card-title">West and South Finals <span class="fs-6">(week 5)</span></h5>

                        <form method="POST" action="{{ route('week5', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">West A/B vs West C/D</h6>

                                        <select class="form-select form-select-sm" name="westfinal">
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->westfinal ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->westfinal ==='2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">South A/B vs South C/D</h6>

                                        <select class="form-select form-select-sm" name="southfinal">
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->southfinal ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->southfinal ==='2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xxl-6 mb-4">
                    <div class="card shadow">
                        <h5 class="card-title">Midwest And East Finals <span class="fs-6">(week 6)</span></h5>

                        <form method="POST" action="{{ route('week6', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Midwest A/B vs Midwest C/D</h6>

                                        <select class="form-select form-select-sm" name="midwestfinal">
                                            <option value="">Select</option>
                                            <option
                                                value="1" {{ (Auth::user()->midwestfinal ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option
                                                value="2" {{ (Auth::user()->midwestfinal ==='2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">East A/B vs East C/D</h6>

                                        <select class="form-select form-select-sm" name="eastfinal">
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->eastfinal ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->eastfinal ==='2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row justify-content-center">
                                    <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h2 class="card-title">Round 3</h2>

            <div class="row">
                <div class="col-xxl-6 mb-4">
                    <div class="card shadow">
                        <h5 class="card-title">Semifinals <span class="fs-6">(week 7)</span></h5>

                        <form method="POST" action="{{ route('week7', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">West vs South</h6>

                                        <select class="form-select form-select-sm" name="semifinal1">
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->semifinal1 ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->semifinal1 ==='2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Midwest vs East</h6>

                                        <select class="form-select form-select-sm" name="semifinal2">
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->semifinal2 ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->semifinal2 ==='2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                        </select>
                                    </div>

                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xxl-6 mb-4">
                    <div class="card shadow">
                        <h5 class="card-title">Finals <span class="fs-6">(final)</span></h5>

                        <form method="POST" action="{{ route('final', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">West/South vs Midwest/East</h6>

                                        <select class="form-select form-select-sm" name="final">
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->final ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->final ==='2') ? 'selected' : '' }}>
                                                2
                                            </option>
                                        </select>
                                    </div>

                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-primary col-sm-6 col-md-4">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
