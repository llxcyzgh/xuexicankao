@extends('layouts.default')

@section('title','| Challenges - add')

@section('content')
    <h1 class="page-header">增加题目</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('index.questions.store') }}">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">类&emsp;型</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01">
                <option value="1" selected>挑战答题</option>
                <option value="2" disabled>每日答题</option>
                <option value="3" disabled>每周答题</option>
                <option value="4" disabled>专项答题</option>
            </select>
        </div>

        <div class="input-group mb-3 mt-10">
            <div class="input-group-prepend">
                <span class="input-group-text">问&emsp;题</span>
            </div>
            <textarea class="form-control"></textarea>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">答&emsp;案</span>
            </div>
            <input class="form-control" type="text">
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">验证码</span>
            </div>
            <input class="form-control" type="text">
        </div>


        <button type="submit" class="btn btn-success">提&emsp;交</button>
    </form>


@endsection




