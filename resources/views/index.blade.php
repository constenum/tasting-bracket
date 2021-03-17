@extends('templates.main')

@section('content')
    <h1>Bracket for @if(Auth::check()) {{ Auth::user()->name }} @endif</h1>

    <div class="container-fluid px-xxl-5">
        <h2 class="card-title">Round 1</h2>

        <div class="row">
            <div class="col-xxl-6 mb-4">
                <div class="card shadow">
                    <h5 class="card-title">Bracket B</h5>

                    <form method="POST" action="{{ route('week1', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Alaska vs Hawaii</h6>
                                    <select class="form-select form-select-sm" name="west1" disabled>
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
                                    <select class="form-select form-select-sm" name="west2" disabled>
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
                    <h5 class="card-title">Bracket C</h5>

                    <form method="POST" action="{{ route('week2', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Utah vs Wyoming</h6>

                                    <select class="form-select form-select-sm" name="south1" disabled>
                                        <option value="">Select</option>
                                        <option
                                            value="Utah" {{ (Auth::user()->south1 ==='Utah') ? 'selected' : '' }}>
                                            Utah
                                        </option>
                                        <option
                                            value="Wyoming" {{ (Auth::user()->south1 ==='Wyoming') ? 'selected' : '' }}>
                                            Wyoming
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Oklahoma vs Texas</h6>

                                    <select class="form-select form-select-sm" name="south2" disabled>
                                        <option value="">Select</option>
                                        <option
                                            value="Oklahoma" {{ (Auth::user()->south2 ==='Oklahoma') ? 'selected' : '' }}>
                                            Oklahoma
                                        </option>
                                        <option
                                            value="Texas" {{ (Auth::user()->south2 ==='Texas') ? 'selected' : '' }}>
                                            Texas
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
                    <h5 class="card-title">Bracket A</h5>

                    <form method="POST" action="{{ route('week3', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Idaho vs Montana</h6>

                                    <select class="form-select form-select-sm" name="midwest1" disabled>
                                        <option value="">Select</option>
                                        <option value="Idaho" {{ (Auth::user()->midwest1 ==='Idaho') ? 'selected' : '' }}>
                                            Idaho
                                        </option>
                                        <option
                                            value="Montana" {{ (Auth::user()->midwest1 ==='Montana') ? 'selected' : '' }}>
                                            Montana
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Kansas vs Missouri</h6>

                                    <select class="form-select form-select-sm" name="midwest2" disabled>
                                        <option value="">Select</option>
                                        <option
                                            value="Kansas" {{ (Auth::user()->midwest2 ==='Kansas') ? 'selected' : '' }}>
                                            Kansas
                                        </option>
                                        <option
                                            value="Missouri" {{ (Auth::user()->midwest2 ==='Missouri') ? 'selected' : '' }}>
                                            Missouri
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
                    <h5 class="card-title">Bracket D</h5>

                    <form method="POST" action="{{ route('week4', Auth::user()->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Colorado vs Nebraska</h6>

                                    <select class="form-select form-select-sm" name="east1" disabled>
                                        <option value="">Select</option>
                                        <option
                                            value="Colorado" {{ (Auth::user()->east1 ==='Colorado') ? 'selected' : '' }}>
                                            Colorado
                                        </option>
                                        <option
                                            value="Nebraska" {{ (Auth::user()->east1 ==='Nebraska') ? 'selected' : '' }}>
                                            Nebraska
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xxl-6 mb-4">
                                <div class="card">
                                    <h6 class="card-title text-center">Arizona vs New Mexico</h6>

                                    <select class="form-select form-select-sm" name="east2" disabled>
                                        <option value="">Select</option>
                                        <option
                                            value="Arizona" {{ (Auth::user()->east2 ==='Arizona') ? 'selected' : '' }}>
                                            Arizona
                                        </option>
                                        <option
                                            value="New Mexico" {{ (Auth::user()->east2 ==='New Mexico') ? 'selected' : '' }}>
                                            New Mexico
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
                        <h5 class="card-title">Quarterfinals A and B</h5>

                        <form method="POST" action="{{ route('week5', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Illinois vs Indiana</h6>

                                        <select class="form-select form-select-sm" name="westfinal">
                                            <option value="">Select</option>
                                            <option value="Illinois" {{ (Auth::user()->westfinal ==='Illinois') ? 'selected' : '' }}>
                                                Illinois
                                            </option>
                                            <option value="Indiana" {{ (Auth::user()->westfinal ==='Indiana') ? 'selected' : '' }}>
                                                Indiana
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Iowa vs MinnesotaD</h6>

                                        <select class="form-select form-select-sm" name="southfinal">
                                            <option value="">Select</option>
                                            <option value="Iowa" {{ (Auth::user()->southfinal ==='Iowa') ? 'selected' : '' }}>
                                                Iowa
                                            </option>
                                            <option value="Minnesota" {{ (Auth::user()->southfinal ==='Minnesota') ? 'selected' : '' }}>
                                                Minnesota
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
                        <h5 class="card-title">Quarterfinals C and D</h5>

                        <form method="POST" action="{{ route('week6', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Arkansas vs Louisiana</h6>

                                        <select class="form-select form-select-sm" name="midwestfinal">
                                            <option value="">Select</option>
                                            <option
                                                value="Arkansas" {{ (Auth::user()->midwestfinal ==='Arkansas') ? 'selected' : '' }}>
                                                Arkansas
                                            </option>
                                            <option
                                                value="Louisiana" {{ (Auth::user()->midwestfinal ==='Louisiana') ? 'selected' : '' }}>
                                                Louisiana
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Florida vs Georgia</h6>

                                        <select class="form-select form-select-sm" name="eastfinal">
                                            <option value="">Select</option>
                                            <option value="Florida" {{ (Auth::user()->eastfinal ==='Florida') ? 'selected' : '' }}>
                                                Florida
                                            </option>
                                            <option value="Georgia" {{ (Auth::user()->eastfinal ==='Georgia') ? 'selected' : '' }}>
                                                Georgia
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
                        <h5 class="card-title">Semifinals</h5>

                        <form method="POST" action="{{ route('week7', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-xxl-6 mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Teams TBD</h6>

                                        <select class="form-select form-select-sm" name="semifinal1" disabled>
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
                                        <h6 class="card-title text-center">Teams TBD</h6>

                                        <select class="form-select form-select-sm" name="semifinal2" disabled>
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->semifinal2 ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->semifinal2 ==='2') ? 'selected' : '' }}>
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
                        <h5 class="card-title">Finals</h5>

                        <form method="POST" action="{{ route('final', Auth::user()->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="mb-4">
                                    <div class="card">
                                        <h6 class="card-title text-center">Teams TBD</h6>

                                        <select class="form-select form-select-sm" name="final" disabled>
                                            <option value="">Select</option>
                                            <option value="1" {{ (Auth::user()->final ==='1') ? 'selected' : '' }}>
                                                1
                                            </option>
                                            <option value="2" {{ (Auth::user()->final ==='2') ? 'selected' : '' }}>
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
    </div>
@endsection
