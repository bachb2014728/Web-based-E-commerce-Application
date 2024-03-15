<h2 class="h6 pt-4 pb-3 mb-4 border-bottom text-center">Danh mục</h2>
<nav class="small" id="toc">
    <ul class="list-unstyled">
        @foreach ($cates as $item)
        @if ($item->level == 1)
        <li class="my-2">
            <button class="btn btn-toggle d-inline-flex align-items-center collapsed" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#collapse-{{ $loop->iteration }}-content" aria-controls="collapse-{{ $loop->iteration }}-content">
                {{$item->name}}
            </button>
            <ul class="list-unstyled ps-3 collapse" id="collapse-{{ $loop->iteration }}-content">
                @foreach ($cates as $item2)
                @if ($item2->level == 2 && $item2->parent_cate == $item->id)
                <li>
                    <a class="nav-link d-inline-flex align-items-center rounded" href="{{route('cate.index',$item2->slug)}}" style="display: inline-flex;padding: .1875rem .5rem;margin-top: .125rem;margin-left: 1.25rem;text-decoration: none;">
                        {{$item2->name}}
                    </a>
                </li>
                @endif
                @endforeach
            </ul>
        </li>
        @endif
        @endforeach
    </ul>
</nav>
