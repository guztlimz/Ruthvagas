<!-- /resources/views/components/alerts/alert3.blade.php -->
<!-- https://getbootstrap.com/docs/4.0/components/alerts/ -->

<div class="alert alert-{{$type}}" role="alert">
  <div class="alert-title">{{ $title }}</div>
  {{ $slot }}
</div>