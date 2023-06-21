@if ($categoryParent->categoryChildren->count())
    <ul role="menu" class="sub-menu">
        @foreach($categoryParent->categoryChildren as $categoryChild)
            <li><a href="">{{ $categoryChild->name }}</a>
                @if ($categoryChild->categoryChildren->count())
                    @include('components.child_menu', ['categoryParent' => $categoryChild])
                @endif
            </li>
        @endforeach
    </ul>
@endif