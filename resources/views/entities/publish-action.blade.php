@php
 $isPublic = $entity->isPublic();
@endphp
<form action="{{ url('/publish/' . ($isPublic ? 'unpublish' : 'publish')) }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="type" value="{{ get_class($entity) }}">
    <input type="hidden" name="id" value="{{ $entity->id }}">
    <button type="submit" data-shortcut="publish" class="icon-list-item text-link">
        <span>@icon($isPublic ? 'unpublished' : 'published')</span>
        <span>{{ $isPublic ? trans('common.unpublish') : trans('common.publish') }}</span>
    </button>
</form>