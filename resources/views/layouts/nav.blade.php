<nav class="_nav navbar navbar-dark navbar-expand-sm bg-dark fixed-top">
    <div class="container">
        <div class="navbar-brand">
            <a href="/" class="text-light">XuexiCankao</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://www.xuexi.cn" target="_blank">学习强国</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger bg-light" href="{{ route('index.questions.create') }}">我要增加题目 <span class="badge badge-light">New</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        各类答题-后续...
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">挑战答题</a>
                        <a class="dropdown-item" href="#">每日答题</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">每周答题</a>
                        <a class="dropdown-item" href="#">专项答题</a>
                    </div>
                </li>

            </ul>
        </div>

    </div>
</nav>

