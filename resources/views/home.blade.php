@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-title text-center py-3 font-bold fs-3">
        List Questionnaires
        <div>
            <a href="create.html" class="btn btn-primary btn-floating"><i class="fas fa-plus"></i></a>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between">
                Cras justo odio
                <div>
                    <a href="/detail.html" style="margin-right: 5px;">
                        <i class="fas fa-eye text-dark"></i></a>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-pen"></i></a>
                    <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Cras justo odio
                <div>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-eye text-dark"></i></a>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-pen"></i></a>
                    <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Cras justo odio
                <div>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-eye text-dark"></i></a>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-pen"></i></a>
                    <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Cras justo odio
                <div>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-eye text-dark"></i></a>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-pen"></i></a>
                    <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Cras justo odio
                <div>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-eye text-dark"></i></a>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-pen"></i></a>
                    <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                </div>
            </li>
            <li class="list-group-item d-flex justify-content-between">
                Cras justo odio
                <div class="inline-block">
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-eye text-dark"></i></a>
                    <a href="#" style="margin-right: 5px;"><i class="fas fa-pen"></i></a>
                    <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection
