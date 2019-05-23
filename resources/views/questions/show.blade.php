@extends('layouts.default')

@section('title','| Challenges - add')

@section('content')
    <h1 class="page-header">查看题目</h1>
    <form>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">类&emsp;型</label>
            </div>
            <select class="custom-select" id="inputGroupSelect01" name="type" disabled>
                <option value="1" selected>挑战答题</option>
                <option value="2">每日答题</option>
                <option value="3">每周答题</option>
                <option value="4">专项答题</option>
            </select>
        </div>

        <div class="input-group mb-3 mt-10">
            <div class="input-group-prepend">
                <span class="input-group-text">问&emsp;题</span>
            </div>
            <textarea class="form-control" name="ask" readonly>{{ $question->ask }}</textarea>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">答&emsp;案</span>
            </div>
            <input class="form-control" type="text" name="answer" readonly value="{{ $question->answer }}">
        </div>
    </form>

@endsection




