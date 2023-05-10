@extends('layouts.layout')
@section('content')
@component('components.herosection')
@endcomponent
@component('components.mission')
@endcomponent
@component('components.impact', compact('case_count', 'donor_count', 'donation_count'))
@endcomponent
@component('components.projects', compact('case_description', 'project_description'))
@endcomponent
@component('components.reviews' ,compact('review'))
@endcomponent
@component('components.newsletter')
@endcomponent
@endsection