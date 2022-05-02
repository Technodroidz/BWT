<option labelVal="{{ $child_category->position }}" value="{{ $child_category->id }}" @if(isset($usercategory) && $usercategory->parent_id == $childCategory->id) {{ 'selected' }} @endif> &nbsp;&nbsp;@for($i=0;$i<$child_category->position;$i++) {{ "-" }} @endfor {{ $child_category->name ?? '-' }}</option>
@if ($child_category->categories)
    <ul>
        @foreach ($child_category->categories as $childCategory)
            @include('admin.usercategory.child_category', ['child_category' => $childCategory])
        @endforeach
    </ul>
@endif