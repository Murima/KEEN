@extends('adminlte::page')

@section('title', 'KEEN Search')

@section('content_header')

    <form action="{{  url('#') }}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="search-user"  placeholder="Search">

            <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>

            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="group" id="gridRadios1" value="open" checked>
                        Organizations
                    </label>

                    <label class="form-check-label" style="margin-left: 10px">
                        <input class="form-check-input" type="radio" name="group" id="gridRadios1" value="open">
                        Beneficiaries
                    </label>
                </div>

            </div>
        </div>
    </form>
@endsection