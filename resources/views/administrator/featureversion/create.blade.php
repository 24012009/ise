@extends('layouts.admin')
@section('content')
{!! Form::open(array('route' =>['matching.store',$Pid],'method'=>'POST','files' => true)) !!}
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-none">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9 margin-tb">
                        <div class="col-xs-12 col-sm-12 col-md-12 m-3">
                            <div class="card-sub">
                                <i class="fas fa-check"></i> <code>&lt;i class="fas fa-check"&gt;&lt;/i&gt;</code>
                                <i class="fas fa-circle"></i> <code>&lt;i class="fas fa-circle"&gt;&lt;/i&gt;</code>
                                <i class="fas fa-check-circle"></i> <code>&lt;i class="fas fa-check-circle"&gt;&lt;/i&gt;</code>
                                <i class="far fa-check-circle"></i> <code>&lt;i class="far fa-check-circle"&gt;&lt;/i&gt;</code>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 margin-tb">
                        <div class="pull-right">
                            <a
                                class="btn btn-dark btn-sm"
                                href="{{ url("administrator/products/feature/{$Pid}") }}">
                                <i class="fas fa-undo-alt mr-2"></i>
                                Back</a>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-save mr-2"></i>
                                Submit</button>
                        </div>
                    </div>
                </div>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong>
                        There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    @if ($message = Session::get('success'))
                        <div class="col-md-12">
                            <div class="alert alert-success no-box-shadow" role="alert">
                                <p>{{ $message }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Feature list</th>
                                    <th class="text-center">Marge?</th>
                                    @foreach($versionList as $rows)
                                    <th class="text-center">{{$rows->versions}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($featureList as $i=>$rows)
                                <tr>
                                    <td>
                                        <input type="hidden" name="feature[{{$i}}]" value="{{$rows->feature_id}}"/>
                                        {{$rows->feature_title}}
                                    </td>
                                    <td class="text-center form-check-label">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input name" name="marge[{{$i}}]" type="checkbox" value="{{$rows->feature_id}}">
                                                <span class="form-check-sign">Yes</span>
                                            </label>
                                        </div>
                                    </td>
                                    @foreach($versionList as $subrows)
                                        <td>
                                            <input type="hidden" name="hideversion{{$subrows->versions}}[]" value="{{$subrows->id}}" class="form-control form-control-flat"/>
                                            <input type="text" name="version{{$subrows->versions}}[]" class="form-control form-control-flat"/>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
