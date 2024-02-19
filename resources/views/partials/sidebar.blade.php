<nav class="bd-links" id="bd-docs-nav" aria-label="{{ __('Docs navigation') }}">
    <ul class="list-unstyled mb-0 py-3 pt-md-1">
        <li class="mb-1">
            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="true">
                {{ __('messages.users') }}
            </button>

            <div class="collapse show">
                <ul class="fw-normal pb-1 small ml-5">
                    <li><a href="{{route('posts.index')}}" class="d-inline-flex align-items-center rounded">{{ __('messages.all_users') }}</a></li>
                </ul>
            </div>

        </li>

        <li class="mb-1">
            <button class="btn d-inline-flex align-items-center rounded" data-bs-toggle="collapse" data-bs-target="#getting-started-collapse" aria-expanded="true">
                {{ __('messages.videos') }}
            </button>

            <div class="collapse show">
                <ul class="fw-normal pb-1 small ml-5">
                    <li><a href="{{route('videos.index')}}" class="d-inline-flex align-items-center rounded">{{ __('messages.all_videos') }}</a></li>
                </ul>
            </div>

        </li>


        <li class="my-3 mx-4 border-top"></li>

    </ul>
</nav>
